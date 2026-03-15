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

    function goTo(idx) {
        if (idx < 0) idx = total - 1;
        if (idx >= total) idx = 0;

        slides[current].classList.remove("is-active");
        dots[current].classList.remove("is-active");

        current = idx;

        slides[current].classList.add("is-active");
        dots[current].classList.add("is-active");

        track.style.transform = "translateX(-" + current * 100 + "%)";
    }

    prevBtn.addEventListener("click", function () {
        goTo(current - 1);
    });
    nextBtn.addEventListener("click", function () {
        goTo(current + 1);
    });

    dots.forEach(function (dot) {
        dot.addEventListener("click", function () {
            goTo(+dot.dataset.index);
        });
    });

    /* Touch swipe */
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
        if (Math.abs(diff) > 40) goTo(diff > 0 ? current + 1 : current - 1);
    });

    /* Keyboard */
    document.addEventListener("keydown", function (e) {
        if (e.key === "ArrowLeft") goTo(current - 1);
        if (e.key === "ArrowRight") goTo(current + 1);
    });

    /* GSAP entrance */
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
});
