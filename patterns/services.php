<?php
/**
 * Title: Services — Numbered Cards (4-up)
 * Slug: quillwork/services
 * Categories: quillwork-sections
 * Description: A four-column grid of numbered service cards — large ghost-ochre numeral, serif title, descriptive paragraph, and an arrow-bulleted feature list, with a left-border accent on hover.
 * Keywords: services, offerings, cards, grid, numbered, features
 * Block Types: core/group
 * Viewport Width: 1280
 *
 * [SKIN] Quillwork services grid. Card personality (ghost numeral, arrow
 * bullets, left-border hover) lives in style.css @layer components; this
 * pattern supplies structure, tokens, and copy. Headings stay h2 (section) >
 * h3 (cards) for correct document order.
 *
 * @package quillwork
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"tagName":"section","className":"qw-section qw-section--white","anchor":"services","layout":{"type":"constrained","contentSize":"1280px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|12"}}} -->
<section id="services" class="wp-block-group qw-section qw-section--white" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-qw-eyebrow qw-eyebrow","textColor":"teal"} -->
		<p class="is-style-qw-eyebrow qw-eyebrow has-teal-color has-text-color"><?php esc_html_e( 'What I do', 'quillwork' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"2xl"} -->
		<h2 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e( 'Crafting content that elevates your brand', 'quillwork' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"18rem"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
	<div class="wp-block-group">

		<!-- wp:group {"className":"is-style-qw-service-card qw-service-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group is-style-qw-service-card qw-service-card">
			<!-- wp:paragraph {"className":"qw-service-card__number"} -->
			<p class="qw-service-card__number" aria-hidden="true">01</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"lg"} -->
			<h3 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Marketing content', 'quillwork' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Persuasive copy that captures attention and prompts action. From landing pages to email campaigns, content that turns prospects into customers.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"qw-service-features"} -->
			<ul class="wp-block-list qw-service-features">
				<!-- wp:list-item --><li><?php esc_html_e( 'Landing pages and web copy', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Email marketing campaigns', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Product descriptions', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Brand messaging and voice', 'quillwork' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-qw-service-card qw-service-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group is-style-qw-service-card qw-service-card">
			<!-- wp:paragraph {"className":"qw-service-card__number"} -->
			<p class="qw-service-card__number" aria-hidden="true">02</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"lg"} -->
			<h3 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Blog and editorial', 'quillwork' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Informative posts that establish your authority and connect with readers. Stories that inform, hold attention, and earn the return visit.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"qw-service-features"} -->
			<ul class="wp-block-list qw-service-features">
				<!-- wp:list-item --><li><?php esc_html_e( 'Thought-leadership articles', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Industry insights and analysis', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Company news and updates', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Guest-post creation', 'quillwork' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-qw-service-card qw-service-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group is-style-qw-service-card qw-service-card">
			<!-- wp:paragraph {"className":"qw-service-card__number"} -->
			<p class="qw-service-card__number" aria-hidden="true">03</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"lg"} -->
			<h3 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Technical writing', 'quillwork' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Complex information made clear. Technical concepts translated into user guides, documentation, and white papers your audience can actually use.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"qw-service-features"} -->
			<ul class="wp-block-list qw-service-features">
				<!-- wp:list-item --><li><?php esc_html_e( 'User guides and documentation', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'White papers and reports', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Process documentation', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Case studies', 'quillwork' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-qw-service-card qw-service-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group is-style-qw-service-card qw-service-card">
			<!-- wp:paragraph {"className":"qw-service-card__number"} -->
			<p class="qw-service-card__number" aria-hidden="true">04</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"lg"} -->
			<h3 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Search-friendly content', 'quillwork' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Content that ranks and reads well. Strategic, keyword-aware writing that improves search visibility while keeping the prose worth a human read.', 'quillwork' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"qw-service-features"} -->
			<ul class="wp-block-list qw-service-features">
				<!-- wp:list-item --><li><?php esc_html_e( 'Keyword research and strategy', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Optimised articles', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Content-gap analysis', 'quillwork' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php esc_html_e( 'Meta descriptions and headlines', 'quillwork' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
