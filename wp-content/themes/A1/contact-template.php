<?php
/*
* Template Name: Contact Page
* A template for a contact page and form
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php 
            $headerImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
            $headerImage = header_image();
        ?>
        <section class="header" style="background-image: url(<?php the_field('header_background')?>);">
            <article>
                <h1 style="margin-left:80px;" class="entry-title">
                    <?php echo esc_html(get_the_title()); ?>
                </h1>
            </article>
        </section>
        <section class="the-page-content">
            <div class="main-content">
                <?php the_field('body'); ?>
            </div>
            <div class="contact-main">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="38" title="Primary Contact Form"]') ?>
                    <p class="text-muted">*Note: Contact form does not work on localhost!</p>
                </div>
                <div class="contact-map">
                    <iframe width="600" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJj61dQgK6j4AR4GeTYWZsKWw&key=AIzaSyDak34fr953LUEY5wnO0zvgjAYJfapzvw0"></iframe>
                </div>
            </div>
        </section>
    </main>
    <section>
        <?php get_footer(); ?>
    </section>
</div>