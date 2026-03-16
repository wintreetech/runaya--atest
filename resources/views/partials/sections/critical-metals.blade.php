<section class="cm-section" id="criticalMetals">
    <div class="cm-card">

        <svg class="cm-svg" viewBox="0 0 1318 720"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             preserveAspectRatio="xMidYMid meet">

            {{-- LAYER 1: Background image --}}
            <image href="{{ asset('images/home/critical-metals-bg.jpg') }}"
                   x="0" y="0" width="1318" height="720"
                   preserveAspectRatio="xMidYMid slice"/>

            {{-- LAYER 2: Teal overlay --}}
            <rect x="0" y="0" width="1318" height="720" fill="#507989" opacity="0.90"/>

            {{-- LAYER 3: Title --}}
            <text x="659" y="68" class="cm-svg-title">Critical Metals Recovery</text>

            {{--
                THE ARC — exact circle from your SVG:
                centre (659, -986), radius 1237.5
                Only the top portion is visible in the viewBox.

                Mineral positions ON the arc:
                  y = -986 + sqrt(1237.5^2 - (x - 659)^2)

                  Cadmium  x=140   (x-659)=-519  sqrt(1237.5^2-519^2)=1128  y=-986+1128=142
                  Cobalt   x=340   (x-659)=-319  sqrt(1237.5^2-319^2)=1196  y=-986+1196=210
                  Nickel   x=659   (x-659)=0     sqrt(1237.5^2-0^2)=1237.5  y=-986+1237.5=251
                  Copper   x=978   (x-659)=319   sqrt(1237.5^2-319^2)=1196  y=-986+1196=210
                  Antimony x=1178  (x-659)=519   sqrt(1237.5^2-519^2)=1128  y=-986+1128=142
            --}}

            {{-- DASHED ARC --}}
            <circle cx="659" cy="-986" r="1237.5"
                    fill="none"
                    stroke="#F2F2F2"
                    stroke-width="1.5"
                    stroke-dasharray="11 11"
                    class="cm-arc"/>

            {{-- ═══ CADMIUM (140, 142) — large ═══ --}}
            <g class="cm-mineral-g" id="cmCadmium" transform="translate(140,142)">
                <circle r="75" fill="rgba(255,255,255,0.12)"
                        stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
                        class="cm-circle-el"/>
                <clipPath id="clipCadmium"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/cadmium.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipCadmium)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="140" y="245" class="cm-label cm-label--lg">Cadmium</text>

            {{-- ═══ COBALT (340, 210) — medium ═══ --}}
            <g class="cm-mineral-g" id="cmCobalt" transform="translate(340,210)">
                <circle r="58" fill="rgba(255,255,255,0.12)"
                        stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
                        class="cm-circle-el"/>
                <clipPath id="clipCobalt"><circle r="53"/></clipPath>
                <image href="{{ asset('images/home/minerals/cobalt.png') }}"
                       x="-53" y="-53" width="106" height="106"
                       clip-path="url(#clipCobalt)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="53" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="340" y="292" class="cm-label cm-label--md">Cobalt</text>

            {{-- ═══ NICKEL (659, 251) — large, bottommost ═══ --}}
            <g class="cm-mineral-g" id="cmNickel" transform="translate(659,251)">
                <circle r="75" fill="rgba(255,255,255,0.12)"
                        stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
                        class="cm-circle-el"/>
                <clipPath id="clipNickel"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/nickel.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipNickel)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="659" y="354" class="cm-label cm-label--lg">Nickel</text>

            {{-- ═══ COPPER (978, 210) — medium ═══ --}}
            <g class="cm-mineral-g" id="cmCopper" transform="translate(978,210)">
                <circle r="58" fill="rgba(255,255,255,0.12)"
                        stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
                        class="cm-circle-el"/>
                <clipPath id="clipCopper"><circle r="53"/></clipPath>
                <image href="{{ asset('images/home/minerals/copper.png') }}"
                       x="-53" y="-53" width="106" height="106"
                       clip-path="url(#clipCopper)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="53" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="978" y="292" class="cm-label cm-label--md">Copper</text>

            {{-- ═══ ANTIMONY (1178, 142) — large ═══ --}}
            <g class="cm-mineral-g" id="cmAntimony" transform="translate(1178,142)">
                <circle r="75" fill="rgba(255,255,255,0.12)"
                        stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
                        class="cm-circle-el"/>
                <clipPath id="clipAntimony"><circle r="70"/></clipPath>
                <image href="{{ asset('images/home/minerals/antimony.png') }}"
                       x="-70" y="-70" width="140" height="140"
                       clip-path="url(#clipAntimony)"
                       preserveAspectRatio="xMidYMid slice"/>
                <circle r="70" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
            </g>
            <text x="1178" y="245" class="cm-label cm-label--lg">Antimony</text>

            {{-- Body text --}}
            <foreignObject x="60" y="410" width="1198" height="170">
                <div xmlns="http://www.w3.org/1999/xhtml" class="cm-body-fo">
                    Based in Chanderiya and Dariba, the Diversified Metal Recovery Business strengthens Runaya's
                    role in India's critical metals ecosystem and supports national objectives of reducing import
                    dependence while building resilient domestic supply chains. The operations are powered by
                    100% renewable energy. These facilities are operational at scale and serve high-reliability
                    end-use sectors including energy storage, aerospace, defence, electronics, advanced coatings,
                    and precision engineering.
                </div>
            </foreignObject>

            {{-- Know More button --}}
            <foreignObject x="549" y="610" width="220" height="56">
                <div xmlns="http://www.w3.org/1999/xhtml" class="cm-btn-fo">
                    <a href="/businesses/critical-metal" class="cm-btn">KNOW MORE</a>
                </div>
            </foreignObject>

        </svg>

    </div>
</section>