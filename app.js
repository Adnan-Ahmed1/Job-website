/**
 * app.js – Upload, API Communication, UI Controls & Compare Slider
 * Background Remover Application
 */

/* ========== API BASE URL ========== */
// Points to XAMPP Apache so PHP works even when HTML is served from Live Server
const API_BASE = 'http://localhost/module-testing/';

/* ========== UPLOAD / DROP ZONE ========== */
function initUpload() {
  const overlay = document.getElementById('upload-overlay');
  const dropZone = overlay.querySelector('.drop-zone');
  const fileInput = document.getElementById('file-input');
  const browseBtn = overlay.querySelector('.browse-btn');
  const addThumb = document.getElementById('add-thumb-btn');

  browseBtn.addEventListener('click', () => fileInput.click());
  if (addThumb) addThumb.addEventListener('click', () => fileInput.click());

  fileInput.addEventListener('change', (e) => {
    if (e.target.files.length) handleFiles(e.target.files);
  });

  // Drag & drop
  ['dragenter', 'dragover'].forEach(evt => {
    dropZone.addEventListener(evt, (e) => { e.preventDefault(); dropZone.classList.add('drag-over'); });
  });
  ['dragleave', 'drop'].forEach(evt => {
    dropZone.addEventListener(evt, (e) => { e.preventDefault(); dropZone.classList.remove('drag-over'); });
  });
  dropZone.addEventListener('drop', (e) => {
    if (e.dataTransfer.files.length) handleFiles(e.dataTransfer.files);
  });

  // Global drag & drop (when editor is visible)
  document.addEventListener('dragover', (e) => e.preventDefault());
  document.addEventListener('drop', (e) => {
    e.preventDefault();
    if (e.dataTransfer.files.length && !document.getElementById('upload-overlay')) {
      handleFiles(e.dataTransfer.files);
    }
  });
}

async function handleFiles(fileList) {
  const allowed = ['image/jpeg', 'image/png', 'image/webp'];
  const files = Array.from(fileList).filter(f => allowed.includes(f.type));

  if (files.length === 0) {
    showToast('Please select JPG, PNG, or WEBP images', 'error');
    return;
  }

  // Upload to server
  const formData = new FormData();
  files.forEach(f => formData.append('images[]', f));
  formData.append('action', 'upload');

  try {
    showToast('Uploading...', 'info');
    const resp = await fetch(API_BASE + 'upload.php', { method: 'POST', body: formData });
    const data = await resp.json();

    if (!data.success) {
      showToast(data.error || 'Upload failed', 'error');
      return;
    }

    // Load each uploaded image
    let lastUploadedIndex = -1;
    for (const file of data.files) {
      if (!file.success) {
        showToast(`${file.name}: ${file.error}`, 'error');
        continue;
      }
      await addImage(file);
      lastUploadedIndex = State.images.length - 1;
    }

    if (lastUploadedIndex >= 0) {
      State.activeIndex = lastUploadedIndex;
      resetLassoState();
      fitToScreen();
      renderThumbnails();
      updateDetectionUI();
      saveImagesSession();
    }

    // Hide upload overlay, show editor
    document.getElementById('upload-overlay').classList.add('hidden');
    document.getElementById('app-header').style.display = '';
    document.getElementById('app-main').style.display = '';
    showToast(`${data.files.filter(f=>f.success).length} image(s) loaded`, 'success');
    render();

  } catch (err) {
    showToast('Upload failed: ' + err.message, 'error');
  }
}

function addImage(fileData) {
  return new Promise((resolve) => {
    const img = new Image();
    img.onload = () => {
      State.images.push({
        filename: fileData.filename,
        name: fileData.name,
        url: fileData.url.startsWith('http') ? fileData.url : API_BASE + fileData.url,
        width: fileData.width,
        height: fileData.height,
        original_width: fileData.original_width || null,
        original_height: fileData.original_height || null,
        crop_box: fileData.crop_box || null,
        img: img,
        outputUrl: fileData.outputUrl ? (fileData.outputUrl.startsWith('http') ? fileData.outputUrl : API_BASE + fileData.outputUrl) : null,
        detected_type: fileData.detected_type || 'photo',
        detected_confidence: fileData.detected_confidence || 100,
        selected_type: fileData.selected_type || 'auto'
      });
      if (State.activeIndex < 0) {
        State.activeIndex = 0;
        fitToScreen();
      }
      renderThumbnails();
      saveImagesSession();
      resolve();
    };
    img.onerror = () => {
      showToast(`Failed to load image: ${fileData.name}`, 'error');
      resolve();
    };
    img.src = API_BASE + fileData.url;
  });
}

