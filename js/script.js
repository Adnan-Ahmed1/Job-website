
document.addEventListener('DOMContentLoaded', function () {
    console.log("MySarkari Naukri loaded successfully!");
});


// ==================== WOW.JS ANIMATION ==================== //
new WOW().init();


// ==================== TRENDING DISINTEGRATION ANIMATION ==================== //
(function initTrendingDisintegration() {
    const wrap = document.querySelector('.trending-wrap');
    if (!wrap) return;
    const content = wrap.querySelector('.trending-content');
    if (!content) return;
    const items = Array.from(content.querySelectorAll('.trending-item'));
    if (items.length === 0) return;

    // Canvas overlay for dust particles
    const canvas = document.createElement('canvas');
    canvas.style.cssText = 'position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:10;';
    wrap.appendChild(canvas);
    const ctx = canvas.getContext('2d');
    let particles = [];
    let isPaused = false;

    function resizeCanvas() {
        const r = wrap.getBoundingClientRect();
        canvas.width = r.width;
        canvas.height = r.height;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    // Pre-capture each item offscreen (uses captureElementHidden defined below)
    const itemCanvasMap = new Map();
    async function preCaptureItems() {
        for (const item of items) {
            try {
                // captureElementHidden is hoisted from the Thanos engine below
                const cap = await captureElementHidden(item);
                itemCanvasMap.set(item, cap);
            } catch (e) { console.warn('Trending capture fail:', e); }
        }
    }
    setTimeout(preCaptureItems, 1500);

    // Dust particle
    class Dust {
        constructor(x, y, color) {
            this.x = x; this.y = y;
            this.size = 1.5 + Math.random() * 3;
            this.vx = -(1.5 + Math.random() * 3);
            this.vy = (Math.random() - 0.5) * 2.5;
            this.opacity = 0.7 + Math.random() * 0.3;
            this.decay = 0.02 + Math.random() * 0.03;
            this.color = color;
            this.rot = Math.random() * Math.PI * 2;
            this.rotV = (Math.random() - 0.5) * 0.15;
        }
        update() {
            this.x += this.vx; this.y += this.vy;
            this.opacity -= this.decay;
            this.rot += this.rotV;
            this.size *= 0.99;
        }
        draw(c) {
            if (this.opacity <= 0) return;
            c.save();
            c.globalAlpha = this.opacity;
            c.translate(this.x, this.y);
            c.rotate(this.rot);
            c.fillStyle = this.color;
            c.fillRect(-this.size / 2, -this.size / 2, this.size, this.size);
            c.restore();
        }
        isDead() { return this.opacity <= 0 || this.x < -30; }
    }

    function tick() {
        const wr = wrap.getBoundingClientRect();
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if (!isPaused) {
            const ZONE = 70; // px from left edge
            items.forEach(item => {
                const cap = itemCanvasMap.get(item);
                if (!cap) return;
                const ir = item.getBoundingClientRect();
                const iL = ir.left - wr.left;
                const iR = ir.right - wr.left;

                if (iR > 0 && iL < ZONE) {
                    const oL = Math.max(0, iL);
                    const oR = Math.min(ZONE, iR);
                    if (oR <= oL) return;

                    const cCtx = cap.getContext('2d');
                    const cw = cap.width, ch = cap.height;
                    const iw = ir.width, ih = ir.height;

                    for (let i = 0; i < 4; i++) {
                        const px = oL + Math.random() * (oR - oL);
                        const cx = Math.floor(((px - iL) / iw) * cw);
                        const cy = Math.floor(Math.random() * ch);
                        let color = 'rgba(15,23,42,1)';
                        try {
                            const p = cCtx.getImageData(
                                Math.max(0, Math.min(cx, cw - 1)),
                                Math.max(0, Math.min(cy, ch - 1)), 1, 1
                            ).data;
                            if (p[3] > 10) color = `rgba(${p[0]},${p[1]},${p[2]},1)`;
                        } catch (e) { }
                        const py = (ir.top - wr.top) + (cy / ch) * ih;
                        particles.push(new Dust(px, py, color));
                    }
                }
            });
        }

        // Draw all particles (even when paused, let existing ones finish)
        for (let i = particles.length - 1; i >= 0; i--) {
            particles[i].update();
            particles[i].draw(ctx);
            if (particles[i].isDead()) particles.splice(i, 1);
        }
        requestAnimationFrame(tick);
    }

    content.addEventListener('mouseenter', () => { isPaused = true; });
    content.addEventListener('mouseleave', () => { isPaused = false; });
    tick();
})();


// ==================== CARDS DISINTEGRATION ANIMATION ==================== //
const DUST_LAYER_COUNT = 16;       // More layers = finer dust
const DUST_ANIM_DURATION = 800;    // Base ms per layer animation
const DUST_STAGGER = 30;           // ms between each layer start
const MATERIALIZE_STAGGER = 70;    // ms between each new item appearing

function splitIntoDustLayers(sourceCanvas, count) {
    const w = sourceCanvas.width;
    const h = sourceCanvas.height;
    const srcCtx = sourceCanvas.getContext('2d');
    const srcData = srcCtx.getImageData(0, 0, w, h);
    const srcPixels = srcData.data; // Uint8ClampedArray [r,g,b,a, r,g,b,a, ...]

    // Create output canvases and their pixel arrays
    const layerCanvases = [];
    const layerDatas = [];

    for (let i = 0; i < count; i++) {
        const c = document.createElement('canvas');
        c.width = w;
        c.height = h;
        layerCanvases.push(c);
        const imgData = c.getContext('2d').createImageData(w, h);
        layerDatas.push(imgData);
    }

    // Distribute each pixel to a random layer
    const totalPixels = w * h;
    for (let p = 0; p < totalPixels; p++) {
        const idx = p * 4;
        // Only bother with non-transparent pixels
        if (srcPixels[idx + 3] > 0) {
            const layerIdx = Math.floor(Math.random() * count);
            const dest = layerDatas[layerIdx].data;
            dest[idx] = srcPixels[idx];     // R
            dest[idx + 1] = srcPixels[idx + 1]; // G
            dest[idx + 2] = srcPixels[idx + 2]; // B
            dest[idx + 3] = srcPixels[idx + 3]; // A
        }
    }

    // Write pixel data to each canvas
    for (let i = 0; i < count; i++) {
        layerCanvases[i].getContext('2d').putImageData(layerDatas[i], 0, 0);
    }

    return layerCanvases;
}

async function captureElementHidden(el) {
    if (el._thanosCanvas) {
        return el._thanosCanvas;
    }

    const isHidden = getComputedStyle(el).display === 'none';

    // Measure the actual layout dimensions
    let width, height;
    if (isHidden) {
        const originalDisplay = el.style.display;
        const originalVisibility = el.style.visibility;
        const originalOpacity = el.style.opacity;

        el.style.display = 'flex';
        el.style.visibility = 'hidden';
        el.style.opacity = '0';
        void el.offsetHeight; // reflow

        const rect = el.getBoundingClientRect();
        width = Math.ceil(rect.width);
        height = Math.ceil(rect.height);

        el.style.display = originalDisplay;
        el.style.visibility = originalVisibility;
        el.style.opacity = originalOpacity;
    } else {
        const rect = el.getBoundingClientRect();
        width = Math.ceil(rect.width);
        height = Math.ceil(rect.height);
    }

    // Create offscreen clone
    const clone = el.cloneNode(true);
    clone.style.cssText = `
        position: fixed !important;
        left: -9999px !important;
        top: -9999px !important;
        width: ${width}px !important;
        height: ${height}px !important;
        display: flex !important;
        opacity: 1 !important;
        visibility: visible !important;
    `;

    // Ensure all children are fully visible in the clone
    clone.querySelectorAll('*').forEach(child => {
        child.style.visibility = 'visible';
        child.style.opacity = '1';
    });

    document.body.appendChild(clone);

    const captured = await html2canvas(clone, {
        backgroundColor: null,
        scale: 1,
        logging: false,
        useCORS: true,
    });

    clone.remove();

    el._thanosCanvas = captured;
    return captured;
}

function preCapturePanelItems(panel) {
    const items = Array.from(panel.querySelectorAll('.panel-list .panel-item'));
    items.forEach((item, index) => {
        setTimeout(() => {
            captureElementHidden(item).catch(err => console.error("Pre-capture failed:", err));
        }, index * 120 + 400); // Start 400ms after load, stagger by 120ms
    });
}

async function thanosSnapElement(el) {
    // 1. Capture/Get canvas (if pre-cached, this starts instantly!)
    const captured = await captureElementHidden(el);

    // 2. Split into dust layers
    const dustLayers = splitIntoDustLayers(captured, DUST_LAYER_COUNT);

    // 3. Position each dust canvas exactly over the original element
    const rect = el.getBoundingClientRect();

    dustLayers.forEach(canvas => {
        canvas.className = 'thanos-dust-layer';
        canvas.style.cssText = `
            position: fixed;
            left: ${rect.left}px;
            top: ${rect.top}px;
            width: ${rect.width}px;
            height: ${rect.height}px;
            pointer-events: none;
            z-index: 99999;
            will-change: transform, opacity;
            transition: none;
        `;
        document.body.appendChild(canvas);
    });

    // 4. Immediately hide the original element's visibility, keeping its layout space
    el.style.transition = 'opacity 0.1s ease';
    el.style.opacity = '0';
    el.style.visibility = 'hidden';

    // 5. Animate each layer with staggered timing
    return new Promise(resolve => {
        dustLayers.forEach((canvas, i) => {
            const delay = i * DUST_STAGGER + Math.random() * 40;
            const duration = DUST_ANIM_DURATION + Math.random() * 300;

            // Each layer drifts in a slightly different direction
            const xDrift = 40 + Math.random() * 100;
            const yDrift = -30 + Math.random() * 60;
            const rotate = -20 + Math.random() * 40;
            const scale = 0.6 + Math.random() * 0.3;

            setTimeout(() => {
                canvas.style.transition = `
                    transform ${duration}ms cubic-bezier(0.22, 0.61, 0.36, 1),
                    opacity ${duration}ms ease-out
                `;
                canvas.style.transform = `translate(${xDrift}px, ${yDrift}px) rotate(${rotate}deg) scale(${scale})`;
                canvas.style.opacity = '0';

                // Remove canvas from DOM after animation completes
                setTimeout(() => canvas.remove(), duration + 50);
            }, delay);
        });

        // Resolve when the last layer finishes
        const totalTime = DUST_LAYER_COUNT * DUST_STAGGER + 40 + DUST_ANIM_DURATION + 300 + 100;
        setTimeout(resolve, totalTime * 0.65); // resolve a bit early so new items start appearing
    });
}

async function thanosSnap(elements) {
    if (!elements || elements.length === 0) return;

    // Stagger the snap across items for a wave-like dissolve
    const promises = elements.map((el, i) =>
        new Promise(resolve => {
            setTimeout(async () => {
                await thanosSnapElement(el);
                resolve();
            }, i * 40); // slight stagger between items
        })
    );

    await Promise.all(promises);
}

async function thanosAssembleElement(el) {
    // 1. Capture/Get canvas offscreen (100% invisible to user, zero pop-in!)
    const captured = await captureElementHidden(el);

    // 2. Position the real element in place but keep it completely invisible
    el.style.display = 'flex';
    el.style.opacity = '0';
    el.style.visibility = 'hidden';
    void el.offsetHeight; // force layout

    const rect = el.getBoundingClientRect();

    // 3. Split captured image into dust layers
    const dustLayers = splitIntoDustLayers(captured, DUST_LAYER_COUNT);

    // 4. Position and scatter dust canvases over the target rect
    dustLayers.forEach((canvas, i) => {
        // Each layer starts at a random scattered position
        const xStart = 40 + Math.random() * 100;
        const yStart = -30 + Math.random() * 60;
        const rotateStart = -20 + Math.random() * 40;
        const scaleStart = 0.6 + Math.random() * 0.3;

        canvas.className = 'thanos-dust-layer';
        canvas.style.cssText = `
            position: fixed;
            left: ${rect.left}px;
            top: ${rect.top}px;
            width: ${rect.width}px;
            height: ${rect.height}px;
            pointer-events: none;
            z-index: 99999;
            will-change: transform, opacity;
            opacity: 0;
            transform: translate(${xStart}px, ${yStart}px) rotate(${rotateStart}deg) scale(${scaleStart});
            transition: none;
        `;
        document.body.appendChild(canvas);
    });

    // 5. Make the real element visibility: visible (but keep opacity 0)
    el.style.visibility = 'visible';

    // 6. Animate each layer converging back to origin (reverse of disintegration)
    return new Promise(resolve => {
        dustLayers.forEach((canvas, i) => {
            const delay = i * DUST_STAGGER + Math.random() * 40;
            const duration = DUST_ANIM_DURATION + Math.random() * 300;

            setTimeout(() => {
                canvas.style.transition = `
                    transform ${duration}ms cubic-bezier(0.22, 0.61, 0.36, 1),
                    opacity ${duration}ms ease-in
                `;
                // Converge back to original position
                canvas.style.transform = 'translate(0, 0) rotate(0deg) scale(1)';
                canvas.style.opacity = '1';
            }, delay);
        });

        // After all layers have converged, reveal the real element and remove canvases
        const totalTime = DUST_LAYER_COUNT * DUST_STAGGER + 40 + DUST_ANIM_DURATION + 300 + 100;
        setTimeout(() => {
            // Reveal the real DOM element instantly (seamless handoff)
            el.style.transition = 'none';
            el.style.opacity = '1';
            el.style.visibility = 'visible';

            // Remove all dust layer canvases
            dustLayers.forEach(canvas => canvas.remove());

            // Clean up transition inline style
            setTimeout(() => {
                el.style.transition = '';
            }, 50);

            resolve();
        }, totalTime);
    });
}

async function thanosAssemble(elements) {
    if (!elements || elements.length === 0) return;

    // Stagger the assembly across items for a wave-like formation
    const promises = elements.map((el, i) =>
        new Promise(resolve => {
            setTimeout(async () => {
                await thanosAssembleElement(el);
                resolve();
            }, i * 50); // slight stagger between items
        })
    );

    await Promise.all(promises);
}


// ==================== CARDS PAGINATION ==================== //
const itemsPerPage = 8;
document.querySelectorAll('.panel-card').forEach(panel => {
    const pagination = panel.querySelector('.panel-pagination');
    if (!pagination) return;

    const items = Array.from(panel.querySelectorAll('.panel-list .panel-item'));
    const totalPages = Math.ceil(items.length / itemsPerPage);
    let currentPage = 1;
    let isAnimating = false; // Prevent spam-clicking during animation

    if (items.length <= itemsPerPage) {
        pagination.style.display = 'none';
        items.forEach(item => item.style.display = 'flex');
        return;
    }

    pagination.style.display = 'flex';

    function getVisibleItems() {
        return items.filter((_, index) =>
            index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage
        );
    }

    function getItemsForPage(page) {
        return items.filter((_, index) =>
            index >= (page - 1) * itemsPerPage && index < page * itemsPerPage
        );
    }

    function showItemsInstant() {
        items.forEach((item, index) => {
            item.style.display = (index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage) ? 'flex' : 'none';
            item.style.opacity = '1';
            item.style.transform = '';
        });
    }

    async function changePage(newPage) {
        if (isAnimating || newPage === currentPage || newPage < 1 || newPage > totalPages) return;
        isAnimating = true;

        // 1. Snap current visible items into dust (disintegrate outward)
        const currentVisible = getVisibleItems();
        await thanosSnap(currentVisible);

        // 2. Hide the old items completely
        currentVisible.forEach(item => {
            item.style.display = 'none';
            item.style.opacity = '1';
            item.style.visibility = 'visible';
        });

        // 3. Update page number
        currentPage = newPage;

        // 4. Update pagination buttons
        renderPagination();

        // 5. Get the new page's items and assemble them (reverse-Thanos converge inward)
        const newVisible = getItemsForPage(currentPage);
        await thanosAssemble(newVisible);

        // 6. Unlock
        isAnimating = false;
    }

    function renderPagination() {
        pagination.innerHTML = '';

        if (currentPage > 1) {
            pagination.innerHTML += `<a href="javascript:void(0)" class="page-btn prev-btn"><i class="fas fa-angle-left"></i></a>`;
        }

        let startPage = Math.max(1, currentPage - 1);
        let endPage = Math.min(totalPages, startPage + 2);
        if (endPage - startPage < 2) startPage = Math.max(1, endPage - 2);

        for (let i = startPage; i <= endPage; i++) {
            pagination.innerHTML += `<a href="javascript:void(0)" class="page-btn ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</a>`;
        }

        if (currentPage < totalPages) {
            pagination.innerHTML += `<a href="javascript:void(0)" class="page-btn next-btn"><i class="fas fa-angle-right"></i></a>`;
        }

        bindEvents();
    }

    function bindEvents() {
        pagination.querySelectorAll('[data-page]').forEach(btn => {
            btn.onclick = function () {
                changePage(Number(this.dataset.page));
            };
        });

        const prevBtn = pagination.querySelector('.prev-btn');
        if (prevBtn) prevBtn.onclick = () => changePage(currentPage - 1);

        const nextBtn = pagination.querySelector('.next-btn');
        if (nextBtn) nextBtn.onclick = () => changePage(currentPage + 1);
    }

    // Initial render (no animation on first load)
    showItemsInstant();
    renderPagination();

    // Background pre-capture all items to memory to eliminate static pop-in delays
    preCapturePanelItems(panel);
});


// ==================== MEGA MENU SCRIPTS ==================== //

// Mega Menu Accordion Logic
document.querySelectorAll('.nested-toggle').forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
        e.preventDefault();
        const parentLi = this.parentElement;
        const nestedMenu = parentLi.querySelector('.nested-menu');

        // Toggle current
        parentLi.classList.toggle('open');
        if (nestedMenu) {
            nestedMenu.classList.toggle('active');
        }
    });
});

