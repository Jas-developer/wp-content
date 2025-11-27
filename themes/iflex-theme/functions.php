<?php


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
require_once get_template_directory().'/inc/trainer-fields.php';

function iflex_customization() {
  
  add_role( 'trainer', 'Trainer', array(
    'read' => true,
    'edit_posts' => false,
    'delete_posts' =>  false,
    'upload_files' => false,
    'list_users' => false
  ) );


  add_rewrite_rule(
    '^certified-trainers/page/([0-9]+)/?',
    'index.php?pagename=certified-trainers&paged=$matches[1]',
    'top'
  );
}
add_action('init', 'iflex_customization');

/*  
  - modify the enter title here post title
*/
function post_title_placeholder($title, $post){

  if($post->post_type === 'certified_trainers'){
    $title = "Enter Trainer Full Name";
  }
  
  if($post->post_type === 'modules'){
    $title = "Enter Module Title";
  }

  return $title;
}


add_filter( 'enter_title_here', 'post_title_placeholder', 10, 2 );


/*
 Restrict users navigating to pages by url 
  - Modules is only available for logged in users / student
  - Redirect to home page if not logged in
*/ 
 
function restrict_url_navigation(){
  if(is_page( 'modules') && !is_user_logged_in()):
   wp_redirect(home_url());
   exit;
  endif;
}

add_action( 'template_redirect', 'restrict_url_navigation');
/*
 Redirect user Based on Roles
 - If user  is administrator redirect to admin dashboard
 - If user is subscriber redirect to home page 
*/


function redirect_user_by_role($redirect_to,$request,$user){
  if(isset($user->roles) && is_array($user->roles)){

    if(in_array('administrator', $user->roles)){
      return admin_url();
    }

    if(in_array('trainer', $user->roles)){
      return home_url();
    }
  }
}

add_filter( 'login_redirect', 'redirect_user_by_role', 10, 3 );


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
    'iflex-js',
    get_theme_file_uri('build/main.js'), // Adjusted path to include the 'src' folder
    array(),
    filemtime(get_theme_file_path('build/main.js')),
    true
);

 /*
* localize scripts 
* access endpoints 
*/ 

 wp_localize_script( 'iflex-js', 'localizedData', array(
    'nonce' => wp_create_nonce('wp_rest'),
    'restUrl' => esc_url_raw( rest_url())
 ));



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
    get_stylesheet_directory_uri() . '/style.css', // URL for browser
    array('bootstrap-css'),
    filemtime( get_stylesheet_directory() . '/style.css' ) // version
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
