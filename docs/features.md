# Features

## Stawi-Style Header Redesign
- Reworked the landing page header layout with a centered nav, pill-style active link, and a prominent apply button to match the requested reference.
- Added a mobile navigation toggle and updated spacing to keep the header touch-friendly on small screens.
- Swapped menu labels to Home/Our Loans/Calculator/Check Status/Explore and replaced the dark mode text button with an icon toggle.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Product Cards Click-To-Open
- Removed the "View details" buttons and made product cards open the details panel when clicked.
- Kept the primary CTA button behavior intact while enabling card-level interaction.
- Files: `resources/views/components/landing/products.blade.php`, `resources/views/welcome.blade.php`, `resources/views/loans.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Page Products Section Match
- Replaced the loans page product section with the same component and interactions used on the homepage.
- Brought over the matching slider, panel, and animation behaviors to keep the design identical.
- Files: `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Full Landing Page Redesign
- Rebuilt the landing page to match the provided Harborwell Finance reference layout, including the hero, feature cards, and how-it-works section.
- Updated the header navigation, CTA styling, and illustration panel to align with the new light blue/yellow theme.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Footer Spacing
- Added a top margin to the site footer to create breathing room above it.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero CTA Text Color
- Switched the hero primary CTA text to black to match the accent background.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero CTA Accent Background
- Set the hero primary CTA button background to the `--accent` color.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Eyebrow Size
- Increased the hero eyebrow font size on larger screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Eyebrow Accent Fix
- Set the hero eyebrow color to the `--accent` token.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Eyebrow Accent
- Updated the hero eyebrow text to use the `--accent` color.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Image Shadow
- Added a darker box shadow to the hero illustration for more depth on the dark hero background.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Background Dark Tone
- Switched the hero background to `--brand-red-dark`.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Background Simplification
- Switched the hero background to solid `--brand-red` and removed the image overlay layers.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Image Padding Revert
- Removed the mobile padding added to the hero illustration.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Image Mobile Padding
- Added 20px padding to the hero illustration on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Illustration Swap
- Swapped the hero right-column illustration to use `public/image.png`.
- Files: `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/hero-loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Contact Copy Reference Number
- Replaced “unique ID” with “reference number” in the contact page status copy.
- Files: `resources/views/contact.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Page Label Capitalization
- Updated the status page labels to “Email Address” and “Reference Number”.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Pill Accent Token
- Switched the testimonial pill background to use the `--accent` token.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Header Span Color Revert
- Kept story header spans on their original light color while leaving the story pill text black.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Story Header Text
- Switched the testimonial story header span text to black.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Story Pill Color
- Updated the testimonial story pill text color to black.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Loan Amounts
- Adjusted testimonial loan amounts to stay within the current product maximums.
- Files: `resources/views/testimonials.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Pay Period Default
- Limited the calculator pay period selector to monthly only.
- Files: `resources/views/components/landing/calculator.blade.php`, `resources/views/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loans Page Hero Removal
- Removed the hero and trust bar sections from the loans page.
- Files: `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Stories Mobile Padding Removal
- Removed the stories section padding on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Products Title Update
- Shortened the loan products heading to “Our Loan Products” and reduced its size on small screens.
- Files: `resources/views/components/landing/products.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Panel Width Removal
- Removed the fixed width from the hero panel so it can size naturally.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Panel Mobile Width
- Removed the fixed hero panel width on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Mobile Padding Adjustment
- Added compact vertical padding to the hero section on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Mobile Padding Removal
- Removed vertical padding from the hero section on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Mobile Height + Padding
- Removed the forced hero min-height on small screens and balanced the vertical padding.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Image Mobile Order
- Moved the hero illustration above the copy on small screens, keeping the original order on tablet/desktop.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Caption Contrast
- Switched hero headline text to white and softened the eyebrow/body copy to muted white for readability over the darker overlay.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Image Overlay Contrast
- Darkened the hero image overlays on the home and loans pages to improve caption readability.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Nav Link
- Added the testimonials page link to the primary header navigation.
- Files: `resources/views/components/landing/header.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Amount Max
- Set the calculator loan amount input/range max to £200,000 on the /calculator page.
- Files: `resources/views/components/landing/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Homepage Calculator Removal
- Removed the loan calculator section and its script block from the homepage.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Product Card Accent Bar
- Made the top accent bar on loan product cards visible by default instead of only on hover.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Homepage Loan Products Grid
- Removed the homepage loan products slider and switched to a static 4-up grid on desktop.
- Kept the slider behavior on the loans page.
- Files: `resources/views/components/landing/products.blade.php`, `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Products Container Width
- Expanded the loan products section container to a 1400px max width on the homepage.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Manual Amount Entry
- Adjusted the calculator input syncing so manual amount typing is allowed without immediate clamping, with clamping applied on blur.
- Files: `resources/views/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Left Tablet Padding Removal
- Removed padding from the calculator left column at the tablet breakpoint.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Left Padding Removal
- Removed the padding from the calculator left column.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Tablet Border
- Kept the summary card border visible at the tablet breakpoint.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Card Styling
- Styled the calculator summary as a bordered card with a top accent bar matching the button color.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Layout Spacing
- Added larger vertical gaps inside the calculator summary and moved the apply CTA into the summary panel.
- Files: `resources/views/components/landing/calculator.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Layout
- Removed grid layout from the calculator summary panel.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Header Sizing
- Prevented the calculator summary header from stretching by sizing it to content.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Block Accent Radius
- Matched the left accent stripe corner rounding to the calculator block radius.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Block Accent Stripe
- Enlarged the calculator block left accent stripe and set it to solid brand red.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Block Left Accent Adjust
- Removed the real left border and left only the ::before accent stripe on calculator blocks.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Block Left Accent
- Added a left accent border plus a subtle ::before overlay while keeping the original full border on each calculator block.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Block Border Restore
- Restored the original full border on each calculator block.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Block Accent Border
- Switched calculator blocks to a left-only border in the brand red-dark color.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Background Removed
- Removed the calculator summary background and restored the default text/control colors.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Contrast
- Set calculator summary text, labels, and controls to white so the brand red background remains readable.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Tablet Background
- Kept the calculator summary background on brand red at the tablet breakpoint.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Summary Background
- Set the calculator summary card background to the brand red button color.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Card Background Reverted
- Removed the button-color background from the calculator card again so only the inner panels carry the accent.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Card Background Return
- Restored the button-color background on the calculator card and summary panel.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Section Color Placement
- Removed the background from the calculator card and moved the brand background color to the left input column and summary panel only.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Grid Transparency
- Set the calculator grid background to transparent to let the card color show through.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Calculator Layout Refresh
- Moved the loan type selector to the top of the calculator inputs so amount thresholds apply before selecting values.
- Updated the calculator card to use the primary button background color with a white inner surface for readability.
- Files: `resources/views/components/landing/calculator.blade.php`, `resources/css/welcome.css`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Amount Ranges By Product
- Updated home and loans product cards with the new amount ranges for personal, emergency, business, and asset loans.
- Adjusted loan calculators and the application flow to clamp the desired loan amount by purpose, with server-side validation enforcing the same caps.
- Files: `resources/views/components/landing/products.blade.php`, `resources/views/components/landing/calculator.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`, `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Unique Applicant Identity Checks
- Blocked duplicate loan applications by identity document (NIN, passport, or driving licence) in addition to the existing email checks.
- Added a database unique constraint on identity type + ID number for enforcement.
- Files: `app/Http/Controllers/ApplicationController.php`, `database/migrations/2026_03_21_020000_add_unique_identity_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Card Border Removal
- Removed the border from the status card container for a cleaner status layout.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Single Grid Padding
- Restored padding around the single-status grid layout for improved spacing on the status page.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Received Note Alignment
- Centered the received-page status hint above the action buttons.
- Files: `resources/views/apply-received.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Received Status Hint Placement
- Moved the “Use email and reference number to check updates.” note above the action buttons on the received page.
- Files: `resources/views/apply-received.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Calculator APR Label
- Added the product APR percentage next to the total interest label in the loan application calculator step.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Emergency Loan Term Intervals
- Updated emergency-loan term options to 2/4/6 months while keeping other loan types on 6-month intervals.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Term Interval Options
- Switched the apply-form loan term dropdown to 6-month intervals for non-emergency loans (6/12/18/24).
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Emergency Loan Term Step
- Adjusted the emergency-loan term selector to use 6-month intervals (currently a single 6-month option due to the max-term cap).
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## UK Phone Validation Fix
- Adjusted the UK mobile validation to accept `0712345678` and `+44712345678` formats on client and server.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Applications Redesign
- Removed the admin sidebar/topbar for the applications page and rebuilt the layout to match the provided reference screenshot.
- Added the new filter bar, summary strip, table layout, and pagination styling.
- Files: `resources/views/layouts/admin-base.blade.php`, `resources/views/admin/applications.blade.php`, `resources/css/dashboard.css`, `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## UK +44 Validation Update
- Expanded the UK mobile validation to allow +44 with optional (0) formatting on both client and server.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## UK Phone Validation
- Added UK mobile phone validation on the apply form input and server-side rules.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Phone Placeholder Example
- Replaced the +44 phone placeholder with a numeric example.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Phone Placeholder Format
- Adjusted the +44 phone placeholder to use the 7XX format.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Phone Placeholder
- Updated the phone placeholder to use the +44 format example.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Fee Emphasis Update
- Bolded “Account Opening” and “Activation” in the fee sentence.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approval Fee Copy Revision
- Updated the approved-state fee sentence to “Kindly pay £80 for Account Opening & Activation in Harborwell Finance.”
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approval Fee Copy Update
- Updated the approved-state fee sentence to the requested wording.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Mobile Padding Removal
- Removed the small-screen `.status-card` padding override.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Card Padding Removal
- Removed the default padding from `.status-card` to let inner cards control spacing.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Approved Mobile Fit
- Added small-screen overrides to prevent horizontal overflow in the approved status card.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approval Note Color
- Updated the post-payment approval note color to black.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approval Note Emphasis
- Increased the weight of the post-payment approval note.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approval Note Placement
- Moved the post-payment note above the CTA and centered it in the approved status card.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved Header Weight
- Increased the weight of the “Congratulations! Loan Pre-Approved” heading.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Qualified Amount Strip
- Moved the qualified amount into its own strip below the credit score bar to match the loan-applied layout.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved Amount Label Update
- Replaced “Pre-approved amount” with “Loan applied for” in the approved status card.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Credit Score Label + Qualify Emphasis
- Renamed “Disbursement score” to “Credit score” and emphasized the “You qualify for …” line in the approved card.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved UI Animation Removal
- Removed the remaining animated strip accents from the approved status card.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved Header Size
- Reduced the approved header size and kept it on a single line.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved UI Bubble Removal
- Removed the bubble animation elements from the approved status card.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved Status Single Card
- Removed outer card/border styling for the approved state so only the approval card is visible.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Approved Status Simplification
- Removed the reference header and status pill rows from the approved-state view while keeping them for pending/declined.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Salutation Styling
- Highlighted the applicant’s name in the salutation with the brand color and a stronger weight.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Pending Title Weight
- Increased the weight of the “Application in review” heading for stronger emphasis.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Pending Title Color
- Matched the “Application in review” heading color to the primary button color.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Detail Card Redesign
- Replaced the status timeline with a single status card showing reference header plus pending/approved detail panels.
- Added an approved-state UI inspired by the provided screenshot with animated bubbles and strips.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Reference Number Email Simplification
- Removed status links and “Application ID” from the status email, leaving only the uppercase reference number.
- Files: `resources/views/emails/application-status-link.blade.php`, `resources/views/emails/application-status-link-text.blade.php`, `app/Mail/ApplicationStatusLink.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Email Placeholder Update
- Swapped the status form email placeholder to a more realistic example address.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Placeholder Examples
- Updated status form placeholders to a Gmail example and an uppercase reference number example.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Placeholder Casing Fix
- Removed uppercase text-transform on status form inputs so placeholders display in lowercase.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Form Placeholder Casing
- Normalized status form placeholders to lowercase for consistency.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Entry Heading Update
- Updated the status entry heading to “Enter your details to check your loan application status.”
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Entry Copy Cleanup
- Removed the extra “Use email or reference number.” line from the status entry panel.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Intro Copy + Alignment
- Simplified the status entry copy and switched the empty-state section to left-aligned text.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Layout Grid Cleanup
- Removed grid-template column declarations from the status layout to keep it single-column.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Single Column Override
- Forced the status layout to remain single-column at desktop widths when using the single-column variant.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Page Centering
- Centered the status card on both axes within the status page viewport.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Page Single Column Layout
- Removed the left status overview column and centered the status card into a single, narrow layout similar to the apply receipt page.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Lookup Fields Simplified
- Switched the status lookup form to separate email and reference number fields and removed document-number guidance.
- Files: `resources/views/status.blade.php`, `app/Http/Controllers/StatusController.php`, `resources/views/apply-received.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Receipt Processing Time
- Updated the apply receipt page to reference 24 business hours instead of 72.
- Files: `resources/views/apply-received.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Receipt Secondary Button Style
- Made the “Go to homepage” button on the apply receipt page a border-only style instead of a filled background.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Receipt Without Reference Link
- Redirects now go to `/apply/received` without embedding the reference number, and the receipt page no longer displays it or includes it in buttons.
- Files: `resources/views/apply.blade.php`, `resources/views/apply-received.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Receipt Note Simplification
- Simplified the receipt page note to “Use email or reference number to check updates.”
- Files: `resources/views/apply-received.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Reference Number Terminology + Email Send Restore
- Swapped reference number wording to “reference number” across the apply, receipt, and status pages.
- Re-enabled status-link email delivery after application submission without blocking the client redirect.
- Files: `resources/views/apply.blade.php`, `resources/views/apply-received.blade.php`, `resources/views/status.blade.php`, `app/Http/Controllers/ApplicationController.php`, `app/Http/Controllers/StatusController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Lookup Input Validation
- Restricted status lookups to valid reference numbers, email addresses, or document numbers and added an invalid-details message for malformed inputs.
- Files: `app/Http/Controllers/StatusController.php`, `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Lookup Via ID, Email, Or Document
- Expanded status lookup to accept reference number, email address, or document number (NIN/passport/driver's licence) with updated guidance copy.
- Files: `app/Http/Controllers/StatusController.php`, `routes/web.php`, `resources/views/status.blade.php`, `resources/views/apply-received.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Receipt Card Centering
- Centered the apply receipt page card on both axes and narrowed the layout for better focus on desktop while remaining responsive on small screens.
- Files: `resources/views/apply-received.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Submission Receipt Page
- Redirected successful submissions to a dedicated receipt page and removed the inline success step from the apply flow.
- Added `/apply/received/{token}` to show the 72-hour processing message plus reference number/NIN and navigation links.
- Files: `resources/views/apply.blade.php`, `resources/views/apply-received.blade.php`, `app/Http/Controllers/ApplicationController.php`, `routes/web.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Success Page Copy
- Simplified the submission success view to a single page-style message and confirmed processing within 72 business hours.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Check Flow + Approved Modal
- Removed email-based status link delivery from the apply flow and surfaced reference number/NIN with direct navigation to the status page or homepage.
- Enabled status lookups by reference number or NIN (with NIN redirecting to the reference number URL) and refreshed empty-state copy accordingly.
- Added a celebratory approved-state modal on the status page with confetti animation and payment CTA.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`, `app/Http/Controllers/StatusController.php`, `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Grid Product-Card Border
- Added the same product card border treatment to `.status-grid`, including the top brand accent line visible by default.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Grid Column Shadow
- Added a shadow to `.status-grid` to better separate the status columns on the status page.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Direct Submit Without Confirmation Modal
- Removed the confirm-application modal and submit now happens immediately after validation.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Confirmation Note Placement
- Moved the “private status link” confirmation note to sit directly below the terms agreement checkbox in the final step.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Simple-Interest Rates For All Loan Types
- Applied the simple-interest calculator across all loan purposes using their APRs (4% emergency, 6% personal/business, 5% asset-backed).
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Simple-Interest Formula
- Switched the calculator to the simple-interest formula `interest = principal * rate * time` and split totals across the selected pay period.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Input Defaults Hardening
- Ensured the calculator always uses selected term, pay period, and amount with safe defaults (1-month term and 4% rate fallback) to avoid zero/empty states.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Emergency Rate Per-Period + 1-Month Default
- Set emergency loan pricing to 4% per selected period and defaulted the loan term to 1 month.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Pay Period Locked To Monthly
- Reduced the pay period selector to only the monthly option for loan details.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Term Options 1–6 Months
- Limited the loan term selection to 1–6 months in the loan details step.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Employment Info Optional Labels
- Marked employer name and job title as optional in the employment step labels.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Emergency Notes Label Update
- Updated the emergency notes label to “Description of the emergency (optional)” to clarify intent and optionality.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Step 2 Incident Date Removal
- Removed the incident date field from the step 2 emergency details panel to simplify the form.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Document Type Update
- Renamed the personal info ID type field to document type and surfaced NIN (National Insurance Number) as the primary option.
- Updated client and server validation copy to reference document types and NIN messaging.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Landing Page Sections Expansion
- Added the trust bar, flexible loan options grid, loan calculator panel, CTA band, and footer to complete the screenshot layout.
- Updated the navigation and hero checklist to align with the revised sections.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## SEO Copy & Metadata Refresh
- Added SEO-friendly meta title/description and social preview tags for the landing page.
- Refined hero, trust, options, and calculator copy to better target UK loan search intent.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Structured Data (JSON-LD)
- Added Organization, WebSite, and WebPage schema markup to improve search visibility and rich results eligibility.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Interactive Loan Calculator
- Added JavaScript-driven loan calculator updates for amount, term, and pay period with live repayment estimates.
- Files: `resources/views/welcome.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Products Section
- Added a modern products grid with four loan offerings, detail highlights, and clear action buttons.
- Files: `resources/views/welcome.blade.php`, `resources/views/components/landing/products.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Homepage Redesign (Minimal)
- Simplified the homepage to a modern, minimal layout focused on hero, products, and calculator sections.
- Refreshed typography, palette, and product card styling for a cleaner, professional look.
- Files: `resources/views/welcome.blade.php`, `resources/views/components/landing/header.blade.php`, `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/products.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Success Stories Section
- Added a modern reviews and success stories section with outcome metrics and borrower highlights.
- Files: `resources/views/welcome.blade.php`, `resources/views/components/landing/stories.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Success Stories Slider
- Converted the success stories section into a slider with navigation controls and indicators.
- Files: `resources/views/components/landing/stories.blade.php`, `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Modern Footer Component
- Added a modern footer inspired by the provided layout, adapted to Harborwell branding and color theme.
- Files: `resources/views/components/landing/footer.blade.php`, `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Hero Visual Cleanup
- Removed inner borders from the hero right-column panel and its summary card for a cleaner presentation.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Hero Visual Consistency
- Aligned hero right-column backgrounds with the rest of the hero and removed inner padding in the visual panel.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Hero Image Transparency
- Made the hero image background transparent to avoid a tinted image backdrop.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Unified Button Backgrounds
- Aligned primary and secondary button backgrounds with the header "Apply Today" CTA color for consistent styling across the site.
- Updated slider and utility button treatments to use the same brand red background.
- Files: `resources/css/welcome.css`, `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Global Button Rounding
- Updated the global button style to use a 50px border radius for fully rounded buttons.

## Admin Base Layout With Intersecting Topbar
- Added a new admin base layout that pairs the existing sidebar with a fixed topbar intersecting at the top-left.
- Created a new admin topbar component and wired admin pages to the new layout.
- Updated dashboard styles for the fixed topbar offset, sidebar rail, and mobile toggle behavior.
- Files: `resources/views/layouts/admin-base.blade.php`, `resources/views/components/admin/topbar-intersect.blade.php`, `resources/views/admin.blade.php`, `resources/views/admin/users.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/reports.blade.php`, `resources/views/admin/settings.blade.php`, `resources/css/dashboard.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Modern Admin Tables
- Refined the overview and applications tables with a full-width, modern table treatment and cleaner row separators.
- Added subtle hover/active row treatments to match the updated admin color palette.
- Files: `resources/css/dashboard.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Responsive Admin Tables (Mobile)
- Converted admin tables into stacked, labeled rows on small screens for easier scanning.
- Removed card/panel shadows in mobile layouts to keep the table content clean and flat.
- Files: `resources/css/dashboard.css`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Sleek Admin Filters
- Added a new filter panel with segmented status controls and simplified select fields, optimized for mobile stacking.
- Ensured the filter controls scale to multi-column layout on larger screens while keeping counts readable.
- Files: `resources/css/dashboard.css`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Approval Percentage
- Added an approval percentage flow driven by an approval modal, with the table column in display-only mode.
- Wired the status update endpoint to persist the approved percentage and removed the 100% default on the status page.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/layouts/admin-base.blade.php`, `resources/css/dashboard.css`, `app/Http/Controllers/AdminController.php`, `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Auto-Decline On 0% Approval
- Automatically marks applications as declined when the approved percentage is 0 for approved/payment statuses.
- Ensures applicants do not see an approved state with a 0% allocation.
- Files: `app/Http/Controllers/StatusController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Application Deletion
- Added a delete action with confirmation to remove applications from the admin tables.
- Wired a delete endpoint to permanently remove applications from the system.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/css/dashboard.css`, `routes/web.php`, `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Default Submitted Status
- Ensured new loan applications default to `submitted` when created without an explicit status.
- Files: `app/Models/LoanApplication.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Application Flow Routing & Status Redirect
- Routed all public-facing apply CTAs to the loans page, while keeping loans-page apply actions pointed at the application form.
- Expanded the application form to capture ID number and monthly income, and updated the step copy to reflect the new flow.
- Redirects applicants to their generated status link immediately after submission (including re-applications).
- Files: `resources/views/components/landing/header.blade.php`, `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/calculator.blade.php`, `resources/views/components/landing/products.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`, `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`, `app/Models/LoanApplication.php`, `database/migrations/2026_03_20_000000_add_identity_income_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Two-Column Layout
- Updated the apply form to use a two-column grid on tablet/desktop while keeping a single-column layout on mobile.
- Ensured multi-field rows, consent, errors, and submit actions span the full width for clarity.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Amount + Purpose Two-Column Row
- Placed desired loan amount and loan purpose side-by-side on tablet/desktop, stacking on mobile for readability.
- Kept the term and pay period display grouped in a two-column row for consistency.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Emergency Loan Stepper Application
- Redesigned the apply page into a six-step emergency-loan flow with a horizontal stepper, structured step panels, and review screen.
- Added emergency details, employment info, calculator estimates, and review summaries while keeping mobile-first stacking.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Emergency Loan Personal Info Fields
- Added phone number to the Personal Info step and review summary, alongside full name, email, and ID number.
- Persisted phone number on submission with validation and database support.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`, `app/Models/LoanApplication.php`, `database/migrations/2026_03_20_010000_add_phone_number_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Minimum Loan Amount Set to £1,000
- Raised the minimum loan amount to £1,000 across form validation, calculator inputs, and emergency loan range displays.
- Ensured calculator labels and application constraints stay in sync with the new minimum.
- Files: `app/Http/Controllers/ApplicationController.php`, `resources/views/apply.blade.php`, `resources/views/components/landing/calculator.blade.php`, `resources/views/components/landing/products.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Local Persistence
- Persisted loan stepper inputs per product type so refreshes keep filled details without bleeding across loan types.
- Restores saved values only when fields are editable to avoid clobbering URL-locked inputs, and clears storage after submission.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Monthly Income Numeric-Only Input
- Enforced digits-only input for monthly income with numeric input mode and sanitization on input.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Application Detail Fields Migration
- Added database columns for emergency, personal, business, and asset-backed detail fields captured in the multi-product stepper.
- Files: `database/migrations/2026_03_20_020000_add_application_detail_fields_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Credit Review & Processing Fee Flow
- Added review metadata fields (credit score %, approved %, processing fee amount, paid timestamp) to support conditional approval and fee handling.
- Reworked status timeline copy to reflect conditional approval, fee request, and payment-received states, plus a tailored in-review callout with payment link.
- Updated processing fee payment page to show the configured fee amount (capped at £80).
- Files: `database/migrations/2026_03_20_030000_add_review_fields_to_loan_applications_table.php`, `app/Models/LoanApplication.php`, `app/Http/Controllers/ApplicationController.php`, `app/Http/Controllers/AdminController.php`, `app/Http/Controllers/StatusController.php`, `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Status Options Simplified
- Updated admin status labels and controls so changes are limited to Submitted, Payment, Approved, or Declined.
- Kept legacy “payment received” as a read-only label for existing records without exposing it as a normal selection.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/layouts/dashboard.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Payment Status Cleanup
- Removed “payment received” wording from admin UI; payment status is now shown as “Payment” and updated automatically by the payment API.
- Payment filters and counters now include both payment‑pending and payment‑received records without exposing a separate status option.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/layouts/dashboard.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Status Flow: Submit → Approve/Decline → Payment
- Simplified admin status changes so approvals/declines happen directly from submitted, and payment is handled after approval.
- Moved the status timeline callout to the Approved step and aligned payment countdown and actions to the approved state.
- Files: `app/Http/Controllers/AdminController.php`, `app/Http/Controllers/StatusController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/layouts/dashboard.blade.php`, `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Layout Full-Width Tuning
- Reduced horizontal padding for admin pages so the main dashboard content spans more of the viewport width.
- Files: `resources/css/dashboard.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Async Application Emails
- Queued status link and decision emails so application redirects are not blocked by mail delivery.
- Files: `app/Mail/ApplicationStatusLink.php`, `app/Mail/ApplicationActionRequired.php`, `app/Mail/ApplicationDeclined.php`, `app/Http/Controllers/ApplicationController.php`, `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Multi-Product Stepper Application
- Extended the stepper flow to dynamically support personal, emergency, business, and asset-backed loan types with tailored detail steps and copy.
- Added purpose-specific fields, dynamic step labels, APR-aware calculator estimates, and review summaries driven by the selected product type.
- Updated loan product CTAs on the loans page to pass the selected purpose into the stepper.
- Files: `resources/views/apply.blade.php`, `resources/views/components/landing/products.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Modern Hero Highlights Cards
- Restyled the hero highlight cards with modern card styling and vertical dividers on larger screens.
- Added mobile-first spacing and subtle card emphasis for the highlights section.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Product Card Button Rounding
- Matched the product card buttons to the global 50px rounding for consistency across the homepage.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## White Footer Theme
- Switched the footer to a clean white theme with updated text and border colors for readability.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loan Calculator Page
- Added a dedicated loan calculator page with the shared header/footer and live repayment logic.
- Reused the existing calculator component and styles for a consistent experience.
- Files: `routes/web.php`, `resources/views/calculator.blade.php`, `resources/views/components/landing/calculator.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Calculator Page Spacing Cleanup
- Removed the extra introductory spacer section above the calculator to tighten the top layout.
- Files: `resources/views/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Calculator Page Background
- Removed the gradient background for the calculator page in favor of a clean white backdrop.
- Files: `resources/views/calculator.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Mobile Calculator Spacing
- Reduced calculator section padding on small screens to tighten vertical spacing.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Page
- Added a modern loans page with a dedicated hero, feature highlights, loan products, and a CTA band.
- Reused existing components for products and how-it-works to keep styling consistent.
- Files: `routes/web.php`, `resources/views/loans.blade.php`, `resources/css/welcome.css`, `resources/views/components/landing/products.blade.php`, `resources/views/components/landing/how-it-works.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Hero Reset
- Reverted the loans hero back to the original simple layout after removing the experimental redesign.
- Files: `resources/views/loans.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Hero Container Removal
- Removed the `.container` wrapper from the hero section and added responsive padding directly to the hero grid.
- Files: `resources/views/components/landing/hero.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Hero Container Removal
- Removed the `.container` wrapper from the loans hero and applied responsive padding directly to the hero layout.
- Files: `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Hero Alignment
- Replaced the custom loans hero with the shared landing hero component to keep the experience consistent.
- Removed loans-only hero styles to avoid overriding the global hero design.
- Files: `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Hero Content
- Added a loans-specific hero variant with copy and CTAs tailored to the loans page.
- Files: `resources/views/components/landing/hero-loans.blade.php`, `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loans Foreground Colors
- Replaced gradient fills in loans page foreground elements with solid color backgrounds for a cleaner look.
- Files: `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Landing Foreground Colors
- Replaced gradient fills in landing page foreground elements (highlight cards, avatars, step numbers, and product accents) with solid colors.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Landing Foreground Cleanup
- Flattened remaining foreground accents (CTA band and divider lines) to solid colors.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Form Width
- Capped the status form card width to keep it readable on larger screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Check Simplification
- Simplified the status lookup to use only the application ID field.
- Updated helper copy to match the single-field flow.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Page Simplification
- Removed the extra status details panel and help sidebar below the form for a cleaner layout.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Reference number Validation
- Enforced `HW-20035`-style application ID validation with uppercase formatting.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Tokenized Status Links
- Added tokenized `/status/{token}` links and updated the status page to render status details from the token.
- Included a friendly empty state when the token is missing.
- Files: `routes/web.php`, `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Loan Application Flow
- Added a streamlined `/apply` page that generates a tokenized status link and confirms email delivery.
- Linked primary apply CTAs to the new application flow.
- Files: `routes/web.php`, `resources/views/apply.blade.php`, `resources/css/welcome.css`, `resources/views/components/landing/header.blade.php`, `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Page Two-Column Layout
- Reworked the apply page into a two-column layout with vertical steps on the left and the form on the right.
- Preserved the success state while keeping the flow short and modern.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Container Width
- Matched the apply page container width to the header margins for consistent alignment.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Columns Container Cleanup
- Removed padding and border from the apply columns container to keep the layout flush.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Column Spacing
- Increased the gap between the apply page columns for improved readability.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Steps Cleanup
- Removed the compact steps pills above the application form.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Amount Input
- Added a compact currency prefix for the desired loan amount field.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Input Focus Rings
- Removed focus ring styling from inputs, selects, and textareas.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Terms Notice
- Added terms and privacy policy links above the application submit button.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Application Confirmation UI
- Added a modern confirmation panel with a success badge, status link, and next-step summary.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Field Guidance
- Updated apply form placeholders and added helper text for clearer, more helpful input guidance.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## UK Example Data
- Updated apply form placeholders to UK-style example data.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Helper Text Removal
- Removed helper text from the apply form fields for a cleaner layout.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Note Removal
- Removed the extra email delivery note below the submit button.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Application ETA Update
- Updated the confirmation ETA to 72 business hours.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Copy Icon
- Replaced the copy link button with an icon-only control for a cleaner confirmation UI.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Copy Feedback Icon
- Swapped the copy feedback text for a temporary check icon when the link is copied.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Application IP Limit
- Enforced a one-application-per-IP limit within a 7-day window for the apply flow.
- Moved token generation to the server and added client-side error handling.
- Files: `routes/web.php`, `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Actions Cleanup
- Removed the update estimate button from the status page actions.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Header Active Links
- Updated header navigation links to highlight the active page across routes.
- Files: `resources/views/components/landing/header.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Legal Pages
- Added strict Terms & Conditions and Privacy Policy pages with non-refundable processing fee and no guaranteed disbursement clauses.
- Files: `routes/web.php`, `resources/views/terms.blade.php`, `resources/views/privacy.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Page Live UI
- Redesigned the status page with a live status selector, animated progress bar, and credit score fee details.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Funnel UI
- Rebuilt the status page with a non-interactive vertical funnel, completed/current states, and a payment step linking to the payment page.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`, `routes/web.php`, `resources/views/payment.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Dropdown Descriptions
- Converted status step descriptions into dropdown details, keeping completed steps closed.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Header Meta
- Moved last update and estimated decision info into the status header with smaller text.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Badges
- Added success and danger badge styles for status steps and marked completed steps as success.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Title Update
- Updated the current step title to “In review” to match the live status.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Actions Removal
- Removed the “Speak to support” action from the status page.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Mobile Status Spacing
- Tightened header and status layout spacing on small screens to reduce crowding.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status ETA Placement
- Moved the estimated decision time to the bottom of the status layout.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Mobile Status Description
- Reduced status step description font size on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status ETA Sizing
- Reduced the ETA text size, especially on small screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Header Data Hooks
- Moved the last update into the header beside the badge and centralized status values for future admin control.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Header Spacing Cleanup
- Reduced header padding, logo size, and nav button sizing for a cleaner, less crowded header.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Credit Score Copy
- Clarified the credit score step to explain the approved amount is determined by the credit score.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Step Order
- Moved the credit score fee step before review and updated status labels to reflect payment-first processing.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Processing Fee UI
- Renamed the fee step to processing fee, updated the copy, and redesigned the payment page with a sleek processing-fee layout.
- Files: `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Processing Fee Amount
- Displayed the £10 processing fee amount on the payment page summary.
- Files: `resources/views/payment.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Payment Amount Label
- Removed the “Amount due” label above the processing fee amount.
- Files: `resources/views/payment.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Payment Non-Refundable Copy
- Moved the non-refundable note into the payment description instead of a badge.
- Files: `resources/views/payment.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Payment Label Cleanup
- Removed the “Processing fee” label from the payment summary.
- Files: `resources/views/payment.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Payment Actions Alignment
- Aligned the payment actions so the back to status button sits at the right edge.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Countdown
- Added a 24-hour countdown timer in the processing fee step to create urgency.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Time Indicator
- Replaced the large countdown block with a compact time indicator beside the step header.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Countdown Logic
- Added a real-time countdown timer that persists per status token using localStorage.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Payment Back Link
- Kept the payment page linked to the originating status URL via a tokenized query parameter.
- Files: `resources/views/status.blade.php`, `resources/views/payment.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Payment CTA
- Renamed the credit score fee action to “Continue” and highlighted it with a green accent style.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Status Button Sizing
- Reduced padding on status step buttons to avoid oversized CTAs.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Header Link Simplification
- Reduced the header navigation to five primary links and moved the secondary links into the footer.
- Updated footer navigation to include the relocated links and refreshed legal links to match the new structure.
- Files: `resources/views/components/landing/header.blade.php`, `resources/views/components/landing/footer.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Hero Highlights Section
- Moved the hero highlight cards into a new section directly below the hero.
- Adjusted hero spacing and added section styling to keep the highlights readable on mobile.
- Files: `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/hero-meta.blade.php`, `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Stawi Header Links
- Added the full Stawi-style header link set to the landing header navigation.
- Updated the desktop nav layout to wrap safely with the expanded link set.
- Files: `resources/views/components/landing/header.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Database-Backed Application Flow
- Added a persistent loan applications table with status metadata, processing-fee deadline tracking, and IP-based 7-day throttling.
- Implemented controllers to create applications, send tokenized status links by email (log mailer), and render status/payment pages from stored data.
- Updated the status timeline to render dynamic steps, badges, and a real deadline-based countdown timer.
- Files: `database/migrations/2026_03_17_000000_create_loan_applications_table.php`, `app/Models/LoanApplication.php`, `app/Http/Controllers/ApplicationController.php`, `app/Http/Controllers/StatusController.php`, `app/Http/Controllers/PaymentController.php`, `app/Mail/ApplicationStatusLink.php`, `resources/views/emails/application-status-link.blade.php`, `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `routes/web.php`, `.env`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px-430px widths and at least one tablet size before finalizing changes.

