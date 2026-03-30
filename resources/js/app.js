import './bootstrap';

/* ── Mobile Navigation Toggle ── */
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (burger && mobileMenu) {
        burger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = burger.querySelector('svg');
            const isOpen = !mobileMenu.classList.contains('hidden');
            burger.setAttribute('aria-expanded', isOpen);
        });
    }

    /* ── Navbar Scroll Effect ── */
    const navbar = document.getElementById('main-navbar');
    if (navbar) {
        const onScroll = () => {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ── Animated Counters ── */
    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length) {
        const animateCounter = (el) => {
            const target = parseInt(el.getAttribute('data-counter'), 10);
            const duration = 2000;
            const start = performance.now();

            const tick = (now) => {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(eased * target).toLocaleString();

                if (progress < 1) {
                    requestAnimationFrame(tick);
                } else {
                    el.textContent = target.toLocaleString() + '+';
                }
            };
            requestAnimationFrame(tick);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach((c) => observer.observe(c));
    }

    /* ── Fade-in on scroll ── */
    const fadeEls = document.querySelectorAll('.fade-in-up');
    if (fadeEls.length) {
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    fadeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        fadeEls.forEach((el) => fadeObserver.observe(el));
    }
});
