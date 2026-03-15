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
                    <h3 class="fc-title">Aluminium Recovery Business</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Korba, Chhattisgarh
                    </span>
                </div>
            </div>

            <div class="fc-slide">
                <div class="fc-img">
                    <img src="{{ asset('images/home/facilities/facility-1.png') }}" alt="Critical Metal Recovery"
                         onerror="this.parentElement.style.background='#0e3d49'">
                </div>
                <div class="fc-overlay"></div>
                <div class="fc-content">
                    <h3 class="fc-title">Critical Metal Recovery Business</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Chittorgarh, Rajasthan
                    </span>
                </div>
            </div>

            <div class="fc-slide">
                <div class="fc-img">
                    <img src="{{ asset('images/home/facilities/facility-1.png') }}" alt="Ground Support & Mining"
                         onerror="this.parentElement.style.background='#507989'">
                </div>
                <div class="fc-overlay"></div>
                <div class="fc-content">
                    <h3 class="fc-title">Ground Support and Mining Solutions</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Bhilwara, Rajasthan
                    </span>
                </div>
            </div>

            <div class="fc-slide">
                <div class="fc-img">
                    <img src="{{ asset('images/home/facilities/facility-1.png') }}" alt="Datacentre Manufacturing"
                         onerror="this.parentElement.style.background='#1a5c6b'">
                </div>
                <div class="fc-overlay"></div>
                <div class="fc-content">
                    <h3 class="fc-title">Datacentre &amp; FRP Manufacturing</h3>
                    <span class="fc-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Jharsuguda, Odisha
                    </span>
                </div>
            </div>

        </div>

        {{-- Arrows — vertically centred on the image --}}
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

        {{-- Progress dots --}}
        <div class="fc-dots" id="fcDots">
            <span class="fc-dot is-active" data-index="0"></span>
            <span class="fc-dot" data-index="1"></span>
            <span class="fc-dot" data-index="2"></span>
            <span class="fc-dot" data-index="3"></span>
        </div>

    </div>

</section>