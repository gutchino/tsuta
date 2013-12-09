<?php
/**
 * The Sidebar containing the main widget area.
 */
?>

<div id="side">
<?php
	dynamic_sidebar('Side Widget');
/*if ( ! dynamic_sidebar('side-widget') ): ;?>
	<div class="widget-area">
		<ul id="sidebar">
			<li class="widget-container">
				<h3>カテゴリ</h3>
				<?php wp_list_categories( 'title_li=&show_count=1' ); ?> 
			</li><!-- /.widget-container -->
			<li class="widget-container">
				<h3>タグ</h3>
				<?php wp_tag_cloud(); ?>
			</li><!-- /.widget-container -->
			<li class="widget-container">
				<h3>アーカイブ</h3>
				<div id="calendar_wrap">
				<?php get_calendar(); ?>
				</div>
			</li><!-- /.widget-container -->
		</ul>
	</div><!-- /.widget-area -->
<?php endif; */ ?>
</div><!-- /#side -->
