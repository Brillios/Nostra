<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="hvc-header">
        <div class="hvc-inner <?php echo get_theme_mod('havoc_header_layout', 'hvc-wrapper'); ?>">
            <?php get_template_part('partials/header/logo'); ?>

            <div class="desktop-nav">
                <?php get_template_part('partials/header/nav/desktop'); ?>
            </div>
            <div class="mobile-nav">
                <?php get_template_part('partials/header/nav/mobile'); ?>
            </div>
            
            </div>
            </div>
            </header>

    <?php wp_footer(); ?>

</body>
</html>