<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package De_repente_pais
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
        <script type="text/javascript">
            $('.menu').sideNav();
        </script>
    </head>

    <body <?php body_class(); ?>>

        <div id="page" class="hfeed site">

            <!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'derepentepais'); ?></a>-->

            <header id="masthead" class="clear navbar-fixed" role="banner">
                <nav>
                    <div class="nav-wrapper">
                        <a href="<?= esc_url(home_url('/')); ?>" rel="home" class="brand-logo">
                            <?php bloginfo('name'); ?>
                        </a>

                        <a href="#" data-activates="mobile" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>

                        <?php
                        wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'menu right',
                                )
                        );
                        ?>
                    </div>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content container">
                <!-- google_ad_section_start -->
                <?php if (is_front_page() && is_home()) : ?>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
