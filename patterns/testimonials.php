<?php
/**
 * Title: Testimonials — Ink Band (3-up)
 * Slug: quillwork/testimonials
 * Categories: quillwork-sections
 * Description: A deep-teal section with three testimonial cards — a large ochre quote glyph, an italic quote, and a credited author and role.
 * Keywords: testimonials, reviews, quotes, social proof, feedback
 * Block Types: core/group
 * Viewport Width: 1280
 *
 * [SKIN] Quillwork testimonials. The ink-deep band carries cream text; the
 * large decorative quote glyph is a ::before in style.css @layer components
 * (aria-hidden via being purely decorative content). Card type/colour resolve
 * from theme.json tokens via block attributes — no inline hex.
 *
 * @package quillwork
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"tagName":"section","className":"qw-section qw-section--ink","anchor":"testimonials","layout":{"type":"constrained","contentSize":"1280px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|12"}},"backgroundColor":"ink-deep","textColor":"cream"} -->
<section id="testimonials" class="wp-block-group qw-section qw-section--ink has-cream-color has-ink-deep-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-qw-eyebrow qw-eyebrow","textColor":"ochre"} -->
		<p class="is-style-qw-eyebrow qw-eyebrow has-ochre-color has-text-color"><?php esc_html_e( 'Client feedback', 'quillwork' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2xl","textColor":"cream"} -->
		<h2 class="wp-block-heading has-cream-color has-text-color has-2-xl-font-size"><?php esc_html_e( 'What clients say', 'quillwork' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"20rem"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
	<div class="wp-block-group">

		<!-- wp:group {"className":"qw-testimonial-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
		<div class="wp-block-group qw-testimonial-card">
			<!-- wp:paragraph {"className":"qw-testimonial-quote","fontSize":"md","textColor":"cream","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
			<p class="qw-testimonial-quote has-cream-color has-text-color has-md-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e( 'They rewrote our website from the ground up. Search rankings climbed within a season, and the writing finally sounds like us.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"qw-testimonial-author","textColor":"ochre","style":{"typography":{"fontWeight":"600"}},"fontFamily":"dm-sans"} -->
				<p class="qw-testimonial-author has-ochre-color has-text-color has-dm-sans-font-family" style="font-weight:600"><?php esc_html_e( 'Sample client name', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"qw-testimonial-role","fontSize":"sm","textColor":"cream","fontFamily":"dm-sans"} -->
				<p class="qw-testimonial-role has-cream-color has-text-color has-sm-font-size has-dm-sans-font-family"><?php esc_html_e( 'Marketing director, sample company', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"qw-testimonial-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
		<div class="wp-block-group qw-testimonial-card">
			<!-- wp:paragraph {"className":"qw-testimonial-quote","fontSize":"md","textColor":"cream","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
			<p class="qw-testimonial-quote has-cream-color has-text-color has-md-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e( 'They understood our technical product on the first call and wrote documentation our users actually find helpful. Rare and welcome.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"qw-testimonial-author","textColor":"ochre","style":{"typography":{"fontWeight":"600"}},"fontFamily":"dm-sans"} -->
				<p class="qw-testimonial-author has-ochre-color has-text-color has-dm-sans-font-family" style="font-weight:600"><?php esc_html_e( 'Sample client name', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"qw-testimonial-role","fontSize":"sm","textColor":"cream","fontFamily":"dm-sans"} -->
				<p class="qw-testimonial-role has-cream-color has-text-color has-sm-font-size has-dm-sans-font-family"><?php esc_html_e( 'Founder, sample company', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"qw-testimonial-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
		<div class="wp-block-group qw-testimonial-card">
			<!-- wp:paragraph {"className":"qw-testimonial-quote","fontSize":"md","textColor":"cream","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
			<p class="qw-testimonial-quote has-cream-color has-text-color has-md-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e( 'Our blog engagement has tripled since they took over the content calendar. Complex topics, made readable, on a steady cadence.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"qw-testimonial-author","textColor":"ochre","style":{"typography":{"fontWeight":"600"}},"fontFamily":"dm-sans"} -->
				<p class="qw-testimonial-author has-ochre-color has-text-color has-dm-sans-font-family" style="font-weight:600"><?php esc_html_e( 'Sample client name', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"qw-testimonial-role","fontSize":"sm","textColor":"cream","fontFamily":"dm-sans"} -->
				<p class="qw-testimonial-role has-cream-color has-text-color has-sm-font-size has-dm-sans-font-family"><?php esc_html_e( 'Chief executive, sample company', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
