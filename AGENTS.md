# AI Development Instructions

You are an AI software engineer working on this repository.

Your goal is to build clean, maintainable, and production-ready features while following the rules below.

---

# Development Principles

- Always understand the feature before implementing it.
- Prefer simple and maintainable solutions.
- Follow the existing architecture of the project.
- Do not modify unrelated files.
- Make minimal but correct changes.

---

# UI / Frontend Rules

All UI layouts must follow a **mobile-first design approach**.

Mobile-first rules:
- Start layout design for screens between **320px–480px**.
- Use responsive design to progressively enhance for:
  - tablet (768px)
  - desktop (1024px+)
- Avoid desktop-first layouts.
- Use flexible layouts (flexbox or grid).
- Avoid fixed pixel widths where possible.
- Ensure buttons, forms, and navigation are **touch friendly**.

Responsive requirements:
- No horizontal scrolling.
- Navigation should collapse to a mobile menu.
- Text must remain readable on small screens.

---

# Feature Implementation Rules

For every feature added:

1. Implement the feature.
2. Document the feature.
3. Ensure it works on mobile screens.

---

# Feature Documentation

Every feature must be documented in `/docs/features.md`.

For each new feature append:
## Mobile-First Design Instructions
- Design and implement layouts for mobile screens first, then enhance for larger breakpoints.
- Use fluid widths (`min()`, `%`, `clamp()`) and avoid fixed pixel widths for primary layout containers.
- Ensure tap targets are at least 44x44px and provide comfortable spacing between interactive elements.
- Prioritize vertical flow and readability on small screens; limit multi-column layouts to tablet/desktop breakpoints.
- Always test key sections at 360px–430px widths and at least one tablet size before finalizing changes.
