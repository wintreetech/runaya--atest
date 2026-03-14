/* === our-businesses.js — centre-peek carousel, auto 3s === */
document.addEventListener("DOMContentLoaded", function () {
    var section = document.getElementById("ourBusinesses");
    if (!section) return;

    var track = document.getElementById("obTrack");
    var cards = Array.from(track.querySelectorAll(".ob-card"));
    var total = cards.length;
    var current = 0;
    var autoTimer = null;
    var DURATION = 3000; // 3 seconds

    /* ── Calculate offset so active card is centred ─────── */
    function getOffset(idx) {
        var wrapperW = track.parentElement.offsetWidth;
        var cardW = cards[idx].offsetWidth;
        var cardLeft = cards[idx].offsetLeft;
        /* centre = wrapper half - card half - card's left position */
        return wrapperW / 2 - cardW / 2 - cardLeft;
    }

    /* ── Go to slide ─────────────────────────────────────── */
    function goTo(idx) {
        if (idx < 0) idx = total - 1;
        if (idx >= total) idx = 0;
        current = idx;

        /* Update active class */
        cards.forEach(function (card, i) {
            card.classList.toggle("is-active", i === current);
        });

        /* GSAP slide track */
        if (typeof gsap !== "undefined") {
            gsap.to(track, {
                x: getOffset(current),
                duration: 0.65,
                ease: "power3.inOut",
            });
        } else {
            track.style.transform = "translateX(" + getOffset(current) + "px)";
        }
    }

    /* ── Init ────────────────────────────────────────────── */
    function init() {
        goTo(0);
    }

    /* ── Auto scroll ─────────────────────────────────────── */
    function startAuto() {
        stopAuto();
        autoTimer = setInterval(function () {
            goTo(current + 1);
        }, DURATION);
    }

    function stopAuto() {
        if (autoTimer) clearInterval(autoTimer);
    }

    /* ── Arrow buttons (one pair per card, all wired) ────── */
    section.querySelectorAll(".ob-arrow--left").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            stopAuto();
            goTo(current - 1);
            startAuto();
        });
    });

    section.querySelectorAll(".ob-arrow--right").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            stopAuto();
            goTo(current + 1);
            startAuto();
        });
    });

    /* ── Click side card to navigate to it ──────────────── */
    cards.forEach(function (card, i) {
        card.addEventListener("click", function () {
            if (i !== current) {
                stopAuto();
                goTo(i);
                startAuto();
            }
        });
    });

    /* ── Pause on hover ──────────────────────────────────── */
    section.addEventListener("mouseenter", stopAuto);
    section.addEventListener("mouseleave", startAuto);

    /* ── Touch swipe ─────────────────────────────────────── */
    var startX = 0;
    track.addEventListener(
        "touchstart",
        function (e) {
            startX = e.touches[0].clientX;
            stopAuto();
        },
        { passive: true },
    );

    track.addEventListener("touchend", function (e) {
        var diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(diff > 0 ? current + 1 : current - 1);
        startAuto();
    });

    /* ── Recalc on resize ────────────────────────────────── */
    window.addEventListener("resize", function () {
        goTo(current);
    });

    /* ── Boot ────────────────────────────────────────────── */
    init();
    startAuto();

    /* ── Section entrance animation ─────────────────────── */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".ob-heading", {
            opacity: 0,
            y: 30,
            duration: 0.7,
            ease: "power3.out",
            scrollTrigger: { trigger: section, start: "top 85%" },
        });
        gsap.from(".ob-track", {
            opacity: 0,
            y: 50,
            duration: 0.9,
            ease: "power3.out",
            delay: 0.2,
            scrollTrigger: { trigger: section, start: "top 85%" },
        });
    }
});
