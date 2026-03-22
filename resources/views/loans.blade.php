<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Our Loans</title>
    <meta name="description" content="Explore fixed-rate Harborwell Finance loan options designed for real-life goals, with clear terms and fast digital applications.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#f2f6ff">

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
<body id="top" class="page-loans">
    <x-landing.header />

    <main>
        <x-landing.products />

        <section class="process-section">
            <div class="container">
                <div class="section-header">
                    <div class="section-badge">Simple Process</div>
                    <h2 class="section-title">Get Your Loan in 4 Easy Steps</h2>
                    <p class="section-subtitle">
                        Our streamlined digital process makes getting a loan fast and hassle-free
                    </p>
                </div>

                <div class="process-grid">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Check Eligibility</h3>
                            <p>Answer a few questions to see which loans you qualify for</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Compare Options</h3>
                            <p>Review different loan amounts, terms, and monthly payments</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Apply Online</h3>
                            <p>Complete your application with our secure digital form</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Get Funded</h3>
                            <p>Receive funds in your account within 24 hours of approval</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits-section">
            <div class="container">
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>FCA Regulated</h3>
                        <p>Full compliance with UK financial regulations for your protection</p>
                    </div>

                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>No Hidden Fees</h3>
                        <p>Transparent pricing with clear terms and no surprises</p>
                    </div>

                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Instant Decision</h3>
                        <p>Get a decision in minutes with our automated system</p>
                    </div>

                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                <rect x="5" y="11" width="14" height="10" rx="2" stroke="currentColor" stroke-width="2"/>
                                <path d="M7 11V7a5 5 0 0110 0v4" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Secure & Private</h3>
                        <p>Your data is protected with bank-level encryption</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Get Started?</h2>
                    <p>Join thousands of UK customers who trust Harborwell Finance for their lending needs</p>
                    <div class="cta-actions">
                        <a class="btn btn-primary btn-large" href="/calculator/">Calculate Your Loan</a>
                        <a class="btn btn-outline btn-large" href="/contact/">Speak to an Expert</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />

    <script>
        // Add animation keyframes
        const styleSheet = document.createElement('style');
        styleSheet.textContent = `
            @keyframes pulse {
                0% { transform: scale(0.8); opacity: 0; }
                50% { transform: scale(1.1); }
                100% { transform: scale(1); opacity: 1; }
            }

            @keyframes fadeInUp {
                0% { transform: translateY(15px); opacity: 0; }
                100% { transform: translateY(0); opacity: 1; }
            }
        `;
        document.head.appendChild(styleSheet);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Loan Products Interactions
        const productCards = document.querySelectorAll('.product-card');
        const productsSliderTrack = document.getElementById('productsSliderTrack');
        const productsPrev = document.getElementById('productsPrev');
        const productsNext = document.getElementById('productsNext');
        const productsIndicators = document.getElementById('productsIndicators');
        const productsCards = productsSliderTrack ? Array.from(productsSliderTrack.children) : [];
        let productsIndex = 0;

        const getProductsPerView = () => {
            if (window.matchMedia('(min-width: 1024px)').matches) return 3;
            if (window.matchMedia('(min-width: 768px)').matches) return 2;
            return 1;
        };

        const renderProductsIndicators = (total) => {
            if (!productsIndicators) return;
            productsIndicators.innerHTML = '';
            for (let i = 0; i < total; i += 1) {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'products-dot';
                dot.setAttribute('aria-label', `Go to product slide ${i + 1}`);
                dot.addEventListener('click', () => {
                    productsIndex = i;
                    updateProductsSlider();
                });
                productsIndicators.appendChild(dot);
            }
        };

        const updateProductsSlider = () => {
            if (!productsSliderTrack) return;
            const cardsPerView = getProductsPerView();
            const maxIndex = Math.max(0, productsCards.length - cardsPerView);
            productsIndex = Math.min(Math.max(productsIndex, 0), maxIndex);
            const firstCard = productsCards[0];
            const gapValue = parseFloat(getComputedStyle(productsSliderTrack).gap || '0');
            const cardWidth = firstCard ? firstCard.getBoundingClientRect().width : 0;
            const offsetPx = (cardWidth + gapValue) * productsIndex;
            productsSliderTrack.style.transform = `translateX(-${offsetPx}px)`;

            if (productsPrev) productsPrev.disabled = productsIndex === 0;
            if (productsNext) productsNext.disabled = productsIndex === maxIndex;

            if (productsIndicators) {
                Array.from(productsIndicators.children).forEach((dot, index) => {
                    dot.classList.toggle('is-active', index === productsIndex);
                });
            }
        };

        const initProductsSlider = () => {
            if (!productsSliderTrack || productsCards.length === 0) return;
            const cardsPerView = getProductsPerView();
            const totalSlides = Math.max(1, productsCards.length - cardsPerView + 1);
            renderProductsIndicators(totalSlides);
            updateProductsSlider();
        };

        if (productsPrev) {
            productsPrev.addEventListener('click', () => {
                productsIndex -= 1;
                updateProductsSlider();
            });
        }

        if (productsNext) {
            productsNext.addEventListener('click', () => {
                productsIndex += 1;
                updateProductsSlider();
            });
        }

        window.addEventListener('resize', () => {
            initProductsSlider();
        });

        initProductsSlider();

        const productObserverOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const productObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';

                        const productIcon = entry.target.querySelector('.product-icon');
                        if (productIcon) {
                            productIcon.style.animation = 'pulse 0.6s ease-out';
                        }

                        const productContent = entry.target.querySelector('.product-content');
                        if (productContent) {
                            productContent.style.animation = 'fadeInUp 0.6s ease-out 0.2s both';
                        }

                        const productDetails = entry.target.querySelector('.product-details');
                        if (productDetails) {
                            productDetails.style.animation = 'fadeInUp 0.6s ease-out 0.4s both';
                        }

                        const featureItems = entry.target.querySelectorAll('.feature-item');
                        featureItems.forEach((item, itemIndex) => {
                            item.style.animation = `fadeInUp 0.4s ease-out ${0.6 + itemIndex * 0.1}s both`;
                        });

                        const productActions = entry.target.querySelector('.product-actions');
                        if (productActions) {
                            productActions.style.animation = 'fadeInUp 0.6s ease-out 0.8s both';
                        }
                    }, index * 150);
                    productObserver.unobserve(entry.target);
                }
            });
        }, productObserverOptions);

        productCards.forEach((item) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            productObserver.observe(item);
        });

        const productPanel = document.getElementById('productPanel');
        const productPanelElements = productPanel ? {
            badge: productPanel.querySelector('[data-panel-badge]'),
            title: productPanel.querySelector('[data-panel-title]'),
            description: productPanel.querySelector('[data-panel-description]'),
            amount: productPanel.querySelector('[data-panel-amount]'),
            term: productPanel.querySelector('[data-panel-term]'),
            rate: productPanel.querySelector('[data-panel-rate]'),
            speed: productPanel.querySelector('[data-panel-speed]'),
            cta: productPanel.querySelector('[data-panel-cta]'),
        } : null;

        const openProductPanel = (card) => {
            if (!productPanel || !productPanelElements || !card) {
                return;
            }

            productPanelElements.badge.textContent = card.dataset.badge || 'Product';
            productPanelElements.title.textContent = card.dataset.title || 'Loan product';
            productPanelElements.description.textContent = card.dataset.description || '';
            productPanelElements.amount.textContent = card.dataset.amount || '';
            productPanelElements.term.textContent = card.dataset.term || '';
            productPanelElements.rate.textContent = card.dataset.rate || '';
            productPanelElements.speed.textContent = card.dataset.speed || '';
            productPanelElements.cta.setAttribute('href', card.dataset.cta || '/calculator/');

            productPanel.classList.add('is-open');
            productPanel.setAttribute('aria-hidden', 'false');
            document.body.classList.add('is-product-panel-open');
        };

        const closeProductPanel = () => {
            if (!productPanel) {
                return;
            }
            productPanel.classList.remove('is-open');
            productPanel.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('is-product-panel-open');
        };

        document.querySelectorAll('.product-card').forEach((card) => {
            card.addEventListener('click', (event) => {
                if (event.target.closest('a, button')) {
                    return;
                }
                openProductPanel(card);
            });
        });

        document.querySelectorAll('[data-product-close]').forEach((button) => {
            button.addEventListener('click', closeProductPanel);
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeProductPanel();
            }
        });

        const productButtons = document.querySelectorAll('.product-actions button, .product-actions a, .footer-actions button');
        productButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const buttonText = e.target.textContent.trim();
                const productCard = e.target.closest('.product-card');
                const productName = productCard ? productCard.querySelector('h3').textContent : 'Loan';

                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.6)';
                ripple.style.width = ripple.style.height = '0';
                ripple.style.top = '50%';
                ripple.style.left = '50%';
                ripple.style.transform = 'translate(-50%, -50%)';
                ripple.style.animation = 'ripple 0.6s ease-out';

                e.target.style.position = 'relative';
                e.target.style.overflow = 'hidden';
                e.target.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);

                console.log(`${buttonText} clicked for ${productName}`);
            });
        });

        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    width: 200px;
                    height: 200px;
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.process-step, .benefit-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>

    <style>
        /* Trust Bar */
        .trust-bar {
            padding: 2.5rem 0;
            background: #ffffff;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-align: left;
        }

        .trust-icon {
            width: 54px;
            height: 54px;
            background: color-mix(in oklab, var(--text-dark) 6%, #ffffff);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy);
            flex-shrink: 0;
        }

        .trust-content {
            flex: 1;
        }

        .trust-title {
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--navy);
            margin-bottom: 0.25rem;
        }

        .trust-desc {
            font-size: 0.9rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        @media (min-width: 768px) {
            .trust-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 2rem;
            }
        }

        /* Loan Types Section */
        .loan-types {
            padding: 5rem 0;
            background: #ffffff;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: color-mix(in oklab, var(--text-dark) 6%, #ffffff);
            color: var(--navy);
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 1rem;
            border: 1px solid var(--border);
        }

        .section-title {
            font-family: var(--font-heading);
            font-size: clamp(2rem, 4vw + 1rem, 2.8rem);
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--navy);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        .loan-types .btn-primary {
            background: var(--brand-red);
            color: #ffffff;
        }

        .loan-types .btn-primary:hover {
            background: color-mix(in oklab, var(--brand-red) 88%, #000000);
        }

        .loan-slider {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .loan-slider-viewport {
            overflow: hidden;
        }

        .loan-grid {
            display: flex;
            gap: 2rem;
            transition: transform 0.45s ease;
            will-change: transform;
        }

        .loan-slider-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .loan-slider-btn {
            width: 42px;
            height: 42px;
            border-radius: 999px;
            border: 1px solid var(--brand-red);
            background: var(--brand-red);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .loan-slider-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .loan-slider-btn:hover:not(:disabled) {
            transform: translateY(-1px);
            background: var(--brand-red-dark);
            border-color: var(--brand-red-dark);
        }

        .loan-slider-indicators {
            display: flex;
            gap: 0.5rem;
        }

        .loan-slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 999px;
            border: 1px solid var(--border);
            background: transparent;
            cursor: pointer;
        }

        .loan-slider-dot.is-active {
            background: var(--brand-red);
            border-color: var(--brand-red);
        }

        .loan-card-detailed {
            flex: 0 0 100%;
            background: var(--surface);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid var(--border);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .loan-card-detailed::before {
            content: none;
        }

        .loan-card-detailed:hover::before {
            opacity: 0;
        }

        .loan-card-detailed:hover {
            transform: none;
            box-shadow: none;
        }

        .loan-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .loan-icon {
            width: 60px;
            height: 60px;
            background: color-mix(in oklab, var(--text-dark) 6%, #ffffff);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy);
        }

        .loan-info h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 0.25rem;
        }

        .loan-info p {
            color: var(--text-muted);
            margin: 0;
        }

        .loan-features {
            margin-bottom: 1.5rem;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            color: var(--text-muted);
        }

        .feature svg {
            color: var(--text-muted);
            flex-shrink: 0;
        }

        .loan-use-cases h4 {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--navy);
            margin-bottom: 0.75rem;
        }

        .use-cases {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .tag {
            padding: 0.25rem 0.75rem;
            background: color-mix(in oklab, var(--text-dark) 6%, #ffffff);
            border: 1px solid var(--border);
            border-radius: 999px;
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* Process Section */
        .process-section {
            padding: 5rem 0;
            background: #ffffff;
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .process-step {
            display: flex;
            gap: 1.5rem;
            align-items: flex-start;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy);
            font-weight: 700;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .step-content h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 0.5rem;
        }

        .step-content p {
            color: var(--text-muted);
            line-height: 1.5;
            margin: 0;
        }

        /* Benefits Section */
        .benefits-section {
            padding: 5rem 0;
            background: #ffffff;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .benefit-card {
            text-align: center;
            padding: 2rem;
            border-radius: 16px;
            background: #ffffff;
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .benefit-card:hover {
            transform: none;
            box-shadow: none;
        }

        .benefit-icon {
            width: 70px;
            height: 70px;
            background: color-mix(in oklab, var(--text-dark) 6%, #ffffff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy);
            margin: 0 auto 1.5rem;
        }

        .benefit-card h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 1rem;
        }

        .benefit-card p {
            color: var(--text-muted);
            line-height: 1.5;
            margin: 0;
        }

        /* CTA Section */
        .cta-section {
            padding: 5rem 0;
            background: var(--brand-red);
            text-align: center;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }

        .cta-content p {
            font-size: 1.2rem;
            color: color-mix(in oklab, white 90%, transparent);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-section .btn-outline {
            background: var(--brand-red);
            color: #ffffff;
            border-color: #ffffff;
        }

        .cta-section .btn-outline:hover {
            background: var(--brand-red-dark);
            color: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .loan-grid {
                gap: 1.5rem;
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .process-step {
                text-align: center;
            }

            .step-number {
                margin: 0 auto 1rem;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 1.5rem;
            }

            .cta-content h2 {
                font-size: 1.8rem;
            }
        }

        @media (min-width: 768px) {
            .loan-card-detailed {
                flex-basis: calc(50% - 1rem);
            }
        }

        @media (min-width: 1024px) {
            .loan-card-detailed {
                flex-basis: calc(33.333% - 1.333rem);
            }
        }
    </style>
</body>
</html>
