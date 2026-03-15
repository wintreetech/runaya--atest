<section class="mh-section" id="mediaHub">
    <div class="mh-inner">

        {{-- COL 1: Latest Reports --}}
        <div class="mh-col">
            <div class="mh-card mh-card--reports">
                <h3 class="mh-heading">Latest Reports</h3>

                <ul class="mh-report-list">
                    <li class="mh-report-item">
                        <a href="#">Interactive Annual Report 2025</a>
                    </li>
                    <li class="mh-report-item">
                        <a href="#">Tax Transparency Report 2025</a>
                    </li>
                    <li class="mh-report-item">
                        <a href="#">Sustainability Report 2025</a>
                    </li>
                    <li class="mh-report-item">
                        <a href="#">Climate Action Report 2025</a>
                    </li>
                    <li class="mh-report-item">
                        <a href="#">AAF Social Impact Compendium 2024</a>
                    </li>
                </ul>

                <a href="{{ route('media.index') }}" class="mh-view-all mh-view-all--orange">
                    <span>View All</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- COL 2: Press Releases --}}
        <div class="mh-col">
            <div class="mh-card mh-card--press">
                <h3 class="mh-heading">Press Releases</h3>

                <div class="mh-article-wrap">
                    {{-- Articles cycle via JS --}}
                    <div class="mh-article is-active" data-press="0">
                        <div class="mh-article-img">
                            <img src="{{ asset('images/home/press/press-1.png') }}" alt="Press Release"
                                 onerror="this.parentElement.classList.add('img-fallback')">
                        </div>
                        <span class="mh-date">Jan 2nd, 2026</span>
                        <p class="mh-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="mh-article" data-press="1">
                        <div class="mh-article-img">
                            <img src="{{ asset('images/home/press/press-2.jpg') }}" alt="Press Release"
                                 onerror="this.parentElement.classList.add('img-fallback')">
                        </div>
                        <span class="mh-date">Dec 15th, 2025</span>
                        <p class="mh-excerpt">Runaya strengthens India's critical metals ecosystem with new processing facility in Rajasthan.</p>
                    </div>

                    <div class="mh-article" data-press="2">
                        <div class="mh-article-img">
                            <img src="{{ asset('images/home/press/press-3.jpg') }}" alt="Press Release"
                                 onerror="this.parentElement.classList.add('img-fallback')">
                        </div>
                        <span class="mh-date">Nov 28th, 2025</span>
                        <p class="mh-excerpt">Runaya achieves 100% renewable energy milestone across all manufacturing operations.</p>
                    </div>
                </div>

                <div class="mh-footer">
                    <button class="mh-nav-btn" id="pressPrev" aria-label="Previous">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>
                    <a href="{{ route('media.press') }}" class="mh-view-all mh-view-all--teal">View All</a>
                    <button class="mh-nav-btn" id="pressNext" aria-label="Next">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- COL 3: Articles --}}
        <div class="mh-col">
            <div class="mh-card mh-card--articles">
                <h3 class="mh-heading">Articles</h3>

                <div class="mh-article-wrap">
                    <div class="mh-article is-active" data-article="0">
                        <div class="mh-article-img">
                            <img src="{{ asset('images/home/articles/article-1.png') }}" alt="Article"
                                 onerror="this.parentElement.classList.add('img-fallback')">
                        </div>
                        <span class="mh-date">Jan 2nd, 2026</span>
                        <p class="mh-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="mh-article" data-article="1">
                        <div class="mh-article-img">
                            <img src="{{ asset('images/home/articles/article-2.jpg') }}" alt="Article"
                                 onerror="this.parentElement.classList.add('img-fallback')">
                        </div>
                        <span class="mh-date">Dec 20th, 2025</span>
                        <p class="mh-excerpt">How circular manufacturing is reshaping India's aluminium sector for a sustainable future.</p>
                    </div>

                    <div class="mh-article" data-article="2">
                        <div class="mh-article-img">
                            <img src="{{ asset('images/home/articles/article-3.jpg') }}" alt="Article"
                                 onerror="this.parentElement.classList.add('img-fallback')">
                        </div>
                        <span class="mh-date">Nov 10th, 2025</span>
                        <p class="mh-excerpt">Women in manufacturing: Runaya's approach to building an inclusive workforce at scale.</p>
                    </div>
                </div>

                <div class="mh-footer">
                    <button class="mh-nav-btn" id="articlePrev" aria-label="Previous">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>
                    <a href="{{ route('media.index') }}" class="mh-view-all mh-view-all--teal">View All</a>
                    <button class="mh-nav-btn" id="articleNext" aria-label="Next">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>