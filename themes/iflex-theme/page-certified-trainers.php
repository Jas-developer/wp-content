<?php  if ( ! defined( 'ABSPATH' ) ) exit; ?>
 <?php get_header(); ?>
 <main class="certified-trainer-wrapper mt-lg-9">
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
        'post_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC'
     );

    $certified_trainers = new WP_Query($args);
    ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gap-4">
      <!-- CERTIFIED TRAINERS CARD -->
         <?php if($certified_trainers->have_posts()):  ?>
            <?php while($certified_trainers->have_posts()): $certified_trainers->the_post(); ?>
             <div class="certified-trainer-card rounded z-n1 d-flex shadow-lg gap-4 flex-column justify-content-center align-items-center px-lg-3 py-lg-4 ">
                <!-- trainer image  -->
                <div class="trainer-img-card w-100 overflow-hidden position-relative ">
                   <?php $imageUrl = get_field('certified_trainer'); ?>
                   <img 
                    class="trainer-img rounded shadow "
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
                    <button class="align-items-center w-100 d-flex border border-2 gap-3 rounded-pill border-danger justify-content-center">
                        <span class="text-danger fw-semibold fs-5"> View Profile </span>
                        <span class="dashicons dashicons-arrow-right-alt fs-5 text-danger"></span>
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