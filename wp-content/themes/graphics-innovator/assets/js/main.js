/**
 * Graphics Innovator — Master JS v1.1.0
 * Pure Vanilla JS — No dependencies
 */

document.addEventListener('DOMContentLoaded', () => {

    // ─────────────────────────────────────────────
    // 1. STICKY HEADER & ACTIVE NAV LINK
    // ─────────────────────────────────────────────
    const header   = document.querySelector('.gi-header');
    const sections = document.querySelectorAll('section[id]');

    if (header) {
        const onScroll = () => {
            if (window.scrollY > 50) {
                header.classList.add('gi-sticky');
            } else {
                header.classList.remove('gi-sticky');
            }

            // Active Nav Link
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.gi-menu-link').forEach(link => {
                link.parentElement.classList.remove('gi-menu-item--active');
                const href = link.getAttribute('href');
                if (href && current && href.includes(current)) {
                    link.parentElement.classList.add('gi-menu-item--active');
                }
            });
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll(); // Run once on load to set initial state
    }

    // ─────────────────────────────────────────────
    // 2. MOBILE MENU DRAWER & ACCORDION (SSP-ELITE)
    // ─────────────────────────────────────────────
    const mobileToggle = document.querySelector('.gi-mobile-toggle');
    const nav          = document.querySelector('.gi-nav');
    const navBackdrop  = document.getElementById('gi-nav-backdrop');

    if (mobileToggle && nav) {
        const openMenu = () => {
            nav.classList.add('gi-open');
            mobileToggle.classList.add('gi-is-active');
            mobileToggle.setAttribute('aria-expanded', 'true');
            if (navBackdrop) navBackdrop.classList.add('gi-open');
            document.body.classList.add('gi-menu-locked');
        };

        const closeMenu = () => {
            nav.classList.remove('gi-open');
            mobileToggle.classList.remove('gi-is-active');
            mobileToggle.setAttribute('aria-expanded', 'false');
            if (navBackdrop) navBackdrop.classList.remove('gi-open');
            document.body.classList.remove('gi-menu-locked');
        };

        const toggleMenu = () => {
            if (nav.classList.contains('gi-open')) {
                closeMenu();
            } else {
                openMenu();
            }
        };

        mobileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Close when clicking the glass backdrop
        if (navBackdrop) {
            navBackdrop.addEventListener('click', closeMenu);
        }

        // Close on ESC key press
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && nav.classList.contains('gi-open')) {
                closeMenu();
            }
        });

        // Close when clicking outside of nav drawer and toggle
        document.addEventListener('click', (e) => {
            if (nav.classList.contains('gi-open')) {
                if (!nav.contains(e.target) && !mobileToggle.contains(e.target)) {
                    closeMenu();
                }
            }
        });

        // Auto-close drawer on leaf menu link clicks
        nav.querySelectorAll('.gi-menu-link').forEach(link => {
            link.addEventListener('click', (e) => {
                const parentItem = link.closest('.gi-menu-item');
                const isParentWithSubmenu = parentItem && parentItem.classList.contains('gi-has-submenu');
                const href = link.getAttribute('href');

                // If on mobile and clicking a parent item whose href is empty or "#", toggle the accordion
                if (window.innerWidth < 992 && isParentWithSubmenu && (!href || href === '#' || href === 'javascript:void(0)')) {
                    e.preventDefault();
                    const isOpen = parentItem.classList.toggle('gi-open');
                    const toggleBtn = parentItem.querySelector('.gi-submenu-toggle');
                    if (toggleBtn) toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                    return;
                }

                // If navigating to an actual link or anchor, close the mobile drawer
                if (href && href !== '#' && href !== 'javascript:void(0)') {
                    closeMenu();
                }
            });
        });

        // Dedicated Mobile Submenu Accordion Toggle Button
        nav.querySelectorAll('.gi-submenu-toggle').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const parentItem = btn.closest('.gi-menu-item');
                if (parentItem) {
                    const isOpen = parentItem.classList.toggle('gi-open');
                    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                }
            });
        });
    }

    // ─────────────────────────────────────────────
    // 3. SCROLL ANIMATIONS (Intersection Observer)
    // ─────────────────────────────────────────────
    const animatedElements = document.querySelectorAll('[data-gi-animate]');

    if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = entry.target.getAttribute('data-gi-delay');
                    if (delay) {
                        setTimeout(() => {
                            entry.target.classList.add('gi-animated');
                        }, parseInt(delay, 10));
                    } else {
                        entry.target.classList.add('gi-animated');
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        animatedElements.forEach(el => observer.observe(el));
    } else {
        // Fallback for browsers without IntersectionObserver
        animatedElements.forEach(el => el.classList.add('gi-animated'));
    }

    // ─────────────────────────────────────────────
    // 4. ANIMATED COUNTERS
    // ─────────────────────────────────────────────
    const counters = document.querySelectorAll('.gi-counter[data-target]');

    if (counters.length > 0 && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el     = entry.target;
                    const target = parseInt(el.getAttribute('data-target'), 10);
                    if (isNaN(target)) return;

                    el.textContent = '0';
                    const duration = 1600;
                    const startTime = performance.now();

                    const updateCounter = (now) => {
                        const elapsed  = now - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        // Ease-out cubic
                        const eased = 1 - Math.pow(1 - progress, 3);
                        el.textContent = Math.round(eased * target);
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            el.textContent = target;
                        }
                    };

                    requestAnimationFrame(updateCounter);
                    counterObserver.unobserve(el);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));
    }

    // ─────────────────────────────────────────────
    // 5. BEFORE/AFTER SLIDER (SSP-ELITE KINETIC PHYSICS ENGINE)
    // ─────────────────────────────────────────────
    const sliders = document.querySelectorAll('[data-gi-ba]');

    sliders.forEach(slider => {
        const container = slider.querySelector('.gi-ba-container');
        const beforeImg = slider.querySelector('.gi-ba-before');
        const handle    = slider.querySelector('.gi-ba-handle');
        const labelB    = slider.querySelector('.gi-ba-label--before');
        const labelA    = slider.querySelector('.gi-ba-label--after');
        if (!container || !beforeImg || !handle) return;

        let currentPos = 50; // in percent
        let targetPos  = 50; // in percent
        let isHovering = false;
        let isDragging = false;
        let rafId      = null;

        const syncImgDimensions = () => {
            const bImg = beforeImg.querySelector('img');
            const aImg = container.querySelector('.gi-ba-after img');
            if (bImg && container.offsetWidth > 0) {
                const w = container.offsetWidth;
                bImg.style.width = `${w}px`;
                bImg.style.maxWidth = 'none';

                const h = (aImg && aImg.offsetHeight > 0) ? aImg.offsetHeight : container.offsetHeight;
                if (h > 0) {
                    bImg.style.height = `${h}px`;
                    bImg.style.maxHeight = 'none';
                }
            }
        };

        const applyPosition = (pos) => {
            pos = Math.max(0, Math.min(100, pos));
            beforeImg.style.width = `${pos}%`;
            handle.style.left     = `calc(${pos}% - 22px)`;

            // Intelligent dynamic fading for pill labels so handle never collides
            if (labelB) {
                if (pos < 20) {
                    labelB.style.opacity = Math.max(0, (pos - 6) / 14);
                    labelB.style.transform = `scale(${Math.max(0.85, pos / 20)})`;
                } else {
                    labelB.style.opacity = '1';
                    labelB.style.transform = 'scale(1)';
                }
            }
            if (labelA) {
                if (pos > 80) {
                    labelA.style.opacity = Math.max(0, (94 - pos) / 14);
                    labelA.style.transform = `scale(${Math.max(0.85, (100 - pos) / 20)})`;
                } else {
                    labelA.style.opacity = '1';
                    labelA.style.transform = 'scale(1)';
                }
            }
        };

        const updatePhysics = () => {
            // When dragging: tight responsive factor (0.45)
            // When hovering: buttery fluid momentum (0.22)
            // When settling back to 50%: calm luxury deceleration (0.12)
            const easeFactor = isDragging ? 0.45 : (isHovering ? 0.22 : 0.12);
            const delta = targetPos - currentPos;

            if (Math.abs(delta) > 0.04) {
                currentPos += delta * easeFactor;
                applyPosition(currentPos);
                rafId = requestAnimationFrame(updatePhysics);
            } else {
                currentPos = targetPos;
                applyPosition(currentPos);
                rafId = null;
            }
        };

        const requestUpdate = () => {
            if (!rafId) {
                rafId = requestAnimationFrame(updatePhysics);
            }
        };

        const setTargetFromClientX = (clientX) => {
            const rect = container.getBoundingClientRect();
            if (rect.width <= 0) return;
            let pct = ((clientX - rect.left) / rect.width) * 100;
            pct = Math.max(0, Math.min(100, pct));
            targetPos = pct;
            requestUpdate();
        };

        syncImgDimensions();

        const aImg = container.querySelector('.gi-ba-after img');
        const bImg = beforeImg.querySelector('img');
        if (aImg) {
            if (aImg.complete) {
                syncImgDimensions();
            } else {
                aImg.addEventListener('load', syncImgDimensions, { once: true });
            }
        }
        if (bImg && !bImg.complete) {
            bImg.addEventListener('load', syncImgDimensions, { once: true });
        }

        window.addEventListener('resize', () => {
            syncImgDimensions();
            applyPosition(currentPos);
        }, { passive: true });

        window.addEventListener('orientationchange', () => {
            setTimeout(() => {
                syncImgDimensions();
                applyPosition(currentPos);
            }, 120);
        }, { passive: true });

        // Smooth Mouse Tracking on Hover
        container.addEventListener('mouseenter', (e) => {
            isHovering = true;
            syncImgDimensions();
            if (e && typeof e.clientX === 'number') {
                setTargetFromClientX(e.clientX);
            }
        });

        container.addEventListener('mousemove', (e) => {
            if (isDragging) return;
            setTargetFromClientX(e.clientX);
        });

        container.addEventListener('mouseleave', () => {
            if (isDragging) return;
            isHovering = false;
            // Smoothly glide back to center 50%
            targetPos = 50;
            requestUpdate();
        });

        // Touch & Drag Support
        const startDrag = (clientX) => {
            isDragging = true;
            handle.classList.add('gi-dragging');
            syncImgDimensions();
            setTargetFromClientX(clientX);
        };

        const moveDrag = (clientX) => {
            if (!isDragging) return;
            setTargetFromClientX(clientX);
        };

        const endDrag = () => {
            if (!isDragging) return;
            isDragging = false;
            handle.classList.remove('gi-dragging');
            if (!isHovering) {
                targetPos = 50;
                requestUpdate();
            }
        };

        handle.addEventListener('mousedown', (e) => {
            e.preventDefault();
            startDrag(e.clientX);
        });

        container.addEventListener('mousedown', (e) => {
            startDrag(e.clientX);
        });

        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            moveDrag(e.clientX);
        });

        window.addEventListener('mouseup', endDrag);

        // Touch Events
        handle.addEventListener('touchstart', (e) => {
            if (e.touches.length > 0) startDrag(e.touches[0].clientX);
        }, { passive: true });

        container.addEventListener('touchstart', (e) => {
            if (e.touches.length > 0) startDrag(e.touches[0].clientX);
        }, { passive: true });

        window.addEventListener('touchmove', (e) => {
            if (isDragging && e.touches.length > 0) {
                moveDrag(e.touches[0].clientX);
            }
        }, { passive: true });

        window.addEventListener('touchend', endDrag);
        window.addEventListener('touchcancel', endDrag);
    });

    // ─────────────────────────────────────────────
    // 6. FAQ ACCORDION
    // ─────────────────────────────────────────────
    const faqItems = document.querySelectorAll('.gi-faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.gi-faq-question');
        if (!question) return;

        question.addEventListener('click', () => {
            const isOpen = item.classList.contains('gi-open');

            // Close all others
            faqItems.forEach(faq => faq.classList.remove('gi-open'));

            // Toggle current
            if (!isOpen) {
                item.classList.add('gi-open');
            }
        });
    });

    // ─────────────────────────────────────────────
    // 7. HERO SCROLL BUTTON
    // FIX: added null check so it doesn't throw on inner pages
    // ─────────────────────────────────────────────
    const heroScroll = document.querySelector('.gi-hero-scroll');
    if (heroScroll) {
        heroScroll.addEventListener('click', () => {
            const target = document.getElementById('services');
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // ─────────────────────────────────────────────
    // 8. SMOOTH ANCHOR LINKS (for all #hash links)
    // ─────────────────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href').slice(1);
            if (!targetId) return;
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
                e.preventDefault();
                const headerHeight = parseInt(getComputedStyle(document.documentElement)
                    .getPropertyValue('--gi-header-height'), 10) || 80;
                const targetTop = targetEl.getBoundingClientRect().top + window.scrollY - headerHeight;
                window.scrollTo({ top: targetTop, behavior: 'smooth' });
            }
        });
    });

    // ─────────────────────────────────────────────
    // 9. PORTFOLIO FILTER (if present on page)
    // ─────────────────────────────────────────────
    const filterBtns  = document.querySelectorAll('.gi-filter-btn');
    const portfolioItems = document.querySelectorAll('.gi-portfolio-item[data-category]');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('gi-active'));
                btn.classList.add('gi-active');

                const filter = btn.getAttribute('data-filter');
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // ─────────────────────────────────────────────
    // 8. GLOBAL CLICK-TO-COPY CHIPS
    // ─────────────────────────────────────────────
    const copyChips = document.querySelectorAll('.gi-chip-copy');
    copyChips.forEach(chip => {
        chip.addEventListener('click', function(e) {
            e.preventDefault();
            const textToCopy = this.getAttribute('data-copy');
            if (!textToCopy) return;

            const tooltip = this.querySelector('.gi-chip-tooltip');
            const defaultTooltip = 'Click to copy';

            let copyPromise;
            if (navigator.clipboard && window.isSecureContext) {
                copyPromise = navigator.clipboard.writeText(textToCopy);
            } else {
                const ta = document.createElement('textarea');
                ta.value = textToCopy;
                ta.setAttribute('readonly', '');
                ta.style.position = 'fixed';
                ta.style.top = '-9999px';
                ta.style.left = '-9999px';
                document.body.appendChild(ta);
                ta.select();
                try {
                    document.execCommand('copy');
                } catch (err) {
                    console.error('Copy fallback error', err);
                }
                document.body.removeChild(ta);
                copyPromise = Promise.resolve();
            }

            copyPromise.then(() => {
                this.classList.add('gi-copied');
                if (tooltip) tooltip.textContent = 'Copied! ✓';
                if (this._copyTimer) clearTimeout(this._copyTimer);
                this._copyTimer = setTimeout(() => {
                    this.classList.remove('gi-copied');
                    if (tooltip) tooltip.textContent = defaultTooltip;
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy', err);
            });
        });
    });

});
