<?php
/**
 * Title: About + Stats — Two Column
 * Slug: quillwork/about-stats
 * Categories: quillwork-sections
 * Description: A two-column section pairing an editorial bio with a coral-bordered pull-quote highlight beside a 2x2 grid of stat cards.
 * Keywords: about, bio, stats, numbers, two column, highlight
 * Block Types: core/group
 * Viewport Width: 1280
 *
 * [SKIN] Quillwork about-and-stats. The coral pull-quote uses the qw-highlight
 * block style; stat numerals use the qw-stat block style. Both resolve their
 * colour and type from theme.json tokens — the only literals are placeholder
 * stat values. Heading order is a single h2 for the section.
 *
 * @package quillwork
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"tagName":"section","className":"qw-section qw-section--teal-tint","anchor":"about","layout":{"type":"constrained","contentSize":"1280px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"backgroundColor":"teal-tint"} -->
<section id="about" class="wp-block-group qw-section qw-section--teal-tint has-teal-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|12","left":"var:preset|spacing|16"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":2,"fontSize":"2xl","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<h2 class="wp-block-heading has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--6)"><?php esc_html_e( 'Based in your region, serving clients everywhere', 'quillwork' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"base","textColor":"ink-medium"} -->
			<p class="has-ink-medium-color has-text-color has-base-font-size"><?php esc_html_e( 'With a working knowledge of many industries and audiences, I bring clarity and craft to every project. Whether you are a new business finding your voice or an established one refining its message, the writing aligns with your goals.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"base","textColor":"ink-medium"} -->
			<p class="has-ink-medium-color has-text-color has-base-font-size"><?php esc_html_e( 'The approach pairs strategy with careful editing. Every piece is researched, revised, and shaped to serve both your objectives and your reader.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:quote {"className":"is-style-qw-highlight qw-highlight"} -->
			<blockquote class="wp-block-quote is-style-qw-highlight qw-highlight">
				<!-- wp:paragraph {"fontSize":"md"} -->
				<p class="has-md-font-size"><?php esc_html_e( 'Great content is not only keywords and conversions. It is the genuine connection that builds a lasting relationship with your audience.', 'quillwork' ); ?></p>
				<!-- /wp:paragraph -->
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"className":"qw-stats-grid","layout":{"type":"grid","columnCount":2},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
			<div class="wp-block-group qw-stats-grid">

				<!-- wp:group {"className":"is-style-qw-stat qw-stat","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|2","padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"backgroundColor":"paper-white"} -->
				<div class="wp-block-group is-style-qw-stat qw-stat has-paper-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">
					<!-- wp:paragraph {"className":"qw-stat__number","fontSize":"2xl","textAlign":"center"} -->
					<p class="qw-stat__number has-text-align-center has-2-xl-font-size">250+</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"qw-stat__label","fontSize":"sm","textAlign":"center"} -->
					<p class="qw-stat__label has-text-align-center has-sm-font-size"><?php esc_html_e( 'Projects completed', 'quillwork' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-qw-stat qw-stat","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|2","padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"backgroundColor":"paper-white"} -->
				<div class="wp-block-group is-style-qw-stat qw-stat has-paper-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">
					<!-- wp:paragraph {"className":"qw-stat__number","fontSize":"2xl","textAlign":"center"} -->
					<p class="qw-stat__number has-text-align-center has-2-xl-font-size">50+</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"qw-stat__label","fontSize":"sm","textAlign":"center"} -->
					<p class="qw-stat__label has-text-align-center has-sm-font-size"><?php esc_html_e( 'Happy clients', 'quillwork' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-qw-stat qw-stat","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|2","padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"backgroundColor":"paper-white"} -->
				<div class="wp-block-group is-style-qw-stat qw-stat has-paper-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">
					<!-- wp:paragraph {"className":"qw-stat__number","fontSize":"2xl","textAlign":"center"} -->
					<p class="qw-stat__number has-text-align-center has-2-xl-font-size">10+</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"qw-stat__label","fontSize":"sm","textAlign":"center"} -->
					<p class="qw-stat__label has-text-align-center has-sm-font-size"><?php esc_html_e( 'Industries served', 'quillwork' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-qw-stat qw-stat","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|2","padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"backgroundColor":"paper-white"} -->
				<div class="wp-block-group is-style-qw-stat qw-stat has-paper-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">
					<!-- wp:paragraph {"className":"qw-stat__number","fontSize":"2xl","textAlign":"center"} -->
					<p class="qw-stat__number has-text-align-center has-2-xl-font-size">100%</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"qw-stat__label","fontSize":"sm","textAlign":"center"} -->
					<p class="qw-stat__label has-text-align-center has-sm-font-size"><?php esc_html_e( 'Client satisfaction', 'quillwork' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
