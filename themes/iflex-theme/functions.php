<?php

// configure the logo size
add_filter( 'get_custom_logo', function ($html){
   $html = str_replace('custom-logo','iflex-logo', $html);
   return $html;
});
// load dash icons 
wp_enqueue_style('dashicons');


// alow uploading logo 
add_theme_support( 'custom-logo' );

// hide top admin bar
add_filter( "show_admin_bar", '__return_false' );


// Enqueue Bootstrap CSS and JS
function theme_enqueue_scripts() {
    // Enqueue custom JS file
   wp_enqueue_script(
    'iflex-index-js',
    get_theme_file_uri('build/main.js'), // Adjusted path to include the 'src' folder
    array(),
    filemtime(get_theme_file_path('build/main.js')),
    true
);

// custom css | main css
wp_enqueue_style( 'iflex-main-css', get_theme_file_uri( "build/main.css" ), 
array(), filemtime(get_theme_file_path( "build/main.css" )) );

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
