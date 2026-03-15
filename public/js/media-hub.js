/* === media-hub.js === */
document.addEventListener("DOMContentLoaded", function () {
    function initSlider(prevId, nextId, selector) {
        var prevBtn = document.getElementById(prevId);
        var nextBtn = document.getElementById(nextId);
        if (!prevBtn || !nextBtn) return;

        var articles = Array.from(document.querySelectorAll(selector));
        var current = 0;

        function show(idx) {
            if (idx < 0) idx = articles.length - 1;
            if (idx >= articles.length) idx = 0;
            articles[current].classList.remove("is-active");
            current = idx;
            articles[current].classList.add("is-active");
        }

        prevBtn.addEventListener("click", function () {
            show(current - 1);
        });
        nextBtn.addEventListener("click", function () {
            show(current + 1);
        });
    }

    initSlider("pressPrev", "pressNext", "[data-press]");
    initSlider("articlePrev", "articleNext", "[data-article]");

    /* Entrance animation */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".mh-card", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            stagger: 0.15,
            ease: "power3.out",
            scrollTrigger: { trigger: "#mediaHub", start: "top 82%" },
        });
    }
});
