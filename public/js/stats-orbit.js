/* === stats-orbit.js === */
document.addEventListener("DOMContentLoaded", function () {
    var iconLabelMap = [
        {
            icon: document.querySelector(".orbit-icon--water"),
            label: document.getElementById("labelWater"),
        },
        {
            icon: document.querySelector(".orbit-icon--metals"),
            label: document.getElementById("labelMetals"),
        },
        {
            icon: document.querySelector(".orbit-icon--cagr"),
            label: document.getElementById("labelCagr"),
        },
        {
            icon: document.querySelector(".orbit-icon--women"),
            label: document.getElementById("labelWomen"),
        },
    ];

    iconLabelMap.forEach(function (pair) {
        if (!pair.icon || !pair.label) return;

        pair.icon.addEventListener("mouseenter", function () {
            pair.label.classList.add("is-hovered");
        });

        pair.icon.addEventListener("mouseleave", function () {
            pair.label.classList.remove("is-hovered");
        });
    });
    if (typeof gsap === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    var section = document.getElementById("statsOrbit");
    if (!section) return;

    var trigger = { trigger: section, start: "top 80%" };

    /* 1. Arc fade in */
    gsap.from(".orbit-arc", {
        opacity: 0,
        duration: 1.2,
        ease: "power2.out",
        scrollTrigger: trigger,
    });

    /* 2. Connector lines fade in */
    gsap.from(".orbit-connector", {
        opacity: 0,
        duration: 0.6,
        stagger: 0.15,
        delay: 0.6,
        ease: "power2.out",
        scrollTrigger: trigger,
    });

    /* 3. Icon groups pop in */
    var icons = ["#iconWater", "#iconMetals", "#iconCagr", "#iconWomen"];
    icons.forEach(function (id, i) {
        var el = section.querySelector(id);
        if (!el) return;
        gsap.from(el, {
            opacity: 0,
            scale: 0.4,
            transformBox: "fill-box",
            transformOrigin: "center",
            duration: 0.65,
            ease: "back.out(1.8)",
            delay: 0.5 + i * 0.15,
            scrollTrigger: trigger,
        });
    });

    /* 4. Labels fade in */
    ["#labelWater", "#labelMetals", "#labelCagr", "#labelWomen"].forEach(
        function (id, i) {
            var el = section.querySelector(id);
            if (!el) return;
            gsap.from(el, {
                opacity: 0,
                duration: 0.5,
                delay: 0.65 + i * 0.15,
                ease: "power2.out",
                scrollTrigger: trigger,
            });
        },
    );

    /* 5. Globe — fade in only, NO continuous bob animation */
    var globe = section.querySelector(".orbit-globe-wrap");
    if (globe) {
        gsap.from(globe, {
            opacity: 0,
            y: 30,
            duration: 1.0,
            ease: "power3.out",
            delay: 0.2,
            scrollTrigger: trigger,
        });
        /* gsap.to bob removed — globe is now static after fade-in */
    }

    /* 6. About fade-ups */
    gsap.utils.toArray(".gsap-fade-up").forEach(function (el, i) {
        gsap.to(el, {
            opacity: 1,
            y: 0,
            duration: 0.85,
            ease: "power3.out",
            delay: i * 0.15,
            scrollTrigger: { trigger: el, start: "top 88%" },
        });
    });
});
