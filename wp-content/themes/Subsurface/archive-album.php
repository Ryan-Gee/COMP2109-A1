<?php /* Template Name: Album Archive */ ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="/wordpress/wp-content/themes/Subsurface/style.css" />
	</head>
	<body <?php body_class(); ?>>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary' ) );?>
		<div id="page">
            <header>
                <div class="header-bg"></div>
                <h1>It's all here.</h1>
                <h3>Find the next big artists before anyone else.</h3>
			</header>
			<div id="album-body">
				<?php
					while ( have_posts() ) :
						do_shortcode("[album_shortcode]");
					endwhile;
				?>
			</div>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>