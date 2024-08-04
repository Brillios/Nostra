<?php
/** 
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Havoc Theme
 */

get_header(); ?>

<?php do_action('havoc_before_content_wrap'); ?>

<div id="content-wrap" class="<?php echo get_theme_mod('havoc_body_layout', 'hvc-wrapper'); ?>">

    <div id="primary" class="content-area">
        <div id="content" class="site-content">

            <?php
            // Check if posts exist.
            if (have_posts()) :

                // Loop through posts.
                while (have_posts()) : the_post();
                    get_template_part('partials/entry/layout', get_post_type());
                endwhile;

                // Display post pagination.
                havoc_pagination();

            else :
                // Display no post found notice.
                get_template_part('partials/none');
            endif;
            ?>


        </div><!-- #content -->
    </div><!-- #primary -->

</div><!-- #content-wrap -->

<?php get_footer(); ?>