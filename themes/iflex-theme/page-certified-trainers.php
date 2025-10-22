<?php  if ( ! defined( 'ABSPATH' ) ) exit; ?>
 <?php get_header(); ?>
 <main class="certified-trainer-wrapper  mt-lg-9 ">
  <div class="container">
    <!-- 
     - query the certified trainers
     - max certified trainers should only be 12
     - add pagination
     - add search results 
    -->
    <?php
     $args = array(
        'post_type' => 'certified_trainers',
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC'
     );

    $certified_trainers = new WP_Query($args);
    ?>

    <!-- SEARCH CONTAINER & RESULT CONTAINER -->
<div class="row position-relative  z-2">
  <!-- search input & btn -->
  <div id="search-trainer-container"
       class="d-flex flex-row gap-2 w-100 border-bottom border-1 justify-content-center align-items-center py-3">
    <input id="search-trainer-input" type="text" placeholder="Search i.Flex Trainer" class="w-75 text-center rounded-pill px-3 py-2 ">
    <button id="search-trainer-btn" class="rounded-pill px-4 btn btn-primary border border-0">SEARCH</button>
  </div>

  <!-- result container -->
  <div id="result-trainer-container"
       class="position-absolute top-100 d-none start-50 translate-middle-x mt-2 w-50 bg-light border rounded shadow-sm p-3 d-flex flex-column gap-2">
    <!-- results come here  -->
  </div>
</div>


     
     <hr class="text-light">
     <!-- certified trainer container  -->
   
    <div id='trainers-container' class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-2">
      <!-- CERTIFIED TRAINERS CARD -->
         <?php if($certified_trainers->have_posts()):  ?>
            <?php while($certified_trainers->have_posts()): $certified_trainers->the_post(); ?>
             <div class="certified-trainer-card rounded   d-flex   border border-lg-1 border-0 gap-4 z-1 flex-column justify-content-center align-items-center px-1 py-2 px-lg-3 py-lg-4 ">
                <!-- trainer image  -->
                <div class="trainer-img-card w-100 overflow-hidden position-relative border-bottom border-1 ">
                   <?php $imageUrl = get_field('certified_trainer'); ?>
                   <img 
                    class="trainer-img rounded "
                    src="<?php echo $imageUrl['url'] ?>" alt="<?php echo get_the_title(); ?>">
                </div>
                <!-- text -content -->
                 <div class="d-flex gap-2 flex-column w-100">
                    <span 
                     class="trainer-level text-light w-75  py-1 rounded px-1 text-center fw-bold fs-6 border border-1  bg-danger"
                     > 
                     <?php echo get_field('trainer_level'); ?>
                    </span>
                    <span class="trainer-name fs-4 text-dark fw-bold"><?php echo get_the_title(); ?></span>
                    <span class="trainer-address fs-6 text-secondary"><?php echo get_field('trainer_address'); ?></span>
                 </div>
                 <!-- button content -->
                 <div class="view-profile-btn w-100 mt-2">
                    <button onclick="window.location.href='<?php echo esc_url(get_the_permalink(get_the_ID()))?>'" class="align-items-center w-75 d-flex border border-2 gap-3 rounded-pill border-danger justify-content-center">
                        <span class="text-danger fw-semibold fs-5 mb-1"> View Profile </span>
                        <span class="dashicons dashicons-arrow-right-alt fs-5 text-danger "></span>
                    </button>
                 </div>
             </div>
            <?php endwhile; ?>    
         <?php wp_reset_postdata(); endif;?>
       <!-- END | CERT TRAINER CARDS -->
    </div>
  </div>
 </main>
<?php get_footer(); ?> 