/* === critical-metals.js === */
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    var section = document.getElementById("criticalMetals");
    if (!section) return;

    var trigger = { trigger: section, start: "top 80%" };

    /* 1. Card slides up */
    gsap.from(".cm-card", {
        opacity: 0,
        y: 60,
        duration: 0.9,
        ease: "power3.out",
        scrollTrigger: trigger,
    });

    /* 2. Wave path draws left to right */
    var path = section.querySelector(".cm-wave-path");
    if (path) {
        var len = path.getTotalLength();
        gsap.set(path, { strokeDasharray: len, strokeDashoffset: len });
        gsap.to(path, {
            strokeDashoffset: 0,
            duration: 1.8,
            delay: 0.4,
            ease: "power2.inOut",
            scrollTrigger: trigger,
        });
    }

    /* 3. Minerals pop in staggered */
    var mineralIds = [
        "#cmCadmium",
        "#cmCobalt",
        "#cmZinc",
        "#cmCopper",
        "#cmAntimony",
    ];
    mineralIds.forEach(function (id, i) {
        var el = section.querySelector(id);
        if (!el) return;
        gsap.from(el, {
            opacity: 0,
            scale: 0.3,
            transformBox: "fill-box",
            transformOrigin: "center",
            duration: 0.65,
            ease: "back.out(1.8)",
            delay: 0.55 + i * 0.14,
            scrollTrigger: trigger,
        });
    });

    /* 4. Labels fade in at low opacity */
    gsap.utils.toArray(".cm-label").forEach(function (el, i) {
        gsap.from(el, {
            opacity: 0,
            duration: 0.4,
            delay: 0.75 + i * 0.14,
            ease: "power2.out",
            scrollTrigger: trigger,
        });
    });

    /* 5. Body + button */
    gsap.from(".cm-body-fo", {
        opacity: 0,
        duration: 0.65,
        delay: 1.2,
        ease: "power3.out",
        scrollTrigger: trigger,
    });
    gsap.from(".cm-btn", {
        opacity: 0,
        duration: 0.5,
        delay: 1.35,
        ease: "power2.out",
        scrollTrigger: trigger,
    });

    /* 6. Label hover highlight via JS
       Map each mineral group id → corresponding label text */
    var pairs = [
        { group: "#cmCadmium", label: null },
        { group: "#cmCobalt", label: null },
        { group: "#cmZinc", label: null },
        { group: "#cmCopper", label: null },
        { group: "#cmAntimony", label: null },
    ];

    /* Find labels by their text content order */
    var labels = Array.from(section.querySelectorAll(".cm-label"));

    pairs.forEach(function (pair, i) {
        pair.label = labels[i] || null;
        var group = section.querySelector(pair.group);
        if (!group || !pair.label) return;

        group.addEventListener("mouseenter", function () {
            pair.label.classList.add("is-hovered");
        });
        group.addEventListener("mouseleave", function () {
            pair.label.classList.remove("is-hovered");
        });
    });

    /* 7. Broken image fallback */
    section.querySelectorAll("image").forEach(function (img) {
        img.addEventListener("error", function () {
            var group = img.closest(".cm-mineral-g");
            if (group) group.classList.add("img-failed");
        });
    });
});
