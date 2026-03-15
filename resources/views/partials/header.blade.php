<nav id="navbar" role="navigation" aria-label="Main navigation">

    <a href="{{ route('home') }}" class="nav-logo" aria-label="Runaya Home">
        <img src="{{ asset('images/logo.png') }}" alt="Runaya" class="nav-logo__img">
    </a>

    <ul class="nav-links">

        <li class="{{ request()->routeIs('about.*') ? 'active' : '' }}">
            <a href="{{ route('about.index') }}">ABOUT <span class="chevron"></span></a>
            <ul class="dropdown">
                <li><a href="{{ route('about.index') }}">Who We Are</a></li>
                <li><a href="{{ route('about.leadership') }}">Our Leadership</a></li>
                <li><a href="{{ route('about.mission') }}">Our Mission</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('businesses.*') ? 'active' : '' }}">
            <a href="{{ route('businesses.index') }}">BUSINESSES <span class="chevron"></span></a>
            <ul class="dropdown">
                <li><a href="{{ route('businesses.aluminium') }}">Aluminium Recovery</a></li>
                <li><a href="{{ route('businesses.critical-metal') }}">Critical Metal Recovery</a></li>
                <li><a href="{{ route('businesses.mining') }}">Ground Support &amp; Mining</a></li>
                <li><a href="{{ route('businesses.datacentre') }}">Datacentre Manufacturing</a></li>
                <li><a href="{{ route('businesses.telecom') }}">Telecom Grade FRP</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('esg.*') ? 'active' : '' }}">
            <a href="{{ route('esg.index') }}">ESG <span class="chevron"></span></a>
            <ul class="dropdown">
                <li><a href="{{ route('esg.index') }}">ESG Overview</a></li>
                <li><a href="{{ route('esg.sustainability') }}">Sustainability</a></li>
                <li><a href="{{ route('esg.sherises') }}">#SheRises</a></li>
                <li><a href="{{ route('esg.safety') }}">Safety</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('affiliates') ? 'active' : '' }}">
            <a href="{{ route('affiliates') }}">OUR AFFILIATES</a>
        </li>

        <li class="{{ request()->routeIs('careers.*') ? 'active' : '' }}">
            <a href="{{ route('careers.index') }}">CAREERS <span class="chevron"></span></a>
            <ul class="dropdown">
                <li><a href="{{ route('careers.index') }}">Current Openings</a></li>
                <li><a href="{{ route('careers.life') }}">Life at Runaya</a></li>
                <li><a href="{{ route('careers.internships') }}">Internships</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('media.*') ? 'active' : '' }}">
            <a href="{{ route('media.index') }}">MEDIA <span class="chevron"></span></a>
            <ul class="dropdown">
                <li><a href="{{ route('media.index') }}">News</a></li>
                <li><a href="{{ route('media.press') }}">Press Releases</a></li>
                <li><a href="{{ route('media.gallery') }}">Gallery</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('investor-relations') ? 'active' : '' }}">
            <a href="{{ route('investor-relations') }}">INVESTOR RELATIONS</a>
        </li>

        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">CONTACT</a>
        </li>

    </ul>

    <button class="nav-search" id="searchBtn" aria-label="Open search">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round">
            <circle cx="11" cy="11" r="7"/>
            <line x1="16.5" y1="16.5" x2="22" y2="22"/>
        </svg>
        <span>SEARCH</span>
    </button>

    <button class="nav-hamburger" id="mobileMenuBtn" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>

</nav>

<div class="search-overlay" id="searchOverlay" aria-hidden="true">
    <button class="search-close" id="searchClose" aria-label="Close search">&times;</button>
    <form action="{{ route('search') }}" method="GET">
        <input type="search" name="q" placeholder="Type to search…" value="{{ request('q') }}" autocomplete="off">
        <button type="submit" class="search-submit">Search</button>
    </form>
</div>