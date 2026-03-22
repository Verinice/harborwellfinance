# Harborwell Finance UK Market End-to-End Blueprint

## Purpose
Create a UK-market version of the existing Harborwell Finance loan application platform. The goal is the same: fast, flexible lending with a lightweight digital application flow, but aligned with UK regulatory, payments, data protection, and customer expectations.

## Target Offer (UK)
This blueprint assumes a regulated lender serving UK residents and UK-registered micro/SME businesses.

Product set (UK-adapted):
- Personal loans for mainstream consumer credit.
- Business loans for SMEs and sole traders.
- Asset finance for vehicles or equipment.
- Education or skills finance (not “school fees” language).
- Short-term cash-flow loans only if the business model can meet high-cost short-term credit rules.

Key positioning:
- Transparent pricing and full pre-contractual disclosures.
- Affordability-first underwriting.
- Fast decisioning with bank account verification.

## Regulatory and Legal Baseline (UK)
Minimum compliance expectations to operate a UK lending product:
- FCA authorisation for consumer credit-related activities if lending to individuals, sole traders, or small partnerships.
- FCA Handbook compliance, including fair treatment of customers and suitable outcomes.
- Consumer Credit Act requirements for pre-contract information and agreements.
- If offering high-cost short-term credit, comply with FCA rules and price caps.
- UK GDPR compliance for customer data handling.
- If using Open Banking AIS or PIS, comply with UK Payment Services Regulations and the Open Banking standards.

## Customer Journey (UK)
1. Pre-qualification
- Soft eligibility check (no impact on credit score).
- Clear loan ranges and example APRs.

2. Application
- Identity details and address history.
- Employment and income data.
- Consent for credit search and bank account access.

3. Verification
- Credit bureau check.
- Identity verification (electronic KYC).
- Bank account ownership and income verification (Open Banking or bank statements).

4. Decisioning
- Automated affordability checks.
- Manual review for exceptions.

5. Offer and Agreement
- UK pre-contract information.
- E-signature on regulated credit agreement.

6. Disbursement
- Faster Payments to a verified UK bank account.

7. Servicing
- Direct Debit collections.
- Arrears management with FCA-compliant forbearance.

## Product and UX Changes from Kenya to UK
Required product changes:
- Currency from KES to GBP.
- Replace national ID with UK address and date of birth, plus optional NI number for verification.
- Replace M-Pesa fee and disbursement with UK bank transfer and Direct Debit.
- Replace “activation fee” narrative with transparent upfront fee or no fee, based on FCA rules and customer expectations.

Required UX and copy changes:
- Remove references to Kenya, M-Pesa, and local phone formats.
- Add UK regulatory disclosures and representative APRs.
- Add consent language for credit checks and Open Banking data access.

## Technical Architecture (UK Adaptation)
Current platform is PHP + MySQL with distinct forms and endpoints. The UK adaptation keeps the stack but integrates new providers.

Core services:
- Web frontend for applications.
- PHP API endpoints for submissions.
- MySQL for application storage.
- Admin dashboard for review.

New integrations:
- Credit bureau API (Experian, Equifax, or TransUnion).
- KYC provider (GBG, Onfido, or similar).
- Open Banking provider (TrueLayer, Plaid, or similar) for AIS.
- Payments provider:
  - Faster Payments for disbursement.
  - GoCardless or similar for Direct Debit collections.
  - Optional card payments for any upfront fees.

## Data Model Updates (UK)
Add or change fields in the application tables:
- Replace `id_number` with `dob` and `address_history`.
- Add `postcode`, `county`, `country` default to UK.
- Add `consent_credit_search` and `consent_open_banking`.
- Add `credit_bureau_reference` and `kyc_reference`.
- Add `bank_account_verified` and `bank_account_last4`.
- Add `fca_product_category` for reporting.

Remove or deprecate:
- M-Pesa transaction fields and Daraja callback dependencies.

## Decisioning and Risk Controls
Minimum policy set:
- Affordability checks using income and committed expenditure.
- Credit risk checks with bureau score and arrears history.
- Fraud checks and device fingerprinting.
- Manual review rules for borderline cases.

Collections and servicing controls:
- Direct Debit retries aligned with customer communication rules.
- Forbearance options for vulnerable customers.
- Formal complaints handling process.

## Payments Flow (UK)
Disbursement:
- Verified bank account only.
- Faster Payments or CHAPS for high-value loans.

Repayment:
- Direct Debit mandate created at agreement.
- Automated retries with customer notification.

Optional upfront fee:
- Only if compliant with FCA rules and disclosed clearly.

## Compliance Artifacts
Documents and operational requirements to produce:
- Credit policy and affordability policy.
- Complaints handling procedure.
- Financial promotions approval process.
- Privacy policy and data retention schedule.
- Vulnerable customer policy.

## Security and Data Protection
Baseline requirements:
- Encrypt PII at rest and in transit.
- Role-based access control for admin tools.
- Audit logging for application changes.
- Data minimisation and retention controls.

## Infrastructure and Ops
Recommended UK-ready setup:
- Deploy to UK or EU data regions.
- Daily backups with secure key management.
- Monitoring and alerting on payment and decisioning failures.

## Migration Map (Kenya -> UK)
Key replacements:
- M-Pesa (Daraja) -> UK Faster Payments + Direct Debit.
- National ID -> UK address + DOB + optional NI.
- KES pricing -> GBP pricing.
- Kenya-centric loan copy -> UK FCA compliant copy.

## Implementation Plan
Phase 1: Discovery and compliance
- Confirm target FCA permissions.
- Select credit bureau and KYC provider.
- Define credit policy and affordability model.

Phase 2: Platform refactor
- Update forms and validations for UK data.
- Add consent capture.
- Update database schema.

Phase 3: Integrations
- Add credit bureau checks.
- Add KYC and Open Banking.
- Implement Faster Payments and Direct Debit.

Phase 4: Compliance and launch prep
- Add disclosures and agreements.
- Set up complaints and servicing workflows.
- Internal QA and pilot launch.

Phase 5: Scale
- Optimize decisioning and pricing.
- Expand product variants.
- Add reporting and FCA MI metrics.

## Open Decisions
- Whether to offer high-cost short-term credit.
- Which bureau and KYC providers to use.
- Whether to require Open Banking for all applicants or only for higher-risk tiers.

## Deliverables Checklist
- UK product requirements and pricing schedule.
- Updated UI copy and disclosures.
- FCA-compliant credit agreement template.
- Updated backend schema and API changes.
- Integration specs for bureau, KYC, Open Banking, and payments.
- Compliance policies and operational playbooks.
