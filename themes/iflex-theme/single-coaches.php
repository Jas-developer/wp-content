<?php  
  if ( ! defined( 'ABSPATH' ) ) exit;  
  get_header(); 
?>

<main class="single-trainer-wrapper   mt-10 mt-lg-10">

  <div class="container ">
    <div class="row gap-lg-5">
      
      <div class="col-12 col-lg-4 d-flex justify-content-start align-items-start flex-column gap-2">
        
        <!-- back to front-page container -->
        <button 
          onclick="history.back()"
          class="d-flex border border-0 d-flex  flex-row bg-transparent justify-content-start border-bottom border-2 border-danger align-items-center gap-2"
        >
          <span class="dashicons dashicons-arrow-left-alt2 text-center fs-5 text-danger fw-bold"></span>
          <span class="fw-semibold fs-5 text-danger mb-1"> BACK</span>
        </button>         
        <span>
        </span>
        
        <!-- coach image -->
        <div class="trainer-img-card w-100 overflow-hidden rounded border border-0 border-dark position-relative">
          <?php $image = get_field('iflex_coaches', get_the_ID()); if($image) : ?>
            <img 
              class="single-trainer-img rounded-pill shadow"
              src="<?php echo esc_url($image['url']); ?>" 
              alt="<?php echo esc_html( get_the_title() ); ?>"
            >
          <?php endif; ?>
         
        </div>
        
         <!-- coach name -->
        <h2 class="fw-semibold fs-3 text-uppercase text-danger bg-transparent  py-1 px-3">
          <?php echo esc_html(get_the_title()); ?>
        </h2>
        
      </div> 

      <!-- #2 info container -->
      <div class="col-12 col-lg-7 justify-content-start align-items-center">

       
      
        <div class="d-flex flex-row justify-content-start align-items-start gap-5">
           <!-- address  -->
        <div class="d-flex flex-column justify-content-center align-items-start gap-1">
          <span class="fs-4 fw-semibold  text-dark">Address</span>
          <span class="fs-5 text-dark fw-normal">
            <?php 
              $trainerAddress = get_field('coach_address'); 
              if($trainerAddress): 
                echo esc_html($trainerAddress); 
              endif; 
            ?>
          </span>
        </div>

        <!-- contact  -->
        <div class="d-flex flex-column gap-1 ">
          <span class="fs-4 fw-semibold text-dark">Contacts</span>
          <span class="fs-5 text-dark">
            <?php 
              $contacts = get_field('phone_number'); 
              if($contacts): 
                echo esc_html($contacts); 
              endif; 
            ?>
          </span>
        </div>
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
