# Quillwork — Theme Check readiness self-audit

Pre-submission checklist mirroring what the **Theme Check** plugin and a
WordPress.org reviewer verify. Status is one of:

- **PASS** — verified ready in this satellite repo.
- **FIX** — needs an action before submission (named in the note).
- **N-A** — not applicable to a block theme of this shape.

The two gates that **cannot** run in this satellite repo (no WP install, no
Composer/PHPCS toolchain here) must run on the home machine before submission:

```
composer run lint:phpcs                 # WordPress-Extra, must be clean
wp i18n make-pot . languages/quillwork.pot   # must produce a non-empty POT
```

`php -l` was run here and is clean on every PHP file.

---

## Checklist

| # | Item | Status | Note |
| --- | --- | --- | --- |
| 1 | Prefixing / namespace | PASS | All PHP wrapped in `namespace Quillwork`; callbacks register via `__NAMESPACE__`. No global functions, no `WP_`-prefixed names. Identity concentrated in `inc/bootstrap.php` (`SLUG`, `VERSION`). The block-bindings source registered in `inc/bindings.php` is named `SLUG . '/copyright'` so it stays unique per theme. |
| 2 | Text-domain literal | PASS | Every i18n call uses the string literal `'quillwork'` (required for make-pot; see ARCHITECTURE.md §4). Domain matches the folder slug. |
| 3 | `wp i18n make-pot` | FIX | `languages/` is empty. Generate `languages/quillwork.pot` on the home machine before zip; a non-empty POT confirms the literal domain extracts. |
| 4 | Escaping / sanitisation | PASS | Pattern strings output through `esc_html_e()`; no raw echo of dynamic data. No `$_GET`/`$_POST`/`$_REQUEST` reads anywhere. No SQL. Static pattern markup is trusted theme content. |
| 5 | Disallowed functions | PASS | No `eval`, `extract`, `create_function`, `file_get_contents` on remote URLs, `query_posts`, base64, `error_log`, or `var_dump`. No direct filesystem writes. |
| 6 | Enqueued-file existence | PASS | `add_editor_style( 'assets/css/editor-style.css' )` now resolves — the file was created carrying the `@layer components` pseudo-element personality. Front-end enqueue uses `get_stylesheet_uri()` (style.css, present). |
| 7 | Screenshot | FIX | `screenshot.png` not yet generated. WP.org requires **1200×900** (4:3), PNG, ≤ ~1 MB, representative of the default front page. Generate before zip. |
| 8 | Tags validity | PASS | `block-styles` removed from both `style.css` and `readme.txt` (not on the WP.org controlled tag list). `block-patterns` confirmed valid and retained (the theme ships patterns). The two tag lines are now identical. |
| 9 | License + OFL files | PASS | GPL v2-or-later declared in `style.css` and `readme.txt`. Each bundled font ships its `OFL.txt` (`assets/fonts/<family>/OFL.txt`, all three present); credits + copyright in `readme.txt`. |
| 10 | `Requires` / `Tested up to` | PASS | `style.css` and `readme.txt` agree: Requires at least 7.0, Tested up to 7.0, Requires PHP 8.1, Stable tag 1.0.0. Re-confirm "Tested up to" against the live WP version at submission. |
| 11 | readme.txt format | PASS | Valid header block (Contributors, Requires, Tested up to, Requires PHP, Stable tag, License, Tags), `== Description ==`, `== Installation ==`, `== Changelog ==`, `== Credits ==`, `== Copyright ==`. Stable tag matches `style.css` Version. |
| 12 | No `.gitignore` / dev-cruft | PASS | No `node_modules`, `package.json`, `composer.json`, `*.map`, `*.scss`, or build artifacts in the tree. Self-contained source. A `.distignore` lists the dev-only docs (`ARCHITECTURE.md`, `THEME-CHECK.md`, the two README.md files) so the packaged zip ships theme files only. |
| 13 | FSE template/part completeness | PASS | `templates/`: index, front-page, page, page-wide, single, archive, 404. `parts/`: header, footer (both declared in `theme.json` `templateParts`). `theme.json` version 3, `$schema` pinned to the WP 6.8 stable. The `page-wide` custom template is both registered in `customTemplates` AND present on disk (`templates/page-wide.html`, content widened to 1280px) — the earlier audit marked this PASS while the file was missing; the file now exists. |
| 14 | Patterns register cleanly | PASS | Six pattern files with full headers (Title, Slug, Categories, Description, Block Types). Categories `quillwork-pages` / `quillwork-sections` registered in `inc/blocks.php`. `front-page.php` composes the five sections via `wp:pattern` references — no duplicated markup. |
| 15 | Block-style registration | PASS | Four block styles (Eyebrow, Service Card, Stat Block, Highlight) via `register_block_style()` in `inc/blocks.php`; matching CSS in `style.css` `@layer components` + editor mirror in `assets/css/editor-style.css`. |
| 16 | Accessibility | PASS | Skip link (WCAG 2.4.1), visible focus (`:focus-visible`, 2.4.7) with an ochre override on the dark footer/ink bands so the ring clears 3:1 on `#0d3b3f`, `prefers-reduced-motion` guard, semantic heading outline (blog index now opens with an `<h1>`; `single` always carries an `<h2>` before the comments form so the outline never jumps H1→H3), `accessibility-ready` tag claimed. `ink-muted` darkened to `#696969` for 4.5:1 body contrast on cream/white; services eyebrow moved off ochre-warm to teal (5.4:1). 44px tap targets on footer nav, post-term pills, and the mobile-nav toggles. `sm` font-size floor raised to 1rem (no sub-16px text, no iOS input zoom). Reviewer runs the a11y audit; this is the code-side floor. |
| 17 | Performance / CWV | PASS | Cormorant variable WOFF2 (the h1 LCP font on every template) preloaded site-wide via `wp_head` with `crossorigin`; all five `@font-face` entries carry a Latin `unicodeRange` so non-Latin glyph ranges never trigger a fetch; emoji-detection script + styles dequeued (`init`); `style.css` cache-buster switched to `filemtime()` for immediate cache busting on edit. No render-blocking JS, no third-party connections. |

---

## Verdict

- **PASS: 14**
- **FIX: 3** (make-pot POT generation, screenshot.png, both pre-submission asset steps; tags already fixed in code)
- **N-A: 0**

No code-level blockers remain in this satellite repo. The three FIX items are
asset/tooling steps that run on the home machine at packaging time:

1. `wp i18n make-pot . languages/quillwork.pot`
2. Generate `screenshot.png` at 1200×900.
3. `composer run lint:phpcs` (must be clean — could not run here).
