<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif|Roboto+Condensed" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">
        <div class="row header-bar">
            <div class="column"></div>
            <div class="column shrink">
                <strong><a href="tel:5414717111">541.741.7111</a> | <a href="mailto:sales@metone.com">sales@metone.com</a></strong>
            </div>
        </div>
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>
        <div class="row branding section show-for-medium">
            <div class="column">
                <a href="/"><img src="/wp-content/uploads/2017/06/logo.png" alt="Met One Instruments Inc."></a>
            </div>
        </div>
		<nav class="site-navigation top-bar" role="navigation">
            <div class="row collapse column">
    			<div class="top-bar-left">
    				<div class="site-desktop-title top-bar-title">
                        <?php foundationpress_top_bar_r(); ?>

        				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
        					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        				<?php endif; ?>
    				</div>
    			</div>
            </div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
