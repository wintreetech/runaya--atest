<section class="loc-section" id="ourLocations">
    <div class="loc-pattern"></div>

    <div class="loc-inner">

        {{-- LEFT --}}
        <div class="loc-left">
            <h2 class="loc-heading">Our Locations</h2>

            <div class="loc-list-card-row">
                <ul class="loc-list" id="locList">
                    <li class="loc-item is-active" data-loc="mumbai">Mumbai</li>
                    <li class="loc-item" data-loc="jharsuguda">Jharsuguda</li>
                    <li class="loc-item" data-loc="korba">Korba</li>
                    <li class="loc-item" data-loc="chanderiya">Chanderiya</li>
                    <li class="loc-item" data-loc="bhilwara">Bhilwara</li>
                </ul>

                <div class="loc-card" id="locCard">
                    <h3 class="loc-card__title" id="locCardTitle">Aluminium Recovery Business</h3>
                    <p class="loc-card__addr" id="locCardAddr">
                        Unit No. 401, Interface 16,<br>
                        Malad Link Road, Malad West,<br>
                        Mumbai – 400064<br>
                        GSTIN: 27AAKCR3131L1ZO
                    </p>
                </div>
            </div>

            <div class="loc-gmap-wrap">
                <iframe id="locGmap" class="loc-gmap" loading="lazy" allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.0!2d72.848!3d19.186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b633e5810e93%3A0x7501d3e4e0c7a691!2sMalad+West%2C+Mumbai!5e0!3m2!1sen!2sin!4v1">
                </iframe>
            </div>
        </div>

        {{-- RIGHT: India map using object tag (loads real SVG from public) --}}
        <div class="loc-right">
            <div class="loc-map-container" id="locMapContainer">

                {{--
                    Pin positions calculated from lat/lon → SVG px:
                    ViewBox 650×750, India bounds: lat 8–37°N, lon 68–98°E

                    x = (lon - 68) / 30 * 500 + 75
                    y = (37 - lat) / 29 * 660 + 30

                    Mumbai     19.08°N 72.88°E → x=147, y=424
                    Jharsuguda 21.85°N 84.00°E → x=333, y=367
                    Korba      22.36°N 82.70°E → x=311, y=355
                    Chanderiya 24.88°N 74.63°E → x=177, y=281
                    Bhilwara   25.35°N 74.63°E → x=177, y=271
                --}}

                <svg id="locPinsSvg" class="loc-pins-svg" viewBox="0 0 650 750"
                     xmlns="http://www.w3.org/2000/svg">

                    {{-- India shape — proper outline --}}
                    <path class="india-shape" d="
                        M 309,35 C 318,30 334,26 349,30 C 365,34 378,27 394,33
                        C 410,39 424,33 438,42 C 450,50 462,44 474,54
                        C 484,62 493,72 501,84 C 509,96 515,110 520,124
                        C 525,138 527,152 530,167 C 533,182 530,196 536,211
                        C 540,224 537,238 542,252 C 544,264 538,276 530,287
                        C 521,299 510,310 497,322 C 483,335 468,348 452,362
                        C 435,377 417,393 399,410 C 380,427 361,445 341,463
                        C 320,482 298,501 278,519 C 261,535 247,551 237,565
                        C 229,577 223,588 220,597 C 217,606 216,614 215,620
                        C 211,611 206,599 199,585 C 190,568 178,551 165,534
                        C 151,516 136,498 122,481 C 109,464 97,447 87,430
                        C 78,413 71,396 67,378 C 63,360 62,342 63,324
                        C 64,306 68,288 68,271 C 68,255 64,239 62,223
                        C 61,208 62,193 66,179 C 63,165 68,151 66,136
                        C 70,121 68,106 75,93 C 82,79 92,68 103,58
                        C 114,48 127,41 141,36 C 155,31 170,28 186,27
                        C 202,26 218,27 233,26 C 248,25 262,30 276,27
                        C 290,24 302,31 309,35 Z
                    "/>
                    {{-- Northeast states --}}
                    <path class="india-shape" d="
                        M 488,150 C 500,143 515,147 524,158
                        C 532,170 528,184 516,190
                        C 504,196 490,190 484,178
                        C 478,166 480,156 488,150 Z
                    "/>
                    {{-- Andaman (tiny) --}}
                    <ellipse class="india-shape" cx="548" cy="460" rx="8" ry="14"/>

                    {{-- PINS --}}

                    {{-- Mumbai 19.08N 72.88E → (147, 424) --}}
                    <g class="map-pin" data-loc="mumbai" transform="translate(147,424)">
                        <line x1="0" y1="-26" x2="0" y2="0" class="pin-stem"/>
                        <circle r="12" class="pin-outer"/>
                        <circle r="6"  class="pin-inner"/>
                    </g>

                    {{-- Jharsuguda 21.85N 84.00E → (333, 367) --}}
                    <g class="map-pin" data-loc="jharsuguda" transform="translate(333,367)">
                        <line x1="0" y1="-24" x2="0" y2="0" class="pin-stem"/>
                        <circle r="12" class="pin-outer"/>
                        <circle r="6"  class="pin-inner"/>
                    </g>

                    {{-- Korba 22.36N 82.70E → (311, 355) --}}
                    <g class="map-pin" data-loc="korba" transform="translate(311,355)">
                        <line x1="0" y1="-24" x2="0" y2="0" class="pin-stem"/>
                        <circle r="12" class="pin-outer"/>
                        <circle r="6"  class="pin-inner"/>
                    </g>

                    {{-- Chanderiya/Chittorgarh 24.88N 74.63E → (177, 281) --}}
                    <g class="map-pin is-active" data-loc="chanderiya" transform="translate(177,281)">
                        <line x1="0" y1="-26" x2="0" y2="0" class="pin-stem"/>
                        <circle r="12" class="pin-outer"/>
                        <circle r="6"  class="pin-inner"/>
                    </g>

                    {{-- Bhilwara 25.35N 74.63E → (177, 270) --}}
                    <g class="map-pin" data-loc="bhilwara" transform="translate(177,270)">
                        <line x1="0" y1="-22" x2="0" y2="0" class="pin-stem"/>
                        <circle r="12" class="pin-outer"/>
                        <circle r="6"  class="pin-inner"/>
                    </g>

                </svg>
            </div>
        </div>

    </div>
</section>