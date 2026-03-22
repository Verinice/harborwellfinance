<section class="calculator-section" id="calculator">
            <div class="container">
                <div class="calculator-header">
                    <h2 class="calculator-title">Loan Calculator</h2>
                    <p class="calculator-subtitle">Get an instant estimate based on your amount, term, and preferred pay period.</p>
                </div>
                <div class="calculator-card">
                    <div class="calculator-grid">
                        <div class="calculator-left">
                            <div class="calculator-block">
                                <div class="calc-field">
                                    <div class="calc-label">Loan type</div>
                                    <div class="calc-input">
                                        <select id="loanPurpose" aria-label="Loan type">
                                            <option value="personal">Fixed rate personal</option>
                                            <option value="emergency">Emergency</option>
                                            <option value="business">Business</option>
                                            <option value="asset">Asset</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-block">
                                <div class="calc-field">
                                    <div class="calc-label">Loan Amount</div>
                                    <div class="apply-input-group apply-input-group--compact">
                                        <span class="apply-input-prefix" aria-hidden="true">£</span>
                                        <input id="loanAmountInput" type="number" min="1000" max="200000" step="100" value="5000" aria-label="Loan amount">
                                    </div>
                                </div>
                                <div class="calc-row calc-range-meta">
                            <span data-amount-min>&pound;1,000</span>
                            <span data-amount-max>&pound;200,000</span>
                                </div>
                                <input class="range" id="loanAmountRange" type="range" min="1000" max="200000" value="5000" step="100" />
                            </div>
                            <div class="calculator-block">
                                <div class="calc-field">
                                    <div class="calc-label">Loan Term (months)</div>
                                    <div class="calc-input">
                                        <input id="loanTermInput" type="number" min="1" max="24" step="1" value="12" aria-label="Loan term in months">
                                        <span>Months</span>
                                    </div>
                                </div>
                                <div class="calc-row calc-range-meta">
                                    <span>1</span>
                                    <span data-term-max>24</span>
                                </div>
                                <input class="range" id="loanTermRange" type="range" min="1" max="24" value="12" />
                            </div>
                        </div>
                        <div class="calculator-summary">
                            <div class="calc-header">Estimated Repayments</div>
                            <div class="calc-pay-period">
                                <span>Pay period</span>
                                <select id="payPeriod" aria-label="Pay period">
                                    <option value="monthly">Monthly</option>
                                </select>
                            </div>
                            <div class="calc-values">
                                <table class="calc-table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Payment per period</th>
                                    <td id="paymentPerPeriod">&pound;322.31</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total interest</th>
                                    <td id="totalInterest">&pound;801.58</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total repayment</th>
                                    <td id="totalRepayment">&pound;5,801.58</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="calculator-actions">
                                <a class="btn btn-primary" href="/loans/" data-apply-link>Apply for This Loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
