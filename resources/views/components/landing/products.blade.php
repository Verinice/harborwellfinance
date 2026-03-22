@php
    $isLoans = request()->is('loans') || request()->is('loans/*');
    $applyCta = $isLoans ? '/apply/' : '/loans/';
@endphp

<section class="loan-products-section {{ $isLoans ? 'is-slider' : 'is-static' }}" id="products">
    <div class="container">
        <div class="products-header">
            <h2 class="products-title">Our Loan Products</h2>
            <p class="products-subtitle">Choose a fixed-rate lending option that fits your timeline, then customise the repayment plan in minutes.</p>
        </div>

        <div class="products-slider" data-products-slider>
            <div class="products-viewport">
                <div class="products-grid" id="productsSliderTrack">
            <article class="product-card"
                data-title="Fixed Rate Personal Loans"
                data-badge="Personal"
                data-description="Fixed 6% APR personal loans for everyday plans with clear repayment windows."
                data-amount="£1,000 - £30,000"
                data-term="1 - 24 months"
                data-rate="Fixed 6% APR"
                data-speed="Decision in minutes"
                data-cta="{{ $isLoans ? '/apply/?purpose=personal' : '/loans/' }}">
                <div class="product-header">
                    <div class="product-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="6" width="16" height="12" rx="3" stroke="currentColor" stroke-width="2"/>
                            <path d="M8 10h8M8 14h5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="product-badge">Personal</span>
                </div>
                <div class="product-content">
                    <h3>Fixed Rate Personal Loans</h3>
                    <p class="product-description">Fixed 6% APR personal loans for everyday plans with clear repayment windows.</p>
                </div>
                <div class="product-details">
                    <div class="detail-item">
                        <span class="detail-label">Amount</span>
                        <span class="detail-value">&pound;1,000 - &pound;30,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Term</span>
                        <span class="detail-value">1 - 24 months</span>
                    </div>
                </div>
                <div class="product-actions">
                    <a class="btn btn-primary" href="{{ $isLoans ? '/apply/?purpose=personal' : '/loans/' }}">Apply now</a>
                </div>
            </article>

            <article class="product-card"
                data-title="Emergency Loans"
                data-badge="Emergency"
                data-description="Fast access to funds with a fixed 4% APR for urgent expenses."
                data-amount="£1,000 - £10,000"
                data-term="1 - 6 months"
                data-rate="Fixed 4% APR"
                data-speed="Same-day review"
                data-cta="{{ $isLoans ? '/apply/?purpose=emergency' : '/loans/' }}">
                <div class="product-header">
                    <div class="product-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 7v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="product-badge">Emergency</span>
                </div>
                <div class="product-content">
                    <h3>Emergency Loans</h3>
                    <p class="product-description">Fast access to funds with a fixed 4% APR for urgent expenses.</p>
                </div>
                <div class="product-details">
                    <div class="detail-item">
                        <span class="detail-label">Amount</span>
                        <span class="detail-value">&pound;1,000 - &pound;10,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Term</span>
                        <span class="detail-value">1 - 6 months</span>
                    </div>
                </div>
                <div class="product-actions">
                    <a class="btn btn-primary" href="{{ $isLoans ? '/apply/?purpose=emergency' : '/loans/' }}">Apply now</a>
                </div>
            </article>

            <article class="product-card"
                data-title="Business Loans"
                data-badge="Business"
                data-description="Fixed 6% APR funding to support operations, inventory, or growth."
                data-amount="£3,000 - £100,000"
                data-term="1 - 24 months"
                data-rate="Fixed 6% APR"
                data-speed="Funds in 48 hours"
                data-cta="{{ $isLoans ? '/apply/?purpose=business' : '/loans/' }}">
                <div class="product-header">
                    <div class="product-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <span class="product-badge">Business</span>
                </div>
                <div class="product-content">
                    <h3>Business Loans</h3>
                    <p class="product-description">Fixed 6% APR funding to support operations, inventory, or growth.</p>
                </div>
                <div class="product-details">
                    <div class="detail-item">
                        <span class="detail-label">Amount</span>
                        <span class="detail-value">&pound;3,000 - &pound;100,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Term</span>
                        <span class="detail-value">1 - 24 months</span>
                    </div>
                </div>
                <div class="product-actions">
                    <a class="btn btn-primary" href="{{ $isLoans ? '/apply/?purpose=business' : '/loans/' }}">Apply now</a>
                </div>
            </article>

            <article class="product-card"
                data-title="Asset Loans"
                data-badge="Asset"
                data-description="Fixed 5% APR asset-backed loans with predictable repayments."
                data-amount="£5,000 - £200,000"
                data-term="1 - 24 months"
                data-rate="Fixed 5% APR"
                data-speed="Asset-backed options"
                data-cta="{{ $isLoans ? '/apply/?purpose=asset' : '/loans/' }}">
                <div class="product-header">
                    <div class="product-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M3 11l9-7 9 7v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 21V9h6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="product-badge">Asset</span>
                </div>
                <div class="product-content">
                    <h3>Asset Loans</h3>
                    <p class="product-description">Fixed 5% APR asset-backed loans with predictable repayments.</p>
                </div>
                <div class="product-details">
                    <div class="detail-item">
                        <span class="detail-label">Amount</span>
                        <span class="detail-value">&pound;5,000 - &pound;200,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Term</span>
                        <span class="detail-value">1 - 24 months</span>
                    </div>
                </div>
                <div class="product-actions">
                    <a class="btn btn-primary" href="{{ $isLoans ? '/apply/?purpose=asset' : '/loans/' }}">Apply now</a>
                </div>
            </article>
                </div>
            </div>
            @if ($isLoans)
                <div class="products-controls">
                    <button class="products-btn" id="productsPrev" type="button" aria-label="Previous products">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="products-indicators" id="productsIndicators" aria-label="Product slider indicators"></div>
                    <button class="products-btn" id="productsNext" type="button" aria-label="Next products">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="product-panel" id="productPanel" aria-hidden="true">
        <div class="product-panel-overlay" data-product-close></div>
        <div class="product-panel-card" role="dialog" aria-modal="true" aria-labelledby="productPanelTitle">
            <button class="product-panel-close" type="button" data-product-close aria-label="Close product details">×</button>
            <span class="product-panel-badge" data-panel-badge></span>
            <h3 class="product-panel-title" id="productPanelTitle" data-panel-title></h3>
            <p class="product-panel-description" data-panel-description></p>
            <div class="product-panel-grid">
                <div class="product-panel-item">
                    <span>Amount range</span>
                    <strong data-panel-amount></strong>
                </div>
                <div class="product-panel-item">
                    <span>Loan term</span>
                    <strong data-panel-term></strong>
                </div>
                <div class="product-panel-item">
                    <span>Rate</span>
                    <strong data-panel-rate></strong>
                </div>
                <div class="product-panel-item">
                    <span>Speed</span>
                    <strong data-panel-speed></strong>
                </div>
            </div>
            <div class="product-panel-actions">
                <a class="btn btn-primary" data-panel-cta href="{{ $applyCta }}">Apply now</a>
                <button class="btn btn-outline" type="button" data-product-close>Close</button>
            </div>
        </div>
    </div>
</section>
