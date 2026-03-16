<section class="stats-orbit" id="statsOrbit">
    <div class="orbit-container">

        <svg class="orbit-svg" viewBox="0 0 1000 560"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             preserveAspectRatio="xMidYMid meet">

            {{--
                Taller arc: centre(500,520) rx=400 ry=400
                Full semicircle — same radius x and y = perfect half circle
                M 100,520 A 400,400 0 0 1 900,520

                Icon positions on arc:
                  θ=145°: Water  x=500+400*cos(145°)=500-327=173, y=520-400*sin(145°)=520-229=291
                  θ=35°:  Metals x=500+400*cos(35°)=500+327=827,  y=520-400*sin(35°)=520-229=291
                  θ=160°: CAGR   x=500+400*cos(160°)=500-376=124, y=520-400*sin(160°)=520-137=383
                  θ=20°:  Women  x=500+400*cos(20°)=500+376=876,  y=520-400*sin(20°)=520-137=383
            --}}

            {{-- TALL DASHED SEMI-ARC --}}
            <path
                class="orbit-arc"
                d="M 100,520 A 400,400 0 0 1 900,520"
                fill="none"
                stroke="#1a5c6b"
                stroke-width="1.8"
                stroke-dasharray="7 6"
                opacity="0.5"
            />

            {{--
                CONNECTOR LINES: short dashed line from icon outward toward label
                Water icon (173,291) → label is up-left → line goes up-left
                Metals icon (827,291) → label is up-right → line goes up-right
                CAGR icon (124,383) → label is left → line goes left
                Women icon (876,383) → label is right → line goes right
            --}}
            <line class="orbit-connector"
                  x1="162" y1="278" x2="118" y2="210"
                  stroke="#1a5c6b" stroke-width="1.2"
                  stroke-dasharray="5 4" opacity="0.5"/>

            <line class="orbit-connector"
                  x1="838" y1="278" x2="882" y2="210"
                  stroke="#1a5c6b" stroke-width="1.2"
                  stroke-dasharray="5 4" opacity="0.5"/>

            <line class="orbit-connector"
                  x1="110" y1="383" x2="52" y2="383"
                  stroke="#1a5c6b" stroke-width="1.2"
                  stroke-dasharray="5 4" opacity="0.5"/>

            <line class="orbit-connector"
                  x1="890" y1="383" x2="948" y2="383"
                  stroke="#1a5c6b" stroke-width="1.2"
                  stroke-dasharray="5 4" opacity="0.5"/>

            {{-- ICON: Water Positive (173, 291) — NO background circle --}}
            <g class="orbit-icon-group" id="iconWater" transform="translate(173,291)" style="cursor:pointer">
                <image class="icon-default" href="{{ asset('images/home/icons/water-energy.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
                <image class="icon-hover" href="{{ asset('images/home/icons/water-energy-orange.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
            </g>

            {{-- ICON: Critical Metals (827, 291) --}}
            <g class="orbit-icon-group" id="iconMetals" transform="translate(827,291)" style="cursor:pointer">
                <image class="icon-default" href="{{ asset('images/home/icons/critical-metals.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
                <image class="icon-hover" href="{{ asset('images/home/icons/critical-metals-orange.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
            </g>

            {{-- ICON: CAGR (124, 383) --}}
            <g class="orbit-icon-group" id="iconCagr" transform="translate(124,383)" style="cursor:pointer">
                <image class="icon-default" href="{{ asset('images/home/icons/cagr.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
                <image class="icon-hover" href="{{ asset('images/home/icons/cagr-orange.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
            </g>

            {{-- ICON: Women (876, 383) --}}
            <g class="orbit-icon-group" id="iconWomen" transform="translate(876,383)" style="cursor:pointer">
                <image class="icon-default" href="{{ asset('images/home/icons/women.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
                <image class="icon-hover" href="{{ asset('images/home/icons/women-orange.svg') }}"
                       x="-28" y="-28" width="56" height="56"/>
            </g>

        </svg>

        {{-- LABELS --}}
        {{-- Water icon at SVG(173,291) → 17.3%, 52% — label above-left --}}
        <div class="orbit-label orbit-label--tl" id="labelWater">
            Water Positive<br>Renewable<br>Energy
        </div>

        {{-- Metals icon at SVG(827,291) → 82.7%, 52% — label above-right --}}
        <div class="orbit-label orbit-label--tr" id="labelMetals">
            Critical Metals<br>Recovered<br>Responsibly
        </div>

        {{-- CAGR icon at SVG(124,383) → 12.4%, 68.4% — label to the left --}}
        <div class="orbit-label orbit-label--bl" id="labelCagr">
            Growing CAGR<br>of 40% since<br>inception
        </div>

        {{-- Women icon at SVG(876,383) → 87.6%, 68.4% — label to the right --}}
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