<header class="site-header">
    <div class="container nav" id="siteNav">
        <div class="brand">
            <img class="brand-logo" src="{{ asset('harborwell-logo.png') }}" alt="Harborwell Finance logo" loading="lazy">
        </div>
        <button class="nav-toggle" id="navToggle" type="button" aria-expanded="false" aria-controls="primaryNav" aria-label="Toggle navigation">
            <span></span>
        </button>
        @php
            $path = request()->path();
            $isHome = ($path === '/' || $path === '');
            $isLoans = request()->is('loans') || request()->is('loans/*');
            $isCalculator = request()->is('calculator') || request()->is('calculator/*');
            $isStatus = request()->is('status') || request()->is('status/*');
            $isTestimonials = request()->is('testimonials') || request()->is('testimonials/*');
            $isContact = request()->is('contact') || request()->is('contact/*');
            $applyHref = $isLoans ? '/apply/' : '/loans/';
        @endphp
        <nav class="nav-links" id="primaryNav">
            <a class="{{ $isHome ? 'is-active' : '' }}" href="/">Home</a>
            <a class="{{ $isLoans ? 'is-active' : '' }}" href="/loans/">Our Loans</a>
            <a class="{{ $isCalculator ? 'is-active' : '' }}" href="/calculator/">Calculator</a>
            <a class="{{ $isTestimonials ? 'is-active' : '' }}" href="/testimonials/">Testimonials</a>
            <a class="{{ $isStatus ? 'is-active' : '' }}" href="/status/">Check Status</a>
            <a class="{{ $isContact ? 'is-active' : '' }}" href="/contact/">Contact</a>
        </nav>
        <div class="nav-actions">
            <a class="btn btn-primary btn-with-icon nav-cta" href="{{ $applyHref }}">
                <span>Apply Today</span>
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 12h14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</header>
<script>
    (() => {
        const navToggle = document.getElementById('navToggle');
        const nav = document.getElementById('siteNav');

        if (!navToggle || !nav) return;

        const closeNav = () => {
            nav.classList.remove('is-open');
            navToggle.setAttribute('aria-expanded', 'false');
        };

        navToggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
        });

        document.querySelectorAll('#primaryNav a').forEach((link) => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 768) {
                    closeNav();
                }
            });
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                closeNav();
            }
        });
    })();
</script>
