<section class="stats-orbit" id="statsOrbit">
    <div class="orbit-container">

        <!-- <svg class="orbit-svg" viewBox="0 0 1200 560"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             preserveAspectRatio="xMidYMid meet">

            {{-- DASHED SEMI-ARC only — no connector lines --}}
            <path
                class="orbit-arc"
                d="M 260,500 A 340,340 0 0 1 940,500"
                fill="none"
                stroke="#1a5c6b"
                stroke-width="2"
                stroke-dasharray="9 8"
                opacity="0.45"
            />

            {{-- ICON: Water Positive — arc point (252, 266) --}}
            <g class="orbit-icon-group" id="iconWater" transform="translate(252,266)" style="cursor:pointer">
                <image href="{{ asset('images/home/icons/water-energy.svg') }}"
                       x="-30" y="-30" width="60" height="60"/>
            </g>

            {{-- ICON: Critical Metals — arc point (948, 266) --}}
            <g class="orbit-icon-group" id="iconMetals" transform="translate(948,266)" style="cursor:pointer">
                <image href="{{ asset('images/home/icons/critical-metals.svg') }}"
                       x="-30" y="-30" width="60" height="60"/>
            </g>

            {{-- ICON: CAGR — arc point (161, 424) --}}
            <g class="orbit-icon-group" id="iconCagr" transform="translate(161,424)" style="cursor:pointer">
                <image href="{{ asset('images/home/icons/cagr.svg') }}"
                       x="-30" y="-30" width="60" height="60"/>
            </g>

            {{-- ICON: Women — arc point (1039, 424) --}}
            <g class="orbit-icon-group" id="iconWomen" transform="translate(1039,424)" style="cursor:pointer">
                <image href="{{ asset('images/home/icons/women.svg') }}"
                       x="-30" y="-30" width="60" height="60"/>
            </g>

        </svg> -->

        <svg class="orbit-svg" xmlns="http://www.w3.org/2000/svg" width="713" height="499" viewBox="0 0 713 499" fill="none">
<circle cx="356.5" cy="356.5" r="355" stroke="#074158" stroke-width="3" stroke-dasharray="11 11"/>
</svg>

<!-- ORBIT ICONS -->
<div class="orbit-icon orbit-icon--water">
    <img src="{{ asset('images/home/icons/water-energy.svg') }}" alt="Water Positive">
</div>

<div class="orbit-icon orbit-icon--metals">
    <img src="{{ asset('images/home/icons/critical-metals.svg') }}" alt="Critical Metals">
</div>

<div class="orbit-icon orbit-icon--cagr">
    <img src="{{ asset('images/home/icons/cagr.svg') }}" alt="Growing CAGR">
</div>

<div class="orbit-icon orbit-icon--women">
    <img src="{{ asset('images/home/icons/women.svg') }}" alt="Women Employees">
</div>

        {{-- LABELS --}}
        <div class="orbit-label orbit-label--tl" id="labelWater">
            Water Positive<br>Renewable<br>Energy
        </div>

        <div class="orbit-label orbit-label--tr" id="labelMetals">
            Critical Metals<br>Recovered<br>Responsibly
        </div>

        <div class="orbit-label orbit-label--bl" id="labelCagr">
            Growing CAGR<br>of 40% since<br>inception
        </div>

        <div class="orbit-label orbit-label--br" id="labelWomen">
            55% Women<br>Employees<br>and Leaders
        </div>

        {{-- Globe --}}
        <div class="orbit-globe-wrap">
            <img src="{{ asset('images/home/globe-hands.gif') }}" alt="Globe in hands" class="orbit-globe"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
            <div class="orbit-globe-placeholder" style="display:none;">
                <svg viewBox="0 0 200 230" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="100" cy="88" rx="70" ry="70" fill="#b8d8de" opacity="0.4"/>
                    <ellipse cx="100" cy="88" rx="54" ry="54" fill="#1a5c6b" opacity="0.6"/>
                    <path d="M48,88 Q78,55 100,88 Q122,121 152,88" fill="none" stroke="white" stroke-width="1.8"/>
                    <path d="M65,62 Q100,78 135,62" fill="none" stroke="white" stroke-width="1.3"/>
                    <path d="M60,108 Q100,122 140,108" fill="none" stroke="white" stroke-width="1.3"/>
                    <path d="M58,155 Q78,168 100,210 Q122,168 142,155 Q122,148 100,148 Q78,148 58,155Z" fill="#ddeef0"/>
                    <path d="M72,148 Q80,155 100,150 Q120,155 128,148" fill="#e8f4f6" opacity="0.9"/>
                    <line x1="78" y1="95" x2="78" y2="52" stroke="white" stroke-width="1.5"/>
                    <path d="M78,52 L70,42 M78,52 L86,42 M78,52 L78,40" stroke="white" stroke-width="1.2" stroke-linecap="round"/>
                    <line x1="112" y1="88" x2="112" y2="48" stroke="white" stroke-width="1.5"/>
                    <path d="M112,48 L104,38 M112,48 L120,38 M112,48 L112,36" stroke="white" stroke-width="1.2" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

    </div>
</section>

<section class="about-intro" id="aboutIntro">
    <div class="about-pattern"></div>
    <div class="about-inner">
        <h2 class="about-heading gsap-fade-up">
            Innovating sustainably, partnering<br>
            responsibly, and fostering inclusivity
        </h2>
        <p class="about-body gsap-fade-up">
            Runaya is a leading manufacturing venture, committed to driving innovation and sustainability across
            the natural resources sector. We partner with industry stakeholders to deliver high-value manufacturing
            solutions across mining, metals, and telecom sectors, powered by a diverse and empowering work culture.
        </p>
    </div>
</section>