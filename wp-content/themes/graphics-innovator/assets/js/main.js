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
    // 2. MOBILE MENU TOGGLE
    // ─────────────────────────────────────────────
    const mobileToggle = document.querySelector('.gi-mobile-toggle');
    const nav          = document.querySelector('.gi-nav');

    if (mobileToggle && nav) {
        mobileToggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('gi-open');
            mobileToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            mobileToggle.innerHTML = isOpen
                ? '<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>'
                : '<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>';
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!header || (!header.contains(e.target) && nav.classList.contains('gi-open'))) {
                nav.classList.remove('gi-open');
                mobileToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Mobile submenu toggle
        document.querySelectorAll('.gi-menu-item.gi-has-submenu > .gi-menu-link').forEach(link => {
            link.addEventListener('click', (e) => {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    link.parentElement.classList.toggle('gi-open');
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

                    const duration = 2000;
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
    // 5. BEFORE/AFTER SLIDER
    // FIX: was using pageX (offset by scroll position) — changed to clientX
    // ─────────────────────────────────────────────
    const sliders = document.querySelectorAll('[data-gi-ba]');

    sliders.forEach(slider => {
        const container = slider.querySelector('.gi-ba-container');
        const beforeImg = slider.querySelector('.gi-ba-before');
        const handle    = slider.querySelector('.gi-ba-handle');
        if (!container || !beforeImg || !handle) return;

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

        const slide = (clientX) => {
            const rect = container.getBoundingClientRect();
            if (rect.width <= 0) return;
            let position = ((clientX - rect.left) / rect.width) * 100;
            position = Math.max(0, Math.min(100, position));  // Clamp 0–100

            beforeImg.style.width = `${position}%`;
            handle.style.left     = `calc(${position}% - 2px)`;
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

        window.addEventListener('resize', syncImgDimensions, { passive: true });

        // Hover tracking: Moving cursor over the image smoothly reveals Before & After without needing click & drag
        let isHovering = false;

        container.addEventListener('mouseenter', (e) => {
            isHovering = true;
            syncImgDimensions();
            beforeImg.style.transition = 'none';
            handle.style.transition = 'none';
            if (e && typeof e.clientX === 'number') {
                slide(e.clientX);
            }
        });

        container.addEventListener('mousemove', (e) => {
            if (isDragging) return;
            if (e.target && e.target.closest && e.target.closest('.gi-ba-label')) return;
            slide(e.clientX);
        });

        container.addEventListener('mouseleave', () => {
            if (isDragging) return;
            isHovering = false;
            // Smoothly glide back to balanced 50% split on mouse leave
            beforeImg.style.transition = 'width 0.45s cubic-bezier(0.16, 1, 0.3, 1)';
            handle.style.transition = 'left 0.45s cubic-bezier(0.16, 1, 0.3, 1)';
            beforeImg.style.width = '50%';
            handle.style.left = 'calc(50% - 2px)';
            setTimeout(() => {
                if (!isHovering) {
                    beforeImg.style.transition = '';
                    handle.style.transition = '';
                }
            }, 450);
        });

        // Hovering directly over "Before" label slides to reveal 100% of the Before image
        const labelBefore = container.querySelector('.gi-ba-label--before');
        const labelAfter  = container.querySelector('.gi-ba-label--after');

        if (labelBefore) {
            labelBefore.style.cursor = 'pointer';
            labelBefore.addEventListener('mouseenter', () => {
                beforeImg.style.transition = 'width 0.35s ease';
                handle.style.transition = 'left 0.35s ease';
                beforeImg.style.width = '100%';
                handle.style.left = 'calc(100% - 2px)';
            });
            labelBefore.addEventListener('mouseleave', () => {
                beforeImg.style.transition = '';
                handle.style.transition = '';
            });
        }

        // Hovering directly over "After" label slides to reveal 100% of the After image
        if (labelAfter) {
            labelAfter.style.cursor = 'pointer';
            labelAfter.addEventListener('mouseenter', () => {
                beforeImg.style.transition = 'width 0.35s ease';
                handle.style.transition = 'left 0.35s ease';
                beforeImg.style.width = '0%';
                handle.style.left = '-2px';
            });
            labelAfter.addEventListener('mouseleave', () => {
                beforeImg.style.transition = '';
                handle.style.transition = '';
            });
        }

        // Mouse drag events
        handle.addEventListener('mousedown', (e) => {
            isDragging = true;
            handle.classList.add('gi-dragging');
            beforeImg.style.transition = 'none';
            handle.style.transition = 'none';
            e.preventDefault(); // Prevent text selection while dragging
        });
        window.addEventListener('mouseup', () => {
            if (!isDragging) return;
            isDragging = false;
            handle.classList.remove('gi-dragging');
        });
        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            slide(e.clientX);
        });

        // Touch events
        handle.addEventListener('touchstart', () => {
            isDragging = true;
            handle.classList.add('gi-dragging');
            beforeImg.style.transition = 'none';
            handle.style.transition = 'none';
            syncImgDimensions();
        }, { passive: true });
        window.addEventListener('touchend', () => {
            isDragging = false;
            handle.classList.remove('gi-dragging');
        });
        window.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            slide(e.touches[0].clientX);
        }, { passive: true });

        // Container click / touch drag
        container.addEventListener('mousedown', (e) => {
            if (e.target && e.target.closest && e.target.closest('.gi-ba-label')) return;
            isDragging = true;
            handle.classList.add('gi-dragging');
            beforeImg.style.transition = 'none';
            handle.style.transition = 'none';
            slide(e.clientX);
        });
        container.addEventListener('touchstart', (e) => {
            if (e.target && e.target.closest && e.target.closest('.gi-ba-label')) return;
            isDragging = true;
            beforeImg.style.transition = 'none';
            handle.style.transition = 'none';
            syncImgDimensions();
            slide(e.touches[0].clientX);
        }, { passive: true });
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

});
