<?php  
  if ( ! defined( 'ABSPATH' ) ) exit;  
  get_header(); 
?>

<main class="single-trainer-wrapper mt-lg-10">

  <div class="container">
    <div class="row gap-lg-5">
      
      <div class="col-12 col-lg-4 d-flex justify-content-start align-items-start flex-column gap-4">
        
        <!-- back to trainers container -->
        <button 
          onclick="window.location.href='<?php echo esc_url( get_permalink(37)); ?>'"
          class="d-flex border border-0 flex-row bg-transparent justify-content-start border-bottom border-1 border-danger align-items-center gap-2"
        >
          <span class="dashicons dashicons-arrow-left-alt2 text-center fs-5 text-black fw-bold"></span>
          <span class="fw-semibold fs-4 text-danger mb-1"> BACK TO TRAINERS </span>
        </button>         

        <!-- trainer level -->
        <span class="trainer-level mt-lg-5 text-light w-75 py-1 rounded px-1 text-center fw-bold fs-6 border border-1 bg-danger"> 
          <?php 
            
            $level = get_field('trainer_level');  
            if($level): 
              echo esc_html($level); 
            endif;
          ?>
        </span>

        <!-- trainer image -->
        <div class="trainer-img-card w-100 overflow-hidden rounded border border-0 border-dark position-relative">
          <?php if($imageUrl = get_field('certified_trainer')): ?>
            <img 
              class="trainer-img"
              src="<?php echo esc_url($imageUrl['url']); ?>" 
              alt="<?php echo esc_html( get_the_title() ); ?>"
            >
          <?php endif; ?>
        </div>

        <!-- trainer quotes -->
        <div class="quotes-container">
          <?php if ($quote = get_field('quote')) : ?>
            <blockquote class="fw-normal fs-5 text-dark">
              “ <?php echo esc_html($quote); ?> ”
            </blockquote>
          <?php endif; ?>
        </div>

      </div> 

      <!-- #2 info container -->
      <div class="col-12 col-lg-7 justify-content-start align-items-center">

        <!-- trainer name -->
        <h2 class="fw-bold fs-3 text-uppercase text-dark">
          <?php echo esc_html(get_the_title()); ?>
        </h2>
        <hr>   
        <!-- address  -->
        <div class="d-flex flex-column gap-1">
          <span class="fs-4 fw-semibold  text-dark">Address</span>
          <span class="fs-5 text-dark fw-normal">
            <?php 
              $trainerAddress = get_field('trainer_address'); 
              if($trainerAddress): 
                echo esc_html($trainerAddress); 
              endif; 
            ?>
          </span>
        </div>

        <!-- contact  -->
        <div class="d-flex flex-column gap-1 mt-lg-3">
          <span class="fs-4 fw-semibold text-dark">Contacts</span>
          <span class="fs-5 text-dark">
            <?php 
              $contacts = get_field('email'); 
              if($contacts): 
                echo esc_html($contacts); 
              endif; 
            ?>
          </span>
        </div>

        <hr> 

        <!-- content / paragraph -->
        <div class="content-paragraph-container position-relative d-flex justify-content-start align-items-center">
            <p class="text-dark fs-5">
              <?php echo esc_html(get_the_content()); ?>
            </p>
        </div>

      </div> 

    </div>
  </div> 
</main>

<?php get_footer(); ?>
