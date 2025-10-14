<?php  if ( ! defined( 'ABSPATH' ) ) exit;  get_header(); ?>
<main class="single-trainer-wrapper   mt-lg-10">
  <!-- individual trainers -->
  <div class="container">
     <div class="row ">
      <!-- #1 image, back to trainers container  -->
       <div class="col-12 col-lg-4 d-flex justify-content-start align-items-start flex-column gap-4 ">
        <!-- back to trainers container -->
        <button onclick="window.location.href='<?php echo esc_url( get_permalink(37)); ?>'";
            class="d-flex border  border-0 flex-row bg-transparent justify-content-start border-bottom border-2 align-items-center gap-2">
           <span class="dashicons dashicons-arrow-left-alt2 text-center fs-5 text-secondary fw-bold"></span>
           <span class=" fw-semibold fs-4 text-secondary mb-1"> BACK TO TRAINERS </span>
        </button>         
        <!-- level -->
         <span class="trainer-level mt-lg-5 text-light w-75  py-1 rounded px-1 text-center fw-bold fs-6 border border-1  bg-danger"> 
           <?php echo get_field('trainer_level'); ?>
         </span>
         <!-- image -->
          <div class="trainer-img-card w-100 overflow-hidden rounded shadow border border-3 border-dark position-relative ">
            <?php $imageUrl = get_field('certified_trainer'); ?>
            <img 
             class="trainer-img  shadow "
             src="<?php echo $imageUrl['url'] ?>" alt="<?php echo get_the_title(); ?>">
          </div>
         <!-- Message or Quotes -->
          <div class="quotes-container">
             <span class="fw-semibold fs-4 text-secondary ">" <?php echo get_field('quote'); ?> " </span>
          </div>
       </div>
       <!-- #2 info container -->
      <div class="col-12 col-lg-8 justify-content-start align-items-center ">
         <!-- name -->
          <h2 class="fw-bold fs-1 text-uppercase"><?php echo get_the_title(); ?></h2>
          <!-- address -->
           <div class="d-flex flex-column gap-1">
             <span class="fs-4 fw-bold text-secondary">Address</span>
             <span  class="fs-5 text-secondary"><?php $trainerAddress = get_field('trainer_address'); echo $trainerAddress; ?></span>
           </div>
          <!-- email / contact -->
           <div class="d-flex flex-column gap-1 mt-lg-3">
             <span class="fs-4 fw-bold text-secondary">Contacts</span>
             <span  class="fs-5 text-secondary"><?php $contacts = get_field('email'); echo $contacts; ?></span>
           </div>
           <hr>
        <!-- the content / paragraph --> 
         <div class="content-paragraph-container position-relative d-flex justify-content-center align-items-center">
            <div class="px-lg-4">
               <p class="text-secondary fs-5">
                <?php echo get_the_content( ); ?>
               </p>
            </div>
         </div>
      </div>  
     </div>
  </div>  
</main>
<?php get_footer();     