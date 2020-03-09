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
            <header class="album-single">
				<?php the_post(); ?>
				<div class="header-bg"></div>
				<div class="thumbnail-header"><?php the_post_thumbnail(); ?></div>
				<div class="gradient-black"></div>
                <h1><?php the_title(); ?></h1>
				<h3><?php the_content(); ?></h3>
			</header>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>