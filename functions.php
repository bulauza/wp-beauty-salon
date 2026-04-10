<?php
/**
 * Lumière Beauty Salon - Theme Functions
 *
 * CSS/JSアセットの読み込みを管理します。
 */

function lumiere_enqueue_assets() {
    // メインスタイルシート (css/style.css)
    wp_enqueue_style(
        'lumiere-main',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0.0'
    );

    // メインスクリプト (js/script.js)
    wp_enqueue_script(
        'lumiere-main',
        get_template_directory_uri() . '/js/script.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'lumiere_enqueue_assets');
