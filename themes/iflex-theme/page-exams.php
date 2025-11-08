<?php  if ( ! defined( 'ABSPATH' ) ) exit;  ?>
 <?php get_header(); ?>

<?php

//custom query 
$args = array(
    'post_type' => 'exams',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'order' => 'DESC'
);

$exams = new WP_Query($args);
if($exams->have_posts()){ 
 $trainer_level =  (string)get_user_meta( get_current_user_id(), 'trainer_level', true); 
 $levels = array('Level 1 - Functional', 'Level 2 - Advanced', 'Level 3 - Expert');
  echo '<div style="height:70vh" id="exams-container" class="container mt-7 d-flex justify-content-center align-items-center">';
   echo '<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 justify-content-center g-1 w-100">';

    while($exams->have_posts()){ $exams->the_post();  $exam_level = (string)get_field('for_trainer_level_'); ?>
      <!-- if user is not yet certified trainers -->
      <?php if(!in_array($trainer_level, $levels) && $exam_level == 'Level 1 - Functional' && !current_user_can('manage_options')) { ?>
             <div class="exam-card col">
                 <div class="d-flex w-100 border border-1 shadow   gap-2 rounded flex-column justify-content-center align-items-start py-4 px-4">
                   <span class="fs-5 text-danger fw-regular">Examination for: <?php echo $exam_level; ?></span>
                    <span><?php echo get_the_title(); ?></span>
                     <button class="border border-0 px-3 py-2 rounded shadow-sm bg-danger text-light"
                      onclick="window.location.href='<?php echo esc_url(get_permalink()) ?>'">Take Exam</button>
                 </div>
             </div>
     <?php } ?>
     <!-- if users is already a certified trainers & not admin -->
     <?php if(in_array($trainer_level, $levels) && !current_user_can('manage_options')){ ?>
            <div class="exam-card col">
                 <div class="d-flex w-100 border border-1 shadow   gap-2 rounded flex-column justify-content-center align-items-start py-4 px-4">
                   <span class="fs-5 text-danger fw-regular">Examination for: <?php echo $exam_level; ?></span>
                    <span><?php echo get_the_title(); ?></span>
                     <button class="border border-0 px-3 py-2 rounded shadow-sm bg-danger text-light"
                      onclick="window.location.href='<?php echo esc_url(get_permalink()) ?>'">Take Exam</button>
                 </div>
             </div>
     <?php  } ?>
     <!--  if users is not a certified trainers and it is an admin -->
     <?php if(!in_array($trainer_level, $levels) && current_user_can('manage_options')) {?>
              <div class="exam-card col">
                 <div class="d-flex w-100 border border-1 shadow   gap-2 rounded flex-column justify-content-center align-items-start py-4 px-4">
                   <span class="fs-5 text-danger fw-regular">Examination for: <?php echo $exam_level; ?></span>
                    <span><?php echo get_the_title(); ?></span>
                     <button class="border border-0 px-3 py-2 rounded shadow-sm bg-danger text-light"
                      onclick="window.location.href='<?php echo esc_url(get_permalink()) ?>'">Take Exam</button>
                 </div>
             </div>
    <?php } ?>
     
    <?php } 
    wp_reset_postdata();

  echo '</div>';
 echo '</div>';

} else {
   echo '<p> No available modules </p>';
}


?>

 
<?php get_footer();