<div class="logo">
    <?php
    if (function_exists('the_custom_logo') && has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (has_custom_logo()) {
            $max_width = get_theme_mod('havoc_logo_max_width', '100px');
            $max_height = get_theme_mod('havoc_logo_max_height', '100px');

            // Append 'px' if no unit is specified
            if (is_numeric($max_width)) {
                $max_width .= 'px';
            }
            if (is_numeric($max_height)) {
                $max_height .= 'px';
            }

            // Initialize style string
            $style = '';

            // Add max-width to style if set
            if (!empty($max_width)) {
                $style .= 'max-width: ' . esc_attr($max_width) . '; ';
            }

            // Add max-height to style if set
            if (!empty($max_height)) {
                $style .= 'max-height: ' . esc_attr($max_height) . '; ';
            }

            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" style="' . esc_attr($style) . '">';
        }
    } else {
        echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
    }
    ?>
</div>