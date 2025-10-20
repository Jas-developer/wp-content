<?php

function register_certified_trainers() {
  // search trainer route
  register_rest_route(
    'iflex/v1',
    '/search-trainers',
    array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => 'search_trainer'
    )
  );

  // all trainers route
  register_rest_route(
    'iflex/v1',
    '/all-trainers',
    array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => 'get_all_trainers'
    )
  );
}
add_action('rest_api_init', 'register_certified_trainers');


//get searched trainers
function search_trainers($request) {
  //get the param search 
  $name = $request->get_param('search');
  return wp_send_json(array("search" => $name));
}

//get all trainers
function get_all_trainers() {
  $results = [];
  //query 
  $trainers = new WP_Query(array(
    'post_type' => 'certified_trainers',
    'posts_per_page' => -1,
  ));

  //push individual array 
  if(count($trainers->posts) >=1 ){
    foreach($trainers->posts as $post){
       array_push($results, array(
        'name' => $post->post_title,
        'message' => get_field('quote',$post->ID),
        'imageUrl' => get_field('certified_trainer', $post->ID)['url'],
        'permalink' => get_permalink( $post->ID ),
        'address' => get_field('trainer_address', $post->ID),
        'description' => $post->post_content
       ));
    }
  }
  
  return $results;

}