## Apply Form Submit Loader
- Added a subtle inline spinner on the apply form submit button and a loading state to prevent duplicate submissions.
- Applied loading state toggles during async submit and restored state on errors.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Throttle Snackbar
- Replaced the inline throttling error with a subtle snackbar notification and a vaguer message.
- Reused the snackbar for submit errors to avoid direct inline messaging.
- Files: `app/Http/Controllers/ApplicationController.php`, `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Snackbar Styling
- Positioned the apply snackbar at the bottom-right with smaller typography and branded error/success/info color treatments.
- Added snackbar type classes to support different message states.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard
- Added a new `/admin` dashboard with live application and user monitoring, pipeline KPIs, purpose mix, and operational detail panels.
- Included filters, sorting, and an interactive application detail panel for loan management workflows.
- Files: `routes/web.php`, `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Full-Width Columns
- Updated the admin applications table to use equal-width, full-span columns at desktop sizes.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Applications Queue Full Width
- Updated the admin layout so the applications queue panel spans the full width on larger screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Typography Scale
- Reduced admin dashboard header and component typography to a more compact scale for better density.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Header Branding Alignment
- Added the shared site header component to the admin dashboard to match homepage branding.
- Files: `resources/views/admin.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Header Logo Branding
- Restored the admin topbar layout and swapped the initials mark for the Harborwell logo.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Logo Free-Flow Styling
- Removed the admin logo container styling to let the logo sit naturally in the header.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Logo Size Alignment
- Matched the admin header logo sizing to the homepage header logo dimensions.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Brand Layout Simplification
- Removed the extra wrapper within the admin brand block for a flatter header layout.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Header Text Removal
- Removed the admin header text labels to leave only the logo.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Queue Gradient Reduction
- Flattened the applications queue card styling by removing gradient-tinted highlights from the active row and header.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Applications Filters Header
- Added a modern filter header above the applications table with quick status chips, a visible count, and aligned controls.
- Wired chip interactions to the existing filtering logic.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Filters Header Compact Layout
- Compressed the applications queue filter header into a single-line layout on larger screens with tighter chip sizing.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Below-Queue Cards Grid
- Updated the admin panels below the applications queue to display in multi-column grids, reaching three cards per row on large screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Cleanup
- Removed the sections below the applications queue to keep the dashboard focused on the queue.
- Repurposed the summary card to use processing fee metrics instead of user counts.
- Files: `resources/views/admin.blade.php`, `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Applications Queue Shadow Removal
- Removed box shadows from the applications queue panel and active rows for a flatter UI.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin CSS Cleanup
- Removed unused admin styles tied to the deleted sidebar panels and detail sections.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Security & Responsiveness
- Secured the `/admin` route with HTTP Basic authentication using environment credentials.
- Added mobile-first spacing adjustments for the admin header and actions.
- Files: `app/Http/Middleware/AdminAuth.php`, `bootstrap/app.php`, `routes/web.php`, `.env`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Login UI & Auth Guard
- Added a default email/password login screen and wired `/admin` behind session authentication.
- Replaced the basic auth middleware with login/logout routes using Laravel's auth guard.
- Files: `app/Http/Controllers/Auth/LoginController.php`, `resources/views/auth/login.blade.php`, `routes/web.php`, `resources/css/welcome.css`, `bootstrap/app.php`, `.env`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Auth Page Vertical Centering
- Centered the login card vertically within the viewport for a balanced sign-in experience.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin User Artisan Command
- Added `admin:create` artisan command to create or update an admin user with a secure password prompt.
- Supports `--name`, `--password`, and `--force` for updates.
- Usage:
```bash
php artisan admin:create admin@example.com --name="Admin User"
php artisan admin:create admin@example.com --password="SuperSecurePass123" --force
```
- Files: `routes/console.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Layout Redesign
- Rebuilt the admin shell with a mobile-first sidebar navigation, compact topbar, and cleaner header hierarchy.
- Added an off-canvas sidebar for small screens with overlay and toggle controls.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Collapsible Admin Sidebar
- Converted the admin sidebar into a collapsed icon-only rail on desktop that expands on hover for full labels.
- Added iconography for primary navigation and logout.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Sidebar Logo Swap
- Added a dual-logo setup that shows `harborwell-icon.png` in the collapsed sidebar and `harborwell-logo.png` when expanded on hover.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Lucide Icon Library
- Integrated the Lucide icon library via Vite and replaced admin navigation SVGs with Lucide icons.
- Files: `package.json`, `resources/js/app.js`, `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Sidebar Logo Alignment
- Adjusted sidebar padding and header alignment so the logo sits higher and aligns with the topbar header line on desktop.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Sidebar Logo Vertical Alignment
- Nudged the collapsed/expanded sidebar logo upward on desktop to align vertically with the topbar header.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Logo Container Sizing
- Set the sidebar logo container height to min-content for tighter vertical sizing.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Sidebar Hover Stability
- Adjusted the desktop sidebar to expand over content without shifting the main layout, smoothing the hover expand behavior.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Sidebar Logo Size Matching
- Matched the icon logo dimensions to the full logo height/width for a smoother expand transition.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Sidebar Hover Target Refinement
- Expanded the desktop sidebar only when hovering or focusing menu items, avoiding logo-triggered expansion.
- Files: `resources/views/admin.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Content Padding Reduction
- Reduced horizontal padding on the admin main container to give more space to page content.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Sidebar Hover Scope
- Limited the desktop sidebar expand-on-hover behavior to the `.admin-nav` area only.
- Files: `resources/views/admin.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Pages
- Added dedicated admin pages for Applications, Users, Reports, and Settings using a shared dashboard layout.
- Wired new admin routes and controller methods to serve each page with relevant data.
- Files: `resources/views/admin/layout.blade.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/users.blade.php`, `resources/views/admin/reports.blade.php`, `resources/views/admin/settings.blade.php`, `app/Http/Controllers/AdminController.php`, `routes/web.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Consistency
- Standardized admin topbar element heights and alignment for consistent UI across dashboard pages.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Single-Row Layout
- Ensured the admin topbar actions remain on a single row on desktop to avoid height jumps across pages.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Sticky Admin Topbar
- Made the admin topbar sticky across all dashboard pages for consistent navigation.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Component
- Extracted the admin topbar into a reusable Blade component shared across all admin pages.
- Files: `resources/views/components/admin/topbar.blade.php`, `resources/views/admin/layout.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Height Tightening
- Reduced topbar vertical padding to keep the Applications page header consistent with Overview.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Page Min-Height
- Added a minimum height of 80vh on large screens to keep admin pages visually balanced.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Applications Pagination & Min Height
- Added pagination controls to the admin applications table and set a minimum height for the applications panel.
- Improved small-screen table behavior with horizontal overflow.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Empty State
- Added a modern empty-state UI for applications tables with icon, helper copy, and quick actions.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Applications Table UI
- Replaced the applications card list with a modern tabular layout and linked status/actions to `/status/{token}` for sync.
- Updated table sorting logic to work with the new table structure and improved mobile scroll behavior.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/layout.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Inline Application Status Editing
- Added inline status dropdowns per application row and a PATCH endpoint to persist status updates.
- Wired the UI to update status in-place with a small loading indicator and sync via `/status/{token}` links.
- Files: `app/Http/Controllers/AdminController.php`, `routes/web.php`, `resources/views/admin/layout.blade.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Transition Guard
- Enforced sequential status transitions in the admin UI and backend so steps cannot be skipped.
- Disabled invalid status options per row and validated transitions in the status update endpoint.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Transition Update
- Allowed submissions to move directly into In review even if processing fee has not been set.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Status Column Redesign
- Updated the status column to use a clean select control rather than badge-styled selects.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Select Caret Removal
- Removed the custom caret indicator from the admin status select control.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Flow Enforcement
- Restored status gating so In review is only available after Processing fee.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar User Identity
- Replaced topbar action buttons with the current user avatar, name, role, and email.
- Files: `resources/views/components/admin/topbar.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Email Removal
- Removed the user email from the admin topbar identity display.
- Files: `resources/views/components/admin/topbar.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin UI Email Redaction
- Removed applicant and user email addresses from admin application and user list rows.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/users.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Name Shortening
- Displayed names as first name plus second-name initial (e.g., “Martin K.”) across admin topbar and listings.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/users.blade.php`, `resources/views/components/admin/topbar.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin User Chip Spacing
- Tightened the vertical spacing between username and role and increased horizontal padding for the user chip.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Search Removal
- Removed the topbar search field and its related styles.
- Files: `resources/views/components/admin/topbar.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Applications Backend Filtering
- Moved applications filtering and sorting to the backend with query parameters and kept pagination in sync.
- Updated filter chips and dropdowns to submit GET requests and show server-side counts.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/layout.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Table Row Height
- Standardized applications table row height to keep rows visually even across the list.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Approve Action
- Wired the approve button to trigger the status update flow and reduced action button padding in tables.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/layout.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Disbursement Step
- Added a final disbursement step for approved applications on the status timeline.
- Files: `app/Http/Controllers/StatusController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Users Tabular UI
- Rebuilt the users page with the same tabular layout, filters, and pagination styling used on applications.
- Backend filters and sorting now drive the users list.
- Files: `resources/views/admin/users.blade.php`, `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Users Stats Cards Removal
- Removed the users stats summary cards to keep the page focused on the tabular list.
- Files: `resources/views/admin/users.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin User Creation UI
- Added a compact "Add new user" form toggle to the users page with name, email, and role inputs.
- Files: `resources/views/admin/users.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Add User Modal
- Replaced the inline add-user form with a lightweight modal dialog.
- Files: `resources/views/admin/users.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Users Role Column
- Added a Role column to the users table with a safe fallback label when no role data is stored.
- Files: `resources/views/admin/users.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## User Role Persistence
- Added a `role` column to the users table and made it mass assignable on the User model.
- Files: `database/migrations/2026_03_17_000001_add_role_to_users_table.php`, `app/Models/User.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Brand Red Theme
- Updated the global palette so `--brand-red` is the predominant accent color across the app.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Button Text Contrast
- Ensured filled buttons use white text for better contrast on colored backgrounds.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Lookup Prompt
- Added a reference number lookup form on the status page when no token is provided in the URL.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Lookup UX Tightening
- Removed extra text and secondary UI below the status lookup button and narrowed the status card on large screens.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Form Label Alignment
- Left-aligned the status lookup form content while keeping the empty-state card centered.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Page Two-Column Layout
- Reworked the status page layout to split the application status copy and the status card into two columns on large screens, with the card column larger.
- Kept a mobile-first single-column flow and adjusted alignment for larger breakpoints.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Page Header Icon
- Added a large clock icon before the status page header copy to reinforce the timeline context.
- Styled the icon with mobile-first sizing and responsive scaling for larger screens.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Link Placement Update
- Moved the status link summary from the status card into the left column so it sits with the header copy.
- Preserved the mobile-first flow and kept the status card content focused on the timeline UI.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Last Update Placement Update
- Moved the last update timestamp from the status card header into the left column alongside the status link.
- Kept the status card header focused on the live status title and badge.
- Files: `resources/views/status.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Live Meta Placement
- Moved the live status badge from the status card header into the left column alongside the status link.
- Centered the live meta badge within the left column to keep the layout balanced on large screens.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Link Badge Alignment
- Placed the live status badge inline with the status link inside the same status link row.
- Added a small inline meta wrapper to keep the token and badge aligned on one line.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Branded Status Colors
- Applied branded color treatments to approved and declined status badges in the status link row.
- Updated success/danger step state pills to use the Harborwell navy and brand red palette instead of bright system colors.
- Files: `resources/views/status.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Page Small-Screen Typography
- Reduced status page font sizes for titles, badges, rows, and timeline text on screens 480px and under.
- Scoped adjustments to the status page to keep other sections unchanged.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator-to-Apply Prefill
- Linked the home and calculator page CTAs to pass loan amount, term, and pay period to the apply page.
- Added apply page logic to prefill the loan amount from query parameters to reduce duplicate entry.
- Files: `resources/views/components/landing/calculator.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`, `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loans Page Calculator Wiring
- Wired loan product CTAs to the calculator with preset amount, term, and purpose parameters.
- Propagated purpose through the calculator to the apply link and prefills the apply form purpose field.
- Files: `resources/views/loans.blade.php`, `resources/views/calculator.blade.php`, `resources/views/welcome.blade.php`, `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Calculator Prefill
- Added hidden term and pay period fields to capture calculator selections in the application record.
- Locked loan amount and loan type when provided via calculator params and surfaced read-only term/period summaries.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`, `app/Http/Controllers/ApplicationController.php`, `app/Models/LoanApplication.php`, `database/migrations/2026_03_17_010000_add_term_period_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Loan Details Row
- Grouped loan amount, term, and pay period into a single form row for a tighter application layout.
- Kept a mobile-first stacked layout with a three-column layout from tablet sizes upward.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Enforced Calculator Entry
- Enforced calculator-only entry for the apply page by redirecting to the calculator when required query parameters are missing.
- Keeps the apply form aligned with the prefilled loan details flow.
- Files: `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Loan Type Capture
- Added a loan type selector to the calculators so purpose is always included when linking to the apply form.
- Updated calculator scripts to carry loan type with amount, term, and pay period into the apply URL.
- Files: `resources/views/components/landing/calculator.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Applications Detail Coverage
- Extended the admin applications table to surface term and pay period alongside loan amount and purpose.
- Added term and period data attributes to each application row for downstream tooling.
- Files: `resources/views/admin/applications.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Form Consent + Confirmation Modal
- Added a required terms/privacy consent checkbox to the application form with server-side validation.
- Added a confirmation modal that appears before submission to reduce accidental applications.
- Files: `resources/views/apply.blade.php`, `resources/css/welcome.css`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Calculator Loan Amount Input Refresh
- Replaced the calculator loan amount input with the compact currency-prefixed field used on the apply form.
- Added a compact input group variant to keep the calculator layout tight.
- Files: `resources/views/components/landing/calculator.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Meta Card Icon Alignment
- Centered hero meta card contents and added icons to each highlight below the homepage hero.
- Styled icons with a subtle branded capsule for visual balance.
- Files: `resources/views/components/landing/hero-meta.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Success Stories Expansion
- Added additional success story slides to the homepage slider for richer social proof.
- Included varied borrower profiles across personal, business, and consolidation use cases.
- Files: `resources/views/components/landing/stories.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Homepage Accent Balance
- Introduced the new accent color across homepage highlights while retaining brand red for key labels and steps.
- Refined hero, feature strip, and product card accents to create a cleaner red/yellow balance.
- Files: `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Global Accent Balance (Non-Homepage)
- Applied the accent color to non-home pages by remapping highlight tokens to create a balanced red/accent palette.
- Kept brand red available for labels and emphasis while using accent for primary highlights.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Homepage Hero Image Update
- Renamed the new hero image asset and swapped it into the homepage hero section.
- Files: `public/hero-primary.png`, `resources/views/components/landing/hero.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Background Image Refresh
- Renamed the new hero background asset and layered it under a soft gradient for readable foreground content.
- Scoped the background image to the homepage hero.
- Files: `public/hero-bg.png`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Professional Typography Pack
- Replaced the body and heading fonts with Source Sans 3 and Cormorant Garamond to create a more formal, premium typographic tone across the site.
- Updated Google Fonts imports and aligned heading styles, including the loans section titles and testimonial quote styling, to the new typography system.
- Files: `resources/css/welcome.css`, `resources/views/welcome.blade.php`, `resources/views/loans.blade.php`, `resources/views/apply.blade.php`, `resources/views/terms.blade.php`, `resources/views/privacy.blade.php`, `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `resources/views/calculator.blade.php`, `resources/views/auth/login.blade.php`, `resources/views/admin/layout.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Luxury Typography Tune
- Switched the heading font to Playfair Display to deliver a more refined, high-contrast luxury tone while keeping Source Sans 3 for readable body copy.
- Updated Google Fonts imports across public and admin pages to load the new heading family consistently.
- Files: `resources/css/welcome.css`, `resources/views/welcome.blade.php`, `resources/views/loans.blade.php`, `resources/views/apply.blade.php`, `resources/views/terms.blade.php`, `resources/views/privacy.blade.php`, `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `resources/views/calculator.blade.php`, `resources/views/auth/login.blade.php`, `resources/views/admin/layout.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Hero Meta Image Highlights
- Replaced the hero meta SVG icons with branded image thumbnails and renamed the assets for clearer reuse.
- Adjusted the meta-card icon styling to frame the images cleanly in the highlight row.
- Files: `resources/views/components/landing/hero-meta.blade.php`, `resources/css/welcome.css`, `public/hero-meta-fast-checks.png`, `public/hero-meta-flexible-terms.png`, `public/hero-meta-uk-focused.png`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Loan Calculator Section Tint
- Updated the loan calculator section background with a soft accent tint to visually separate the block from surrounding content.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Taller Hero Section
- Increased the hero section vertical rhythm with larger padding and a responsive minimum height for a more spacious first impression.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Executive Typography Pack
- Replaced the heading font with Bodoni Moda and body copy with Libre Franklin to reinforce a formal, high-end brand tone.
- Updated Google Fonts imports across public and admin pages for consistent typography.
- Files: `resources/css/welcome.css`, `resources/views/welcome.blade.php`, `resources/views/loans.blade.php`, `resources/views/apply.blade.php`, `resources/views/terms.blade.php`, `resources/views/privacy.blade.php`, `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `resources/views/calculator.blade.php`, `resources/views/auth/login.blade.php`, `resources/views/admin/layout.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Support Widget
- Added a floating support widget with live chat and ticket creation actions, optimized for mobile-first use.
- Implemented a lightweight ticket form that opens the user's email client with a prefilled request.
- Files: `resources/views/components/landing/support-widget.blade.php`, `resources/views/components/landing/footer.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Support Widget Simplification
- Simplified the support widget into a minimal circular toggle with a compact panel and only two primary actions.
- Reduced panel density and tightened layout for a cleaner, more premium UI.
- Files: `resources/views/components/landing/support-widget.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Support Widget Removal
- Removed the floating support widget and its related styles from the landing experience.
- Files: `resources/views/components/landing/footer.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Global Typography Consistency
- Applied the header/footer typography system across all headings and form controls for consistent brand tone site-wide.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Full-Width Admin Top Bar
- Extended the admin top bar background to span the full viewport width while keeping content aligned to the main grid.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Admin Top Bar Color Match
- Matched the admin top bar background to the sidebar for a unified admin header.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Admin Top Bar Padding Tightening
- Reduced the admin top bar vertical padding for a more compact header.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Poppins + Inria Sans Typography Pack
- Replaced the heading font with Poppins and body copy with Inria Sans for a clean, modern typographic system.
- Updated Google Fonts imports across public and admin pages for consistent typography.
- Files: `resources/css/welcome.css`, `resources/views/welcome.blade.php`, `resources/views/loans.blade.php`, `resources/views/apply.blade.php`, `resources/views/terms.blade.php`, `resources/views/privacy.blade.php`, `resources/views/status.blade.php`, `resources/views/payment.blade.php`, `resources/views/calculator.blade.php`, `resources/views/auth/login.blade.php`, `resources/views/admin/layout.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Products Section Color Simplification
- Reduced the number of accent colors in the products section by switching to a neutral palette and subtle borders for a more professional look.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Product Details Side Panel
- Removed icon hover effects and added a modern product details side panel that opens from the bottom on mobile and the right on desktop.
- Populated the panel with product-specific data for clear, compact viewing on small screens.
- Files: `resources/views/components/landing/products.blade.php`, `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Side Panel Scrollbar Stability
- Updated the product side panel to use inset positioning for full-height alignment and stable scrollbars.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Loans Page UI Cleanup
- Simplified the loans page palette to align with the homepage, using neutral surfaces and softer accents.
- Reduced hover effects and removed heavy color accents for a cleaner, more professional presentation.
- Files: `resources/views/loans.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.


## Calculator Page UI Cleanup
- Simplified the calculator section palette to match the homepage with neutral surfaces and subdued controls.
- Updated slider and pay-period styling to reduce accent colors for a cleaner look.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Branded Application Email Template
- Replaced the plain-text application status email with a branded, mobile-first HTML template and added a plaintext fallback.
- Added a secure-link reminder and an application summary section styled in Harborwell colors.
- Files: `resources/views/emails/application-status-link.blade.php`, `resources/views/emails/application-status-link-text.blade.php`, `app/Mail/ApplicationStatusLink.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Action Required + Declined Status Emails
- Added branded HTML and plaintext templates for action-required and declined status updates.
- Included clear next steps, status links, and application summaries in both templates.
- Files: `resources/views/emails/application-action-required.blade.php`, `resources/views/emails/application-action-required-text.blade.php`, `resources/views/emails/application-declined.blade.php`, `resources/views/emails/application-declined-text.blade.php`, `app/Mail/ApplicationActionRequired.php`, `app/Mail/ApplicationDeclined.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Email Wiring
- Wired admin status updates to send action-required emails for `processing_fee` and declined emails for `declined` transitions.
- Prevented duplicate sends when the status is unchanged.
- Files: `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero CTA Icons + Loans Hero Match
- Added inline SVG icons to the homepage hero call-to-action buttons.
- Matched the loans page hero structure and visuals to the homepage hero section.
- Files: `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/hero-loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero CTA Icon Placement
- Moved hero CTA icons to appear before button text on the homepage and loans hero.
- Files: `resources/views/components/landing/hero.blade.php`, `resources/views/components/landing/hero-loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Cookie Banner
- Added a full-width, mobile-first cookie banner with policy links and consent actions.
- Included client-side persistence to remember the user's consent choice.
- Files: `resources/views/components/landing/footer.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Meta Text-Only Layout
- Matched the homepage hero meta layout to the loans page by switching to a clean, text-only card design.
- Removed the hero meta image assets now that the layout is icon-free.
- Files: `resources/views/components/landing/hero-meta.blade.php`, `resources/css/welcome.css`, `public/hero-meta-fast-checks.png`, `public/hero-meta-flexible-terms.png`, `public/hero-meta-uk-focused.png`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Hero Meta Trust Layout
- Switched the homepage hero meta section to the trust-bar layout used on the loans page, including the same inline SVG icons.
- Harmonized trust-bar styling across pages with mobile-first grid behavior.
- Files: `resources/views/components/landing/hero-meta.blade.php`, `resources/css/welcome.css`, `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Layout Width Restore
- Restored the admin content width by tightening responsive gutters and ensuring the admin main area spans full width.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Content Alignment
- Reduced admin horizontal gutters so cards and tables align with the topbar text line.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Gutters Removed
- Removed admin horizontal gutters and padding so the content aligns flush with the topbar edges.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Padding
- Added horizontal padding to the admin topbar for improved breathing room.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Full-Width Topbar
- Removed horizontal padding from the admin topbar so it spans the full content width with no side gutters.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Padding Restored
- Restored horizontal padding on the admin topbar after removing it.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Full-Width
- Removed horizontal padding so the admin topbar spans the full content width with no side gutters.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Padding Restored (Again)
- Reinstated horizontal padding on the admin topbar after removing it.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Inner Alignment
- Added an inner wrapper to the admin topbar so the bar stays full width while content aligns with the admin content grid.
- Files: `resources/views/components/admin/topbar.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Inner Wrapper Reverted
- Reverted the admin topbar inner wrapper so the topbar returns to the previous layout.
- Files: `resources/views/components/admin/topbar.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Layout Refresh
- Updated the admin dashboard layout to a full-width, non-boxed structure with a fixed full-height sidebar and a topbar aligned to the content grid.
- Standardized admin padding via layout variables for consistent alignment.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Sidebar Expand/Collapse Restored
- Restored the collapsible sidebar behavior on desktop while keeping the new layout padding variables.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Full-Width Content
- Removed horizontal padding from the admin topbar and main content so the layout is flush with the sidebar and page edges.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Content Padding Restored
- Restored admin content padding and topbar inset after removing full-bleed spacing.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Sidebar Hover Expansion
- Restored desktop sidebar expansion by mirroring the expanded styles on hover and focus, ensuring it opens even if JS hover handlers fail.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Content Padding Tightened
- Reduced horizontal padding for the admin content area to remove excessive side margins.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Layout Redesign
- Removed admin layout horizontal gutters so the topbar and content run full width alongside the collapsible sidebar.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Layout Redesign Reverted
- Reverted the full-width admin layout changes to restore the previous padding behavior.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Large-Screen Padding Cap
- Capped admin horizontal padding so large screens use the same spacing as the 1024px breakpoint.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Dashboard Base Layout + CSS Split
- Added a dedicated dashboard base layout with sidebar and topbar, and updated all admin pages to use it.
- Moved dashboard styles into a dedicated CSS file and wired it into the admin layout.
- Files: `resources/views/layouts/dashboard.blade.php`, `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/admin/users.blade.php`, `resources/views/admin/reports.blade.php`, `resources/views/admin/settings.blade.php`, `resources/css/dashboard.css`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Transparency
- Removed the background color from the admin topbar for a transparent look.
- Files: `resources/css/dashboard.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Topbar Non-Sticky
- Disabled sticky positioning for the admin topbar.
- Files: `resources/css/dashboard.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Panel Header Height Fix
- Prevented stretched panel header rows by aligning grid content to the start so headers stay tight to content.
- Files: `resources/css/dashboard.css`

