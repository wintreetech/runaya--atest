<section class="cm-section" id="criticalMetals">
    <div class="cm-card">

        <svg class="cm-svg"
             viewBox="0 0 1200 720"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             preserveAspectRatio="xMidYMid slice">

            {{-- LAYER 1: Background image --}}
            <image
                href="{{ asset('images/home/critical-metals-bg.jpg') }}"
                x="0" y="0" width="1200" height="720"
                preserveAspectRatio="xMidYMid slice"
            />

            {{-- LAYER 2: Teal overlay --}}
            <rect x="0" y="0" width="1200" height="720" fill="#507989" opacity="0.75"/>

            {{-- LAYER 3: Title --}}
            <text x="600" y="68" class="cm-svg-title">Critical Metals Recovery</text>

            {{--
                Single continuous S-curve wave through all 5 mineral centres.
                All minerals at y=250. Wave dips down between each pair.
                Using cubic bezier to create smooth wave:
                  Cadmium  x=140  y=250
                  Cobalt   x=340  y=310  (lower)
                  Nickel   x=600  y=250  (back up)
                  Copper   x=860  y=310  (lower)
                  Antimony x=1060 y=250  (back up)
            --}}
            <path
                class="cm-wave-path"
                d="M 140,250
                   C 220,250 260,310 340,310
                   C 420,310 480,250 600,250
                   C 720,250 780,310 860,310
                   C 940,310 980,250 1060,250"
                fill="none"
                stroke="rgba(255,255,255,0.5)"
                stroke-width="2"
                stroke-dasharray="10 8"
            />

            {{-- CADMIUM — large (140, 250) --}}
            <g class="cm-mineral-g" id="cmCadmium" transform="translate(140,250)">
                <circle r="75" fill="rgba(255,255,255,0.12)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipCadmium"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/cadmium.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipCadmium)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="140" y="345" class="cm-label cm-label--lg">Cadmium</text>

            {{-- COBALT — medium (340, 250) --}}
            <g class="cm-mineral-g" id="cmCobalt" transform="translate(340,310)">
                <circle r="58" fill="rgba(255,255,255,0.12)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipCobalt"><circle r="53"/></clipPath>
                <image href="{{ asset('images/home/minerals/cobalt.png') }}"
                       x="-53" y="-53" width="106" height="106"
                       clip-path="url(#clipCobalt)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="53" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="340" y="383" class="cm-label cm-label--md">Cobalt</text>

            {{-- NICKEL — large (600, 250) --}}
            <g class="cm-mineral-g" id="cmNickel" transform="translate(600,250)">
                <circle r="75" fill="rgba(255,255,255,0.12)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipNickel"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/nickel.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipNickel)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="600" y="345" class="cm-label cm-label--lg">Nickel</text>

            {{-- COPPER — medium (860, 250) --}}
            <g class="cm-mineral-g" id="cmCopper" transform="translate(860,310)">
                <circle r="58" fill="rgba(255,255,255,0.12)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipCopper"><circle r="53"/></clipPath>
                <image href="{{ asset('images/home/minerals/copper.png') }}"
                       x="-53" y="-53" width="106" height="106"
                       clip-path="url(#clipCopper)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="53" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="860" y="383" class="cm-label cm-label--md">Copper</text>

            {{-- ANTIMONY — large (1060, 250) --}}
            <g class="cm-mineral-g" id="cmAntimony" transform="translate(1060,250)">
                <circle r="75" fill="rgba(255,255,255,0.12)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipAntimony"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/antimony.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipAntimony)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="1060" y="345" class="cm-label cm-label--lg">Antimony</text>

            {{-- Body text --}}
            <foreignObject x="60" y="440" width="1080" height="170">
                <div xmlns="http://www.w3.org/1999/xhtml" class="cm-body-fo">
                    Based in Chanderiya and Dariba, the Diversified Metal Recovery Business strengthens
                    Runaya's role in India's critical metals ecosystem and supports national objectives of
                    reducing import dependence while building resilient domestic supply chains. The operations
                    are powered by 100% renewable energy. These facilities are operational at scale and serve
                    high-reliability end-use sectors including energy storage, aerospace, defence, electronics,
                    advanced coatings, and precision engineering.
                </div>
            </foreignObject>

            {{-- Know More button --}}
            <foreignObject x="490" y="630" width="220" height="56">
                <div xmlns="http://www.w3.org/1999/xhtml" class="cm-btn-fo">
                    <a href="/businesses/critical-metal" class="cm-btn">KNOW MORE</a>
                </div>
            </foreignObject>

        </svg>

    </div>
</section>