<?php
/*
Template Name: Printable Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content printable') ?> id="post-<?php the_ID(); ?>">

        <div class="row print-header">
            <div class="column medium-9 medium-offset-3">
                <img src="/wp-content/uploads/2017/06/logo.png" alt="Met One Instruments Inc." class="logo">
                <p>Phone: <strong>541-471-7111</strong></p>
            </div>
        </div>

		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>

        <?php the_content(); ?>

        <div class="row print-button-block">
            <div class="small-12 medium-9 medium-offset-3">
                <a class="button print-datasheet">Print Datasheet</a>
            </div>
        </div>

		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<footer class="print-footer">
    <div class="row">
        <div class="column medium-2 medium-offset-1 text-center"><img src="/wp-content/uploads/2017/06/logo.png" alt="Met One Instruments Inc." class="logo"></div>
        <div class="column medium-3">
            <div class="small no-top section">
                <p>1800 Washington Bivd</p>
                <p>Grants Pass, OR 97526</p>
            </div>
        </div>
        <div class="column medium-3">
            <div class="small no-top section">
                <p>Phone: <strong>541-471-7111</strong></p>
                <p>Fax: <strong>541-471-7116</strong></p>
            </div>
        </div>
        <div class="column medium-3">
            <div class="small no-top section">
                <p>Sales: <strong>sales@metone.com</strong></p>
                <p>Service: <strong>service@metone.com</strong></p>
            </div>
        </div>
    </div>
    <div class="row section">
        <div class="column medium-9 medium-offset-3">
            <p>Copyright 2017 Met One Instruments, Inc. | All rights reserved | Design: Oslund Design | Development: Pure Blue | Hosting: Ambient I.T.</p>
        </div>
    </div>
</footer>

<?php get_footer();