// Mega Menu Live Search Filtering
document.querySelectorAll('.mega-search-input').forEach(function (input) {
    input.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();
        const column = this.closest('.mega-menu-col');

        // Find the main ul inside this column
        const mainUl = column.querySelector('ul');
        if (!mainUl) return;

        // Find direct li children of the main ul
        const topLevelItems = Array.from(mainUl.children).filter(child => child.tagName === 'LI');

        topLevelItems.forEach(function (item) {
            const nestedMenu = item.querySelector('.nested-menu');

            if (nestedMenu) {
                // Hierarchical List (e.g. State -> Universities)
                let headerText = '';
                for (let i = 0; i < item.childNodes.length; i++) {
                    if (item.childNodes[i].nodeType === 3) { // Text node
                        headerText += item.childNodes[i].nodeValue;
                    }
                }
                headerText = headerText.toLowerCase().trim();

                const headerMatch = headerText.includes(query);
                let anyChildMatch = false;

                const childItems = nestedMenu.querySelectorAll('li');
                childItems.forEach(function (child) {
                    const childText = child.textContent.toLowerCase().trim();
                    if (headerMatch || childText.includes(query)) {
                        child.style.display = '';
                        anyChildMatch = true;
                    } else {
                        child.style.display = 'none';
                    }
                });

                if (headerMatch || anyChildMatch) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            } else {
                // Flat List (e.g. All Exams)
                const text = item.textContent.toLowerCase().trim();
                if (text.includes(query)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            }
        });
    });
});