## Single Application Per Email
- Prevented multiple loan applications from the same email address and re-sent the existing status link when a duplicate is detected.
- Added a unique email constraint at the database level to enforce the rule.
- Files: `app/Http/Controllers/ApplicationController.php`, `database/migrations/2026_03_19_000000_add_unique_email_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Fixed-Rate Loan Products & Calculator APR Mapping
- Replaced loan products across the homepage, loans page, calculator, and application flow with fixed-rate Personal (6%), Emergency (4%), Business (6%), and Asset (5%) options.
- Updated calculator logic to apply the correct APR per loan type and aligned ranges with the full product limits.
- Files: `resources/views/components/landing/products.blade.php`, `resources/views/components/landing/calculator.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`, `resources/views/loans.blade.php`, `resources/views/apply.blade.php`, `resources/views/components/landing/stories.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Loan Products Slider on /loans
- Converted the loan products grid into a slider that shows three items per view on desktop, with responsive 2-up tablet and single-card mobile layouts.
- Updated loan product primary buttons on the loans page to use the brand red styling.
- Files: `resources/views/loans.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Homepage Products Slider
- Converted the homepage loan products section into a slider with 3-up desktop, 2-up tablet, and 1-up mobile views.
- Added slider controls and indicators while preserving product card interactions.
- Files: `resources/views/components/landing/products.blade.php`, `resources/views/welcome.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Status Locking After Decision
- Locked application status transitions after approval or decline so other status options are disabled in the admin table.
- Disabled the approve action for non-submitted applications and synced UI controls after status updates.
- Files: `resources/views/admin.blade.php`, `resources/views/admin/applications.blade.php`, `resources/views/layouts/admin-base.blade.php`, `app/Http/Controllers/AdminController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Dashboard Applications Pagination
- Switched the overview applications table to backend pagination with 6 applications per page, keeping filters and sorting server-backed.
- Added pagination controls to the dashboard table to match the applications list behavior.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Footer Brand-Red Background
- Updated the site footer background to use the primary button color and adjusted text, links, borders, and logo styling for contrast.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Footer Bottom Inline Alignment
- Set the footer bottom row to stay on a single line with end-to-end alignment between copyright and legal links.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Footer Bottom Responsive Stack
- Stacked the footer bottom row on small screens and restored the inline, end-to-end layout at tablet sizes.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Modern Contact Page
- Added a streamlined contact page with a clean hero, quick-support panel, and minimal contact channels layout.
- Wired `/contact` to the new view and introduced dedicated styling for the page.
- Files: `resources/views/contact.blade.php`, `routes/web.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Contact Channels Spacing
- Added extra top padding above the contact channels section for improved separation from the hero.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## About and Testimonials Pages
- Added modern, lightweight About and Testimonials pages with mobile-first layouts and minimal content.
- Wired `/about` and `/testimonials` routes to the new views and introduced page-specific styling.
- Files: `routes/web.php`, `resources/views/about.blade.php`, `resources/views/testimonials.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Page Visual Refresh
- Rebuilt the testimonials page to match the provided layout with a bold hero, impact band, story cards, and a CTA strip tailored to Harborwell Finance.
- Added styling for the new sections, cards, and metrics while keeping the layout mobile-first.
- Files: `resources/views/testimonials.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Impact Section Alignment
- Centered the impact metrics layout with gold figures and white labels to match the reference styling.
- Updated spacing and background tone for closer visual alignment with the testimonial screenshot.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Infinite Slider
- Replaced the static testimonial grid with an infinite-loop carousel that matches the reference layout and card styling.
- Added responsive slider styling, navigation controls, and dot indicators with mobile-first behavior.
- Files: `resources/views/testimonials.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Story Card Padding Removal
- Removed padding inside testimonial story card sections for a tighter, edge-to-edge layout.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Card Spacing Adjustment
- Removed outer spacing between testimonial cards while keeping inner content padding intact.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Slider Visual Match
- Reworked the testimonials slider spacing, card headers, and navigation styling to align with the provided reference screenshot.
- Added a large-screen 4-up carousel layout and refined card proportions for a closer match.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Slider Per-View Update
- Adjusted the testimonials carousel to show 1 card on small screens and 3 cards on large screens.
- Files: `resources/views/testimonials.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials UK Names
- Updated testimonial story card names to UK-centric names.
- Files: `resources/views/testimonials.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Testimonials Hero Background Image
- Added a finance-themed Unsplash background image to the testimonials hero with a branded overlay.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## About Page Screenshot Match
- Rebuilt the About page to mirror the provided layout with hero, story, impact, testimonials slider, and leadership sections using UK-focused copy.
- Reused the testimonials carousel mechanics for the About page slider and matched the visual treatment to the reference.
- Files: `resources/views/about.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Identity Document Selection
- Added an ID type selector (National ID, Passport, Driver's licence) alongside the document number in the application form.
- Stored the selected identity type in the backend and included it in the review summary.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`, `app/Models/LoanApplication.php`, `database/migrations/2026_03_21_000000_add_identity_type_to_loan_applications_table.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Identity Fields Inline + Format Validation
- Placed email, ID type, and document number on the same row and kept mobile stacking.
- Added front-end formatting and backend validation rules for National Insurance, passport, and UK driving licence formats.
- Files: `resources/views/apply.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Identity Validation Messaging
- Added explicit client-side validity messages for ID type and document number, ensuring errors display when advancing steps or submitting.
- Files: `resources/views/apply.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Larger Header Logo
- Increased the header logo size with a responsive clamp for better visibility on larger screens.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Typography: Inter
- Switched the site typography to use Inter for both body and headings.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Inter Font Loading
- Updated page templates to load Inter from Google Fonts instead of Inria Sans and Poppins.
- Files: `resources/views/loans.blade.php`, `resources/views/calculator.blade.php`, `resources/views/status.blade.php`, `resources/views/welcome.blade.php`, `resources/views/apply.blade.php`, `resources/views/privacy.blade.php`, `resources/views/testimonials.blade.php`, `resources/views/payment.blade.php`, `resources/views/terms.blade.php`, `resources/views/auth/login.blade.php`, `resources/views/contact.blade.php`, `resources/views/about.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status ETA Copy Update
- Updated the status ETA copy to use a cleaner business-day phrasing.
- Files: `app/Http/Controllers/StatusController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Status Step Current Highlight
- Updated the active status step index to use the same brand red background as the header buttons.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Admin Overview Amount Metrics
- Updated the admin overview stats to surface total and average approved amounts alongside requested totals.
- Files: `app/Http/Controllers/AdminController.php`, `resources/views/admin.blade.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply Phone Validation Removal
- Removed server-side phone format validation so any required phone number value is accepted during application submission.
- Files: `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Apply UK Phone Validation
- Restored server-side validation to accept UK mobile numbers in +44 or 07 formats with flexible spacing.
- Files: `app/Http/Controllers/ApplicationController.php`

## Loan Term Caps By Product
- Expanded loan term options to 24 months for personal, business, and asset loans while keeping emergency loans capped at 6 months in the apply flow and calculators.
- Updated loan product term ranges to match the new maximums across marketing surfaces.
- Files: `resources/views/apply.blade.php`, `resources/views/components/landing/calculator.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`, `resources/views/components/landing/products.blade.php`, `app/Http/Controllers/ApplicationController.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Database Connection Test Script
- Added a CLI script to validate MySQL connectivity using Railway-style environment variables or standard Laravel `DB_*` values.
- The script parses `MYSQL_PUBLIC_URL`/`MYSQL_URL` if present and falls back to discrete env vars, then runs a simple `SELECT 1` test.
- Files: `scripts/test-db-connection.php`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Mobile Menu Consistency Fix
- Centralized the mobile menu toggle script in the shared header component so all pages get identical behavior and the correct close icon state.
- Increased the header stacking order to keep the open mobile menu above page content, including the status page layout.
- Files: `resources/views/components/landing/header.blade.php`, `resources/views/welcome.blade.php`, `resources/views/calculator.blade.php`, `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.

## Mobile Menu Close Icon Fix
- Corrected the mobile menu toggle animation so it renders a proper close (X) icon when open.
- Ensures the middle bar hides and the top/bottom bars rotate into a clean, centered X.
- Files: `resources/css/welcome.css`

## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.
