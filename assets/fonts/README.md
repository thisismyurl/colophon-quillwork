# Bundled fonts

Three fonts ship with Quillwork. All are licensed under the SIL Open Font
License 1.1, which is compatible with the GPL. Each family folder contains the
upstream `OFL.txt` for that font (WordPress.org requires the license to ship
with the font files).

| Family             | Role                  | Files                                                            | License     |
| ------------------ | --------------------- | ---------------------------------------------------------------- | ----------- |
| Cormorant Garamond | Display headlines     | `cormorant-garamond-variable.woff2`, `…-variable-italic.woff2`   | SIL OFL 1.1 |
| Newsreader         | Body / reading column | `newsreader-variable.woff2`, `newsreader-variable-italic.woff2`  | SIL OFL 1.1 |
| DM Sans            | UI / eyebrows / meta  | `dm-sans-variable.woff2`                                         | SIL OFL 1.1 |

The files are the Latin `wght` variable subsets from Fontsource
(https://fontsource.org), built from the canonical Google Fonts sources. The
`@font-face` declarations live in `theme.json` under
`settings.typography.fontFamilies`; the `fontFamily` stacks list Georgia and
system fallbacks so the type still cascades if a file is ever removed.

## Variable vs static — the Cormorant decision (verified, not assumed)

The brief flagged a likely mismatch: it expected **Cormorant Garamond** to be a
static-instance family with no variable file, which would have made the single
`cormorant-garamond-variable.woff2` reference in `theme.json` wrong. **Verified
against the upstream source before trusting either side** — and the premise no
longer holds:

* Google Fonts `ofl/cormorantgaramond/METADATA.pb` declares a single `wght`
  axis (`min 300, max 700`) and ships `CormorantGaramond[wght].ttf` plus a
  matching italic — i.e. the family **is** variable now. The Catharsis Fonts
  upstream re-released it with a weight axis.
* Fontsource exposes it as `@fontsource-variable/cormorant-garamond` with both
  `normal` and `italic` variable files across weights 300–700.

So the **existing `theme.json` shape was already correct**: one variable face
per style, `fontWeight: "300 700"`, normal + italic. The faithful, lean choice
is therefore to ship the real variable WOFF2 — no substitution to the separate
"Cormorant" family, no fan-out into per-weight static `@font-face` blocks. The
design uses light (~300) headlines with italic accents and bold (~700) emphasis;
the variable axis covers all of that from two files (normal + italic). The
family name stays **Cormorant Garamond** everywhere.

Newsreader and DM Sans are likewise shipped as variable WOFF2 (Newsreader
carries its italic in a separate variable file; DM Sans ships a single
normal-axis file, which is all the UI register needs).

`theme.json` was left unchanged — the verified reality matched the file already
on disk. The only reconciliation was dropping the binaries in at the exact
`src` paths the JSON already referenced.

## Provenance

Downloaded from the jsDelivr-served Fontsource variable packages (Latin subset)
and the Google Fonts `ofl/` license tree:

| File on disk                              | Upstream source                                                      |
| ----------------------------------------- | -------------------------------------------------------------------- |
| `cormorant-garamond/*-variable.woff2`     | `@fontsource-variable/cormorant-garamond` — `…-latin-wght-normal`    |
| `cormorant-garamond/*-variable-italic.*`  | `@fontsource-variable/cormorant-garamond` — `…-latin-wght-italic`    |
| `cormorant-garamond/OFL.txt`              | `google/fonts` `ofl/cormorantgaramond/OFL.txt`                       |
| `newsreader/*-variable.woff2`             | `@fontsource-variable/newsreader` — `…-latin-wght-normal`            |
| `newsreader/*-variable-italic.woff2`      | `@fontsource-variable/newsreader` — `…-latin-wght-italic`            |
| `newsreader/OFL.txt`                      | `google/fonts` `ofl/newsreader/OFL.txt`                              |
| `dm-sans/dm-sans-variable.woff2`          | `@fontsource-variable/dm-sans` — `…-latin-wght-normal`               |
| `dm-sans/OFL.txt`                         | `google/fonts` `ofl/dmsans/OFL.txt`                                  |

No render-blocking `<link>`, no third-party connection, no FOIT — `fontDisplay:
swap` plus the Georgia/system fallbacks keep LCP text painting immediately. See
ARCHITECTURE.md §5 for the line-wide font strategy.

## Credits

* Cormorant Garamond — Christian Thalmann (Catharsis Fonts)
* Newsreader — Production Type
* DM Sans — Colophon Foundry / Indian Type Foundry
