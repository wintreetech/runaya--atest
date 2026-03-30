<section class="essence-section" id="essenceSection">

    <h2 class="essence-heading">The Essence that Shapes Us at Runaya</h2>

    <div class="essence-grid" id="essenceGrid">

        {{--
            4 panels: Sustainability, Governance, Community, People
            Default active: Sustainability (index 0) — shows text content
            Others: show line-art image + label at bottom
            On hover: that panel expands to text, others collapse to image
        --}}

        {{-- SUSTAINABILITY --}}
        <div class="essence-panel" data-index="0" id="essPanel0">
            {{-- Text face (shown when active) --}}
            <div class="essence-face essence-face--text">
                <div class="essence-text-inner">
                    <h3 class="essence-label-text">Sustainability</h3>
                    <div class="essence-icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 3C9 3 4 10 6 18c1.5 6 7 10 10 10s8.5-4 10-10c2-8-3-15-10-15z" stroke="white" stroke-width="1.5" fill="none"/>
                            <path d="M10 20 Q16 14 22 20" stroke="white" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="essence-bottom">
                        <p class="essence-desc">
                            Embedding circular manufacturing practices that lower environmental impact while strengthening long-term operational resilience.
                        </p>
                        <a href="{{ route('esg.sustainability') }}" class="essence-btn">KNOW MORE</a>
                    </div>
                </div>
            </div>
            {{-- Image face (shown when inactive) --}}
            <div class="essence-face essence-face--img">
                <img src="{{ asset('images/home/essence/sustainability.png') }}" alt="Sustainability">
                <div class="essence-img-overlay"></div>
                <span class="essence-img-label">Sustainability</span>
            </div>
        </div>

        {{-- GOVERNANCE --}}
        <div class="essence-panel" data-index="1" id="essPanel1">
            <div class="essence-face essence-face--text">
                <div class="essence-text-inner">
                    <h3 class="essence-label-text">Governance</h3>
                    <div class="essence-icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6" y="14" width="20" height="14" rx="1" stroke="white" stroke-width="1.5"/>
                            <path d="M10 14V10a6 6 0 0 1 12 0v4" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            <circle cx="16" cy="20" r="2" stroke="white" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="essence-bottom">
                        <p class="essence-desc">
                            Upholding transparent, ethical governance structures that build stakeholder trust and drive long-term accountability across all business operations.
                        </p>
                        <a href="{{ route('about.index') }}" class="essence-btn">KNOW MORE</a>
                    </div>
                </div>
            </div>
            <div class="essence-face essence-face--img">
                <img src="{{ asset('images/home/essence/governance.png') }}" alt="Governance">
                <div class="essence-img-overlay"></div>
                <span class="essence-img-label">Governance</span>
            </div>
        </div>

        {{-- COMMUNITY --}}
        <div class="essence-panel" data-index="2" id="essPanel2">
            <div class="essence-face essence-face--text">
                <div class="essence-text-inner">
                    <h3 class="essence-label-text">Community</h3>
                    <div class="essence-icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="10" r="4" stroke="white" stroke-width="1.5"/>
                            <circle cx="7"  cy="13" r="3" stroke="white" stroke-width="1.5"/>
                            <circle cx="25" cy="13" r="3" stroke="white" stroke-width="1.5"/>
                            <path d="M4 26a8 8 0 0 1 8-6h8a8 8 0 0 1 8 6" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M1 26a5 5 0 0 1 5-4" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M31 26a5 5 0 0 0-5-4" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="essence-bottom">
                        <p class="essence-desc">
                           Creating shared value with local communities through inclusive growth, skill development and sustainable livelihoods around our operations.
                        </p>
                        <a href="{{ route('esg.index') }}" class="essence-btn">KNOW MORE</a>
                    </div>
                </div>
            </div>
            <div class="essence-face essence-face--img">
                <img src="{{ asset('images/home/essence/community.png') }}" alt="Community">
                <div class="essence-img-overlay"></div>
                <span class="essence-img-label">Community</span>
            </div>
        </div>

        {{-- PEOPLE --}}
        <div class="essence-panel" data-index="3" id="essPanel3">
            <div class="essence-face essence-face--text">
                <div class="essence-text-inner">
                    <h3 class="essence-label-text">People</h3>
                    <div class="essence-icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="9" r="5" stroke="white" stroke-width="1.5"/>
                            <path d="M6 28a10 10 0 0 1 20 0" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M21 16l3 3-3 3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="essence-bottom">
                        <p class="essence-desc">
                            Fostering a diverse, empowered workforce where every individual can thrive — with 55% women employees and leaders driving Runaya's mission forward.
                        </p>
                        <a href="{{ route('careers.index') }}" class="essence-btn">KNOW MORE</a>
                    </div>
                </div>
            </div>
            <div class="essence-face essence-face--img">
                <img src="{{ asset('images/home/essence/people.png') }}" alt="People">
                <div class="essence-img-overlay"></div>
                <span class="essence-img-label">People</span>
            </div>
        </div>

    </div>

</section>