/* ========== THUMBNAILS ========== */
function renderThumbnails() {
  const list = document.getElementById('thumb-list');
  if (!list) return;
  // Remove old thumbs (keep add button)
  list.querySelectorAll('.thumb-item').forEach(el => el.remove());

  State.images.forEach((item, i) => {
    const div = document.createElement('div');
    div.className = 'thumb-item' + (i === State.activeIndex ? ' active' : '');
    div.innerHTML = `<img src="${item.url}" alt="${item.name}"><button class="thumb-remove" title="Remove">×</button>`;
    div.querySelector('img').addEventListener('click', () => switchImage(i));
    div.querySelector('.thumb-remove').addEventListener('click', (e) => { e.stopPropagation(); removeImage(i); });
    list.insertBefore(div, document.getElementById('add-thumb-btn'));
  });
}

function switchImage(index) {
  State.activeIndex = index;
  resetLassoState();
  fitToScreen();
  renderThumbnails();
  updateDetectionUI();
  saveImagesSession();
  render();
}

function removeImage(index) {
  State.images.splice(index, 1);
  if (State.activeIndex >= State.images.length) State.activeIndex = State.images.length - 1;
  if (State.images.length === 0) {
    State.activeIndex = -1;
    document.getElementById('upload-overlay').classList.remove('hidden');
    document.getElementById('app-header').style.display = 'none';
    document.getElementById('app-main').style.display = 'none';
  }
  resetLassoState();
  renderThumbnails();
  updateDetectionUI();
  saveImagesSession();
  render();
}

/* ========== BACKGROUND REMOVAL API ========== */
async function removeBackground() {
  const item = State.images[State.activeIndex];
  if (!item) { showToast('No image selected', 'error'); return; }

  State.processing = true;
  setProcessingUI(true, 'AI is analyzing your image...');

  const formData = new FormData();
  formData.append('action', 'remove_bg');
  formData.append('filename', item.filename);
  formData.append('image_type', item.selected_type || 'auto');

  // Send lasso coordinates if available
  if (State.lassoPoints.length > 2) {
    formData.append('lasso', JSON.stringify(State.lassoPoints));
  }

  try {
    // Simulate progress
    let progress = 0;
    const progressInterval = setInterval(() => {
      progress = Math.min(progress + Math.random() * 8, 90);
      setProgress(progress);
    }, 400);

    const resp = await fetch(API_BASE + 'upload.php', { method: 'POST', body: formData });
    const data = await resp.json();

    clearInterval(progressInterval);
    setProgress(100);

    if (!data.success) {
      throw new Error(data.error || 'Processing failed');
    }

    item.outputUrl = API_BASE + data.output_url;
    if (data.width && data.height) {
      item.width = data.width;
      item.height = data.height;
    }
    if (data.original_width && data.original_height) {
      item.original_width = data.original_width;
      item.original_height = data.original_height;
    }
    if (data.crop_box) {
      item.crop_box = data.crop_box;
    }
    showToast('Background removed successfully!', 'success');
    saveImagesSession();

    // Show comparison
    setTimeout(() => {
      setProcessingUI(false);
      State.processing = false;
      showCompare(item);
    }, 500);

  } catch (err) {
    setProcessingUI(false);
    State.processing = false;
    showToast('Error: ' + err.message, 'error');
  }
}

/* ========== BATCH PROCESSING ========== */
async function batchRemoveBackground() {
  if (State.images.length === 0) { showToast('No images loaded', 'error'); return; }

  State.processing = true;
  setProcessingUI(true, 'Batch processing...');
  let completed = 0;

  for (let i = 0; i < State.images.length; i++) {
    const item = State.images[i];
    if (item.outputUrl) { completed++; continue; } // skip already processed

    setProcessingText(`Processing image ${i + 1} of ${State.images.length}...`);
    setProgress((i / State.images.length) * 100);

    const formData = new FormData();
    formData.append('action', 'remove_bg');
    formData.append('filename', item.filename);
    formData.append('image_type', item.selected_type || 'auto');

    try {
      const resp = await fetch(API_BASE + 'upload.php', { method: 'POST', body: formData });
      const data = await resp.json();
      if (data.success) {
        item.outputUrl = API_BASE + data.output_url;
        saveImagesSession();
        completed++;
      }
    } catch (e) {
      showToast(`Failed: ${item.name}`, 'error');
    }
  }

  setProcessingUI(false);
  State.processing = false;
  showToast(`Batch complete: ${completed}/${State.images.length} processed`, 'success');
}

