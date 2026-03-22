<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Testimonials</title>
    <meta name="description" content="Borrower testimonials and success stories from Harborwell Finance.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#8B2B36">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            {!! file_get_contents(resource_path('css/welcome.css')) !!}
        </style>
    @endif
</head>
<body id="top" class="page-testimonials">
    <x-landing.header />

    <main>
        <section class="testimonials-hero">
            <div class="container testimonials-hero-inner">
                <h1>Real Success Stories</h1>
                <p>UK borrowers who unlocked clearer terms, faster decisions, and flexible repayment with Harborwell Finance.</p>
            </div>
        </section>

        <section class="testimonials-impact">
            <div class="container impact-inner">
                <div class="impact-header">
                    <h2>Our Impact</h2>
                    <p>Growing with everyday borrowers across the UK.</p>
                </div>
                <div class="impact-grid">
                    <div class="impact-card">
                        <strong>1,800+</strong>
                        <span>Clients served</span>
                    </div>
                    <div class="impact-card">
                        <strong>£12M+</strong>
                        <span>Loans disbursed</span>
                    </div>
                    <div class="impact-card">
                        <strong>4.8/5</strong>
                        <span>Customer satisfaction</span>
                    </div>
                    <div class="impact-card">
                        <strong>320+</strong>
                        <span>Businesses funded</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-stories">
            <div class="container">
                <div class="stories-header">
                    <h2>Transforming lives across the UK</h2>
                    <p>Read how Harborwell Finance helped borrowers move forward with confidence.</p>
                </div>
                <div class="stories-carousel" data-stories-carousel>
                    <div class="stories-viewport" data-stories-viewport>
                        <div class="stories-track" data-stories-track>
                            <article class="story-slide">
                                <div class="story-card">
                                    <div class="story-card-head">
                                        <h3>Amelia Harper</h3>
                                        <span>Manchester, North West</span>
                                        <span class="story-pill">Business loan</span>
                                    </div>
                                    <div class="story-card-body">
                                        <p>“We expanded our catering service after receiving clear terms and a quick approval.”</p>
                                        <div class="story-amount">£40,000</div>
                                    </div>
                                </div>
                            </article>
                            <article class="story-slide">
                                <div class="story-card">
                                    <div class="story-card-head">
                                        <h3>James Whitfield</h3>
                                        <span>Leeds, Yorkshire</span>
                                        <span class="story-pill">Personal loan</span>
                                    </div>
                                    <div class="story-card-body">
                                        <p>“The repayment schedule was transparent and the team answered every question.”</p>
                                        <div class="story-amount">£28,000</div>
                                    </div>
                                </div>
                            </article>
                            <article class="story-slide">
                                <div class="story-card">
                                    <div class="story-card-head">
                                        <h3>Charlotte Evans</h3>
                                        <span>Birmingham, West Midlands</span>
                                        <span class="story-pill">Asset finance</span>
                                    </div>
                                    <div class="story-card-body">
                                        <p>“I upgraded my vehicle fleet and now take on larger contracts with confidence.”</p>
                                        <div class="story-amount">£180,000</div>
                                    </div>
                                </div>
                            </article>
                            <article class="story-slide">
                                <div class="story-card">
                                    <div class="story-card-head">
                                        <h3>Oliver Reed</h3>
                                        <span>London, Greater London</span>
                                        <span class="story-pill">Personal loan</span>
                                    </div>
                                    <div class="story-card-body">
                                        <p>“I covered urgent family expenses and tracked every update through the status link.”</p>
                                        <div class="story-amount">£18,500</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <button class="stories-nav stories-nav--prev" type="button" aria-label="Previous testimonial" data-stories-prev>‹</button>
                    <button class="stories-nav stories-nav--next" type="button" aria-label="Next testimonial" data-stories-next>›</button>
                    <div class="stories-dots" data-stories-dots>
                        <button class="dot is-active" type="button" aria-label="Slide 1" data-stories-dot></button>
                        <button class="dot" type="button" aria-label="Slide 2" data-stories-dot></button>
                        <button class="dot" type="button" aria-label="Slide 3" data-stories-dot></button>
                        <button class="dot" type="button" aria-label="Slide 4" data-stories-dot></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-cta">
            <div class="container cta-inner">
                <h2>Ready to write your success story?</h2>
                <p>Join borrowers across the UK who chose a clearer path to funding.</p>
                <a class="btn btn-primary" href="/apply/">Apply for a loan today</a>
            </div>
        </section>
    </main>

    <x-landing.footer />

    <script>
        (() => {
            const carousel = document.querySelector('[data-stories-carousel]');
            if (!carousel) return;
            const track = carousel.querySelector('[data-stories-track]');
            const prevButton = carousel.querySelector('[data-stories-prev]');
            const nextButton = carousel.querySelector('[data-stories-next]');
            const dots = Array.from(carousel.querySelectorAll('[data-stories-dot]'));
            const originalSlides = Array.from(track?.children || []);
            if (!track || originalSlides.length === 0) return;

            let perView = 1;
            let index = 0;
            let isTransitioning = false;
            let clones = { left: [], right: [] };

            const getPerView = () => (window.innerWidth >= 1024 ? 3 : 1);

            const updateDots = () => {
                if (!dots.length) return;
                const total = originalSlides.length;
                const active = ((index - perView) % total + total) % total;
                dots.forEach((dot, dotIndex) => dot.classList.toggle('is-active', dotIndex === active));
            };

            const getStep = () => {
                const first = track.children[0];
                if (!first) return 0;
                const style = window.getComputedStyle(track);
                const gap = parseFloat(style.columnGap || style.gap || 0);
                return first.getBoundingClientRect().width + gap;
            };

            const setPosition = (animate) => {
                const step = getStep();
                track.style.transition = animate ? 'transform 0.5s ease' : 'none';
                track.style.transform = `translateX(${-index * step}px)`;
            };

            const clearClones = () => {
                clones.left.forEach((clone) => clone.remove());
                clones.right.forEach((clone) => clone.remove());
                clones = { left: [], right: [] };
            };

            const setupClones = () => {
                clearClones();
                const total = originalSlides.length;
                const count = Math.min(perView, total);
                const slides = Array.from(track.children);
                const head = slides.slice(0, count).map((slide) => slide.cloneNode(true));
                const tail = slides.slice(-count).map((slide) => slide.cloneNode(true));
                tail.forEach((clone) => {
                    clone.setAttribute('data-clone', 'true');
                    track.insertBefore(clone, track.firstChild);
                    clones.left.push(clone);
                });
                head.forEach((clone) => {
                    clone.setAttribute('data-clone', 'true');
                    track.appendChild(clone);
                    clones.right.push(clone);
                });
                index = count;
                setPosition(false);
                updateDots();
            };

            const moveTo = (nextIndex) => {
                if (isTransitioning) return;
                isTransitioning = true;
                index = nextIndex;
                setPosition(true);
            };

            track.addEventListener('transitionend', () => {
                const total = originalSlides.length;
                if (index >= total + perView) {
                    index = perView;
                    setPosition(false);
                }
                if (index < perView) {
                    index = total + perView - 1;
                    setPosition(false);
                }
                isTransitioning = false;
                updateDots();
            });

            prevButton?.addEventListener('click', () => moveTo(index - 1));
            nextButton?.addEventListener('click', () => moveTo(index + 1));

            dots.forEach((dot, dotIndex) => {
                dot.addEventListener('click', () => moveTo(dotIndex + perView));
            });

            const handleResize = () => {
                const nextPerView = getPerView();
                if (nextPerView === perView) return;
                perView = nextPerView;
                setupClones();
            };

            perView = getPerView();
            if (originalSlides.length <= perView) {
                carousel.classList.add('is-static');
                if (prevButton) prevButton.disabled = true;
                if (nextButton) nextButton.disabled = true;
                updateDots();
                return;
            }
            setupClones();
            window.addEventListener('resize', handleResize);
        })();
    </script>
</body>
</html>
