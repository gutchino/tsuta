<?php
/*
 * Template Name: gallery
 *
 * @package gutchino
 * @subpackage gutchino_theme_01
 */
get_header(); ?>

					<article id="page-gallery"class="post">
					<div class="post">
						<h2 class="title">
				 			<?php the_title(); ?>
						</h2>						
						<p>写真を並べていきます。</p>

							<br class="clear" />

					</div><!-- /.post -->
					</article><!-- /.post -->



			<?php if ( have_posts() ): ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<? the_ID(); ?>"class="post">
					<div class="post">
						<h2 class="title">
							<?php the_title(); ?>
						</h2>
						
						<div class="thumbnail">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						
						<?php the_content('続きを読む'); ?>

							<br class="clear" />

					</div><!-- /.post -->
					</article><!-- /.post -->

				<?php endwhile; ?>

			<?php endif; ?>

				</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>