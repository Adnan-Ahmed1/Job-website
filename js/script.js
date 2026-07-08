
document.addEventListener('DOMContentLoaded', function () {
    console.log("MySarkari Naukri loaded successfully!");
});



// ==================== TRENDING DISINTEGRATION ANIMATION ==================== //
(function initTrendingDisintegration() {
    const wrap = document.querySelector('.trending-wrap');
    if (!wrap) return;
    const content = wrap.querySelector('.trending-content');
    if (!content) return;
    const items = Array.from(content.querySelectorAll('.trending-item'));
    if (items.length === 0) return;

    const LAYER_COUNT = 10;
    const FADE_ZONE = 90;           // px from left edge where disintegration begins
    const ANIM_DURATION = 600;      // ms for each dust layer animation
    let isPaused = false;
    let activeSnaps = new Set();    // track items currently disintegrating

    // Pre-capture each item using the same captureElementHidden from the Thanos engine
    const itemCanvasMap = new Map();
    async function preCaptureItems() {
        for (const item of items) {
            try {
                const cap = await captureElementHidden(item);
                itemCanvasMap.set(item, cap);
            } catch (e) { console.warn('Trending capture fail:', e); }
        }
    }
    setTimeout(preCaptureItems, 1500);

    function triggerItemDisintegration(item) {
        if (activeSnaps.has(item)) return;
        const captured = itemCanvasMap.get(item);
        if (!captured) return;

        activeSnaps.add(item);

        // Split captured canvas into dust layers (reuse the global function)
        const dustLayers = splitIntoDustLayers(captured, LAYER_COUNT);
        const rect = item.getBoundingClientRect();

        // Place each dust layer canvas exactly over the item
        dustLayers.forEach(canvas => {
            canvas.className = 'thanos-dust-layer trending-dust';
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

        // Animate each layer drifting away with stagger
        dustLayers.forEach((canvas, i) => {
            const delay = i * 25 + Math.random() * 30;
            const duration = ANIM_DURATION + Math.random() * 200;
            const xDrift = -(30 + Math.random() * 60);
            const yDrift = -15 + Math.random() * 30;
            const rotate = -15 + Math.random() * 30;
            const scale = 0.5 + Math.random() * 0.4;

            setTimeout(() => {
                canvas.style.transition = `
                    transform ${duration}ms cubic-bezier(0.22, 0.61, 0.36, 1),
                    opacity ${duration}ms ease-out
                `;
                canvas.style.transform = `translate(${xDrift}px, ${yDrift}px) rotate(${rotate}deg) scale(${scale})`;
                canvas.style.opacity = '0';

                setTimeout(() => canvas.remove(), duration + 50);
            }, delay);
        });

        // Clean up after animation finishes
        const totalTime = LAYER_COUNT * 25 + 30 + ANIM_DURATION + 200 + 100;
        setTimeout(() => {
            activeSnaps.delete(item);
        }, totalTime);
    }

    function tick() {
        if (!isPaused) {
            const wr = wrap.getBoundingClientRect();

            items.forEach(item => {
                const ir = item.getBoundingClientRect();
                const itemRight = ir.right - wr.left;
                const itemLeft = ir.left - wr.left;

                // When item enters the fade zone on the left
                if (itemRight > 0 && itemLeft < FADE_ZONE && itemRight < FADE_ZONE + ir.width * 0.5) {
                    triggerItemDisintegration(item);
                }
            });
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
document.addEventListener('input', function (e) {
    if (e.target && e.target.classList.contains('mega-search-input')) {
        const input = e.target;
        const query = input.value.toLowerCase().trim();
        const column = input.closest('.mega-menu-col');
        if (!column) return;

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
    }
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
            'yojana': { title: 'Government Schemes & Yojana in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>76</strong> Schemes' },
            'document': { title: 'Government Documents in Maharashtra', text: 'Showing <strong>1–4</strong> of <strong>76</strong> Documents' }
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



// ==================== SCROLL TO SECTION & STICKY NAV & SCROLLSPY ==================== //
const navLinks = document.querySelectorAll(".tab-nav li a");
const tabNav = document.querySelector(".details-tabs .tab-nav");
const detailsTabs = document.querySelector(".details-tabs");

// Dynamically gather target sections from navigation links to support any container tag type (div, section, etc.)
const tabSections = [];
navLinks.forEach(link => {
    const target = document.querySelector(link.getAttribute("href"));
    if (target) {
        tabSections.push(target);
    }
});

if (navLinks.length && tabNav) {
    navLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute("href"));
            if (!target) return;

            // Offset when sticky is active (~52px tall + 20px top spacing = 72px + breathing room)
            const offset = 80;
            const bodyRect = document.body.getBoundingClientRect().top;
            const targetRect = target.getBoundingClientRect().top;
            const targetPosition = targetRect - bodyRect;
            const scrollPosition = targetPosition - offset;

            window.scrollTo({
                top: scrollPosition,
                behavior: "smooth"
            });

            // Set active class immediately
            navLinks.forEach(l => l.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // Detect sticky state and update Scrollspy on scroll
    window.addEventListener("scroll", () => {
        if (!detailsTabs) return;

        // 1. Detect if tab-nav is stuck (top: 20px is when it sticks)
        const rect = detailsTabs.getBoundingClientRect();
        if (rect.top <= 20) {
            tabNav.classList.add("is-sticky");
        } else {
            tabNav.classList.remove("is-sticky");
        }

        // 2. Scrollspy detection
        if (!tabSections.length) return;
        let current = "";
        const scrollPosition = window.scrollY + 100; // Detector threshold line

        tabSections.forEach(section => {
            const bodyRect = document.body.getBoundingClientRect().top;
            const sectionRect = section.getBoundingClientRect().top;
            const sectionTop = sectionRect - bodyRect;
            if (scrollPosition >= sectionTop) {
                current = section.getAttribute("id");
            }
        });

        if (current) {
            navLinks.forEach(a => {
                if (a.getAttribute("href") === `#${current}`) {
                    if (!a.classList.contains("active")) {
                        navLinks.forEach(l => l.classList.remove("active"));
                        a.classList.add("active");

                        // Auto-scroll the tab bar horizontally if in sticky state and overflows
                        if (tabNav.classList.contains("is-sticky")) {
                            const activeLi = a.parentElement;
                            const navLeft = tabNav.scrollLeft;
                            const navRight = navLeft + tabNav.clientWidth;
                            const liLeft = activeLi.offsetLeft;
                            const liRight = liLeft + activeLi.clientWidth;

                            if (liLeft < navLeft) {
                                tabNav.scrollTo({ left: liLeft - 10, behavior: 'smooth' });
                            } else if (liRight > navRight) {
                                tabNav.scrollTo({ left: liRight - tabNav.clientWidth + 10, behavior: 'smooth' });
                            }
                        }
                    }
                }
            });
        }
    });
}



// ==================== MOBILE DRAWER TOGGLE ==================== //
(function initMobileDrawer() {
    // Drawer elements
    const toggleBtn = document.getElementById('mobileMenuToggle');
    const closeBtn = document.getElementById('drawerCloseBtn');
    const overlay = document.getElementById('mobileDrawerOverlay');
    const drawer = document.getElementById('mobileDrawer');

    // Generate mobile menu dynamically from desktop navbar
    function generateMobileMenu() { 
        const desktopMenu = document.querySelector('#mainNavbar .navbar-nav');
        const mobileMenuContainer = document.querySelector('#mobileDrawer .drawer-menu');
        if (!desktopMenu || !mobileMenuContainer) return;

        // Clear existing mobile menu items
        mobileMenuContainer.innerHTML = '';

        // Icon mapping based on lowercase link text
        const iconMap = {
            'home': { icon: 'far fa-home', class: 'icon-home' },
            'jobs': { icon: 'far fa-briefcase', class: 'icon-jobs' },
            'results': { icon: 'far fa-trophy', class: 'icon-results' },
            'admit card': { icon: 'far fa-id-card', class: 'icon-admit' },
            'answer key': { icon: 'far fa-key', class: 'icon-key' },
            'syllabus': { icon: 'far fa-book', class: 'icon-syllabus' },
            'admission': { icon: 'far fa-graduation-cap', class: 'icon-admission' },
            'scholarship': { icon: 'far fa-medal', class: 'icon-scholarship' },
            'question paper': { icon: 'far fa-file-lines', class: 'icon-question' },
            'yojana': { icon: 'far fa-hands-holding-heart', class: 'icon-yojana' },
            'document': { icon: 'far fa-file', class: 'icon-document' }
        };

        const items = desktopMenu.querySelectorAll(':scope > li.nav-item');
        items.forEach(item => {
            const link = item.querySelector('.nav-link');
            if (!link) return;

            // Extract only text node content (ignore chevron icon or other nested tags)
            let text = '';
            link.childNodes.forEach(node => {
                if (node.nodeType === Node.TEXT_NODE) {
                    text += node.textContent;
                }
            });
            text = text.trim();

            const href = link.getAttribute('href') || '#';
            const isActive = link.classList.contains('active');
            const hasSubmenu = item.classList.contains('has-mega-menu') || item.classList.contains('dropdown');

            const li = document.createElement('li');
            li.className = 'drawer-item' + (isActive ? ' active' : '') + (hasSubmenu ? ' has-submenu' : '');

            const key = text.toLowerCase();
            const iconInfo = iconMap[key] || { icon: 'fas fa-link', class: 'icon-default' };

            const a = document.createElement('a');
            a.className = 'drawer-link' + (hasSubmenu ? ' toggle-submenu' : '');
            a.href = hasSubmenu ? 'javascript:void(0);' : href;

            const iconSpan = document.createElement('span');
            iconSpan.className = `drawer-icon ${iconInfo.class}`;
            const iconI = document.createElement('i');
            iconI.className = iconInfo.icon;
            iconSpan.appendChild(iconI);

            const textSpan = document.createElement('span');
            textSpan.className = 'drawer-text';
            textSpan.textContent = text;

            a.appendChild(iconSpan);
            a.appendChild(textSpan);

            if (hasSubmenu) {
                const arrowSpan = document.createElement('span');
                arrowSpan.className = 'drawer-arrow';
                const arrowI = document.createElement('i');
                arrowI.className = 'fas fa-chevron-right';
                arrowSpan.appendChild(arrowI);
                a.appendChild(arrowSpan);
            }

            li.appendChild(a);

            // Submenu specific content
            if (hasSubmenu) {
                const submenuUl = document.createElement('div');
                submenuUl.className = 'drawer-submenu';

                const megaMenu = item.querySelector('.mega-menu');
                if (megaMenu) {
                    const cols = megaMenu.querySelectorAll('.mega-menu-col');
                    if (cols.length > 0) {
                        cols.forEach(col => {
                            // Deeply clone the column element
                            const colClone = col.cloneNode(true);
                            
                            // Remove unique ID attributes to prevent duplicate DOM IDs
                            colClone.querySelectorAll('[id]').forEach(el => el.removeAttribute('id'));
                            
                            // Make column header clickable to toggle content
                            const colHeader = colClone.querySelector('.mega-col-header h3');
                            if (colHeader) {
                                const chevron = document.createElement('i');
                                chevron.className = 'fas fa-chevron-right mega-col-toggle-icon';
                                colHeader.appendChild(chevron);
                                
                                colHeader.addEventListener('click', function () {
                                    // Accordion: close other columns in same submenu
                                    const siblingCols = submenuUl.querySelectorAll('.mega-menu-col.col-open');
                                    siblingCols.forEach(sib => {
                                        if (sib !== colClone) sib.classList.remove('col-open');
                                    });
                                    colClone.classList.toggle('col-open');
                                });
                            }
                            
                            submenuUl.appendChild(colClone);
                        });
                    }
                }
                
                li.appendChild(submenuUl);
            }

            mobileMenuContainer.appendChild(li);
        });
    }

    // Set active link class based on current URL path
    function setActiveNavLink() {
        let currentPage = window.location.pathname.split("/").pop();
        if (!currentPage || currentPage === 'index.php') {
            currentPage = 'index.php';
        }
        
        const navLinks = document.querySelectorAll('#mainNavbar .nav-link');
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href) {
                const linkPage = href.split('/').pop();
                if (linkPage === currentPage) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            }
        });
    }

    // Initialize the mobile menu dynamically before binding events
    setActiveNavLink();
    generateMobileMenu();

    // Toggle drawer state
    function openDrawer() {
        if (drawer && overlay) {
            drawer.classList.add('active');
            overlay.classList.add('active');
            document.body.classList.add('body-no-scroll');
        }
    }

    function closeDrawer() {
        if (drawer && overlay) {
            drawer.classList.remove('active');
            overlay.classList.remove('active');
            document.body.classList.remove('body-no-scroll');
        }
    }

    if (toggleBtn) toggleBtn.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (overlay) overlay.addEventListener('click', closeDrawer);

    // Close on ESC key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('active')) {
            closeDrawer();
        }
    });

    // Swipe-to-close gesture (swipe left to close)
    if (drawer) {
        let touchStartX = 0;
        let touchCurrentX = 0;
        let isSwiping = false;

        drawer.addEventListener('touchstart', function (e) {
            touchStartX = e.touches[0].clientX;
            touchCurrentX = touchStartX; // Reset so a tap (no move) produces diff=0
            isSwiping = true;
        }, { passive: true });

        drawer.addEventListener('touchmove', function (e) {
            if (!isSwiping) return;
            touchCurrentX = e.touches[0].clientX;
            const diff = touchStartX - touchCurrentX;
            // Only track leftward swipes
            if (diff > 0) {
                const translateX = Math.min(diff, drawer.offsetWidth);
                drawer.style.transition = 'none';
                drawer.style.transform = `translateX(-${translateX}px)`;
            }
        }, { passive: true });

        drawer.addEventListener('touchend', function () {
            if (!isSwiping) return;
            isSwiping = false;
            const diff = touchStartX - touchCurrentX;
            drawer.style.transition = '';
            // If swiped more than 30% of drawer width, close it
            if (diff > drawer.offsetWidth * 0.3) {
                closeDrawer();
            } else {
                // Snap back
                drawer.style.transform = '';
            }
        }, { passive: true });
    }

    // Submenu Toggle within drawer
    if (drawer) {
        const submenus = drawer.querySelectorAll('.drawer-item.has-submenu');
        submenus.forEach(item => {
            const toggleLink = item.querySelector('.drawer-link');
            const submenuUl = item.querySelector('.drawer-submenu');
            if (toggleLink && submenuUl) {
                toggleLink.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const isOpen = item.classList.contains('open');
                    
                    // Close other submenus first (accordion behavior)
                    submenus.forEach(other => {
                        if (other !== item) {
                            other.classList.remove('open');
                            // Also collapse inner mega-menu columns
                            const otherUl = other.querySelector('.drawer-submenu');
                            if (otherUl) {
                                otherUl.querySelectorAll('.mega-menu-col.col-open').forEach(col => col.classList.remove('col-open'));
                            }
                        }
                    });
                    
                    if (isOpen) {
                        item.classList.remove('open');
                        // Collapse inner mega-menu columns when closing
                        submenuUl.querySelectorAll('.mega-menu-col.col-open').forEach(col => col.classList.remove('col-open'));
                    } else {
                        item.classList.add('open');
                    }
                });
            }
        });
    }
})();



// ==================== DARK MODE SYSTEM ==================== //
function setTheme(theme) {
    if (theme === 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
    } else {
        document.documentElement.removeAttribute('data-theme');
    }

    localStorage.setItem('theme', theme);
    updateThemeIcons(theme);
}

function getCurrentTheme() {
    return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
}

function toggleTheme() {
    const newTheme = getCurrentTheme() === 'dark' ? 'light' : 'dark';
    setTheme(newTheme);
}

function updateThemeIcons(theme) {
    document.querySelectorAll('.header-mode-btn i').forEach(icon => {
        icon.classList.toggle('fa-moon', theme === 'light');
        icon.classList.toggle('fa-sun', theme === 'dark');
    });
}

function loadTheme() {
    // Theme is already applied by the script in <head>.
    // Here we only sync the icon.
    updateThemeIcons(getCurrentTheme());
}

document.addEventListener('DOMContentLoaded', () => {

    loadTheme();

    document.querySelectorAll('.header-mode-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            toggleTheme();
        });
    });

});