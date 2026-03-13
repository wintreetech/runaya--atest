@extends('layouts.app')

@section('title', 'Runaya – Build Future Positive')
@section('body_class', 'page-home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
@endpush

@section('content')

<section class="hero" id="hero">

    <div class="slide is-active" id="slide-0">
        <div class="slide-bg" style="background-image: url('{{ asset('images/corporate.jpg') }}')"></div>
        <div class="slide-content"><h1>Build<br><strong>Future Positive</strong></h1></div>
    </div>

    <div class="slide" id="slide-1">
        <div class="slide-bg" style="background-image: url('{{ asset('images/sustainability.jpg') }}')"></div>
        <div class="slide-content"><h1>Responsible<br><strong>Sustainability</strong></h1></div>
    </div>

    <div class="slide" id="slide-2">
        <div class="slide-bg" style="background-image: url('{{ asset('images/esg.jpg') }}')"></div>
        <div class="slide-content"><h1>Committed to<br><strong>ESG Values</strong></h1></div>
    </div>

    <div class="slide" id="slide-3">
        <div class="slide-bg" style="background-image: url('{{ asset('images/safety.jpg') }}')"></div>
        <div class="slide-content"><h1>Built on Trust,<br><strong>Driven by Safety</strong></h1></div>
    </div>

    <div class="slide" id="slide-4">
        <div class="slide-bg" style="background-image: url('{{ asset('images/diversity.jpg') }}')"></div>
        <div class="slide-content"><h1>Different Minds,<br><strong>One Direction</strong></h1></div>
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

@endsection

@push('scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
@endpush