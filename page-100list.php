<?php
/*
 * Template Name: gallery
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
						<h2 class="title">
				                        <?php the_title(); ?>
						</h2>
						<div class="blog_info">
							<p>最終更新日 : <?php the_time('Y/m/d'); ?></p>
						</div>

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