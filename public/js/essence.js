/* === essence.js === */
document.addEventListener("DOMContentLoaded", function () {
    var section = document.getElementById("essenceSection");
    if (!section) return;

    /* GSAP entrance only — hover is handled purely by CSS */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".essence-heading", {
            opacity: 0,
            y: 28,
            duration: 0.7,
            ease: "power3.out",
            scrollTrigger: { trigger: section, start: "top 85%" },
        });

        gsap.from(".essence-panel", {
            opacity: 0,
            y: 40,
            duration: 0.75,
            stagger: 0.1,
            ease: "power3.out",
            delay: 0.2,
            scrollTrigger: { trigger: section, start: "top 85%" },
        });
    }
});
