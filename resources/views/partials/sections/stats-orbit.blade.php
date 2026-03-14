<section class="stats-orbit" id="statsOrbit">
    <div class="orbit-container">

        <svg class="orbit-svg" viewBox="0 0 1200 560"
             xmlns="http://www.w3.org/2000/svg"
             preserveAspectRatio="xMidYMid meet">

            {{-- DASHED SEMI-ARC: centre(600,530) rx=455 ry=410 --}}
            <path
                class="orbit-arc"
                d="M 145,530 A 455,410 0 0 1 1055,530"
                fill="none"
                stroke="#1a5c6b"
                stroke-width="2"
                stroke-dasharray="9 8"
                opacity="0.45"
            />

            {{-- CONNECTOR LINES: short dashed lines from icon to arc --}}
            <line class="orbit-connector" x1="252" y1="298" x2="252" y2="338" stroke="#1a5c6b" stroke-width="1.5" stroke-dasharray="5 5" opacity="0.5"/>
            <line class="orbit-connector" x1="948" y1="298" x2="948" y2="338" stroke="#1a5c6b" stroke-width="1.5" stroke-dasharray="5 5" opacity="0.5"/>
            <line class="orbit-connector" x1="161" y1="456" x2="161" y2="480" stroke="#1a5c6b" stroke-width="1.5" stroke-dasharray="5 5" opacity="0.5"/>
            <line class="orbit-connector" x1="1039" y1="456" x2="1039" y2="480" stroke="#1a5c6b" stroke-width="1.5" stroke-dasharray="5 5" opacity="0.5"/>

            {{-- ICON: Water Positive — arc point (252, 266) --}}
            <g class="orbit-icon-group" id="iconWater" transform="translate(252,266)" style="cursor:pointer">
                <circle r="32" fill="#1a5c6b" class="icon-circle"/>
                <g transform="translate(-12,-12)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2C8 8 5 11 5 15a7 7 0 0 0 14 0c0-4-3-7-7-13z"/>
                        <path d="M9.5 16 11 13l2 2 2-4 1.5 1.5"/>
                    </svg>
                </g>
            </g>

            {{-- ICON: Critical Metals — arc point (948, 266) --}}
            <g class="orbit-icon-group" id="iconMetals" transform="translate(948,266)" style="cursor:pointer">
                <circle r="32" fill="#1a5c6b" class="icon-circle"/>
                <g transform="translate(-12,-12)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </g>
            </g>

            {{-- ICON: CAGR — arc point (161, 424) --}}
            <g class="orbit-icon-group" id="iconCagr" transform="translate(161,424)" style="cursor:pointer">
                <circle r="32" fill="#1a5c6b" class="icon-circle"/>
                <g transform="translate(-12,-12)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 17 7 11 11 14 15 8 21 8"/>
                        <polyline points="18 8 21 8 21 11"/>
                    </svg>
                </g>
            </g>

            {{-- ICON: Women — arc point (1039, 424) --}}
            <g class="orbit-icon-group" id="iconWomen" transform="translate(1039,424)" style="cursor:pointer">
                <circle r="32" fill="#1a5c6b" class="icon-circle"/>
                <g transform="translate(-12,-12)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </g>
            </g>

        </svg>

        {{-- LABELS — positioned using % that match SVG coordinates --}}
        {{-- icon SVG x / 1200 * 100 = left/right %, y / 560 * 100 = top % --}}

        {{-- Water: SVG(252,266) → 21%,47.5% — label to the LEFT of icon --}}
        <div class="orbit-label orbit-label--tl" id="labelWater">
            Water Positive<br>Renewable<br>Energy
        </div>

        {{-- Metals: SVG(948,266) → 79%,47.5% — label to the RIGHT of icon --}}
        <div class="orbit-label orbit-label--tr" id="labelMetals">
            Critical Metals<br>Recovered<br>Responsibly
        </div>

        {{-- CAGR: SVG(161,424) → 13.4%,75.7% — label to the LEFT --}}
        <div class="orbit-label orbit-label--bl" id="labelCagr">
            Growing CAGR<br>of 40% since<br>inception
        </div>

        {{-- Women: SVG(1039,424) → 86.6%,75.7% — label to the RIGHT --}}
        <div class="orbit-label orbit-label--br" id="labelWomen">
            55% Women<br>Employees<br>and Leaders
        </div>

        {{-- Globe —  centred at bottom of arc --}}
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