/* ========== PROCESSING UI ========== */
function setProcessingUI(show, msg = '') {
  const overlay = document.getElementById('processing-overlay');
  if (show) {
    overlay.classList.remove('hidden');
    setProcessingText(msg);
    setProgress(0);
    // Disable toolbar buttons
    document.querySelectorAll('.tool-btn, .btn-primary').forEach(b => b.disabled = true);
  } else {
    overlay.classList.add('hidden');
    document.querySelectorAll('.tool-btn, .btn-primary').forEach(b => b.disabled = false);
  }
}

function setProcessingText(msg) {
  const el = document.querySelector('.processing-text');
  if (el) el.textContent = msg;
}

function setProgress(pct) {
  const bar = document.querySelector('.progress-bar-fill');
  if (bar) bar.style.width = pct + '%';
}

/* ========== BEFORE/AFTER COMPARE ========== */
function showCompare(item) {
  const overlay = document.getElementById('compare-overlay');
  overlay.classList.remove('hidden');
  try {
    localStorage.setItem('rembg_show_compare', 'true');
  } catch (e) {}

  const original = overlay.querySelector('.compare-original');
  const result = overlay.querySelector('.compare-result');
  original.src = item.url + '?t=' + Date.now();
  result.src = item.outputUrl + '?t=' + Date.now();

  // Set aspect ratio of the compare container dynamically to match the original image dimensions
  const container = overlay.querySelector('.compare-container');
  if (container) {
    const origWidth = item.original_width || item.width || 800;
    const origHeight = item.original_height || item.height || 600;
    container.style.aspectRatio = `${origWidth} / ${origHeight}`;

    // Position/scale result image to match crop_box percentage of the container!
    if (item.crop_box && item.original_width && item.original_height) {
      const [x, y, w, h] = item.crop_box;
      const leftPct = (x / item.original_width) * 100;
      const topPct = (y / item.original_height) * 100;
      const widthPct = (w / item.original_width) * 100;
      const heightPct = (h / item.original_height) * 100;

      result.style.left = `${leftPct}%`;
      result.style.top = `${topPct}%`;
      result.style.width = `${widthPct}%`;
      result.style.height = `${heightPct}%`;
      result.style.objectFit = 'fill';
    } else {
      // Default to 100% full container if not cropped
      result.style.left = '0%';
      result.style.top = '0%';
      result.style.width = '100%';
      result.style.height = '100%';
      result.style.objectFit = 'contain';
    }

    // Original image always fills the container
    original.style.left = '0%';
    original.style.top = '0%';
    original.style.width = '100%';
    original.style.height = '100%';
    original.style.objectFit = 'contain';
  }

  // Set up download link
  const dlBtn = document.getElementById('download-btn');
  dlBtn.onclick = () => {
    const a = document.createElement('a');
    a.href = `${API_BASE}upload.php?action=download&file=${item.outputUrl.split('/').pop()}`;
    a.download = item.name.replace(/\.[^.]+$/, '') + '_nobg.png';
    a.click();
  };

  // Slider interaction
  initCompareSlider();
}

function hideCompare() {
  document.getElementById('compare-overlay').classList.add('hidden');
  try {
    localStorage.removeItem('rembg_show_compare');
  } catch (e) {}
}

function exitToUpload() {
  // Clear localStorage
  try {
    localStorage.removeItem('rembg_images');
    localStorage.removeItem('rembg_active_index');
    localStorage.removeItem('rembg_show_compare');
  } catch (e) {}

  // Reset State
  State.images = [];
  State.activeIndex = -1;
  resetLassoState();

  // Hide editor and header
  document.getElementById('app-header').style.display = 'none';
  document.getElementById('app-main').style.display = 'none';

  // Hide compare overlay
  hideCompare();

  // Redraw thumbnails (will be empty)
  renderThumbnails();
  updateDetectionUI();
  render();

  // Show upload overlay
  document.getElementById('upload-overlay').classList.remove('hidden');
}

function initCompareSlider() {
  const container = document.querySelector('.compare-container');
  const slider = document.querySelector('.compare-slider');
  const original = document.querySelector('.compare-original');
  let isDragging = false;

  function updateSlider(x) {
    const rect = container.getBoundingClientRect();
    let pct = ((x - rect.left) / rect.width) * 100;
    pct = Math.max(0, Math.min(100, pct));
    slider.style.left = pct + '%';
    original.style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
  }

  slider.addEventListener('mousedown', () => isDragging = true);
  container.addEventListener('mousemove', (e) => { if (isDragging) updateSlider(e.clientX); });
  document.addEventListener('mouseup', () => isDragging = false);

  // Touch
  slider.addEventListener('touchstart', () => isDragging = true);
  container.addEventListener('touchmove', (e) => {
    if (isDragging) updateSlider(e.touches[0].clientX);
  });
  document.addEventListener('touchend', () => isDragging = false);

  // Initialize at 50%
  updateSlider(container.getBoundingClientRect().left + container.clientWidth / 2);
}

