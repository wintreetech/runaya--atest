<section class="ob-section" id="ourBusinesses">

    <h2 class="ob-heading">Our Businesses</h2>

    <div class="ob-wrapper">

        {{--
            Each card:
            - bg image (line-art style, dark)
            - dark overlay
            - centred text content
            - arrows only on active/centre card
        --}}

        <div class="ob-track" id="obTrack">

            {{-- Card 1: Aluminium Recovery --}}
            <div class="ob-card" data-index="0">
                <div class="ob-card__bg">
                    <img src="{{ asset('images/home/businesses/aluminium-recovery-business.png') }}" alt="Aluminium Recovery">
                </div>
                <div class="ob-card__overlay"></div>
                <div class="ob-card__content">
                    <h3>Aluminium Recovery Business</h3>
                    <p>Runaya's aluminium recovery business delivers significantly lower emissions through zero waste,
                    zero discharge processing that turns aluminium dross into high value metal instead of landfill.</p>
                    <a href="{{ route('businesses.aluminium') }}" class="ob-btn">KNOW MORE</a>
                </div>
                <button class="ob-arrow ob-arrow--left" aria-label="Previous">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>
                </button>
                <button class="ob-arrow ob-arrow--right" aria-label="Next">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 6 15 12 9 18"/>
                    </svg>
                </button>
            </div>

            {{-- Card 2: Critical Metal Recovery --}}
            <div class="ob-card" data-index="1">
                <div class="ob-card__bg">
                    <img src="{{ asset('images/home/businesses/critical-metal-recovery.png') }}" alt="Critical Metal Recovery">
                </div>
                <div class="ob-card__overlay"></div>
                <div class="ob-card__content">
                    <h3>Critical Metal Recovery</h3>
                    <p>Recovering critical metals responsibly to support India's manufacturing and energy transition
                    goals with 100% renewable-powered operations at scale.</p>
                    <a href="{{ route('businesses.critical-metal') }}" class="ob-btn">KNOW MORE</a>
                </div>
                <button class="ob-arrow ob-arrow--left" aria-label="Previous">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>
                </button>
                <button class="ob-arrow ob-arrow--right" aria-label="Next">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 6 15 12 9 18"/>
                    </svg>
                </button>
            </div>

            {{-- Card 3: Ground Support & Mining --}}
            <div class="ob-card" data-index="2">
                <div class="ob-card__bg">
                    <img src="{{ asset('images/home/businesses/gas-atomized-aluminium-powder.png') }}" alt="Ground Support & Mining">
                </div>
                <div class="ob-card__overlay"></div>
                <div class="ob-card__content">
                    <h3>Ground Support &amp; Mining Solutions</h3>
                    <p>Delivering advanced ground support solutions for safer and more efficient mining
                    operations across India's leading mines.</p>
                    <a href="{{ route('businesses.mining') }}" class="ob-btn">KNOW MORE</a>
                </div>
                <button class="ob-arrow ob-arrow--left" aria-label="Previous">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>
                </button>
                <button class="ob-arrow ob-arrow--right" aria-label="Next">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 6 15 12 9 18"/>
                    </svg>
                </button>
            </div>

            {{-- Card 4: Datacentre Manufacturing --}}
            <div class="ob-card" data-index="3">
                <div class="ob-card__bg">
                    <img src="{{ asset('images/home/businesses/ground-support-solutions.png') }}" alt="Datacentre Manufacturing">
                </div>
                <div class="ob-card__overlay"></div>
                <div class="ob-card__content">
                    <h3>Datacentre &amp; FRP Manufacturing</h3>
                    <p>Telecom-grade FRP infrastructure and datacentre manufacturing solutions
                    powering India's growing digital and connectivity backbone.</p>
                    <a href="{{ route('businesses.datacentre') }}" class="ob-btn">KNOW MORE</a>
                </div>
                <button class="ob-arrow ob-arrow--left" aria-label="Previous">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>
                </button>
                <button class="ob-arrow ob-arrow--right" aria-label="Next">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 6 15 12 9 18"/>
                    </svg>
                </button>
            </div>

        </div>

    </div>

</section>