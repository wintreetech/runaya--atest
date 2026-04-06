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
                        <h4>WasteMet Global Award 2021</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Best Sustainability Initiative 2022</h4>
                         <p>CII-ITC Sustainability Awards for Excellence in Environment Management</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Great Place to Work Certified 2026-27</h4>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>10th Annual GreenTech HR Award 2023</h4>
                           <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Economic Times</h4>
                         <p>Future Ready Organizations Award – 2024</p>
                    </div>
                </div>

                 <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                         <h4>Economic Times Human Capital Awards</h4>
                         <p>Excellence in Reward & Recognition Programs</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                         <h4>Manufacturing Today</h4>
                         <p>Excellence in Green Manufacturing</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>AFAQS! Brand Storyz</h4>
                         <p>‘Best Use of Newsletter sRunaya Rundown’ and ‘Best Campaign in B2B’</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>PeopleFirst</h4>
                         <p>HR Excellence Award - Diversity Equity Inclusion</p>
                    </div>
                </div>

                  <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                       <h4>SHRM</h4>
                         <p>Excellence in Total Rewards</p>
                    </div>
                </div>

                 <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>WE Matter</h4>
                        <p>W.E.(Wellbeing Engagement) Matter Global Employees Choice Workplace 2024’</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                      <h4>Indian CSR Award</h4>
                        <p>Best CSR Project of the Year (Education)</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>PeopleFirst</h4>
                         <p>Leading Practice in CSR Activities</p>
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
                        <h4>WasteMet Global Award 2021</h4>
                        <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Best Sustainability Initiative 2022</h4>
                         <p>CII-ITC Sustainability Awards for Excellence in Environment Management</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Great Place to Work Certified 2026-27</h4>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>10th Annual GreenTech HR Award 2023</h4>
                           <p>Foundation Global Awards 2020 in WasteMet category by Energy and Environment Foundation</p>
                    </div>
                </div>

                <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>Economic Times</h4>
                         <p>Future Ready Organizations Award – 2024</p>
                    </div>
                </div>

                 <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                         <h4>Economic Times Human Capital Awards</h4>
                         <p>Excellence in Reward & Recognition Programs</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                         <h4>Manufacturing Today</h4>
                         <p>Excellence in Green Manufacturing</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>AFAQS! Brand Storyz</h4>
                         <p>‘Best Use of Newsletter sRunaya Rundown’ and ‘Best Campaign in B2B’</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>PeopleFirst</h4>
                         <p>HR Excellence Award - Diversity Equity Inclusion</p>
                    </div>
                </div>

                  <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                       <h4>SHRM</h4>
                         <p>Excellence in Total Rewards</p>
                    </div>
                </div>

                 <div class="ac-card">
                        <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>WE Matter</h4>
                        <p>W.E.(Wellbeing Engagement) Matter Global Employees Choice Workplace 2024’</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                      <h4>Indian CSR Award</h4>
                        <p>Best CSR Project of the Year (Education)</p>
                    </div>
                </div>

                <div class="ac-card">
                    <div class="ac-icon">
                        <img src="{{ asset('images/home/awards/award-1.svg') }}" alt="GreenTech HR Award">
                    </div>
                    <div class="ac-text">
                        <h4>PeopleFirst</h4>
                         <p>Leading Practice in CSR Activities</p>
                    </div>
                </div>

            </div> {{-- /set2 --}}
            
           
        </div>{{-- /track --}}
    </div>

    <div class="accolades-strip accolades-strip--bottom"></div>

</section>