<?php

defined('ABSPATH') || die();

/**
 * Bennington Child Theme
 * To customize the blog layout always use the child theme
 *
 * @return void
 */
function rc_bennington_enqueue_styles() {

    $parent_style = 'bennington-theme';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/dist/theme.css' );
    wp_enqueue_script( $parent_style, get_template_directory_uri() . '/dist/theme.js' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'rc_bennington_enqueue_styles' );

/*
 * Make your customizations below this line
 */
