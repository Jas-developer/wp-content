<?php get_header(); ?>

<main id="modules-section" class="container overflow-hidden mt-lg-5 justify-content-center align-items-center vh-100 pt-5">
  <?php
  $args = [
    'post_type' => 'modules',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
  ];

  $module_query = new WP_Query($args);
   
  if($module_query->have_posts()){
    
    while($module_query->have_posts()){
          $module_query->the_post();
          //check if the current_user trainer level has available modules
          $user_level = get_user_meta( get_current_user_id(), 'trainer_level', true );
          $module_level = get_field('trainer_level_modules', get_the_ID());
          
        // if the trainer level exist or user level AND aren't admin
         if($user_level && $module_level && !current_user_can('manage_options')){
           if(is_array($module_level)){
              if(in_array($user_level, $module_level)){ ?>
                <p>Trainer Modules Availeble - Array</p>
              <?php }
           }else{
              if($module_level == $user_level){ ?>
                 <p>Trainer Modules Available - Single</p>
             <?php }
           }
 
         } elseif(current_user_can('manage_options')){ ?>
          // render all modules if current user is admin
          <p>You are an admin - Admin </p>
         <?php } else { ?>
           <p>No modules available </p>
         <?php }

     }
  }



  ?>
</main>

<?php get_footer(); ?>
