@extends('layouts.app')

@section('title', 'Runaya – Build Future Positive')
@section('body_class', 'page-home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stats-orbit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/critical-metals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/our-businesses.css') }}">
    <link rel="stylesheet" href="{{ asset('css/facility-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/essence.css') }}">
    <link rel="stylesheet" href="{{ asset('css/our-locations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accolades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-hub.css') }}">
    <link rel="stylesheet" href="{{ asset('css/safety-core.css') }}">

@endpush

@section('content')

<section class="hero" id="hero">

    <div class="slide is-active" id="slide-0">
    <div class="slide-bg">
        <video autoplay muted loop playsinline class="slide-video">
            <source src="{{ asset('videos/corporate-banner.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div class="slide-content">
    <h1 class="corporate"><span style="font-weight: 500;">Build</span><br>Future Positive</h1>
</div>
</div>

    <div class="slide" id="slide-1">
        <div class="slide-bg" style="background-image: url('{{ asset('images/hero/sustainability.png') }}')"></div>
        <div class="slide-content">
    <h1 class="sustainability">Among the Top 7% <br> Worldwide in S&P <br>Global CSA <br> Fundamental</h1>
</div>
    </div>

    <div class="slide" id="slide-2">
        <div class="slide-bg" style="background-image: url('{{ asset('images/hero/esg.png') }}')"></div>
        <div class="slide-content">
    <h1 class="esg">Purpose,<br>Responsibility<br>and Impact</h1>
</div>
    </div>

    <div class="slide" id="slide-3">
        <div class="slide-bg" style="background-image: url('{{ asset('images/hero/safety.png') }}')"></div>
        <div class="slide-content">
    <h1 class="safety">Built on trust,<br>driven by<br>safety</h1>
</div>
    </div>

    <div class="slide" id="slide-4">
        <div class="slide-bg" style="background-image: url('{{ asset('images/hero/diversity.jpg') }}')"></div>
        <div class="slide-content">
    <h1 class="diversity">Different Minds<br>One Direction</h1>
</div>
    </div>

    <div class="carousel-tabs" id="carouselTabs">
        <button class="tab is-active" data-index="0">
            <span class="tab-num">01.</span>
            <span class="tab-label">Corporate</span>
            <span class="tab-progress" id="progress-0"></span>
        </button>
        <button class="tab" data-index="1">
            <span class="tab-num">02.</span>
            <span class="tab-label">Sustainability</span>
            <span class="tab-progress" id="progress-1"></span>
        </button>
        <button class="tab" data-index="2">
            <span class="tab-num">03.</span>
            <span class="tab-label">ESG</span>
            <span class="tab-progress" id="progress-2"></span>
        </button>
        <button class="tab" data-index="3">
            <span class="tab-num">04.</span>
            <span class="tab-label">Safety</span>
            <span class="tab-progress" id="progress-3"></span>
        </button>
        <button class="tab" data-index="4">
            <span class="tab-num">05.</span>
            <span class="tab-label">Diversity</span>
            <span class="tab-progress" id="progress-4"></span>
        </button>
    </div>

    <button class="arrow arrow--left"  id="arrowLeft"  aria-label="Previous slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"/>
        </svg>
    </button>
    <button class="arrow arrow--right" id="arrowRight" aria-label="Next slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 6 15 12 9 18"/>
        </svg>
    </button>

</section>

    {{-- Stats orbit + about intro --}}
    @include('partials.sections.stats-orbit')

    {{-- Critical Metals Recovery --}}
    @include('partials.sections.critical-metals')

    {{-- Our Businesses carousel --}}
    @include('partials.sections.our-businesses')

    {{-- Safety Core section --}}
    @include('partials.sections.safety-core')

    {{-- Facility carousel --}}
    @include('partials.sections.facility-carousel')

    {{-- Essence section --}}
    @include('partials.sections.essence')

    {{-- Our Locations --}}
    @include('partials.sections.our-locations')

    {{-- Accolades ticker --}}
    @include('partials.sections.accolades')

    {{-- Media Hub --}}
    @include('partials.sections.media-hub')


@endsection

@push('scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/stats-orbit.js') }}"></script>
    <script src="{{ asset('js/critical-metals.js') }}"></script>
    <script src="{{ asset('js/our-businesses.js') }}"></script>
    <script src="{{ asset('js/facility-carousel.js') }}"></script>
    <script src="{{ asset('js/essence.js') }}"></script>
    <script src="{{ asset('js/our-locations.js') }}"></script>
    <script src="{{ asset('js/media-hub.js') }}"></script>
@endpush