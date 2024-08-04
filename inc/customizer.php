<?php
function havoc_customize_register($wp_customize) {
    // Add section for logo settings
    $wp_customize->add_section('havoc_logo_section', array(
        'title'    => __('Logo Settings', 'havoc'),
        'priority' => 30,
    ));

    // Add setting for logo max-width
    $wp_customize->add_setting('havoc_logo_max_width', array(
        'default'   => '100px',
        'transport' => 'refresh',
    ));

    // Add control for logo max-width
    $wp_customize->add_control('havoc_logo_max_width_control', array(
        'label'    => __('Logo Max Width (in px)', 'havoc'),
        'section'  => 'havoc_logo_section',
        'settings' => 'havoc_logo_max_width',
        'type'     => 'text',
    ));

    // Add setting for logo max-height
    $wp_customize->add_setting('havoc_logo_max_height', array(
        'default'   => '100px',
        'transport' => 'refresh',
    ));

    // Add control for logo max-height
    $wp_customize->add_control('havoc_logo_max_height_control', array(
        'label'    => __('Logo Max Height (in px)', 'havoc'),
        'section'  => 'havoc_logo_section',
        'settings' => 'havoc_logo_max_height',
        'type'     => 'text',
    ));

    // Add section for layout settings
    $wp_customize->add_section('havoc_layout_section', array(
        'title'    => __('Layout Settings', 'havoc'),
        'priority' => 30,
    ));

    // Add setting for header layout
    $wp_customize->add_setting('havoc_header_layout', array(
        'default'   => 'hvc-wrapper container',
        'transport' => 'refresh',
    ));

    // Add control for header layout
    $wp_customize->add_control('havoc_header_layout_control', array(
        'label'    => __('Header Layout', 'havoc'),
        'section'  => 'havoc_layout_section',
        'settings' => 'havoc_header_layout',
        'type'     => 'radio',
        'choices'  => array(
            'full-width' => __('Full Width', 'havoc'),
            'hvc-wrapper container'  => __('Container', 'havoc'),
        ),
    ));

    // Add setting for body layout
    $wp_customize->add_setting('havoc_body_layout', array(
        'default'   => 'hvc-wrapper container',
        'transport' => 'refresh',
    ));

    // Add control for body layout
    $wp_customize->add_control('havoc_body_layout_control', array(
        'label'    => __('Body Layout', 'havoc'),
        'section'  => 'havoc_layout_section',
        'settings' => 'havoc_body_layout',
        'type'     => 'radio',
        'choices'  => array(
            'full-width' => __('Full Width', 'havoc'),
            'hvc-wrapper container'  => __('Container', 'havoc'),
        ),
    ));
}
add_action('customize_register', 'havoc_customize_register');
?>