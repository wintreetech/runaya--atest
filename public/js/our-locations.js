/* === our-locations.js === */
document.addEventListener("DOMContentLoaded", function () {
    var section = document.getElementById("ourLocations");
    if (!section) return;

    var locations = {
        mumbai: {
            title: "Aluminium Recovery Business",
            addr: "Unit No. 401, Interface 16,\nMalad Link Road, Malad West,\nMumbai – 400064\nGSTIN: 27AAKCR3131L1ZO",
            mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.0!2d72.8480!3d19.1863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b633e5810e93%3A0x7501d3e4e0c7a691!2sMalad+West%2C+Mumbai!5e0!3m2!1sen!2sin!4v1",
        },
        jharsuguda: {
            title: "Ground Support & Mining",
            addr: "Plot No. A-12, Industrial Area,\nJharsuguda,\nOdisha – 768201\nGSTIN: 22AAKCR3131L1Z4",
            mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30000!2d84.0063!3d21.8553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a20b3f74b7af5cf%3A0x35b8a95b3b15de3e!2sJharsuguda%2C+Odisha!5e0!3m2!1sen!2sin!4v1",
        },
        korba: {
            title: "Aluminium Recovery Business",
            addr: "BALCO Industrial Estate,\nKorba,\nChhattisgarh – 495684\nGSTIN: 22AAKCR3131L2Z3",
            mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30000!2d82.7499!3d22.3595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a281773cf5af18b%3A0x40e6af4d4a155c0!2sKorba%2C+Chhattisgarh!5e0!3m2!1sen!2sin!4v1",
        },
        chanderiya: {
            title: "Critical Metal Recovery Business",
            addr: "Khasra no 1295/1323/1324,\nVillage Biliya,\nChittorgarh – 312001\nGSTIN: 08AAKCR3131L1Z6",
            mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30000!2d74.6313!3d24.8830!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3968040000000001%3A0x40ef0b15e42fe80!2sChittorgarh%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1",
        },
        bhilwara: {
            title: "Critical Metal Recovery Business",
            addr: "Dariba Smelter Complex,\nVillage Dariba, Rajsamand,\nBhilwara – 313211\nGSTIN: 08AAKCR3131L2Z5",
            mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30000!2d74.6313!3d25.3500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f84ae3b39ffa5%3A0x3ae4b45ad9b99c53!2sBhilwara%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1",
        },
    };

    var listItems = section.querySelectorAll(".loc-item");
    var mapPins = section.querySelectorAll(".map-pin");
    var cardTitle = document.getElementById("locCardTitle");
    var cardAddr = document.getElementById("locCardAddr");
    var card = document.getElementById("locCard");
    var gmap = document.getElementById("locGmap");

    function activate(key) {
        var data = locations[key];
        if (!data) return;

        /* Update list active */
        listItems.forEach(function (item) {
            item.classList.toggle("is-active", item.dataset.loc === key);
        });

        /* Update map pins active */
        mapPins.forEach(function (pin) {
            pin.classList.toggle("is-active", pin.dataset.loc === key);
        });

        /* Animate card out → swap content → in */
        card.classList.add("is-updating");
        setTimeout(function () {
            cardTitle.textContent = data.title;
            cardAddr.innerHTML = data.addr.replace(/\n/g, "<br>");
            if (gmap) gmap.src = data.mapSrc;
            card.classList.remove("is-updating");
            if (typeof gsap !== "undefined") {
                gsap.from(card, {
                    y: 10,
                    opacity: 0,
                    duration: 0.35,
                    ease: "power3.out",
                });
            }
        }, 230);
    }

    listItems.forEach(function (item) {
        item.addEventListener("click", function () {
            activate(item.dataset.loc);
        });
    });

    mapPins.forEach(function (pin) {
        pin.addEventListener("click", function () {
            activate(pin.dataset.loc);
        });
    });

    /* Entrance animations */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
        var trig = { trigger: section, start: "top 82%" };
        gsap.from(".loc-heading", {
            opacity: 0,
            x: -40,
            duration: 0.8,
            ease: "power3.out",
            scrollTrigger: trig,
        });
        gsap.from(".loc-list", {
            opacity: 0,
            x: -30,
            duration: 0.7,
            delay: 0.2,
            ease: "power3.out",
            scrollTrigger: trig,
        });
        gsap.from(".loc-card", {
            opacity: 0,
            y: 20,
            duration: 0.6,
            delay: 0.3,
            ease: "power3.out",
            scrollTrigger: trig,
        });
        gsap.from(".loc-gmap-wrap", {
            opacity: 0,
            y: 20,
            duration: 0.6,
            delay: 0.4,
            ease: "power3.out",
            scrollTrigger: trig,
        });
        gsap.from(".loc-india-map", {
            opacity: 0,
            scale: 0.88,
            duration: 1.0,
            delay: 0.2,
            ease: "power3.out",
            scrollTrigger: trig,
        });
        gsap.from(".map-pin", {
            opacity: 0,
            scale: 0,
            transformOrigin: "center bottom",
            duration: 0.5,
            stagger: 0.12,
            delay: 0.65,
            ease: "back.out(1.8)",
            scrollTrigger: trig,
        });
    }
});
