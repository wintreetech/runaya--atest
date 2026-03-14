<section class="cm-section" id="criticalMetals">
    <div class="cm-card">

        <svg class="cm-svg"
             viewBox="0 0 1200 720"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             preserveAspectRatio="xMidYMid slice">

            {{-- LAYER 1: Background image — full card --}}
            <image
                href="{{ asset('images/home/critical-metals-bg.jpg') }}"
                x="0" y="0" width="1200" height="720"
                preserveAspectRatio="xMidYMid slice"
            />

            {{-- LAYER 2: Dark teal overlay --}}
            <rect x="0" y="0" width="1200" height="720"
                 fill="#507989" opacity="0.75"/>

            {{-- LAYER 3: Title --}}
            <text x="600" y="72" class="cm-svg-title">Critical Metals Recovery</text>

            {{-- LAYER 4: Dashed wave path
                 Circle centres:
                   Cadmium  (lg, high): 140, 200
                   Cobalt   (md, low):  330, 300
                   Nickel   (lg, high): 600, 200
                   Copper   (md, low):  870, 300
                   Antimony (lg, high): 1060, 200
            --}}
            <path
                class="cm-wave-path"
                d="M 140,200
                   C 235,200 235,300 330,300
                   C 425,300 425,200 600,200
                   C 775,200 775,300 870,300
                   C 965,300 965,200 1060,200"
                fill="none"
                stroke="rgba(255,255,255,0.28)"
                stroke-width="2"
                stroke-dasharray="10 8"
            />

            {{-- LAYER 5: Mineral circles --}}

            {{-- CADMIUM — large, high (140, 200) --}}
            <g class="cm-mineral-g" id="cmCadmium" transform="translate(140,200)">
                <circle r="75" fill="rgba(255,255,255,0.10)" stroke="rgba(255,255,255,0.22)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipCadmium"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/cadmium.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipCadmium)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(26,92,107,0.45)" class="cm-img-placeholder"/>
            </g>
            <text x="140" y="300" class="cm-label">Cadmium</text>

            {{-- COBALT — medium, low (330, 300) --}}
            <g class="cm-mineral-g" id="cmCobalt" transform="translate(330,300)">
                <circle r="58" fill="rgba(255,255,255,0.10)" stroke="rgba(255,255,255,0.22)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipCobalt"><circle r="53"/></clipPath>
                <image href="{{ asset('images/home/minerals/cobalt.png') }}"
                       x="-53" y="-53" width="106" height="106"
                       clip-path="url(#clipCobalt)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="53" fill="rgba(26,92,107,0.45)" class="cm-img-placeholder"/>
            </g>
            <text x="330" y="378" class="cm-label">Cobalt</text>

            {{-- NICKEL — large, high (600, 200) --}}
            <g class="cm-mineral-g" id="cmNickel" transform="translate(600,200)">
                <circle r="75" fill="rgba(255,255,255,0.10)" stroke="rgba(255,255,255,0.22)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipNickel"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/nickel.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipNickel)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(26,92,107,0.45)" class="cm-img-placeholder"/>
            </g>
            <text x="600" y="300" class="cm-label">Nickel</text>

            {{-- COPPER — medium, low (870, 300) --}}
            <g class="cm-mineral-g" id="cmCopper" transform="translate(870,300)">
                <circle r="58" fill="rgba(255,255,255,0.10)" stroke="rgba(255,255,255,0.22)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipCopper"><circle r="53"/></clipPath>
                <image href="{{ asset('images/home/minerals/copper.png') }}"
                       x="-53" y="-53" width="106" height="106"
                       clip-path="url(#clipCopper)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="53" fill="rgba(26,92,107,0.45)" class="cm-img-placeholder"/>
            </g>
            <text x="870" y="378" class="cm-label">Copper</text>

            {{-- ANTIMONY — large, high (1060, 200) --}}
            <g class="cm-mineral-g" id="cmAntimony" transform="translate(1060,200)">
                <circle r="75" fill="rgba(255,255,255,0.10)" stroke="rgba(255,255,255,0.22)" stroke-width="1.5" class="cm-circle-el"/>
                <clipPath id="clipAntimony"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/antimony.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipAntimony)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(26,92,107,0.45)" class="cm-img-placeholder"/>
            </g>
            <text x="1060" y="300" class="cm-label">Antimony</text>

            {{-- LAYER 6: Body text — sits below the minerals inside the card --}}
            <foreignObject x="170" y="430" width="860" height="180">
                <div xmlns="http://www.w3.org/1999/xhtml" class="cm-body-fo">
                    Based in Chanderiya and Dariba, the Diversified Metal Recovery Business strengthens
                    Runaya's role in India's critical metals ecosystem and supports national objectives of
                    reducing import dependence while building resilient domestic supply chains. The operations
                    are powered by 100% renewable energy. These facilities are operational at scale and serve
                    high-reliability end-use sectors including energy storage, aerospace, defence, electronics,
                    advanced coatings, and precision engineering.
                </div>
            </foreignObject>

            {{-- LAYER 7: Know More button --}}
            <foreignObject x="490" y="630" width="220" height="56">
                <div xmlns="http://www.w3.org/1999/xhtml" class="cm-btn-fo">
                    <a href="/businesses/critical-metal" class="cm-btn">KNOW MORE</a>
                </div>
            </foreignObject>

        </svg>

    </div>
</section>