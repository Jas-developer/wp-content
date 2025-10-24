<?php

function register_certified_trainers() {
  // search trainer route
  register_rest_route(
    'iflex/v1',
    '/search-trainers',
    array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => 'search_trainers'
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
  $name = $request->get_param('search');
  $results = [];
  $search_param = array(
     'post_type'  => 'certified_trainers',
     'posts_per_page' => -1,
     's' => $name
  );
  $search_query = new WP_Query($search_param);
  //
  if(count($search_query->posts) >= 1){

    foreach($search_query->posts as $post){
      $message = get_field('quote', $post->ID);
      $shortMsg = (strlen($message) > 25 ) ? substr($message, 0, 25 ).'...' : $message;
      $results[] = [
        'name' => $post->post_title,
        'message' => $shortMsg,
        'imageUrl' => get_field('certified_trainer', $post->ID)['url'],
        'permalink' => get_permalink( $post->ID ),
        'address' => get_field('trainer_address', $post->ID),
        'description' => $post->post_content,
        'level' => get_field('trainer_level', $post->ID)
      ];
    }

   return new WP_REST_Response([
    'success' => true,
    'count' => count($results),
    'data' => $results,
   ],200);

  } else {
    return new WP_REST_Response([
     'success' =>  true,
     'count' => count($results),
     'message' => 'No trainers found'
    ]);
  }


  return new WP_REST_Response([
    'success' => true,
    'count' => count($results),
    'data' => $results,
  ],200);
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
      $message = get_field('quote', $post->ID);
      $shortMsg = (strlen($message) > 25 ) ? substr($message, 0, 25 ).'...' : $message;
       array_push($results, array(
        'name' => $post->post_title,
        'message' => $shortMsg,
        'imageUrl' => get_field('certified_trainer', $post->ID)['url'],
        'permalink' => get_permalink( $post->ID ),
        'address' => get_field('trainer_address', $post->ID),
        'description' => $post->post_content
       ));
    }
  }
  
  return new WP_REST_Response([
    'success' => true,
    'count' => count($results),
    'data' => $results,
  ],200);

}
