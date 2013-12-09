<?php
/*
 * Template Name: about
 *
 * @package gutchino
 * @subpackage gutchino_theme_01
 */
get_header(); ?>
			<div id="description">
				<h1>"<?php bloginfo('title'); ?>" へようこそ！
</h1>
				<?php bloginfo('description'); ?>
				<p>さて、初対面の人って、どんな人か分からないですよね。<br/>
				どんな経験をしてきてどんな性格で、いまは何に興味があってこれから何したいのか。。。</p>
				<p>僕は自分のこと知ってほしいかまってちゃんですが、<br/>
				初対面の人との会話では相手のことをたくさん知りたい。</p>
				<p>だから、ここ見れば僕のことは分かるんで、あなたの話聞かせてください的な何か、<br/>
				つまりこのサイトができるのをずっと待ってました！！<br/>
				というか待ってても現れなかったので自分で作りましたwww</p>
				<p>ここにたどり着く友達が、一人でも増えますように…</p>
			</div>

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

			<div class="find_me_on">
				<h3>Find Me On</h3>
				<a href="http://facebook.com/gutchino" target="_blank">Facebook</a>
				<a href="http://twitter.com/gutchino" target="_blank">twitter</a>
				<a href=""></a>
			</div>


				</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>