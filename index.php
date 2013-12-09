<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation4blogtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<?php // Pagination by WP SiteManager. http://www.wp-sitemanager.com/usage/pagenavi/ ?>
				<?php if ( class_exists( 'WP_SiteManager_page_navi' ) ) : ?>
					<div class="pagination-centered">
						<?php WP_SiteManager_page_navi::page_navi('elm_class=pagination&current_format=<a href="#">%d</a>'); ?>
					</div>
				<?php else : ?>
					<?php foundation4blogtheme_content_nav( 'nav-below' ); ?>
				<?php endif; ?>
			<?php endif; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>