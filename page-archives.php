<?php
/*
 * Template Name: archives
 *
 * @package gutchino
 * @subpackage gutchino_theme_01
 */
get_header(); ?>

			<?php if ( have_posts() ): ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<? the_ID(); ?>"class="post">
					<div class="post">
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="thumbnail">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<?php the_content('続きを読む'); ?>
							<br class="clear" />
					</div><!-- /.post -->
					</article><!-- /.post -->
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="searchby">
				<h3>Posted Month</h3>
				<?php wp_get_archives('type=monthly&limit=12'); ?>
			</div>

				</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>