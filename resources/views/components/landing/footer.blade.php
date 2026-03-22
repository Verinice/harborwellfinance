<footer class="site-footer" id="help">
    <div class="container footer-grid">
        <div class="footer-brand">
            <img class="footer-logo" src="{{ asset('harborwell-logo.png') }}" alt="Harborwell Finance logo" loading="lazy">
            <p class="footer-text">Modern lending for UK borrowers, with transparent pricing and flexible repayment options.</p>
            <a class="footer-link" href="mailto:hello@harborwellfinance.co.uk">Talk to Us</a>
        </div>

        <div class="footer-column">
            <h4>Explore</h4>
            <a href="/">Home</a>
            <a href="/loans/">Our Loans</a>
            <a href="/calculator/">Calculator</a>
            <a href="/how-it-works/">How It Works</a>
        </div>

        <div class="footer-column">
            <h4>Company</h4>
            <a href="/testimonials/">Success Stories</a>
            <a href="/about/">About Us</a>
            <a href="/status/">Check Status</a>
            <a href="/contact/">Contact</a>
        </div>

        <div class="footer-column">
            <h4>Contact</h4>
            <div class="footer-contact">
                <span>Email</span>
                <a href="mailto:hello@harborwellfinance.co.uk">hello@harborwellfinance.co.uk</a>
            </div>
            <div class="footer-contact">
                <span>Phone</span>
                <a href="tel:+442071234567">+44 20 7123 4567</a>
            </div>
            <div class="footer-contact">
                <span>Address</span>
                <p>Canary Wharf, London</p>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <span>&copy; 2026 Harborwell Finance. All rights reserved.</span>
            <div class="footer-legal">
                <a href="/terms/">Terms</a>
                <a href="/privacy/">Privacy</a>
                <a href="/status/">Check Status</a>
            </div>
        </div>
    </div>
</footer>

<div class="cookie-banner" data-cookie-banner role="dialog" aria-live="polite" aria-label="Cookie notice">
    <div class="cookie-banner__inner">
        <div class="cookie-banner__copy">
            <strong>We use cookies</strong>
            <p>We use essential cookies to keep Harborwell Finance secure, and optional cookies to improve your experience. Read our <a class="cookie-link" href="/privacy/">Privacy Policy</a> and <a class="cookie-link" href="/terms/">Terms</a>.</p>
        </div>
        <div class="cookie-banner__actions">
            <button class="btn btn-outline cookie-action" type="button" data-cookie-action="essential">Essential only</button>
            <button class="btn btn-primary cookie-action" type="button" data-cookie-action="accept">Accept all</button>
        </div>
    </div>
</div>

<script>
    (() => {
        const banner = document.querySelector('[data-cookie-banner]');
        if (!banner) return;

        const stored = window.localStorage.getItem('cookieConsent');
        if (stored) {
            banner.classList.add('is-hidden');
            return;
        }

        document.body.classList.add('has-cookie-banner');

        const actions = banner.querySelectorAll('[data-cookie-action]');
        actions.forEach((action) => {
            action.addEventListener('click', () => {
                const value = action.getAttribute('data-cookie-action');
                window.localStorage.setItem('cookieConsent', value || 'accept');
                banner.classList.add('is-hidden');
                document.body.classList.remove('has-cookie-banner');
            });
        });
    })();
</script>
