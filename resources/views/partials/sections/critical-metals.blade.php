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

{{-- DASHED ARC --}}
<circle cx="659" cy="-986" r="1237.5"
        fill="none"
        stroke="#F2F2F2"
        stroke-width="1.5"
        stroke-dasharray="11 11"
        class="cm-arc"/>

{{-- ═══ CADMIUM (140, 142) — large, far left ═══ --}}
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

{{-- ═══ COBALT (440, 222) — medium, left-center ═══
     y = -986 + sqrt(1237.5² - (440-659)²)
       = -986 + sqrt(1531406 - 47961)
       = -986 + sqrt(1483445) = -986 + 1218 = 232
--}}
<g class="cm-mineral-g" id="cmCobalt" transform="translate(480,225)">
    <circle r="68" fill="rgba(255,255,255,0.12)"
            stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
            class="cm-circle-el"/>
    <clipPath id="clipCobalt"><circle r="63"/></clipPath>
    <image href="{{ asset('images/home/minerals/cobalt.png') }}"
           x="-63" y="-63" width="126" height="126"
           clip-path="url(#clipCobalt)"
           preserveAspectRatio="xMidYMid slice"/>
    <circle r="63" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
</g>
<text x="480" y="320" class="cm-label cm-label--md">Cobalt</text>

{{-- ═══ COPPER (878, 232) — medium, right-center ═══
     y = -986 + sqrt(1237.5² - (878-659)²)
       = -986 + sqrt(1531406 - 47961)
       = -986 + 1218 = 232
--}}
<g class="cm-mineral-g" id="cmCopper" transform="translate(838,225)">
    <circle r="68" fill="rgba(255,255,255,0.12)"
            stroke="rgba(255,255,255,0.3)" stroke-width="1.5"
            class="cm-circle-el"/>
    <clipPath id="clipCopper"><circle r="63"/></clipPath>
    <image href="{{ asset('images/home/minerals/copper.png') }}"
           x="-63" y="-63" width="126" height="126"
           clip-path="url(#clipCopper)"
           preserveAspectRatio="xMidYMid slice"/>
    <circle r="63" fill="rgba(80,121,137,0.6)" class="cm-img-placeholder"/>
</g>
<text x="838" y="320" class="cm-label cm-label--md">Copper</text>

{{-- ═══ ANTIMONY (1178, 142) — large, far right ═══ --}}
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
        Based in Rajasthan, the Critical Metal Recovery Business strengthens Runaya’s role in India’s critical metals ecosystem and supports national objectives of reducing import dependence while building resilient domestic supply chains. The facilities focus on the recovery and processing of critical metals, with capabilities that include metals such as cadmium, cobalt, nickel, copper, and antimony.
Our operations are powered through responsible energy sourcing that includes renewable energy as part of the overall energy mix. These facilities operate at scale and serve high-reliability end-use sectors including energy storage, aerospace, defence, electronics, advanced coatings, and precision engineering.
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