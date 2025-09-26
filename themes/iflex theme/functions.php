<?php




// hide top admin bar
add_filter( "show_admin_bar", '__return_false' );


// Enqueue Bootstrap CSS and JS
function theme_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Theme stylesheet (loads after Bootstrap so you can override styles)
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        wp_get_theme()->get('Version')
    );

    // Bootstrap JS (bundle includes Popper)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
