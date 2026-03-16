<section class="accolades-section" id="accoladesSection">

    {{-- Teal top border strip --}}
    <div class="accolades-strip accolades-strip--top"></div>

    <div class="accolades-track-outer">
        {{--
            Two identical sets of cards side by side.
            CSS animation scrolls the whole row left.
            When first set scrolls out, second set is already in view — seamless loop.
        --}}
        <div class="accolades-track" id="accoladesTrack">

            {{-- SET 1 --}}
            <div class="accolades-set">

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>10th Annual GreenTech HR<br>Award 2023</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Best Sustainability<br>Initiative 2022</h4>
                        <p>CII-ITC Sustainability Awards for Excellence in Environment Management</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Great Place to Work<br>Certified 2023</h4>
                        <p>Recognised among India's Top 50 Best Workplaces for Women</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>WasteMet Global<br>Award 2021</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>10th Annual GreenTech HR<br>Award 2023</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

            </div>{{-- /set1 --}}

            {{-- SET 2: exact clone for seamless loop --}}
            <div class="accolades-set" aria-hidden="true">

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>10th Annual GreenTech HR<br>Award 2023</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Best Sustainability<br>Initiative 2022</h4>
                        <p>CII-ITC Sustainability Awards for Excellence in Environment Management</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Great Place to Work<br>Certified 2023</h4>
                        <p>Recognised among India's Top 50 Best Workplaces for Women</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>WasteMet Global<br>Award 2021</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>10th Annual GreenTech HR<br>Award 2023</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

            </div>{{-- /set2 --}}

        </div>{{-- /track --}}
    </div>

    <div class="accolades-strip accolades-strip--bottom"></div>

</section>