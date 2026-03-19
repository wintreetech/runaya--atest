<section class="fc-section" id="facilityCarousel">

    <div class="fc-track-outer">

        <div class="fc-track" id="fcTrack">

            <div class="fc-slide is-active">
                <div class="fc-img">
                    <img src="{{ asset('images/home/facilities/facility-1.png') }}" alt="Aluminium Recovery Facility"
                         onerror="this.parentElement.style.background='#1a5c6b'">
                </div>
                <div class="fc-overlay"></div>
                <div class="fc-content">
                    <!-- <h3 class="fc-title">Aluminium Recovery<br>Business</h3> -->
                    <h3 class="fc-title">Ground Support<br>Solutions</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Chanderiya
                    </span>
                </div>
            </div>

            <div class="fc-slide">
                <div class="fc-img">
                    <img src="{{ asset('images/home/facilities/facility-2.png') }}" alt="Critical Metal Recovery"
                         onerror="this.parentElement.style.background='#0e3d49'">
                </div>
                <div class="fc-overlay"></div>
                <div class="fc-content">
                    <h3 class="fc-title">Critical Metal<br>Recovery Business</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Rajasthan
                    </span>
                </div>
            </div>

            <div class="fc-slide">
                <div class="fc-img">
                    <img src="{{ asset('images/home/facilities/facility-3.png') }}" alt="Ground Support & Mining"
                         onerror="this.parentElement.style.background='#507989'">
                </div>
                <div class="fc-overlay"></div>
                <div class="fc-content">
                    <h3 class="fc-title">Aluminium Recovery<br>Business</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Jharsuguda
                    </span>
                </div>
            </div>
        </div>

        <button class="fc-arrow fc-arrow--left" id="fcPrev" aria-label="Previous facility">
            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>
        <button class="fc-arrow fc-arrow--right" id="fcNext" aria-label="Next facility">
            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 6 15 12 9 18"/>
            </svg>
        </button>

        <div class="fc-dots" id="fcDots">
            <span class="fc-dot is-active" data-index="0"></span>
            <span class="fc-dot" data-index="1"></span>
            <span class="fc-dot" data-index="2"></span>
        </div>

    </div>

</section>