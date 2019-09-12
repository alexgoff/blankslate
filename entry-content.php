<section class="entry-content">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <?php 
    if ( is_home () || is_category() || is_archive() ) {
        the_excerpt('');
    } else {
        the_content(); 
    }
    ?>
    <div class="entry-links">
    <?php wp_link_pages(); ?>
    </div>
</section>