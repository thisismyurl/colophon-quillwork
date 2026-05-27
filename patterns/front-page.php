<?php
/**
 * Title: Front Page — Full Writer Portfolio
 * Slug: quillwork/front-page
 * Categories: quillwork-pages
 * Description: The complete writer-portfolio home page, assembled in order — hero, numbered services, testimonials, about-and-stats, and a contact band — by referencing the five section patterns. Insert once for a finished home, then re-write each section to taste.
 * Keywords: front page, home, landing, portfolio, full page, assembly
 * Block Types: core/post-content
 * Inserter: true
 * Viewport Width: 1280
 *
 * [SKIN] Quillwork one-click home. This pattern composes the five section
 * patterns through pattern-reference blocks, so each section stays edited in
 * exactly one place — change quillwork/services and every assembly that
 * references it follows. It does NOT duplicate templates/front-page.html: that
 * template is the live front-page default (hero + a recent-writing query loop);
 * this is the inserter assembly for building the full marketing home on a page.
 * The two are deliberately different default homes — one rendered, one composed.
 *
 * @package quillwork
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:pattern {"slug":"quillwork/hero"} /-->

<!-- wp:pattern {"slug":"quillwork/services"} /-->

<!-- wp:pattern {"slug":"quillwork/testimonials"} /-->

<!-- wp:pattern {"slug":"quillwork/about-stats"} /-->

<!-- wp:pattern {"slug":"quillwork/contact"} /-->