/* ========== TOOLBAR EVENTS ========== */
function bindToolbarEvents() {
  // Tool selection
  document.getElementById('btn-lasso')?.addEventListener('click', () => setTool('lasso'));
  document.getElementById('btn-pan')?.addEventListener('click', () => setTool('pan'));

  // Zoom
  document.getElementById('btn-zoom-in')?.addEventListener('click', () => {
    zoomAt(0.2, State.canvas.width / 2, State.canvas.height / 2);
  });
  document.getElementById('btn-zoom-out')?.addEventListener('click', () => {
    zoomAt(-0.2, State.canvas.width / 2, State.canvas.height / 2);
  });
  document.getElementById('btn-fit')?.addEventListener('click', fitToScreen);
  document.getElementById('btn-reset')?.addEventListener('click', resetView);

  // Lasso controls
  document.getElementById('btn-undo-lasso')?.addEventListener('click', undoLasso);
  document.getElementById('btn-redo-lasso')?.addEventListener('click', redoLasso);
  document.getElementById('btn-clear-lasso')?.addEventListener('click', clearLasso);

  // Actions
  document.getElementById('btn-remove-bg')?.addEventListener('click', removeBackground);
  document.getElementById('btn-batch')?.addEventListener('click', batchRemoveBackground);

  // Compare overlay
  document.getElementById('btn-close-compare')?.addEventListener('click', exitToUpload);
  document.getElementById('btn-back-editor')?.addEventListener('click', hideCompare);

  // Shortcuts modal
  document.getElementById('btn-shortcuts')?.addEventListener('click', () => {
    document.getElementById('shortcuts-modal').classList.toggle('hidden');
  });
  document.getElementById('btn-close-shortcuts')?.addEventListener('click', () => {
    document.getElementById('shortcuts-modal').classList.add('hidden');
  });

  // Add new images button
  document.getElementById('btn-add-images')?.addEventListener('click', () => {
    document.getElementById('file-input').click();
  });

  // Mobile sidebar toggle
  document.getElementById('btn-sidebar-toggle')?.addEventListener('click', () => {
    document.getElementById('sidebar').classList.toggle('open');
  });

  // Image Type Selector Change Event
  document.getElementById('select-image-type')?.addEventListener('change', (e) => {
    const item = State.images[State.activeIndex];
    if (item) {
      item.selected_type = e.target.value;
      updateDetectionUI();
      saveImagesSession();
    }
  });
}

function setTool(tool) {
  State.tool = tool;
  document.querySelectorAll('[data-tool]').forEach(btn => {
    btn.classList.toggle('active', btn.dataset.tool === tool);
  });
  State.canvas.style.cursor = tool === 'lasso' ? 'crosshair' : 'grab';
}

/* ========== KEYBOARD SHORTCUTS ========== */
function bindKeyboardShortcuts() {
  document.addEventListener('keydown', (e) => {
    if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;

    const ctrl = e.ctrlKey || e.metaKey;

    switch (true) {
      // Ctrl+Z = Undo
      case ctrl && e.key === 'z' && !e.shiftKey:
        e.preventDefault(); undoLasso(); break;
      // Ctrl+Shift+Z or Ctrl+Y = Redo
      case ctrl && (e.key === 'Z' || e.key === 'y'):
        e.preventDefault(); redoLasso(); break;
      // L = Lasso tool
      case e.key === 'l' || e.key === 'L':
        setTool('lasso'); break;
      // H = Pan / Hand tool
      case e.key === 'h' || e.key === 'H':
        setTool('pan'); break;
      // + = Zoom in
      case e.key === '+' || e.key === '=':
        zoomAt(0.15, State.canvas.width / 2, State.canvas.height / 2); break;
      // - = Zoom out
      case e.key === '-':
        zoomAt(-0.15, State.canvas.width / 2, State.canvas.height / 2); break;
      // 0 = Fit to screen
      case e.key === '0':
        fitToScreen(); break;
      // Escape = Clear lasso or close modals
      case e.key === 'Escape':
        if (!document.getElementById('compare-overlay').classList.contains('hidden')) hideCompare();
        else if (!document.getElementById('shortcuts-modal').classList.contains('hidden'))
          document.getElementById('shortcuts-modal').classList.add('hidden');
        else clearLasso();
        break;
      // Delete = Clear lasso
      case e.key === 'Delete':
        clearLasso(); break;
      // Enter = Remove BG
      case e.key === 'Enter' && State.lassoClosed:
        removeBackground(); break;
      // Space = toggle pan while held
      case e.key === ' ':
        e.preventDefault();
        if (State.tool !== 'pan') { State._prevTool = State.tool; setTool('pan'); }
        break;
    }
  });

  document.addEventListener('keyup', (e) => {
    if (e.key === ' ' && State._prevTool) {
      setTool(State._prevTool);
      State._prevTool = null;
    }
  });
}

