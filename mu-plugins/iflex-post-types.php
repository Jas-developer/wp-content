<?php


function iflex_post_types(){
    // modules for logged in students 
    register_post_type( 'modules', 
    [
      "labels" => [
        "name" => "Modules",
        "singular_name" => "Module",
        "add_new_item" => "Upload Module",
        "name_admin_bar" => "Module",
        "edit_item" => "New Module",
        "view_item" => "View Module",
        "all_items" => "All Modules"
      ],
      "public" => true,
      "has_archive" => false,
      "show_in_menu" => true,
      "supports" => ["title", "editor"],
      "show_in_rest" => false
    ]
  );

}




add_action( 'init', 'iflex_post_types' );
