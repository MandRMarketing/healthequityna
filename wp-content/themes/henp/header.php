<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <?php
    /*
        Corrects the issue of blog article URLs not having a unique identifier in the slug, allows for each GA4 property to include an Audience for just blog traffic 
    */
        if (get_post_type() == 'post') :
    ?>
        <script>
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?post_type=blog_post';
            window.history.pushState({
                path: newurl
            }, '', newurl);
        </script>
    <?php
        endif; 
        wp_head(); 
    ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#loading-delay').delay(400).fadeOut(300);
            setTimeout(function() {
                $(document.body).trigger('siteLoaded');
                $(document.body).addClass('site-loaded');
            }, 700);
        });
    </script>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="loading-delay"></div>

    <a class="skip-content" href="#primary-wrap" title="Skip to main content of page" tabindex="0">Skip to Content</a>

    <div id="main">
        <header id="header" class="header">
            <div class="header__container container mobile-hide">
                <p class="header__logo site-title">
                    <a class="header__logo__link" href="<?php bloginfo('url'); ?>/">
                        <img class="header__logo__image" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="<?php echo bloginfo('name'); ?> logo" />
                    </a>
                    <span class="header__logo__text sr-only"><?php echo bloginfo('name'); ?></span>
                </p>

                <nav class="header__navigation primary-nav">
                    <?php
                    wp_nav_menu(array(
                        'container'       => 'ul',
                        'menu_class'      => 'sf-menu',
                        'menu_id'         => 'topnav',
                        'depth'           => 0,
                        'theme_location' => 'header_menu'
                    ));
                    ?>
                </nav>
            </div>

            <?php get_template_part('template-parts/menus/mobile-nav'); ?>
        </header>