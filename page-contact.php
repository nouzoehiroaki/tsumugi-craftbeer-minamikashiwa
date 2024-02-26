<?php get_header();?>
<main id="main" class="under-page page-contact">
    <section id="first-view" class="position-relative">
        <div class="first-view-slide">
            <div class="first-view first-view04"></div>
            <div class="first-view first-view05"></div>
            <div class="first-view first-view06"></div>
        </div>
        <div class="under-h2-posi text-center">
            <h2 class="fade" data-en="contact">お問合せ</h2>
        </div>
    </section>
    <section id="contact">
        <div class="lux-margin">
            <div class="container">
                <div class="contact-form">
    				<?php if ( have_posts() ) : ?>
    				  <?php while( have_posts() ) : the_post(); ?>
    					  <?php remove_filter('the_content', 'wpautop'); ?>
    				      <?php the_content(); ?>
    				  <?php endwhile;?>
    				<?php endif; ?>
    			</div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
