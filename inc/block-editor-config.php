<?php 

/**
 * Custom Gutenberg Funtions
 */

function pure_defaults() {
    add_theme_support(
        'editor-color-palette', 
        array(
            array(
                'name' => 'White',
                'slug' => 'white',
                'color' => '#ffffff'
            ),
            array(
                'name' => 'Black',
                'slug' => 'black',
                'color' => '#000000'
            ),
            array(
                'name' => esc_attr__('Key Lime'),
                'slug' => 'keylime',
                'color' => '#00fc50'
            )
        )
    );

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 24,
            ),
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16,
            ),
            array(
                'name' => 'Small',
                'slug' => 'small',
                'size' => 12,
            )
        )
    );
}

add_action('init', 'pure_defaults');

function pure_blocks() {
    wp_register_script('custom-cta-js', get_template_directory_uri() . '/build/index.js', array('wp-blocks', 'wp-editor', 'wp-components'));
    wp_register_style('custom-cta-css', get_template_directory_uri() . '/pureblocks.css', array());
    register_block_type('pure/custom-cta', array(
        'editor_script' => 'custom-cta-js',
        'editor_style' => '',
        'style' => 'custom-cta-css'
    ));
}

add_action('init', 'pure_blocks');