<article class="pt-2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php echo '<a href="' . esc_url(get_permalink()) . '" class="read-more">' . __('Read More', 'havoc') . '</a>'; ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->