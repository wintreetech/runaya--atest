document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") return;

    const SLIDES = document.querySelectorAll(".slide");
    const TABS = document.querySelectorAll(".tab");
    const PROGS = document.querySelectorAll(".tab-progress");
    const COUNT = SLIDES.length;

    const DEFAULT_DURATION = 4;

    if (!COUNT) return;

    let current = 0;
    let progTween = null;

    // ── Initial setup ───────────────────────────────
    SLIDES.forEach((slide, i) => {
        gsap.set(slide, { zIndex: i === 0 ? 2 : 1 });

        const bg = slide.querySelector(".slide-bg");
        const cont = slide.querySelector(".slide-content");

        gsap.set(bg, {
            scale: 1.08,
            opacity: i === 0 ? 1 : 0,
        });

        gsap.set(cont, { opacity: 0, y: 30 });
    });

    // ── START: Wait for first video ─────────────────
    const firstVideo = document.querySelector("#slide-0 video");

    if (firstVideo) {
        firstVideo.pause();

        const startCarousel = () => {
            firstVideo.play().catch(() => {});
            enterSlide(0);
        };

        if (firstVideo.readyState >= 3) {
            startCarousel();
        } else {
            firstVideo.addEventListener("canplaythrough", startCarousel, {
                once: true,
            });
        }
    } else {
        enterSlide(0);
    }

    // ── Enter Slide ────────────────────────────────
    function enterSlide(idx) {
        const slide = SLIDES[idx];
        const bg = slide.querySelector(".slide-bg");
        const cont = slide.querySelector(".slide-content");

        gsap.set(slide, { zIndex: 3 });

        gsap.to(bg, {
            opacity: 1,
            scale: 1,
            duration: 1.4,
            ease: "power2.out",
        });

        gsap.to(cont, {
            opacity: 1,
            y: 0,
            duration: 0.9,
            ease: "power3.out",
            delay: 0.35,
        });

        // Tabs update
        TABS.forEach((tab, i) => {
            const active = i === idx;
            tab.classList.toggle("is-active", active);
            tab.setAttribute("aria-selected", active ? "true" : "false");
        });

        // Reset progress bars
        PROGS.forEach((p) => gsap.set(p, { width: "0%" }));

        handleProgress(idx);
    }

    // ── Handle Progress (video aware) ──────────────
    function handleProgress(idx) {
        const slide = SLIDES[idx];
        const video = slide.querySelector("video");

        // If slide has video → sync with it
        if (video) {
            const start = () =>
                startProgress(idx, video.duration || DEFAULT_DURATION);

            if (video.readyState >= 3) {
                start();
            } else {
                video.addEventListener("canplaythrough", start, { once: true });
            }
        } else {
            startProgress(idx, DEFAULT_DURATION);
        }
    }

    // ── Start Progress ─────────────────────────────
    function startProgress(idx, duration) {
        if (progTween) progTween.kill();

        progTween = gsap.to(PROGS[idx], {
            width: "100%",
            duration: duration,
            ease: "none",
            onComplete: () => {
                goTo((idx + 1) % COUNT);
            },
        });
    }

    // ── Exit Slide ────────────────────────────────
    function exitSlide(idx) {
        const slide = SLIDES[idx];
        const bg = slide.querySelector(".slide-bg");
        const cont = slide.querySelector(".slide-content");

        gsap.to(cont, {
            opacity: 0,
            y: -20,
            duration: 0.5,
            ease: "power2.in",
        });

        gsap.to(bg, {
            opacity: 0,
            scale: 1.04,
            duration: 0.8,
            ease: "power2.in",
            onComplete: () => {
                gsap.set(slide, { zIndex: 1 });
            },
        });
    }

    // ── Go To Slide ───────────────────────────────
    function goTo(idx) {
        if (idx === current) return;

        exitSlide(current);
        current = idx;
        enterSlide(current);
    }

    // ── Tab Clicks ────────────────────────────────
    TABS.forEach((tab) => {
        tab.addEventListener("click", () => {
            goTo(Number(tab.dataset.index));
        });
    });

    // ── Arrows ────────────────────────────────────
    const arrowLeft = document.getElementById("arrowLeft");
    const arrowRight = document.getElementById("arrowRight");

    arrowLeft?.addEventListener("click", () => {
        goTo((current - 1 + COUNT) % COUNT);
    });

    arrowRight?.addEventListener("click", () => {
        goTo((current + 1) % COUNT);
    });

    // ── Keyboard ──────────────────────────────────
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") goTo((current - 1 + COUNT) % COUNT);
        if (e.key === "ArrowRight") goTo((current + 1) % COUNT);
    });

    // ── Pause on Hover ────────────────────────────
    const hero = document.getElementById("hero");

    if (hero) {
        hero.addEventListener("mouseenter", () => {
            if (progTween) progTween.pause();
        });

        hero.addEventListener("mouseleave", () => {
            if (progTween) progTween.resume();
        });
    }
});
