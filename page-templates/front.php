<?php
/*
Template Name: Front
*/
get_header(); ?>

<header>
	<div class="row collapse landing-banner">
	    <div class="column medium-3">
            <a href="/meteorological-sensors-systems/" class="image-section-link">
                <figure>
                    <img src="/wp-content/uploads/2017/06/Weather-16x9.jpg">
                    <figcaption class="section-hightlight">
                        Meterological Sensors &amp; Systems
                    </figcaption>
                </figure>
            </a>
	    </div>
	    <div class="column medium-3">
            <a href="/indoor-controlled-environments/" class="image-section-link">
                <figure>
                    <img src="/wp-content/uploads/2017/06/Inside-Air-16x9.jpg">
                    <figcaption class="section-hightlight">
                        Indoor Controlled Environments
                    </figcaption>
                </figure>
            </a>
	    </div>
	    <div class="column medium-3">
            <a href="/communication-data-handling/" class="image-section-link">
                <figure>
                    <img src="/wp-content/uploads/2017/06/CCS_Industrial-Finalcjo-16x9.jpg">
                    <figcaption class="section-hightlight">
                        Communication &amp Data Handling
                    </figcaption>
                </figure>
            </a>
	    </div>
	    <div class="column medium-3">
            <a href="/air-quality-particulate-monitors/" class="image-section-link">
                <figure>
                    <img src="/wp-content/uploads/2017/06/air-pollution-16x9.jpg">
                    <figcaption class="section-hightlight">
                        Air Quality Particulate Monitors
                    </figcaption>
                </figure>
            </a>
	    </div>
	</div>
</header>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article class="row column" id="landingpage">
        <div class="column medium-6 medium-offset-3 section large">
            <?php the_content(); ?>
        </div>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
