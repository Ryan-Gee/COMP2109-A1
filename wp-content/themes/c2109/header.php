<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Link CSS -->
	<link rel="stylesheet" href="wp-content/themes/c2109/inc/css/custom-styles.css" />
	<!-- Link JS -->
	<!-- Add fonts -->
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead">
		<article>
			<!-- logo container -->
		</article>
		<nav>
			<?php
				wp_nav_menu( array(
					'menu' => 'main',
					'theme_location' => '',
					'fallback_cb' => false
				));
			?>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
