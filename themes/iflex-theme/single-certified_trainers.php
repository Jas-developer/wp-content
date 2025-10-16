<?php  if ( ! defined( 'ABSPATH' ) ) exit;  get_header(); ?>
<main class="single-trainer-wrapper  mt-lg-10">
  <!-- individual trainers -->
  <div class="container">
     <div class="row ">
      <!-- #1 image, back to trainers container  -->
       <div class="col-12 col-lg-4 d-flex justify-content-start align-items-start flex-column gap-4 ">
        <!-- back to trainers container -->
        <button onclick="window.location.href='<?php echo esc_url( get_permalink(37)); ?>'"
            class="d-flex border  border-0 flex-row bg-transparent justify-content-start border-bottom border-2 align-items-center gap-2">
           <span class="dashicons dashicons-arrow-left-alt2 text-center fs-5 text-secondary fw-bold"></span>
           <span class=" fw-semibold fs-4 text-secondary mb-1"> BACK TO TRAINERS </span>
        </button>         
        <!-- level -->
         <span class="trainer-level mt-lg-5 text-light w-75  py-1 rounded px-1 text-center fw-bold fs-6 border border-1  bg-danger"> 
           <?php $level = get_field('trainer_level');  if($level): echo esc_html( $level ); endif;?>
         </span>
         <!-- image -->
          <div class="trainer-img-card w-100 overflow-hidden rounded  border border-1 border-dark position-relative ">
            <?php if($imageUrl = get_field('certified_trainer')): ?>
            <img 
             class="trainer-img "
             src="<?php echo esc_url( $imageUrl['url']); ?>" alt="<?php echo esc_html( get_the_title() ); ?>">
             <?php endif; ?>
          </div>
         <!-- Message or Quotes -->
          <div class="quotes-container">
             <?php if ( $quote = get_field('quote') ) : ?>
               <blockquote class="fw-semibold fs-5 text-secondary">“ <?php echo esc_html( $quote ); ?> ”</blockquote>
             <?php endif; ?>
          </div>
       </div>
       <!-- #2 info container -->
      <div class="col-12 col-lg-8  justify-content-start align-items-center ">
         <!-- name -->
          <h2 class="fw-bold fs-2  text-uppercase"><?php echo esc_html( get_the_title() ); ?></h2>
          <!-- address -->
           <div class="d-flex flex-column gap-1">
             <span class="fs-4 fw-bold text-secondary">Address</span>
             <span  class="fs-5 text-secondary"><?php $trainerAddress = get_field('trainer_address'); if($trainerAddress): echo esc_html( $trainerAddress ); endif; ?></span>
           </div>
          <!-- email / contact -->
           <div class="d-flex flex-column gap-1 mt-lg-3">
             <span class="fs-4 fw-bold text-secondary">Contacts</span>
             <span  class="fs-5 text-secondary"><?php $contacts = get_field('email'); if($contacts) : echo esc_html( $contacts ); endif; ?></span>
           </div>
           <hr>
        <!-- the content / paragraph --> 
         <div class="content-paragraph-container position-relative d-flex justify-content-center align-items-center">
            <div class="px-lg-4">
               <p class="text-secondary fs-5">
                <?php echo esc_html( get_the_content( ) ); ?>
               </p>
            </div>
         </div>
      </div>  
     </div>
  </div>  
</main>
<?php get_footer();        