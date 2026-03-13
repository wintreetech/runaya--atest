/* === app.js — Global JS, runs on every page === */
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") return;

    gsap.registerPlugin(ScrollTrigger);

    // Animate navbar in on page load
    gsap.to("#navbar", {
        y: 0,
        opacity: 1,
        duration: 0.85,
        ease: "power3.out",
        delay: 0.1,
    });
});
