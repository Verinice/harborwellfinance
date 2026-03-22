<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | About</title>
    <meta name="description" content="Learn about Harborwell Finance and our approach to transparent lending.">
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
<body id="top" class="page-about">
    <x-landing.header />

    <main>
        <section class="about-hero">
            <div class="container about-hero-inner">
                <h1>Your Financial Growth Partner</h1>
                <p>At Harborwell Finance, we help UK borrowers move faster with transparent terms and practical support. Our focus is clear pricing, thoughtful lending, and results you can trust.</p>
            </div>
        </section>

        <section class="about-story">
            <div class="container about-story-inner">
                <h2>Our Story</h2>
                <p class="about-story-subtitle">A UK lending team focused on practical, everyday finance.</p>
                <div class="about-story-body">
                    <p>Harborwell Finance launched to make borrowing simpler for people who need quick answers and clear next steps.</p>
                    <p>We focus on real needs: home improvements, business growth, education costs, and urgent expenses.</p>
                    <p>So far, we have helped thousands of borrowers access funding across the UK with fair, transparent terms.</p>
                    <p>We are growing steadily with strong customer satisfaction and a commitment to improving the lending experience.</p>
                </div>
            </div>
        </section>

        <section class="about-impact">
            <div class="container impact-inner">
                <div class="impact-header">
                    <h2>Our Impact</h2>
                    <p>Growing with everyday borrowers across the UK.</p>
                </div>
                <div class="impact-grid">
                    <div class="impact-card">
                        <strong>2,400+</strong>
                        <span>Clients served</span>
                    </div>
                    <div class="impact-card">
                        <strong>£18M+</strong>
                        <span>Loans disbursed</span>
                    </div>
                    <div class="impact-card">
                        <strong>4.8/5</strong>
                        <span>Customer satisfaction</span>
                    </div>
                    <div class="impact-card">
                        <strong>420+</strong>
                        <span>Businesses funded</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-testimonials">
            <div class="container">
                <div class="about-section-header">
                    <h2>Client Testimonials</h2>
                    <p>Quick feedback from borrowers across the UK.</p>
                </div>
                <div class="about-testimonials-panel" data-about-carousel>
                    <div class="about-slider-viewport" data-about-viewport>
                        <div class="about-slider-track" data-about-track>
                            <article class="about-testimonial-slide">
                                <div class="about-testimonial-card">
                                    <span class="about-pill">Business Loan</span>
                                    <p>“I took a small top-up to restock my retail shop in Salford. Sales improved in two weeks and repayment has been manageable.”</p>
                                    <div class="about-testimonial-meta">
                                        <strong>Harriet N., Manchester</strong>
                                        <span>Borrowed £35,000</span>
                                    </div>
                                </div>
                            </article>
                            <article class="about-testimonial-slide">
                                <div class="about-testimonial-card">
                                    <span class="about-pill">Education Loan</span>
                                    <p>“The application was straightforward on my phone. I got help in time for my son’s university deposit.”</p>
                                    <div class="about-testimonial-meta">
                                        <strong>Peter O., Leeds</strong>
                                        <span>Borrowed £22,000</span>
                                    </div>
                                </div>
                            </article>
                            <article class="about-testimonial-slide">
                                <div class="about-testimonial-card">
                                    <span class="about-pill">Personal Loan</span>
                                    <p>“Clear terms and fast updates. The status link kept everything organised while I managed the paperwork.”</p>
                                    <div class="about-testimonial-meta">
                                        <strong>Ella W., Bristol</strong>
                                        <span>Borrowed £18,500</span>
                                    </div>
                                </div>
                            </article>
                            <article class="about-testimonial-slide">
                                <div class="about-testimonial-card">
                                    <span class="about-pill">Asset Finance</span>
                                    <p>“Upgraded my vehicle and won new contracts. The team explained every fee before I signed.”</p>
                                    <div class="about-testimonial-meta">
                                        <strong>Daniel P., Birmingham</strong>
                                        <span>Borrowed £60,000</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <button class="about-slider-nav about-slider-nav--prev" type="button" aria-label="Previous testimonial" data-about-prev>‹</button>
                    <button class="about-slider-nav about-slider-nav--next" type="button" aria-label="Next testimonial" data-about-next>›</button>
                    <div class="about-slider-dots" data-about-dots>
                        <button class="dot is-active" type="button" aria-label="Slide 1" data-about-dot></button>
                        <button class="dot" type="button" aria-label="Slide 2" data-about-dot></button>
                        <button class="dot" type="button" aria-label="Slide 3" data-about-dot></button>
                        <button class="dot" type="button" aria-label="Slide 4" data-about-dot></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-leadership">
            <div class="container">
                <div class="about-section-header">
                    <h2>Our Leadership</h2>
                    <p>People building simple, practical lending for the UK.</p>
                </div>
                <div class="leadership-grid">
                    <article class="leadership-card">
                        <div class="leadership-avatar">EH</div>
                        <div>
                            <strong>Emma Hughes</strong>
                            <span>Founder &amp; CEO</span>
                            <p>Leads company strategy, partnerships, and product direction.</p>
                        </div>
                    </article>
                    <article class="leadership-card">
                        <div class="leadership-avatar">AG</div>
                        <div>
                            <strong>Adam Green</strong>
                            <span>Chief Operations Officer</span>
                            <p>Oversees service delivery, process quality, and turnaround times.</p>
                        </div>
                    </article>
                    <article class="leadership-card">
                        <div class="leadership-avatar">JR</div>
                        <div>
                            <strong>Julia Reed</strong>
                            <span>Head of Lending</span>
                            <p>Manages credit policy, affordability checks, and fair decisions.</p>
                        </div>
                    </article>
                    <article class="leadership-card">
                        <div class="leadership-avatar">MW</div>
                        <div>
                            <strong>Michael Ward</strong>
                            <span>Customer Relations Director</span>
                            <p>Leads customer support, issue resolution, and client communication.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />

    <script>
        (() => {
            const carousel = document.querySelector('[data-about-carousel]');
            if (!carousel) return;
            const track = carousel.querySelector('[data-about-track]');
            const prevButton = carousel.querySelector('[data-about-prev]');
            const nextButton = carousel.querySelector('[data-about-next]');
            const dots = Array.from(carousel.querySelectorAll('[data-about-dot]'));
            const originalSlides = Array.from(track?.children || []);
            if (!track || originalSlides.length === 0) return;

            let perView = 1;
            let index = 0;
            let isTransitioning = false;
            let clones = { left: [], right: [] };

            const getPerView = () => (window.innerWidth >= 1024 ? 2 : 1);

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
