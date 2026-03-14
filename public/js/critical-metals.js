/* === critical-metals.js === */
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    var section = document.getElementById("criticalMetals");
    if (!section) return;

    var trigger = { trigger: section, start: "top 80%" };

    /* 1. Card slides up on scroll */
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
            duration: 1.6,
            delay: 0.4,
            ease: "power2.inOut",
            scrollTrigger: trigger,
        });
    }

    /* 3. Mineral groups pop in along the path, staggered */
    var minerals = [
        "#cmCadmium",
        "#cmCobalt",
        "#cmNickel",
        "#cmCopper",
        "#cmAntimony",
    ];
    minerals.forEach(function (id, i) {
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

    /* 4. Labels fade in with minerals */
    gsap.utils.toArray(".cm-label").forEach(function (el, i) {
        gsap.from(el, {
            opacity: 0,
            duration: 0.4,
            delay: 0.75 + i * 0.14,
            ease: "power2.out",
            scrollTrigger: trigger,
        });
    });

    /* 5. Body text fade */
    gsap.from(".cm-body-fo", {
        opacity: 0,
        duration: 0.65,
        delay: 1.2,
        ease: "power3.out",
        scrollTrigger: trigger,
    });

    /* 6. Button — simple opacity only, no transform (foreignObject transform unreliable) */
    gsap.from(".cm-btn", {
        opacity: 0,
        duration: 0.5,
        delay: 1.35,
        ease: "power2.out",
        scrollTrigger: trigger,
    });

    /* 6. Handle broken images — show teal placeholder */
    section.querySelectorAll(".cm-mineral-img").forEach(function (img) {
        img.addEventListener("error", function () {
            var group = img.closest(".cm-mineral-g");
            if (group) group.classList.add("img-failed");
        });
    });
});
