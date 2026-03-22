<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Fast, Flexible UK Loans</title>
    <meta name="description" content="Harborwell Finance offers fast, flexible UK loans with a fully digital application, instant eligibility checks, and transparent pricing. Check your loan options in minutes.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#f2f6ff">
    <meta property="og:title" content="Harborwell Finance | Fast, Flexible UK Loans">
    <meta property="og:description" content="Get approved in minutes with a fully digital UK loan application, clear pricing, and flexible terms.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('hero-illustrator.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Harborwell Finance | Fast, Flexible UK Loans">
    <meta name="twitter:description" content="Instant eligibility checks, transparent pricing, and flexible terms built for UK borrowers.">
    <meta name="twitter:image" content="{{ asset('hero-illustrator.png') }}">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@graph": [
                {
                    "@@type": "Organization",
                    "@@id": "{{ url('/') }}#organization",
                    "name": "Harborwell Finance",
                    "url": "{{ url('/') }}",
                    "logo": {
                        "@@type": "ImageObject",
                        "url": "{{ asset('harborwell-logo.png') }}"
                    }
                },
                {
                    "@@type": "WebSite",
                    "@@id": "{{ url('/') }}#website",
                    "url": "{{ url('/') }}",
                    "name": "Harborwell Finance",
                    "publisher": {
                        "@@id": "{{ url('/') }}#organization"
                    }
                },
                {
                    "@@type": "WebPage",
                    "@@id": "{{ url('/') }}#webpage",
                    "url": "{{ url('/') }}",
                    "name": "Fast, Flexible UK Loans",
                    "description": "Apply online in minutes for a UK personal loan with clear terms, flexible repayments, and a fully digital journey from eligibility check to payout.",
                    "isPartOf": {
                        "@@id": "{{ url('/') }}#website"
                    }
                }
            ]
        }
    </script>

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
<body id="top" class="page-home">
    <x-landing.header />

    <main>
        <x-landing.hero />
        <x-landing.hero-meta />

        <x-landing.products />

        <x-landing.stories />

    </main>

    <x-landing.footer />


    <script>
        const navToggle = document.getElementById('navToggle');
        const nav = document.getElementById('siteNav');

        if (navToggle && nav) {
            navToggle.addEventListener('click', () => {
                const isOpen = nav.classList.toggle('is-open');
                navToggle.setAttribute('aria-expanded', String(isOpen));
            });

            document.querySelectorAll('#primaryNav a').forEach((link) => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 768) {
                        nav.classList.remove('is-open');
                        navToggle.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        }

        // Success Stories Slider
        const storiesTrack = document.getElementById('storiesTrack');
        const storiesPrev = document.getElementById('storiesPrev');
        const storiesNext = document.getElementById('storiesNext');
        const storiesIndicators = document.getElementById('storiesIndicators');

        if (storiesTrack && storiesPrev && storiesNext && storiesIndicators) {
            const slides = storiesTrack.querySelectorAll('.story-slide');
            const totalSlides = slides.length;
            let currentSlide = 0;
            let autoplayTimer = null;
            let isDragging = false;
            let startX = 0;
            let currentX = 0;

            const getVisibleSlides = () => {
                if (window.matchMedia('(min-width: 1024px)').matches) return 3;
                if (window.matchMedia('(min-width: 768px)').matches) return 2;
                return 1;
            };

            const buildIndicators = (pages) => {
                storiesIndicators.innerHTML = '';
                for (let i = 0; i < pages; i++) {
                    const indicator = document.createElement('button');
                    indicator.className = 'stories-indicator';
                    indicator.setAttribute('aria-label', `Go to story set ${i + 1}`);
                    if (i === 0) indicator.classList.add('is-active');
                    indicator.addEventListener('click', () => goToSlide(i));
                    storiesIndicators.appendChild(indicator);
                }
            };

            const updateSlider = () => {
                const visibleSlides = getVisibleSlides();
                const maxIndex = Math.max(0, totalSlides - visibleSlides);
                if (currentSlide > maxIndex) currentSlide = maxIndex;
                const offset = (100 / visibleSlides) * currentSlide;
                storiesTrack.style.transform = `translateX(-${offset}%)`;
                const indicators = storiesIndicators.querySelectorAll('.stories-indicator');
                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('is-active', index === currentSlide);
                });
            };

            const goToSlide = (slideIndex) => {
                currentSlide = slideIndex;
                updateSlider();
            };

            const nextSlide = () => {
                const visibleSlides = getVisibleSlides();
                const maxIndex = Math.max(0, totalSlides - visibleSlides);
                currentSlide = currentSlide + 1 > maxIndex ? 0 : currentSlide + 1;
                updateSlider();
            };

            const prevSlide = () => {
                currentSlide = Math.max(currentSlide - 1, 0);
                updateSlider();
            };

            const initSlider = () => {
                const visibleSlides = getVisibleSlides();
                const pages = Math.max(1, totalSlides - visibleSlides + 1);
                buildIndicators(pages);
                updateSlider();
            };

            const startAutoplay = () => {
                stopAutoplay();
                autoplayTimer = setInterval(nextSlide, 5000);
            };

            const stopAutoplay = () => {
                if (autoplayTimer) {
                    clearInterval(autoplayTimer);
                    autoplayTimer = null;
                }
            };

            const handlePointerDown = (event) => {
                isDragging = true;
                startX = event.clientX || (event.touches && event.touches[0].clientX) || 0;
                currentX = startX;
                stopAutoplay();
            };

            const handlePointerMove = (event) => {
                if (!isDragging) return;
                currentX = event.clientX || (event.touches && event.touches[0].clientX) || 0;
            };

            const handlePointerUp = () => {
                if (!isDragging) return;
                const delta = currentX - startX;
                const threshold = 40;
                if (delta > threshold) {
                    prevSlide();
                } else if (delta < -threshold) {
                    nextSlide();
                }
                isDragging = false;
                startAutoplay();
            };

            storiesPrev.addEventListener('click', prevSlide);
            storiesNext.addEventListener('click', nextSlide);
            window.addEventListener('resize', initSlider);
            initSlider();
            startAutoplay();

            const storiesViewport = storiesTrack.parentElement;
            if (storiesViewport) {
                storiesViewport.addEventListener('mouseenter', stopAutoplay);
                storiesViewport.addEventListener('mouseleave', startAutoplay);
                storiesViewport.addEventListener('touchstart', handlePointerDown, { passive: true });
                storiesViewport.addEventListener('touchmove', handlePointerMove, { passive: true });
                storiesViewport.addEventListener('touchend', handlePointerUp);
                storiesViewport.addEventListener('pointerdown', handlePointerDown);
                storiesViewport.addEventListener('pointermove', handlePointerMove);
                storiesViewport.addEventListener('pointerup', handlePointerUp);
                storiesViewport.addEventListener('pointerleave', handlePointerUp);
            }
        }

        // Steps Section Interactions
        const stepItems = document.querySelectorAll('.step-item');
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };

        const stepObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        
                        // Animate step number
                        const stepNumber = entry.target.querySelector('.step-number');
                        stepNumber.style.animation = 'pulse 0.6s ease-out';
                        
                        // Animate content
                        const stepContent = entry.target.querySelector('.step-content');
                        stepContent.style.animation = 'fadeInUp 0.6s ease-out 0.2s both';
                    }, index * 100);
                    stepObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Initialize step animations
        stepItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            stepObserver.observe(item);
        });

        // Add hover effect for step numbers
        stepItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                const stepNumber = item.querySelector('.step-number');
                stepNumber.style.transform = 'scale(1.1) rotate(3deg)';
            });
            
            item.addEventListener('mouseleave', () => {
                const stepNumber = item.querySelector('.step-number');
                stepNumber.style.transform = 'scale(1) rotate(0deg)';
            });
        });

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

        // Loan Products Interactions
        const productCards = document.querySelectorAll('.product-card');
        const productsSection = document.querySelector('.loan-products-section');
        const isProductsSlider = productsSection?.classList.contains('is-slider');
        const productsSliderTrack = document.getElementById('productsSliderTrack');
        const productsPrev = document.getElementById('productsPrev');
        const productsNext = document.getElementById('productsNext');
        const productsIndicators = document.getElementById('productsIndicators');
        const productsCards = productsSliderTrack ? Array.from(productsSliderTrack.children) : [];
        let productsIndex = 0;

        if (isProductsSlider) {
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
        } else if (productsSliderTrack) {
            productsSliderTrack.style.transform = 'none';
        }
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
                        
                        // Animate product icon
                        const productIcon = entry.target.querySelector('.product-icon');
                        if (productIcon) {
                            productIcon.style.animation = 'pulse 0.6s ease-out';
                        }
                        
                        // Animate product content
                        const productContent = entry.target.querySelector('.product-content');
                        if (productContent) {
                            productContent.style.animation = 'fadeInUp 0.6s ease-out 0.2s both';
                        }
                        
                        // Animate product details
                        const productDetails = entry.target.querySelector('.product-details');
                        if (productDetails) {
                            productDetails.style.animation = 'fadeInUp 0.6s ease-out 0.4s both';
                        }
                        
                        // Animate features
                        const featureItems = entry.target.querySelectorAll('.feature-item');
                        featureItems.forEach((item, itemIndex) => {
                            item.style.animation = `fadeInUp 0.4s ease-out ${0.6 + itemIndex * 0.1}s both`;
                        });
                        
                        // Animate actions
                        const productActions = entry.target.querySelector('.product-actions');
                        if (productActions) {
                            productActions.style.animation = 'fadeInUp 0.6s ease-out 0.8s both';
                        }
                    }, index * 150);
                    productObserver.unobserve(entry.target);
                }
            });
        }, productObserverOptions);

        // Initialize product animations
        productCards.forEach((item, index) => {
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

        // Add click handlers for product buttons
        const productButtons = document.querySelectorAll('.product-actions button, .product-actions a, .footer-actions button');
        productButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const buttonText = e.target.textContent.trim();
                const productCard = e.target.closest('.product-card');
                const productName = productCard ? productCard.querySelector('h3').textContent : 'Loan';
                
                // Add ripple effect
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

        // Add ripple animation
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
    </script>
</body>
</html>
