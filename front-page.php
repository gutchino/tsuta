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
 * @package gutchino
 * @subpackage gutchino
 */
get_header(); ?>

			<?php if ( have_posts() ): ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<? the_ID(); ?>"class="post">
					<div class="post">
						<h2 class="title">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
				                        <?php the_title(); ?>
							</a>
						</h2>
						<div class="blog_info">
							<ul>
								<li class="cal">Date : <?php the_time('Y/m/d H:i'); ?></li>
								<li class="cat">Category : <?php the_category(', ') ?></li>
								<li class="tag">Tag : <?php the_tags('', ', '); ?></li>
							</ul>
							<br class="clear" />
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
			<?php if (function_exists("pagination")) {
				pagination();
			} ?>
			<?php wp_reset_query(); ?>
				</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>