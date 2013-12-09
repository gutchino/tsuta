<?php
/*
 * Template Name: search
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
				<h3>By Categories</h3>
				<?php wp_list_categories( 'title_li=&show_count=1' ); ?>
			</div>
			<div class="searchby">
				<h3>By Tags</h3>
				<?php wp_tag_cloud( 'smallest=11&largest=11&format=flat' ); ?>
			</div>
				</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>