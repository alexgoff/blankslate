<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#ff4848">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href="https://rsms.me/inter/inter.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <section id="branding">
            <div id="site-title" class="site-title">
                <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" data-content="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </a>
                <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
            </div>
            <div id="site-description">
                <?php bloginfo( 'description' ); ?>
            </div>
        </section>
        <nav id="menu" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'menu-main' ) ); ?>
        </nav>
    </header>
    <div id="container">