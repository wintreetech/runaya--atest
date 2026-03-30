<section class="loc-section" id="ourLocations">
    <div class="loc-pattern"></div>

    <div class="loc-inner">

        {{-- LEFT --}}
        <div class="loc-left">
    <h2 class="loc-heading">Our Locations</h2>

    <div class="loc-list-card-row">
        <ul class="loc-list" id="locList">
            <li class="loc-item is-active" data-loc="mumbai">Maharashtra</li>
            <li class="loc-item" data-loc="jharsuguda">Odisha</li>
            <li class="loc-item" data-loc="korba">Odisha</li>
            <li class="loc-item" data-loc="chanderiya">Chattisgarh</li>
            <li class="loc-item" data-loc="bhilwara">Rajasthan</li>
            <li class="loc-item" data-loc="dariba">Rajasthan</li>
        </ul>

        <div class="loc-card" id="locCard">
            <h3 class="loc-card__title" id="locCardTitle">Registered Office</h3>
           
        </div>
    </div>

    {{-- Map sits BELOW list+card --}}
    <div class="loc-gmap-wrap">
        <iframe id="locGmap" class="loc-gmap" loading="lazy" allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.0!2d72.848!3d19.186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b633e5810e93%3A0x7501d3e4e0c7a691!2sMalad+West%2C+Mumbai!5e0!3m2!1sen!2sin!4v1">
        </iframe>
    </div>
</div>

        {{-- RIGHT: Real SimpleMaps India SVG + pins overlay --}}
        <div class="loc-right">
            <div class="loc-map-container" id="locMapContainer">

                {{--
                    SimpleMaps SVG viewBox="0 0 1000 1000"
                    Pin coordinates calculated from lat/lon using state anchor points:

                    Mumbai     (19.08N, 72.88E) → (238.7, 622.7)
                    Jharsuguda (21.85N, 84.06E) → (501.4, 500.8)
                    Korba      (22.36N, 82.70E) → (469.4, 478.4)
                    Chanderiya (24.88N, 74.63E) → (279.8, 367.5)
                    Bhilwara   (25.35N, 74.63E) → (279.8, 346.8)
                --}}

                <svg id="locPinsSvg" class="loc-pins-svg" viewBox="0 0 1000 1000"
                     xmlns="http://www.w3.org/2000/svg">

                    {{-- Real India map paths embedded from SimpleMaps --}}
                    <image href="{{ asset('images/india-map.svg') }}"
                           x="0" y="0" width="1000" height="1000"/>

                    {{-- PINS — on top of the map image --}}

                    {{-- Mumbai (238.7, 622.7) --}}
                    <g class="map-pin" data-loc="mumbai" transform="translate(238.7,622.7)">
                        <line x1="0" y1="0" x2="0" y2="28" class="pin-stem"/>
                        <circle r="14" class="pin-outer"/>
                        <circle r="7"  class="pin-inner"/>
                    </g>

                    {{-- Jharsuguda (501.4, 500.8) --}}
                    <g class="map-pin" data-loc="jharsuguda" transform="translate(501.4,500.8)">
                        <line x1="0" y1="0" x2="0" y2="26" class="pin-stem"/>
                        <circle r="14" class="pin-outer"/>
                        <circle r="7"  class="pin-inner"/>
                    </g>

                    {{-- Korba (469.4, 478.4) --}}
                    <g class="map-pin" data-loc="korba" transform="translate(469.4,478.4)">
                        <line x1="0" y1="0" x2="0" y2="26" class="pin-stem"/>
                        <circle r="14" class="pin-outer"/>
                        <circle r="7"  class="pin-inner"/>
                    </g>

                    {{-- Chanderiya/Chittorgarh (279.8, 367.5) --}}
                    <g class="map-pin is-active" data-loc="chanderiya" transform="translate(279.8,367.5)">
                        <line x1="0" y1="0" x2="0" y2="28" class="pin-stem"/>
                        <circle r="14" class="pin-outer"/>
                        <circle r="7"  class="pin-inner"/>
                    </g>

                    {{-- Bhilwara (279.8, 346.8) --}}
                    <g class="map-pin" data-loc="bhilwara" transform="translate(279.8,346.8)">
                        <line x1="0" y1="0" x2="0" y2="24" class="pin-stem"/>
                        <circle r="14" class="pin-outer"/>
                        <circle r="7"  class="pin-inner"/>
                    </g>

                    <g class="map-pin" data-loc="dariba" transform="translate(271,358)">
    <line x1="0" y1="0" x2="0" y2="24" class="pin-stem"/>
    <circle r="14" class="pin-outer"/>
    <circle r="7"  class="pin-inner"/>
</g>

                </svg>
            </div>
        </div>

    </div>
</section>