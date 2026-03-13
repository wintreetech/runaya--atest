/* === navbar.js — Search overlay + mobile menu + scroll hide === */
document.addEventListener("DOMContentLoaded", function () {
    // ── Search overlay ────────────────────────────────────
    const searchBtn = document.getElementById("searchBtn");
    const searchOverlay = document.getElementById("searchOverlay");
    const searchClose = document.getElementById("searchClose");
    const searchInput = searchOverlay
        ? searchOverlay.querySelector("input")
        : null;

    function openSearch() {
        if (!searchOverlay) return;
        searchOverlay.classList.add("is-open");
        searchOverlay.setAttribute("aria-hidden", "false");
        if (typeof gsap !== "undefined" && searchInput) {
            gsap.from(searchInput, {
                y: 30,
                opacity: 0,
                duration: 0.4,
                ease: "power3.out",
            });
        }
        if (searchInput) searchInput.focus();
    }

    function closeSearch() {
        if (!searchOverlay) return;
        searchOverlay.classList.remove("is-open");
        searchOverlay.setAttribute("aria-hidden", "true");
        if (searchBtn) searchBtn.focus();
    }

    if (searchBtn) searchBtn.addEventListener("click", openSearch);
    if (searchClose) searchClose.addEventListener("click", closeSearch);

    document.addEventListener("keydown", function (e) {
        if (
            e.key === "Escape" &&
            searchOverlay &&
            searchOverlay.classList.contains("is-open")
        ) {
            closeSearch();
        }
    });

    // ── Mobile hamburger ──────────────────────────────────
    const mobileBtn = document.getElementById("mobileMenuBtn");
    const navLinks = document.querySelector(".nav-links");

    if (mobileBtn && navLinks) {
        mobileBtn.addEventListener("click", function () {
            const isOpen = navLinks.classList.toggle("is-mobile-open");
            mobileBtn.classList.toggle("is-active", isOpen);
            mobileBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    }

    // ── Scroll: hide/show navbar ──────────────────────────
    const navbar = document.getElementById("navbar");
    let lastScroll = 0;

    if (navbar) {
        window.addEventListener(
            "scroll",
            function () {
                const scrollY = window.scrollY;
                navbar.classList.toggle("is-scrolled", scrollY > 20);
                navbar.classList.toggle(
                    "is-hidden",
                    scrollY > lastScroll && scrollY > 200,
                );
                lastScroll = scrollY;
            },
            { passive: true },
        );
    }
});
