/* === stats-orbit.js === */
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    var section = document.getElementById("statsOrbit");
    if (!section) return;

    var trigger = { trigger: section, start: "top 80%" };

    /* 1. Arc fade in (dasharray stays intact — no strokeDasharray touch) */
    gsap.from(".orbit-arc", {
        opacity: 0,
        duration: 1.2,
        ease: "power2.out",
        scrollTrigger: trigger,
    });

    /* 2. Connector lines fade in */
    gsap.from(".orbit-connector", {
        opacity: 0,
        duration: 0.5,
        stagger: 0.12,
        delay: 0.7,
        ease: "power2.out",
        scrollTrigger: trigger,
    });

    /* 3. Icon groups pop in from scale */
    var icons = ["#iconWater", "#iconMetals", "#iconCagr", "#iconWomen"];
    icons.forEach(function (id, i) {
        var el = section.querySelector(id);
        if (!el) return;
        gsap.from(el, {
            opacity: 0,
            scale: 0.4,
            transformOrigin: "center center",
            transformBox: "fill-box",
            duration: 0.65,
            ease: "back.out(1.8)",
            delay: 0.5 + i * 0.15,
            scrollTrigger: trigger,
        });
    });

    /* 4. Labels fade in alongside their icons */
    var labels = ["#labelWater", "#labelMetals", "#labelCagr", "#labelWomen"];
    labels.forEach(function (id, i) {
        var el = section.querySelector(id);
        if (!el) return;
        gsap.from(el, {
            opacity: 0,
            duration: 0.5,
            delay: 0.65 + i * 0.15,
            ease: "power2.out",
            scrollTrigger: trigger,
        });
    });

    /* 5. Globe float in */
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
        gsap.to(globe, {
            y: -10,
            duration: 3,
            ease: "sine.inOut",
            yoyo: true,
            repeat: -1,
            delay: 1.2,
        });
    }

    /* 6. About section fade-ups */
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
