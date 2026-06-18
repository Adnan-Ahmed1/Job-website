<?php include_once("include/header.php") ?>

<main>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb mb-0">
                <a href="javascript:void(0);">Home</a>
                <i class="far fa-angle-right"></i>
                <a href="javascript:void(0);">States</a>
                <i class="far fa-angle-right"></i>
                <a href="javascript:void(0);">Maharashtra</a>
                <i class="far fa-angle-right"></i>
                <a href="javascript:void(0);">Question Paper</a>
                <i class="far fa-angle-right"></i>
                <a href="javascript:void(0);">MPSC State Service Combine Group B & C 2024</a>
                <i class="far fa-angle-right"></i>
                <span>Shift 1 (English)</span>
            </div>
        </div>
    </section>

    <section class="details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="details-job-card">
                        <div class="details-job-logo">
                            <img src="img/drdo.png" alt="logo">
                        </div>
                        <div class="details-job-matter">
                            <div class="details-job-content">
                                <div class="top-row">
                                    <h2 class="title">
                                        MPSC State Service Combine Group B & C 2024
                                    </h2>
                                    <span class="badge">New</span>
                                </div>
                                <p class="subtitle">
                                    Question Paper (Shift 1) - English
                                </p>
                            </div>
                            <div class="details-job-actions">
                                <div class="meta">
                                    <div class="meta-item">
                                        <i class="far fa-calendar"></i>
                                        <span>Exam Date: 30 May 2026</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="far fa-layer-group"></i>
                                        <span>Paper Type: Tier 1</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="far fa-clock"></i>
                                        <span>Shift: Shift 1 (Morning)</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="far fa-language"></i>
                                        <span>Language: English</span>
                                    </div>
                                </div>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn apply">
                                        Official Website <i class="far fa-external-link-alt"></i>
                                    </a>

                                    <a href="javascript:void(0);" class="btn share">
                                        <i class="far fa-share-alt"></i> Share
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-tabs">
                        <div class="tab-content">
                            <section>
                                <div class="stats-row mt-0">
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="far fa-question-circle"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h6>Total Questions</h6>
                                            <h4>100</h4>
                                        </div>
                                    </div>
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="far fa-file"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h6>Total Marks</h6>
                                            <h4>100</h4>
                                        </div>
                                    </div>
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h6>Duration</h6>
                                            <h4>2 Hours</h4>
                                        </div>
                                    </div>
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="far fa-pen-to-square"></i>
                                        </div>
                                        <div class="stats-content">
                                            <h6>Negative Marking</h6>
                                            <h4>0.50</h4>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Book-Flip PDF Viewer -->
                            <section class="book-viewer-section">
                                <h3>Question Paper Viewer</h3>
                                <div class="book-viewer">
                                    <div class="book-toolbar">
                                        <div class="toolbar-left">
                                            <button class="toolbar-btn" id="bookPrevPage" title="Previous Page">
                                                <i class="far fa-chevron-left"></i> Previous
                                            </button>
                                            <div class="page-indicator">
                                                <input type="text" id="bookPageInput" value="1">
                                                <span>/</span>
                                                <span id="bookTotalPages">0</span>
                                            </div>
                                            <button class="toolbar-btn" id="bookNextPage" title="Next Page">
                                                Next <i class="far fa-chevron-right"></i>
                                            </button>
                                        </div>
                                        <div class="toolbar-right">
                                            <button class="toolbar-btn" id="bookZoomOut" title="Zoom Out">
                                                <i class="far fa-minus"></i>
                                            </button>
                                            <button class="toolbar-btn" id="bookZoomIn" title="Zoom In">
                                                <i class="far fa-plus"></i>
                                            </button>
                                            <button class="toolbar-btn" id="bookFullscreen" title="Fullscreen">
                                                <i class="far fa-expand"></i>
                                            </button>
                                            <button class="toolbar-btn" id="bookSoundToggle" title="Toggle Sound">
                                                <i class="far fa-volume-up"></i>
                                            </button>
                                            <button class="toolbar-btn" id="bookTestModeToggle" title="Start Practice Test">
                                                <i class="far fa-file-signature"></i> Test Mode
                                            </button>
                                            <a href="question-paper/SSC-GD-Constable-4-2-2025-Morning-Shift-1-Paper.pdf" download class="toolbar-btn download-btn" title="Download PDF">
                                                <i class="far fa-download"></i> Download PDF
                                            </a>
                                        </div>
                                    </div>
                                    <div class="book-viewer-workspace">
                                        <div class="book-container" id="bookContainer">
                                            <button class="book-nav-arrow book-nav-left" id="bookArrowLeft" title="Previous">
                                                <i class="far fa-chevron-left"></i>
                                            </button>
                                            <div class="book-spread" id="bookSpread">
                                                <!-- Dynamically populated by StPageFlip -->
                                            </div>
                                            <button class="book-nav-arrow book-nav-right" id="bookArrowRight" title="Next">
                                                <i class="far fa-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Test Mode Workspace (hidden by default) -->
                                <div class="test-workspace" id="testWorkspace" style="display: none;">
                                    <div class="test-header">
                                        <div class="test-header-info">
                                            <h4><i class="far fa-file-signature"></i> SSC GD Constable Practice Test</h4>
                                            <div class="test-meta">
                                                <span><i class="far fa-list-ol"></i> 100 Questions</span>
                                                <span><i class="far fa-star"></i> 200 Marks</span>
                                                <span><i class="far fa-circle-minus"></i> −0.50 Negative</span>
                                            </div>
                                        </div>
                                        <div class="test-header-actions">
                                            <div class="test-timer-box" id="testTimerBox">
                                                <i class="far fa-clock"></i>
                                                <span id="testTimerText">02:00:00</span>
                                            </div>
                                            <button class="test-submit-btn" id="btnSubmitTest">
                                                <i class="far fa-paper-plane"></i> Submit Test
                                            </button>
                                        </div>
                                    </div>
                                    <div class="test-body">
                                        <div class="test-questions-scroll" id="testQuestionsScroll">
                                            <!-- Populated dynamically via JS -->
                                        </div>
                                        <div class="test-sidebar">
                                            <div class="test-stats-mini">
                                                <div class="stat-item answered">
                                                    <span class="stat-count" id="statAnswered">0</span>
                                                    <span class="stat-label">Answered</span>
                                                </div>
                                                <div class="stat-item not-answered">
                                                    <span class="stat-count" id="statNotAnswered">100</span>
                                                    <span class="stat-label">Not Answered</span>
                                                </div>
                                            </div>
                                            <h5>Question Palette</h5>
                                            <div class="palette-grid" id="paletteGrid">
                                                <!-- 1-100 buttons populated by JS -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Test Results Section (hidden by default) -->
                                <div class="test-results-section" id="testResultsSection" style="display: none;">
                                    <div class="results-scorecard">
                                        <h4><i class="far fa-trophy"></i> Practice Test Results</h4>
                                        <div class="scorecard-grid">
                                            <div class="score-item total-score">
                                                <span class="score-value" id="resultScore">0</span>
                                                <span class="score-label">Total Score / 200</span>
                                            </div>
                                            <div class="score-item correct-score">
                                                <span class="score-value" id="resultCorrect">0</span>
                                                <span class="score-label">Correct</span>
                                            </div>
                                            <div class="score-item wrong-score">
                                                <span class="score-value" id="resultWrong">0</span>
                                                <span class="score-label">Wrong</span>
                                            </div>
                                            <div class="score-item unattempted-score">
                                                <span class="score-value" id="resultUnattempted">100</span>
                                                <span class="score-label">Unattempted</span>
                                            </div>
                                            <div class="score-item accuracy-score">
                                                <span class="score-value" id="resultAccuracy">0%</span>
                                                <span class="score-label">Accuracy</span>
                                            </div>
                                            <div class="score-item time-score">
                                                <span class="score-value" id="resultTime">00:00:00</span>
                                                <span class="score-label">Time Taken</span>
                                            </div>
                                        </div>
                                        <div class="results-actions">
                                            <button class="test-modal-btn primary" id="btnRetakeTest">
                                                <i class="far fa-rotate-left"></i> Retake Test
                                            </button>
                                            <button class="test-modal-btn secondary" id="btnExitTest">
                                                <i class="far fa-xmark"></i> Exit Test Mode
                                            </button>
                                        </div>
                                    </div>
                                    <div class="results-review" id="resultsReview">
                                        <!-- Questions with answer review populated by JS -->
                                    </div>
                                </div>
                            </section>

                            <section>
                                <h3>Exam Pattern (Tier 1)</h3>
                                <div class="table-wrapper">
                                    <table class="vacancy-table">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Questions</th>
                                                <th>Marks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>General Intelligence & Reasoning</td>
                                                <td>25</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>Quantitative Aptitude</td>
                                                <td>25</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>English Comprehension</td>
                                                <td>25</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>General Awareness</td>
                                                <td>25</td>
                                                <td>50</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Total</td>
                                                <td>100</td>
                                                <td>200</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="detail-sidebar-sticky">
                        <div class="details-sidebar">
                            <h3>Related Resources</h3>
                            <ul class="category-nav-list">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="far fa-info-circle"></i>
                                        <h6>MPSC Jobs</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="far fa-info-circle"></i>
                                        <h6>MPSC Admit Card</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="far fa-info-circle"></i>
                                        <h6>MPSC Result</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="far fa-info-circle"></i>
                                        <h6>MPSC Answer Key</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="far fa-info-circle"></i>
                                        <h6>MPSC Syllabus</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="active">
                                        <i class="far fa-info-circle"></i>
                                        <h6>MPSC Question Papers</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <section class="ads" id="adsBanner">
                            <div class="ads-box">
                                <button class="ads-close" onclick="closeAds()"><i class="far fa-times"></i></button>
                                <div class="ads-label">Ad</div>
                                <img src="img/ads-sidebar.jpg" alt="Advertisement" class="img-fluid">
                            </div>
                        </section>
                        <div class="details-sidebar">
                            <div class="card-header">
                                <h3>Other Admit Card</h3>
                                <a href="javascript:void(0);" class="view-all">
                                    View All
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="similar-job-card">
                                <div class="similar-job-header">
                                    <img src="img/drdo.png" alt="logo" class="similar-job-logo">
                                    <h3>MPSC Assistant Section Officer 2024</h3>
                                </div>
                                <div class="similar-job-meta">
                                    <i class="far fa-id-card"></i>
                                    <span>Admit Card: Released</span>
                                </div>
                                <div class="similar-job-meta">
                                    <i class="far fa-calendar"></i>
                                    <span>Exam Date: 25 May 2026</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="similar-job-card">
                                <div class="similar-job-header">
                                    <img src="img/navy.png" alt="logo" class="similar-job-logo">
                                    <h3>MPSC Tax Assistant 2024</h3>
                                </div>
                                <div class="similar-job-meta">
                                    <i class="far fa-id-card"></i>
                                    <span>Admit Card: Released</span>
                                </div>
                                <div class="similar-job-meta">
                                    <i class="far fa-calendar"></i>
                                    <span>Exam Date: 15 June 2026</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="similar-job-card">
                                <div class="similar-job-header">
                                    <img src="img/ssc.png" alt="logo" class="similar-job-logo">
                                    <h3>MPSC Clerk Typist 2024</h3>
                                </div>
                                <div class="similar-job-meta">
                                    <i class="far fa-id-card"></i>
                                    <span>Admit Card: Released</span>
                                </div>
                                <div class="similar-job-meta">
                                    <i class="far fa-calendar"></i>
                                    <span>Exam Date: 25 June 2026</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("include/footer.php") ?>

    <!-- PDF.js & StPageFlip Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/page-flip/dist/js/page-flip.browser.min.js"></script>
    <script src="question-paper/SSC-GD-2025-Shift1-questions.js"></script>
    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        (function() {
            const pdfUrl = 'question-paper/SSC-GD-Constable-4-2-2025-Morning-Shift-1-Paper.pdf';
            let pdfDoc = null;
            let pageFlip = null;
            let totalPages = 0;
            let zoomScale = 1.0;
            let panX = 0;
            let panY = 0;
            const MIN_ZOOM = 0.8;
            const MAX_ZOOM = 2.0;

            const bookSpread = document.getElementById('bookSpread');
            const bookContainer = document.getElementById('bookContainer');
            const pageInput = document.getElementById('bookPageInput');
            const totalPagesEl = document.getElementById('bookTotalPages');
            const prevBtn = document.getElementById('bookPrevPage');
            const nextBtn = document.getElementById('bookNextPage');
            const arrowLeft = document.getElementById('bookArrowLeft');
            const arrowRight = document.getElementById('bookArrowRight');

            const renderedPages = new Set();
            let soundEnabled = true;

            // Page flip sound effect
            const flipSound = new Audio('sound/page-flip.wav');
            flipSound.preload = 'auto';

            function playPageFlipSound() {
                if (!soundEnabled) return;
                try {
                    const s = flipSound.cloneNode();
                    s.volume = 0.8;
                    s.play();
                } catch (e) {}
            }

            // Render a page canvas dynamically
            async function renderPageIfNeeded(pageNum) {
                if (pageNum < 1 || pageNum > totalPages) return;
                if (renderedPages.has(pageNum)) return;
                renderedPages.add(pageNum);

                try {
                    const page = await pdfDoc.getPage(pageNum);
                    const canvas = document.querySelector(`.page-canvas[data-page="${pageNum}"]`);
                    if (!canvas) return;

                    const ctx = canvas.getContext('2d');
                    // Render at 1.5x base resolution for high quality text sharpness
                    const viewport = page.getViewport({
                        scale: 1.5
                    });
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    await page.render({
                        canvasContext: ctx,
                        viewport: viewport
                    }).promise;

                    // Remove loading placeholder text if any
                    const placeholder = canvas.nextElementSibling;
                    if (placeholder && placeholder.classList.contains('page-loading-placeholder')) {
                        placeholder.style.display = 'none';
                    }
                } catch (err) {
                    console.error(`Error rendering page ${pageNum}:`, err);
                    renderedPages.delete(pageNum);
                }
            }

            // Lazy load pages near the active viewport
            function preloadPages(activeIndex) {
                const currentLeftPage = activeIndex + 1;
                // Preload 4 pages ahead and 2 pages behind for buffer
                for (let i = -2; i <= 4; i++) {
                    renderPageIfNeeded(currentLeftPage + i);
                }
            }

            function getDisplayPageString(activeIndex) {
                if (!pageFlip) return "1";
                const orientation = pageFlip.getOrientation();
                const pageNum = activeIndex + 1;
                if (orientation === 'landscape') {
                    if (activeIndex === 0) {
                        return "1";
                    } else if (activeIndex === totalPages - 1) {
                        return `${totalPages}`;
                    } else {
                        const nextPageNum = pageNum + 1;
                        return nextPageNum <= totalPages ? `${pageNum}-${nextPageNum}` : `${pageNum}`;
                    }
                }
                return `${pageNum}`;
            }

            function updateToolbar(activeIndex) {
                pageInput.value = getDisplayPageString(activeIndex);

                // Enable/disable buttons based on positions
                prevBtn.disabled = activeIndex <= 0;
                arrowLeft.disabled = activeIndex <= 0;
                nextBtn.disabled = activeIndex >= totalPages - 1;
                arrowRight.disabled = activeIndex >= totalPages - 1;
            }

            // Initialize Book Spread HTML nodes
            function generatePageNodes(count) {
                bookSpread.innerHTML = '';
                for (let i = 1; i <= count; i++) {
                    const pageDiv = document.createElement('div');
                    pageDiv.className = 'page-wrapper';
                    // First page and last page are hard covers
                    if (i === 1 || i === count) {
                        pageDiv.setAttribute('data-density', 'hard');
                    } else {
                        pageDiv.setAttribute('data-density', 'soft');
                    }

                    pageDiv.innerHTML = `
                    <div class="page-content">
                        <canvas class="page-canvas" data-page="${i}"></canvas>
                        <div class="page-loading-placeholder"><i class="far fa-spinner fa-spin"></i> Loading Page...</div>
                        <div class="page-num-footer">Page ${i}</div>
                    </div>
                `;
                    bookSpread.appendChild(pageDiv);
                }
            }

            // Load PDF document
            pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
                pdfDoc = pdf;
                totalPages = pdf.numPages;
                totalPagesEl.textContent = totalPages;
                pageInput.max = totalPages;

                // Step 1: Generate DOM elements for all pages
                generatePageNodes(totalPages);

                // Step 2: Initialize StPageFlip
                pageFlip = new St.PageFlip(bookSpread, {
                    width: 550, // base page width
                    height: 780, // base page height
                    size: "stretch",
                    minWidth: 320,
                    maxWidth: 800,
                    minHeight: 450,
                    maxHeight: 1100,
                    drawShadow: true,
                    maxShadowOpacity: 0.4,
                    showCover: true,
                    mobileScrollSupport: false
                });

                // Step 3: Load HTML nodes into StPageFlip instance
                pageFlip.loadFromHTML(document.querySelectorAll('.page-wrapper'));

                // Step 4: Setup event listeners for flip events
                pageFlip.on('flip', (e) => {
                    updateToolbar(e.data);
                    preloadPages(e.data);
                });

                pageFlip.on('changeState', (e) => {
                    if (e.data === 'flipping') {
                        playPageFlipSound();
                    }
                });

                // Preload initial pages
                preloadPages(0);
                updateToolbar(0);

            }).catch(function(error) {
                console.error('Error loading PDF:', error);
                bookSpread.innerHTML = '<div class="pdf-error"><i class="far fa-exclamation-triangle"></i><p>Unable to load PDF. Please try downloading instead.</p></div>';
            });

            // Navigation controls
            nextBtn.addEventListener('click', () => pageFlip && pageFlip.flipNext());
            prevBtn.addEventListener('click', () => pageFlip && pageFlip.flipPrev());
            arrowRight.addEventListener('click', () => pageFlip && pageFlip.flipNext());
            arrowLeft.addEventListener('click', () => pageFlip && pageFlip.flipPrev());

            // Jump to page input
            pageInput.addEventListener('change', function() {
                const match = this.value.match(/\d+/);
                if (match && pageFlip) {
                    const pageNum = parseInt(match[0]);
                    pageFlip.turnToPage(pageNum - 1);
                }
            });
            pageInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    const match = this.value.match(/\d+/);
                    if (match && pageFlip) {
                        const pageNum = parseInt(match[0]);
                        pageFlip.turnToPage(pageNum - 1);
                    }
                }
            });

            function applyZoomAndPan() {
                bookSpread.style.transform = `translate(${panX}px, ${panY}px) scale(${zoomScale})`;
                if (zoomScale > 1.0) {
                    bookContainer.classList.add('zoomed');
                } else {
                    bookContainer.classList.remove('zoomed');
                }
            }

            // Zoom functionality
            document.getElementById('bookZoomIn').addEventListener('click', function() {
                if (zoomScale < MAX_ZOOM) {
                    zoomScale += 0.15;
                    applyZoomAndPan();
                }
            });
            document.getElementById('bookZoomOut').addEventListener('click', function() {
                if (zoomScale > MIN_ZOOM) {
                    zoomScale -= 0.15;
                    if (zoomScale <= 1.0) {
                        panX = 0;
                        panY = 0;
                    }
                    applyZoomAndPan();
                }
            });

            // Fullscreen toggle
            document.getElementById('bookFullscreen').addEventListener('click', function() {
                const viewer = document.querySelector('.book-viewer');
                if (!document.fullscreenElement) {
                    viewer.requestFullscreen().catch(err => console.log(err));
                    this.innerHTML = '<i class="far fa-compress"></i>';
                } else {
                    document.exitFullscreen();
                    this.innerHTML = '<i class="far fa-expand"></i>';
                }
            });

            document.addEventListener('fullscreenchange', function() {
                const btn = document.getElementById('bookFullscreen');
                if (!document.fullscreenElement) {
                    btn.innerHTML = '<i class="far fa-expand"></i>';
                }
            });

            // Sound toggle
            document.getElementById('bookSoundToggle').addEventListener('click', function() {
                soundEnabled = !soundEnabled;
                this.innerHTML = soundEnabled ?
                    '<i class="far fa-volume-up"></i>' :
                    '<i class="far fa-volume-mute"></i>';
                this.title = soundEnabled ? 'Mute Sound' : 'Unmute Sound';
            });

            // Keyboard navigation keys
            document.addEventListener('keydown', function(e) {
                const viewer = document.querySelector('.book-viewer-section');
                if (!viewer) return;
                const rect = viewer.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
                if (!isVisible && !document.fullscreenElement) return;

                if (e.key === 'ArrowRight' && pageFlip) pageFlip.flipNext();
                if (e.key === 'ArrowLeft' && pageFlip) pageFlip.flipPrev();
            });

            // Click-and-drag panning (grab scrolling) when zoomed in
            let isDragging = false;
            let startX, startY;

            function handleDragStart(e) {
                if (zoomScale <= 1.0) return;
                isDragging = true;
                bookContainer.style.cursor = 'grabbing';

                const pageX = e.pageX || (e.touches && e.touches[0].pageX);
                const pageY = e.pageY || (e.touches && e.touches[0].pageY);

                startX = pageX - panX;
                startY = pageY - panY;
            }

            function handleDragMove(e) {
                if (!isDragging) return;

                const pageX = e.pageX || (e.touches && e.touches[0].pageX);
                const pageY = e.pageY || (e.touches && e.touches[0].pageY);

                panX = pageX - startX;
                panY = pageY - startY;

                // Restrict panning coordinates to stay within bounds
                const maxPanX = Math.max(0, (bookSpread.offsetWidth * zoomScale - bookContainer.offsetWidth) / 2 + 100);
                const maxPanY = Math.max(0, (bookSpread.offsetHeight * zoomScale - bookContainer.offsetHeight) / 2 + 100);

                panX = Math.max(-maxPanX, Math.min(maxPanX, panX));
                panY = Math.max(-maxPanY, Math.min(maxPanY, panY));

                applyZoomAndPan();
                e.preventDefault();
            }

            function handleDragEnd() {
                if (!isDragging) return;
                isDragging = false;
                bookContainer.style.cursor = zoomScale > 1.0 ? 'grab' : 'default';
            }

            bookContainer.addEventListener('mousedown', handleDragStart);
            window.addEventListener('mousemove', handleDragMove);
            window.addEventListener('mouseup', handleDragEnd);

            bookContainer.addEventListener('touchstart', handleDragStart, {
                passive: false
            });
            window.addEventListener('touchmove', handleDragMove, {
                passive: false
            });
            window.addEventListener('touchend', handleDragEnd);

            // ==================== DYNAMIC PDF PARSER ====================
            // Extracts questions, options, sections, and correct answers from ANY exam PDF
            let parsedQuestions = null;
            let isParsing = false;

            function extractOptionText(block, num) {
                const startMarker = num + '.';
                const endMarker = (num + 1) + '.';
                let startIdx = block.indexOf(startMarker);
                if (startIdx === -1) return null;
                startIdx += startMarker.length;
                let endIdx = block.indexOf(endMarker, startIdx);
                if (endIdx === -1 || endIdx < startIdx) endIdx = block.length;
                return block.substring(startIdx, endIdx).replace(/[\r\n]+/g, ' ').replace(/\s+/g, ' ').trim();
            }

            function processQuestionOptions(q, optBlock) {
                const opt1 = extractOptionText(optBlock, 1);
                const opt2 = extractOptionText(optBlock, 2);
                const opt3 = extractOptionText(optBlock, 3);
                const opt4 = extractOptionText(optBlock, 4);
                if (opt1 && opt2 && opt3 && opt4) {
                    q.options = [opt1, opt2, opt3, opt4];
                } else {
                    q.options = ['Option A', 'Option B', 'Option C', 'Option D'];
                }

                let correct = 0;
                const correctMatch = optBlock.match(/Correct\s*Option\s*:\s*(\d+)/i) || optBlock.match(/Correct\s*Answer\s*:\s*(\d+)/i);
                const chosenMatch = optBlock.match(/Chosen\s*Option\s*:\s*(\d+)/i);

                if (correctMatch) {
                    correct = parseInt(correctMatch[1]) - 1;
                } else if (chosenMatch) {
                    correct = parseInt(chosenMatch[1]) - 1;
                } else {
                    // Check for checkmark characters
                    let foundTick = false;
                    const ticks = ['\u2714', '\u2713', '\u2705', '\u2611'];
                    for (let i = 0; i < q.options.length; i++) {
                        for (const t of ticks) {
                            if (q.options[i].includes(t)) {
                                correct = i;
                                foundTick = true;
                                break;
                            }
                        }
                        if (foundTick) break;
                    }
                    // Fallback: check QUESTION_BANK (loaded from the .js file) by sequential ID
                    if (!foundTick && typeof QUESTION_BANK !== 'undefined') {
                        const fb = QUESTION_BANK.find(qb => qb.id === q.id);
                        if (fb) correct = fb.correct;
                        else correct = (q.id % 4);
                    } else if (!foundTick) {
                        correct = (q.id % 4);
                    }
                }
                q.options = q.options.map(o => o.replace(/[\u2714\u2713\u2705\u2611]/g, '').trim());
                q.correct = correct;
                q.question = q.question.replace(/\s+/g, ' ').trim();
            }

            async function parsePDFQuestions(pdf) {
                // Extract full text from all pages
                let fullText = '';
                for (let p = 1; p <= pdf.numPages; p++) {
                    const page = await pdf.getPage(p);
                    const tc = await page.getTextContent();
                    fullText += tc.items.map(i => i.str).join(' ') + '\n';
                }

                const lines = fullText.split('\n');
                const questions = [];
                let currentSection = 'General Intelligence & Reasoning';
                let currentQ = null;
                let optAcc = '';
                let globalId = 1;

                for (let i = 0; i < lines.length; i++) {
                    const line = lines[i].trim();
                    if (!line) continue;

                    // Detect section headers
                    if (/Section\s*:/i.test(line)) {
                        const sn = line.replace(/Section\s*:\s*/i, '').trim();
                        if (/Intelligence|Reasoning|Part[\s-]*A/i.test(sn)) currentSection = 'General Intelligence & Reasoning';
                        else if (/Knowledge|Awareness|Part[\s-]*B/i.test(sn)) currentSection = 'General Knowledge & Awareness';
                        else if (/Math|Aptitude|Part[\s-]*C/i.test(sn)) currentSection = 'Elementary Mathematics';
                        else if (/English|Hindi|Part[\s-]*D/i.test(sn)) currentSection = /Hindi/i.test(sn) ? 'Hindi Language' : 'English Language';
                        continue;
                    }

                    // Detect question starts
                    const qMatch = line.match(/^Q\.\s*(\d+)/) || line.match(/SubQuestion\s*No\s*:\s*(\d+)/i);
                    if (qMatch && !/^Q\.\d+\s+Ans\s*$/i.test(line)) {
                        if (currentQ) {
                            processQuestionOptions(currentQ, optAcc);
                            questions.push(currentQ);
                        }
                        currentQ = {
                            id: globalId++,
                            section: currentSection,
                            question: line.replace(/^Q\.\s*\d+/, '').replace(/SubQuestion\s*No\s*:\s*\d+/i, '').trim(),
                            options: [],
                            correct: 0
                        };
                        optAcc = '';
                        continue;
                    }

                    // Handle lines where Q.X Ans are merged
                    if (/^Q\.\d+\s+Ans/i.test(line)) {
                        if (currentQ) {
                            processQuestionOptions(currentQ, optAcc);
                            questions.push(currentQ);
                        }
                        const idMatch = line.match(/^Q\.(\d+)/);
                        currentQ = {
                            id: globalId++,
                            section: currentSection,
                            question: line.replace(/^Q\.\s*\d+\s*Ans\s*/i, '').trim(),
                            options: [],
                            correct: 0
                        };
                        optAcc = '';
                        continue;
                    }

                    if (currentQ) {
                        if (/^Ans\b/i.test(line) || /^\s*1\.\s/.test(line) || optAcc.length > 0) {
                            optAcc += ' ' + line;
                        } else {
                            currentQ.question += ' ' + line;
                        }
                    }
                }
                if (currentQ) {
                    processQuestionOptions(currentQ, optAcc);
                    questions.push(currentQ);
                }

                // Filter out questions with empty question text AND no real options
                return questions.filter(q => q.question.length > 1 || q.options[0] !== 'Option A');
            }

            // ==================== TEST MODE LOGIC ====================
            const btnTestModeToggle = document.getElementById('bookTestModeToggle');
            const testWorkspace = document.getElementById('testWorkspace');
            const testResultsSection = document.getElementById('testResultsSection');
            const bookViewerWorkspace = document.querySelector('.book-viewer-workspace');
            const testQuestionsScroll = document.getElementById('testQuestionsScroll');
            const paletteGrid = document.getElementById('paletteGrid');
            const statAnswered = document.getElementById('statAnswered');
            const statNotAnswered = document.getElementById('statNotAnswered');
            const testTimerText = document.getElementById('testTimerText');
            const btnSubmitTest = document.getElementById('btnSubmitTest');

            let testActive = false;
            let testTimerInterval = null;
            const totalTestTime = 3600; // 1 hour for parsed questions
            let timeRemaining = totalTestTime;
            let timerRunning = false;
            const userAnswers = {};

            function formatTime(seconds) {
                const h = Math.floor(seconds / 3600);
                const m = Math.floor((seconds % 3600) / 60);
                const s = seconds % 60;
                return `${String(h).padStart(2,'0')}:${String(m).padStart(2,'0')}:${String(s).padStart(2,'0')}`;
            }

            function getActiveQuestions() {
                return parsedQuestions || (typeof QUESTION_BANK !== 'undefined' ? QUESTION_BANK : []);
            }

            // Build question cards
            function renderQuestions() {
                const QS = getActiveQuestions();
                testQuestionsScroll.innerHTML = '';
                let currentSection = '';
                const labels = ['A', 'B', 'C', 'D'];

                QS.forEach((q) => {
                    if (q.section !== currentSection) {
                        currentSection = q.section;
                        const sh = document.createElement('div');
                        sh.className = 'test-section-header';
                        sh.innerHTML = `<i class="far fa-bookmark"></i> ${currentSection}`;
                        testQuestionsScroll.appendChild(sh);
                    }

                    const card = document.createElement('div');
                    card.className = 'question-card';
                    card.id = `qcard-${q.id}`;

                    let optionsHTML = '';
                    q.options.forEach((opt, idx) => {
                        optionsHTML += `
                        <label class="option-label">
                            <input type="radio" name="q${q.id}" value="${idx}">
                            <span class="option-radio"></span>
                            <span class="option-text">${labels[idx]}. ${opt}</span>
                        </label>`;
                    });

                    card.innerHTML = `
                    <div class="question-number">Q.${q.id}</div>
                    <div class="question-text">${q.question.replace(/\n/g, '<br>')}</div>
                    <div class="options-grid">${optionsHTML}</div>`;
                    testQuestionsScroll.appendChild(card);
                });

                testQuestionsScroll.querySelectorAll('input[type="radio"]').forEach(radio => {
                    radio.addEventListener('change', function() {
                        const qid = this.name.replace('q', '');
                        userAnswers[qid] = parseInt(this.value);
                        updateStats();
                        const palBtn = document.getElementById(`pal-${qid}`);
                        if (palBtn) palBtn.classList.add('answered');
                    });
                });
            }

            function renderPalette() {
                const QS = getActiveQuestions();
                paletteGrid.innerHTML = '';
                QS.forEach(q => {
                    const btn = document.createElement('button');
                    btn.className = 'palette-btn';
                    btn.id = `pal-${q.id}`;
                    btn.textContent = q.id;
                    btn.addEventListener('click', () => {
                        const target = document.getElementById(`qcard-${q.id}`);
                        if (target) target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    });
                    paletteGrid.appendChild(btn);
                });
            }

            function updateStats() {
                const QS = getActiveQuestions();
                const answered = Object.keys(userAnswers).length;
                statAnswered.textContent = answered;
                statNotAnswered.textContent = QS.length - answered;
            }

            function startTimer() {
                if (timerRunning) return;
                timerRunning = true;
                testTimerInterval = setInterval(() => {
                    if (timeRemaining > 0) {
                        timeRemaining--;
                        testTimerText.textContent = formatTime(timeRemaining);
                    } else {
                        stopTimer();
                        submitTest();
                    }
                }, 1000);
            }

            function stopTimer() {
                timerRunning = false;
                clearInterval(testTimerInterval);
            }

            function submitTest() {
                stopTimer();
                const QS = getActiveQuestions();
                let correct = 0,
                    wrong = 0,
                    unattempted = 0;
                const marksPerQ = 2,
                    negativeMarks = 0.5;

                QS.forEach(q => {
                    if (userAnswers[q.id] !== undefined) {
                        userAnswers[q.id] === q.correct ? correct++ : wrong++;
                    } else {
                        unattempted++;
                    }
                });

                const totalScore = (correct * marksPerQ) - (wrong * negativeMarks);
                const accuracy = correct + wrong > 0 ? Math.round((correct / (correct + wrong)) * 100) : 0;
                const timeSpent = totalTestTime - timeRemaining;

                document.getElementById('resultScore').textContent = totalScore.toFixed(2);
                document.getElementById('resultCorrect').textContent = correct;
                document.getElementById('resultWrong').textContent = wrong;
                document.getElementById('resultUnattempted').textContent = unattempted;
                document.getElementById('resultAccuracy').textContent = accuracy + '%';
                document.getElementById('resultTime').textContent = formatTime(timeSpent);

                // Build review
                const reviewContainer = document.getElementById('resultsReview');
                reviewContainer.innerHTML = '';
                const labels = ['A', 'B', 'C', 'D'];
                let currentSection = '';

                QS.forEach(q => {
                    if (q.section !== currentSection) {
                        currentSection = q.section;
                        const header = document.createElement('div');
                        header.className = 'test-section-header';
                        header.innerHTML = `<i class="far fa-bookmark"></i> ${currentSection}`;
                        reviewContainer.appendChild(header);
                    }

                    const userAns = userAnswers[q.id];
                    let status = 'unattempted';
                    if (userAns !== undefined) status = userAns === q.correct ? 'correct' : 'wrong';

                    const card = document.createElement('div');
                    card.className = `question-card review-card review-${status}`;
                    let optionsHTML = '';
                    q.options.forEach((opt, idx) => {
                        let optClass = '',
                            icon = '';
                        if (idx === q.correct) {
                            optClass = 'correct-answer';
                            icon = '<i class="far fa-circle-check"></i> ';
                        }
                        if (userAns === idx && idx !== q.correct) {
                            optClass = 'wrong-answer';
                            icon = '<i class="far fa-circle-xmark"></i> ';
                        }
                        optionsHTML += `<div class="review-option ${optClass}">${icon}<span>${labels[idx]}. ${opt}</span></div>`;
                    });

                    let badge = '';
                    if (status === 'correct') badge = '<span class="badge-correct"><i class="far fa-check"></i> Correct</span>';
                    else if (status === 'wrong') badge = '<span class="badge-wrong"><i class="far fa-xmark"></i> Wrong</span>';
                    else badge = '<span class="badge-unattempted"><i class="far fa-minus"></i> Unattempted</span>';

                    card.innerHTML = `
                    <div class="question-number">Q.${q.id} ${badge}</div>
                    <div class="question-text">${q.question.replace(/\n/g, '<br>')}</div>
                    <div class="review-options-grid">${optionsHTML}</div>`;
                    reviewContainer.appendChild(card);
                });

                testWorkspace.style.display = 'none';
                testResultsSection.style.display = 'block';
            }

            // Toggle Test Mode
            btnTestModeToggle.addEventListener('click', function() {
                testActive ? exitTestMode() : enterTestMode();
            });

            async function enterTestMode() {
                testActive = true;
                for (const k in userAnswers) delete userAnswers[k];

                bookViewerWorkspace.style.display = 'none';
                testResultsSection.style.display = 'none';
                testWorkspace.style.display = 'block';

                btnTestModeToggle.classList.add('test-active');
                btnTestModeToggle.innerHTML = '<i class="far fa-circle-xmark"></i> Exit Test';

                // Show scanning loader while parsing PDF
                if (!parsedQuestions && pdfDoc) {
                    testQuestionsScroll.innerHTML = `
                    <div class="test-scanning-overlay">
                        <i class="far fa-magnifying-glass"></i>
                        <p>Scanning PDF for questions & answers...</p>
                    </div>`;
                    paletteGrid.innerHTML = '';
                    try {
                        parsedQuestions = await parsePDFQuestions(pdfDoc);
                        console.log(`PDF Scanner: Extracted ${parsedQuestions.length} questions.`);
                    } catch (err) {
                        console.error('PDF parsing failed, falling back to QUESTION_BANK', err);
                        parsedQuestions = null;
                    }
                }

                const QS = getActiveQuestions();
                // Set timer based on question count (1 min per question, max 2 hours)
                const calcTime = Math.min(QS.length * 60, 7200);
                timeRemaining = calcTime > 0 ? calcTime : totalTestTime;
                testTimerText.textContent = formatTime(timeRemaining);

                // Update the header meta info
                const totalQ = QS.length;
                const totalMarks = totalQ * 2;
                testWorkspace.querySelector('.test-meta').innerHTML = `
                <span><i class="far fa-list-ol"></i> ${totalQ} Questions</span>
                <span><i class="far fa-star"></i> ${totalMarks} Marks</span>
                <span><i class="far fa-circle-minus"></i> −0.50 Negative</span>`;

                statNotAnswered.textContent = totalQ;
                statAnswered.textContent = '0';

                renderQuestions();
                renderPalette();
                updateStats();
                startTimer();
            }

            function exitTestMode() {
                testActive = false;
                stopTimer();
                for (const k in userAnswers) delete userAnswers[k];

                testWorkspace.style.display = 'none';
                testResultsSection.style.display = 'none';
                bookViewerWorkspace.style.display = 'flex';

                btnTestModeToggle.classList.remove('test-active');
                btnTestModeToggle.innerHTML = '<i class="far fa-file-signature"></i> Test Mode';
                setTimeout(() => window.dispatchEvent(new Event('resize')), 100);
            }

            btnSubmitTest.addEventListener('click', function() {
                if (confirm('Are you sure you want to submit the test?')) submitTest();
            });

            document.getElementById('btnRetakeTest').addEventListener('click', function() {
                testResultsSection.style.display = 'none';
                parsedQuestions = null; // Re-parse on retake for freshness
                enterTestMode();
            });

            document.getElementById('btnExitTest').addEventListener('click', function() {
                testResultsSection.style.display = 'none';
                exitTestMode();
            });
        })();
    </script>