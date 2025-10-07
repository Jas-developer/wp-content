<?php


function iflex_post_types(){
    // modules for logged in students 
    register_post_status( 'iflex_modules', 
    [

    ]
  );
}




add_action( 'init', 'iflex_post_types' );

    