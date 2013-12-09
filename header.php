<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package gutchino
 * @subpackage gutchino_theme_01
 * @since gutchino_theme_01
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="【gutchinoの〇〇な話】2013年2月に開設したブログです。内容は雑多ですが、根底に流れるテーマは一つ：「美しいこと／ものを通じて、人々の日常に潤いを与える(・ω・)ノ」">
	<meta name="keywords" content="gutchino, グッチーノ, ぐっちーの, gutchino ブログ, 山口 真義, やまぐち まさよし">

	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

<!-- External files -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- Favicon, Thumbnail image -->
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.png">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- ///// Jquery ///// -->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/jquery-contained-sticky-scroll.js"></script>

<!-- ///// Script Here ///// -->
</script>
<!--
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#side').containedStickyScroll();
	    });
	</script>
-->

<!-- ///// Analytics ///// -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36684753-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Value Commerce -->
<valuecommerce   ptnOid="3074663" url="http://gutchino.com" />

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

	<div id="page">
		<div id="wrapper">

<!-- Header -->		
			<header>
				<div id="headerimg">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/headerimg_20130201_7.png" />
				</div>

				<nav>
					<div class="gmenu">
					<?php wp_nav_menu(); ?> 
					</div>
					<div class="searchform">
							<form action="#" id="searchform" method="get">
									<input type="text" id="s" name="s" value="" size="25">
									<input type="submit" value="検索" id="searchsubmit">
							</form>
					</div>
				</nav>

			</header>
<!-- Contents -->
			<div id="contents">
				<div id="main">