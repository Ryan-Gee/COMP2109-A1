<?php /* Template Name: Contact Page */ ?>
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
                <div class="header-bg-contact"></div>
                <h1>Give us a shout.</h1>
                <h3>Let us know about anything. Except the weather. We got that already.</h3>
                <form action="#" >
                    <input type="text" placeholder="Email" />
                    <textarea placeholder="Message..." rows="3"></textarea>
                    <button><a href="#">Submit</a></button>
                </form>
            </header>
            <div id="body">
                
            </div>
			<footer>
            <?php wp_footer(); ?>
			</footer>
		</div><!-- #page -->
	</body>
</html>