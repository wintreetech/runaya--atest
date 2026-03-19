/* === facility-carousel.js === */
document.addEventListener("DOMContentLoaded", function () {
    var section = document.getElementById("facilityCarousel");
    if (!section) return;

    var track = document.getElementById("fcTrack");
    var slides = Array.from(track.querySelectorAll(".fc-slide"));
    var dots = Array.from(document.querySelectorAll(".fc-dot"));
    var prevBtn = document.getElementById("fcPrev");
    var nextBtn = document.getElementById("fcNext");
    var total = slides.length;
    var current = 0;
    var direction = 1; // 1 = forward, -1 = backward
    var animating = false;

    // ── Initial state ─────────────────────────────────────
    slides.forEach(function (slide, i) {
        gsap.set(slide, {
            position: "absolute",
            top: 0,
            left: 0,
            width: "100%",
            height: "100%",
            xPercent: i === 0 ? 0 : 100, // all off-screen right except first
            zIndex: i === 0 ? 2 : 1,
        });
    });

    // ── Go to slide ───────────────────────────────────────
    function goTo(idx) {
        if (animating) return;

        // Wrap index — makes it circular
        idx = ((idx % total) + total) % total;
        if (idx === current) return;

        animating = true;

        var outSlide = slides[current];
        var inSlide = slides[idx];

        // Where the new slide enters from
        var enterFrom = direction === 1 ? 100 : -100;
        // Where the old slide exits to
        var exitTo = direction === 1 ? -100 : 100;

        // Prep incoming slide
        gsap.set(inSlide, { xPercent: enterFrom, zIndex: 3 });
        gsap.set(outSlide, { zIndex: 2 });

        // Slide IN
        gsap.to(inSlide, {
            xPercent: 0,
            duration: 0.7,
            ease: "power3.inOut",
        });

        // Slide OUT
        gsap.to(outSlide, {
            xPercent: exitTo,
            duration: 0.7,
            ease: "power3.inOut",
            onComplete: function () {
                gsap.set(outSlide, { zIndex: 1 });
                animating = false;
            },
        });

        // Dots
        dots[current].classList.remove("is-active");
        dots[idx].classList.add("is-active");

        // Active class
        outSlide.classList.remove("is-active");
        inSlide.classList.add("is-active");

        current = idx;
    }

    // ── Arrows ────────────────────────────────────────────
    prevBtn.addEventListener("click", function () {
        direction = -1;
        goTo(current - 1);
        startAutoplay();
    });
    nextBtn.addEventListener("click", function () {
        direction = 1;
        goTo(current + 1);
        startAutoplay();
    });

    // ── Dots ──────────────────────────────────────────────
    dots.forEach(function (dot) {
        dot.addEventListener("click", function () {
            var idx = +dot.dataset.index;
            direction = idx > current ? 1 : -1;
            goTo(idx);
        });
    });

    // ── Touch swipe ───────────────────────────────────────
    var startX = 0;
    track.addEventListener(
        "touchstart",
        function (e) {
            startX = e.touches[0].clientX;
        },
        { passive: true },
    );

    track.addEventListener("touchend", function (e) {
        var diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) {
            direction = diff > 0 ? 1 : -1;
            goTo(diff > 0 ? current + 1 : current - 1);
        }
    });

    // ── Keyboard ──────────────────────────────────────────
    document.addEventListener("keydown", function (e) {
        if (e.key === "ArrowLeft") {
            direction = -1;
            goTo(current - 1);
        }
        if (e.key === "ArrowRight") {
            direction = 1;
            goTo(current + 1);
        }
    });

    // ── GSAP entrance ─────────────────────────────────────
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(section, {
            opacity: 0,
            y: 40,
            duration: 0.9,
            ease: "power3.out",
            scrollTrigger: { trigger: section, start: "top 85%" },
        });
    }

    var autoplayTimer = null;

    function startAutoplay() {
        stopAutoplay();
        autoplayTimer = setInterval(function () {
            direction = 1;
            goTo(current + 1);
        }, 4000);
    }

    function stopAutoplay() {
        clearInterval(autoplayTimer);
    }

    // Pause on hover
    section.addEventListener("mouseenter", stopAutoplay);
    section.addEventListener("mouseleave", startAutoplay);

    // Restart autoplay on manual interaction
    prevBtn.addEventListener("click", function () {
        startAutoplay();
    });
    nextBtn.addEventListener("click", function () {
        startAutoplay();
    });

    // Kick it off
    startAutoplay();
});
