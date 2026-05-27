# Quillwork patterns

Patterns live one-per-file here and are auto-registered by WordPress (6.0+).
Each file opens with the standard pattern header (`Title`, `Slug`, `Categories`,
`Description`, `Block Types`); the `Slug` prefix is `quillwork/` and re-skins to
`<newtheme>/` per ARCHITECTURE.md §6.

Categories are registered in `inc/blocks.php`:
`quillwork-pages` and `quillwork-sections`.

## Shipped

| File | Slug | Category | Status |
| --- | --- | --- | --- |
| `hero.php` | `quillwork/hero` | sections | Done — light serif headline, italic teal accent ("Words that work. / Content that converts."), eyebrow, dual CTA, ochre float accent (reduced-motion safe). |
| `services.php` | `quillwork/services` | sections | Done — 01–04 numbered cards, ghost-ochre numeral, serif title, arrow-bulleted feature list, left-border hover. |
| `testimonials.php` | `quillwork/testimonials` | sections | Done — `ink-deep` band, oversized ochre quote glyph, italic quote, author + role. |
| `about-stats.php` | `quillwork/about-stats` | sections | Done — two-column editorial copy with coral pull-quote highlight beside a 2×2 stat grid (250+ / 50+ / 10+ / 100%). |
| `contact.php` | `quillwork/contact` | sections | Done — centred heading, subtitle, email + location methods, single primary CTA. |
| `front-page.php` | `quillwork/front-page` | pages | Done — one-click full home: references hero → services → testimonials → about-stats → contact via `wp:pattern` blocks (`Block Types: core/post-content`, `Inserter: true`). Each section stays edited in one place. |

The float, hover, arrow-bullet, and quote-glyph personality lives in
`style.css` `@layer components`; every colour, type, and spacing value resolves
from `theme.json` tokens through block attributes (no inline hex). Heading order
is section-`h2` then card-`h3` throughout, for correct document outline.

## Front page: template vs. pattern (not a duplicate)

`templates/front-page.html` and `front-page.php` are deliberately different
default homes and do not double up:

- **`templates/front-page.html`** is the *rendered* front-page default a fresh
  install shows — a hero followed by a recent-writing query loop (three latest
  posts). It is the live home until the user picks a static page.
- **`front-page.php`** is the *composed* one-click assembly for the inserter —
  the full five-section marketing home (hero → services → testimonials →
  about-stats → contact), built by referencing the section patterns so each
  section is authored once. Insert it into a page, then assign that page as the
  static front page if you want the marketing home instead of the post loop.
