<?php get_header(); ?>
<section id="content" role="main">
    <article id="post-0" class="post not-found">
        <header class="header">
            <h1 class="entry-title">
                <?php _e( '404 Not Found', 'blankslate' ); ?>
            </h1>
        </header>
        <section class="entry-content">
            <p>
                <?php _e( 'Nothing found for the requested page. Looking for one of these?', 'blankslate' ); ?>
            </p>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'menu-404' ) ); ?>
            <a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" rel="noopener" target="_blank" title="Contact me">Contact me</a>
        </section>
    </article>
</section>
<?php get_footer(); ?>