// Mobile Mega Menu Toggle (click instead of hover)
document.querySelectorAll('.has-mega-menu > .nav-link').forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            const parent = this.parentElement;
            parent.classList.toggle('open');
        }
    });
});


// ==================== CLOSE ADS ==================== //
function closeAds() {
    const ads = document.getElementById("adsBanner");
    ads.classList.add("ads-hide");

    setTimeout(() => {
        ads.style.display = "none";
    }, 300);
}


// ==================== ALL STATES HEADING SYNC ==================== //
document.addEventListener('DOMContentLoaded', function () {
    const categoryTabs = document.getElementById('categoryTabs');
    if (categoryTabs) {
        const heading = document.getElementById('sectionHeading');
        const tabButtons = categoryTabs.querySelectorAll('.category-btn');
        const titles = {
            jobs: "Jobs",
            results: "Results",
            admitcard: "Admit Cards",
            syllabus: "Syllabus",
            admission: "Admissions",
            scholarship: "Scholarships",
            yojana: "Government Schemes"
        };
        tabButtons.forEach(btn => {
            btn.addEventListener('shown.bs.tab', function (e) {
                if (heading) {
                    const type = btn.getAttribute('data-type');
                    heading.textContent = titles[type] || btn.textContent.trim();
                }
            });
        });
    }
});

