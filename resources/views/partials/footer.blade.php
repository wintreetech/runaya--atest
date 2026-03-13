<footer id="site-footer">
    <div class="footer__top">

        <div class="footer__brand">
            <a href="{{ route('home') }}" class="footer__logo">
                <svg viewBox="0 0 40 40" fill="white" width="36" height="36">
                    <path d="M20 3C10.6 3 3 10.6 3 20s7.6 17 17 17 17-7.6 17-17S29.4 3 20 3zm0 3c7.7 0 14 6.3 14 14 0 3.3-1.2 6.4-3.1 8.7L11.3 9.1C13.6 6.2 16.6 4.7 20 6zm0 28C12.3 34 6 27.7 6 20c0-3.3 1.2-6.4 3.1-8.7l19.6 19.6C26.4 33 23.3 34 20 34z"/>
                </svg>
                <span>runaya</span>
            </a>
            <p class="footer__tagline">Build Future Positive</p>
        </div>

        <div class="footer__col">
            <h4>Company</h4>
            <ul>
                <li><a href="{{ route('about.index') }}">Who We Are</a></li>
                <li><a href="{{ route('about.leadership') }}">Our Leadership</a></li>
                <li><a href="{{ route('affiliates') }}">Our Affiliates</a></li>
                <li><a href="{{ route('investor-relations') }}">Investor Relations</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4>Businesses</h4>
            <ul>
                <li><a href="{{ route('businesses.aluminium') }}">Aluminium Recovery</a></li>
                <li><a href="{{ route('businesses.critical-metal') }}">Critical Metal Recovery</a></li>
                <li><a href="{{ route('businesses.mining') }}">Ground Support &amp; Mining</a></li>
                <li><a href="{{ route('businesses.datacentre') }}">Datacentre Manufacturing</a></li>
                <li><a href="{{ route('businesses.telecom') }}">Telecom Grade FRP</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4>ESG</h4>
            <ul>
                <li><a href="{{ route('esg.sustainability') }}">Sustainability</a></li>
                <li><a href="{{ route('esg.sherises') }}">#SheRises</a></li>
                <li><a href="{{ route('esg.safety') }}">Safety</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4>Connect</h4>
            <ul>
                <li><a href="{{ route('careers.index') }}">Careers</a></li>
                <li><a href="{{ route('media.index') }}">Media</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>

    </div>

    <div class="footer__bottom">
        <p>&copy; {{ date('Y') }} Runaya. All rights reserved.</p>
        <div class="footer__legal">
            <a href="{{ route('privacy') }}">Privacy Policy</a>
            <a href="{{ route('terms') }}">Terms of Use</a>
        </div>
    </div>
</footer>