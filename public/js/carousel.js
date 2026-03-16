/* === carousel.js — GSAP hero carousel === */
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") return;

    const SLIDES = document.querySelectorAll(".slide");
    const TABS = document.querySelectorAll(".tab");
    const PROGS = document.querySelectorAll(".tab-progress");
    const COUNT = SLIDES.length;
    const DURATION = 4; // seconds per slide

    if (!COUNT) return;

    let current = 0;
    let progTween = null;

    // ── Set initial state ─────────────────────────────────
    SLIDES.forEach(function (slide, i) {
        gsap.set(slide, { zIndex: i === 0 ? 2 : 1 });
        gsap.set(slide.querySelector(".slide-bg"), {
            scale: 1.08,
            opacity: i === 0 ? 1 : 0,
        });
        gsap.set(slide.querySelector(".slide-content"), { opacity: 0, y: 30 });
    });

    enterSlide(0);

    // ── Animate slide in ──────────────────────────────────
    function enterSlide(idx) {
        var slide = SLIDES[idx];
        var bg = slide.querySelector(".slide-bg");
        var cont = slide.querySelector(".slide-content");

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

        // Update tabs
        TABS.forEach(function (tab, i) {
            var active = i === idx;
            tab.classList.toggle("is-active", active);
            tab.setAttribute("aria-selected", active ? "true" : "false");
        });

        // Reset all progress bars
        PROGS.forEach(function (p) {
            gsap.set(p, { width: "0%" });
        });

        // Animate active tab progress bar, then advance
        if (progTween) progTween.kill();
        progTween = gsap.to(PROGS[idx], {
            width: "100%",
            duration: DURATION,
            ease: "none",
            onComplete: function () {
                goTo((idx + 1) % COUNT);
            },
        });
    }

    // ── Animate slide out ─────────────────────────────────
    function exitSlide(idx) {
        var slide = SLIDES[idx];
        var bg = slide.querySelector(".slide-bg");
        var cont = slide.querySelector(".slide-content");

        gsap.to(cont, { opacity: 0, y: -20, duration: 0.5, ease: "power2.in" });
        gsap.to(bg, {
            opacity: 0,
            scale: 1.04,
            duration: 0.8,
            ease: "power2.in",
            onComplete: function () {
                gsap.set(slide, { zIndex: 1 });
            },
        });
    }

    // ── Go to slide ───────────────────────────────────────
    function goTo(idx) {
        if (idx === current) return;
        exitSlide(current);
        current = idx;
        enterSlide(current);
    }

    // ── Tab clicks ────────────────────────────────────────
    TABS.forEach(function (tab) {
        tab.addEventListener("click", function () {
            goTo(Number(tab.dataset.index));
        });
    });

    // ── Arrow clicks ──────────────────────────────────────
    var arrowLeft = document.getElementById("arrowLeft");
    var arrowRight = document.getElementById("arrowRight");

    if (arrowLeft)
        arrowLeft.addEventListener("click", function () {
            goTo((current - 1 + COUNT) % COUNT);
        });
    if (arrowRight)
        arrowRight.addEventListener("click", function () {
            goTo((current + 1) % COUNT);
        });

    // ── Keyboard arrows ───────────────────────────────────
    document.addEventListener("keydown", function (e) {
        if (e.key === "ArrowLeft") goTo((current - 1 + COUNT) % COUNT);
        if (e.key === "ArrowRight") goTo((current + 1) % COUNT);
    });

    // ── Pause on hover ────────────────────────────────────
    var hero = document.getElementById("hero");
    if (hero) {
        hero.addEventListener("mouseenter", function () {
            if (progTween) progTween.pause();
        });
        hero.addEventListener("mouseleave", function () {
            if (progTween) progTween.resume();
        });
    }
});
