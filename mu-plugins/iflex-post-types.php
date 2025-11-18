<?php


function iflex_post_types(){
//iflex classes post type
register_post_type('classes',array(
  "labels" => array(
    'name' => 'i.Flex Classes',
    'singular_name' => 'Class',
    'add_new_item' => 'Add new Class',
    'name_admin_bar' => 'Class',
    'edit_item' => 'Edit i.Flex Class',
  ),'show_ui' => true,
  'public' => true,
  'supports' => array('title','editor'),
));

  //exams for trainers 
    register_post_type( 'exams', array(
        "labels" => array(
          'name' => 'Trainers Exam',
          'singular_name' => 'Exam',
          'add_new_item' => 'Add new Exam',
          'name_admin_bar' => 'Exam',
          'edit_item' => 'Edit Exam',
          'view_item' => 'View Exam',
          'all_items' => 'All Exams'
        ),
        'show_ui' => true,
        'public' => true,
        'supports' => array('title','editor'),
        "rewrite" => array(
          'slug' => 'trainer-exams',
          'with_front' => false
        )
    ));
 
  // certified trainers of i.Flex fitness 
  register_post_type( 'certified_trainers', [
    "labels" => [
      "name" => "Certified Trainers",
      "singular_name" => "Trainers",
      "add_new_item" => "Add Certified Trainer",
      "name_admin_bar" => "Trainer",
      "edit_item" => "Edit Trainer",
      "view_item" => "View Trainer",
      "all_items" => "All Certified Trainers", 
    ],
    "rewrite" => [
      'slug' => 'trainers',
      'with_front' => false,
    ],
    "public" => true
  ] );


    // modules for logged in students 
    register_post_type( 'modules', 
    [
      "labels" => [
        "name" => "Modules",
        "singular_name" => "Module",
        "add_new_item" => "Upload Module",
        "name_admin_bar" => "Module",
        "edit_item" => "Edit Module",
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