/* ========== SESSION PERSISTENCE FOR IMAGES ========== */
function saveImagesSession() {
  try {
    const metadata = State.images.map(img => ({
      name: img.name,
      filename: img.filename,
      url: img.url.replace(API_BASE, ''), // store relative paths
      width: img.width,
      height: img.height,
      original_width: img.original_width,
      original_height: img.original_height,
      crop_box: img.crop_box,
      outputUrl: img.outputUrl ? img.outputUrl.replace(API_BASE, '') : null,
      detected_type: img.detected_type,
      detected_confidence: img.detected_confidence,
      selected_type: img.selected_type
    }));
    localStorage.setItem('rembg_images', JSON.stringify(metadata));
    localStorage.setItem('rembg_active_index', State.activeIndex);
  } catch (e) { /* ignore */ }
}

async function loadImagesSession() {
  try {
    const raw = localStorage.getItem('rembg_images');
    if (!raw) return;
    const metadata = JSON.parse(raw);
    if (!metadata || metadata.length === 0) return;

    const activeIndex = parseInt(localStorage.getItem('rembg_active_index') || '-1', 10);
    
    // Clear current state images
    State.images = [];
    
    // Load images sequentially
    for (const item of metadata) {
      await addImage({
        filename: item.filename,
        name: item.name,
        url: item.url,
        width: item.width,
        height: item.height,
        original_width: item.original_width,
        original_height: item.original_height,
        crop_box: item.crop_box,
        outputUrl: item.outputUrl,
        detected_type: item.detected_type,
        detected_confidence: item.detected_confidence,
        selected_type: item.selected_type
      });
    }

    if (State.images.length > 0) {
      State.activeIndex = (activeIndex >= 0 && activeIndex < State.images.length) ? activeIndex : 0;
      document.getElementById('upload-overlay').classList.add('hidden');
      document.getElementById('app-header').style.display = '';
      document.getElementById('app-main').style.display = '';
      fitToScreen();
      renderThumbnails();
      updateDetectionUI();
      render();

      try {
        const showComp = localStorage.getItem('rembg_show_compare');
        const activeItem = State.images[State.activeIndex];
        if (showComp === 'true' && activeItem && activeItem.outputUrl) {
          showCompare(activeItem);
        }
      } catch (e) {}
    }
  } catch (e) { /* ignore */ }
}

/* ========== UPDATE DETECTION UI ========== */
function updateDetectionUI() {
  const item = State.images[State.activeIndex];
  const select = document.getElementById('select-image-type');
  const infoBlock = document.getElementById('detection-info');
  const typeSpan = document.getElementById('detected-type');
  const confSpan = document.getElementById('detected-confidence');
  const warnBlock = document.getElementById('detection-warning');

  if (!select) return;

  if (!item) {
    if (infoBlock) infoBlock.style.display = 'none';
    if (warnBlock) warnBlock.style.display = 'none';
    return;
  }

  // Set the dropdown to current selected_type ('auto', 'photo', or 'logo')
  select.value = item.selected_type || 'auto';

  // Display the auto-detection information
  if (infoBlock && typeSpan && confSpan) {
    infoBlock.style.display = 'block';
    typeSpan.textContent = item.detected_type === 'logo' ? 'Logo / Graphic' : 'Photo';
    confSpan.textContent = item.detected_confidence + '%';
  }

  // Display warning if detection confidence is low (< 70%)
  if (warnBlock) {
    if (item.detected_confidence < 70) {
      warnBlock.style.display = 'flex';
    } else {
      warnBlock.style.display = 'none';
    }
  }
}

/* ========== INIT ON DOM READY ========== */
document.addEventListener('DOMContentLoaded', async () => {
  initCanvas();
  initUpload();
  await loadImagesSession();
});
