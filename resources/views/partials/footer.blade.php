<footer id="site-footer">

    {{-- Watermark layer: PNG image --}}
    <div class="footer__watermark" aria-hidden="true">
        <img src="{{ asset('images/footer-watermark.png') }}" alt="" class="footer__wm-img">
    </div>

    {{-- Main nav columns --}}
    <div class="footer__top">

        {{-- About Us --}}
        <div class="footer__col">
            <h4 class="footer__col-title">About Us</h4>
            <ul>
                <li><a href="{{ route('about.index') }}">Vision</a></li>
                <li><a href="{{ route('about.index') }}">Who We Are</a></li>
                <li><a href="{{ route('about.leadership') }}">Leadership Team</a></li>
            </ul>

            <h4 class="footer__col-title footer__col-title--spaced">ESG</h4>

            {{-- Social icons --}}
            <div class="footer__social">
                <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener" class="footer__social-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                        <rect x="2" y="9" width="4" height="12"/>
                        <circle cx="4" cy="4" r="2"/>
                    </svg>
                </a>
                <a href="#" aria-label="X / Twitter" target="_blank" rel="noopener" class="footer__social-link">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" target="_blank" rel="noopener" class="footer__social-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Our Businesses --}}
        <div class="footer__col">
            <h4 class="footer__col-title">Our Businesses</h4>
            <ul>
                <li><a href="{{ route('businesses.aluminium') }}">Aluminium Recovery</a></li>
                <li><a href="{{ route('businesses.critical-metal') }}">Diversified Metal Recovery</a></li>
                <li><a href="{{ route('businesses.datacentre') }}">Gas-Atomized Aluminium Powder</a></li>
                <li><a href="{{ route('businesses.mining') }}">Ground Support &amp; Mining Solutions</a></li>
            </ul>
        </div>

        {{-- Careers + Contact --}}
        <div class="footer__col">
            <h4 class="footer__col-title">Careers</h4>
            <ul>
                <li><a href="{{ route('careers.index') }}">Careers@Runaya</a></li>
                <li><a href="{{ route('careers.life') }}">People Of Runaya</a></li>
            </ul>

            <h4 class="footer__col-title footer__col-title--spaced">Contact Us</h4>
            <ul>
                <li><a href="{{ route('contact') }}">Registered Office</a></li>
                <li><a href="{{ route('contact') }}">Business Contact</a></li>
            </ul>
        </div>

        {{-- Media --}}
        <div class="footer__col">
            <h4 class="footer__col-title">Media</h4>
            <ul>
                <li><a href="{{ route('media.press') }}">Press Releases</a></li>
                <li><a href="{{ route('media.index') }}">Media Coverages</a></li>
                <li><a href="{{ route('media.index') }}">Media Contact</a></li>
                <li><a href="{{ route('media.index') }}">Blogs</a></li>
            </ul>
        </div>

    </div>

    {{-- Bottom bar --}}
    <div class="footer__bottom">
        <p>&copy; {{ date('Y') }} Runaya. All rights reserved.</p>
        <div class="footer__legal">
            <a href="{{ route('privacy') }}">Privacy Policy</a>
            <a href="{{ route('terms') }}">Terms of Use</a>
        </div>
    </div>

    {{-- Product Enquiry floating button --}}
    <a href="{{ route('contact') }}" class="footer__enquiry" aria-label="Product Enquiry">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round">
            <circle cx="12" cy="12" r="10"/>
            <line x1="12" y1="8" x2="12" y2="12"/>
            <line x1="12" y1="16" x2="12.01" y2="16"/>
        </svg>
        <span>Product<br>Enquiry</span>
    </a>

</footer>