// View Toggle Buttons (Visual only)
document.querySelectorAll(".view-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        document.querySelectorAll(".view-btn").forEach(b => b.classList.remove("active-view"));
        this.classList.add("active-view");
    });
});


// ==================== STATE PAGE HEADING SYNC ==================== //
document.addEventListener('DOMContentLoaded', function () {
    const sidebarTabs = document.getElementById('sidebarTabs');
    if (sidebarTabs) {
        const titleEl = document.querySelector('.category-page-title');
        const subtitleEl = document.querySelector('.category-page-subtitle');
        const counts = {
            'jobs': { title: 'Latest Government Jobs in Maharashtra', text: 'Showing <strong>1–6</strong> of <strong>1,247</strong> Jobs' },
            'results': { title: 'Latest Exam Results in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>432</strong> Results' },
            'admitcard': { title: 'Admit Cards & Hall Tickets in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>158</strong> Admit Cards' },
            'answerkey': { title: 'Exam Answer Keys in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>94</strong> Answer Keys' },
            'syllabus': { title: 'Exam Syllabus & Pattern in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>83</strong> Syllabus Documents' },
            'admission': { title: 'College & University Admissions in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>112</strong> Admissions' },
            'scholarship': { title: 'Government Scholarships in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>48</strong> Scholarships' },
            'questionpaper': { title: 'Previous Year Question Papers in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>214</strong> Question Papers' },
            'yojana': { title: 'Government Schemes & Yojana in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>76</strong> Schemes' }
        };

        const tabLinks = sidebarTabs.querySelectorAll('a[data-bs-toggle="tab"]');
        tabLinks.forEach(link => {
            link.addEventListener('shown.bs.tab', function (e) {
                const targetId = link.getAttribute('data-bs-target').replace('#', '');
                if (counts[targetId]) {
                    if (titleEl) titleEl.textContent = counts[targetId].title;
                    if (subtitleEl) subtitleEl.innerHTML = counts[targetId].text;
                }
            });
        });
    }
});


// ==================== SCROLL TO SECTION ==================== //
const navLinks = document.querySelectorAll(".tab-nav li a");

navLinks.forEach(link => {
    link.addEventListener("click", function(e) {
        e.preventDefault(); // prevent default jump

        const target = document.querySelector(this.getAttribute("href"));

        window.scrollTo({
            top: target.offsetTop - 20, // adjust gap from top
            behavior: "smooth"
        });

        // Optional: update active class
        navLinks.forEach(l => l.classList.remove("active"));
        this.classList.add("active");
    });
});