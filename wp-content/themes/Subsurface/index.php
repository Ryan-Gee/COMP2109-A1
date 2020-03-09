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
                <h1>It happens here.</h1>
                <h3>All the hottest music you've never heard of.</h3>
                <button><a href="/wordpress/album/">Listen Now</a></button>
			</header>
			<div id="body">
			<?php
			?>
			</div>
			<footer>
				<?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>