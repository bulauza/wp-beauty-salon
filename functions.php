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

/**
 * Google Tag Manager
 *
 * GA4・Microsoft Clarity等のタグはGTM管理画面で制御するため、
 * コード側ではGTMコンテナの読み込みのみを担う。
 */
define('LUMIERE_GTM_ID', 'GTM-PCDVJ9RW');

/** <head>内にGTMスクリプトを注入 */
function lumiere_gtm_head_script() {
    ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo esc_js(LUMIERE_GTM_ID); ?>');</script>
    <!-- End Google Tag Manager -->
    <?php
}
add_action('wp_head', 'lumiere_gtm_head_script', 1);

/** <body>直後にGTM noscriptフォールバックを注入 */
function lumiere_gtm_body_noscript() {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr(LUMIERE_GTM_ID); ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
add_action('wp_body_open', 'lumiere_gtm_body_noscript');
