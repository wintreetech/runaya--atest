/* === our-businesses.js — true infinite circular carousel === */
document.addEventListener("DOMContentLoaded", function () {
    var section = document.getElementById("ourBusinesses");
    if (!section) return;

    var track = document.getElementById("obTrack");
    var origCards = Array.from(track.querySelectorAll(".ob-card"));
    var total = origCards.length;
    var DURATION = 5000;
    var autoTimer = null;
    var isAnimating = false;

    /* ── Clone cards for infinite loop ──────────────────────
       Layout: [clones of last N] [originals] [clones of first N]
       N = total cards cloned on each side
    ────────────────────────────────────────────────────────── */
    var clonesBefore = [];
    var clonesAfter = [];

    // Clone all originals and append/prepend
    origCards.forEach(function (card) {
        var cloneAfter = card.cloneNode(true);
        cloneAfter.classList.add("ob-clone");
        cloneAfter.setAttribute("aria-hidden", "true");
        clonesAfter.push(cloneAfter);
        track.appendChild(cloneAfter);
    });

    origCards.forEach(function (card) {
        var cloneBefore = card.cloneNode(true);
        cloneBefore.classList.add("ob-clone");
        cloneBefore.setAttribute("aria-hidden", "true");
        clonesBefore.unshift(cloneBefore);
        track.insertBefore(cloneBefore, track.firstChild);
    });

    // All cards now (clones before + originals + clones after)
    var allCards = Array.from(track.querySelectorAll(".ob-card"));

    // Current index starts at first real card (index = total, after prepended clones)
    var current = total; // points to first original card

    /* ── Re-wire arrow buttons on clones ─────────────────── */
    function wireArrows() {
        track.querySelectorAll(".ob-arrow--left").forEach(function (btn) {
            btn.onclick = function (e) {
                e.stopPropagation();
                stopAuto();
                goTo(current - 1);
                startAuto();
            };
        });
        track.querySelectorAll(".ob-arrow--right").forEach(function (btn) {
            btn.onclick = function (e) {
                e.stopPropagation();
                goTo(current + 1);
                startAuto();
            };
        });
    }

    /* ── Get px offset to centre card[idx] ───────────────── */
    function getOffset(idx) {
        var wrapperW = track.parentElement.offsetWidth;
        var card = allCards[idx];
        if (!card) return 0;
        return wrapperW / 2 - card.offsetWidth / 2 - card.offsetLeft;
    }

    /* ── Update active class ─────────────────────────────── */
    function updateActive(idx) {
        allCards.forEach(function (c, i) {
            c.classList.toggle("is-active", i === idx);
        });
    }

    /* ── Instant jump (no animation) ────────────────────── */
    function jumpTo(idx) {
        current = idx;
        updateActive(current);
        gsap.set(track, { x: getOffset(current) });
    }

    /* ── Animated go to ─────────────────────────────────── */
    function goTo(idx) {
        if (isAnimating) return;
        isAnimating = true;

        current = idx;
        updateActive(current);

        gsap.to(track, {
            x: getOffset(current),
            duration: 0.65,
            ease: "power3.inOut",
            onComplete: function () {
                isAnimating = false;

                // If we've slid into the clones-after zone → jump back silently
                if (current >= total * 2) {
                    jumpTo(current - total);
                }
                // If we've slid into the clones-before zone → jump forward silently
                else if (current < total) {
                    jumpTo(current + total);
                }
            },
        });
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

    /* ── Click side card ─────────────────────────────────── */
    /* ── Pause on hover (current active card only) ───────── */
    allCards.forEach(function (card, i) {
        card.addEventListener("mouseenter", function () {
            if (i === current) stopAuto();
        });
        card.addEventListener("mouseleave", function () {
            if (i === current) startAuto();
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

    /* ── Resize ──────────────────────────────────────────── */
    window.addEventListener("resize", function () {
        jumpTo(current);
    });

    /* ── Boot ────────────────────────────────────────────── */
    wireArrows();
    jumpTo(current); // start at first real card, no animation
    startAuto();

    /* ── Entrance animation ──────────────────────────────── */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".ob-heading", {
            opacity: 0,
            y: 30,
            duration: 0.7,
            ease: "power3.out",
            scrollTrigger: { trigger: section, start: "top 85%" },
        });
    }
});
