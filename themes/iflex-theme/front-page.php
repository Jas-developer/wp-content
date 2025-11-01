<?php get_header(); ?>
<main class="front-page-wrapper">
  <!-- FRONT-PAGE CONTENT -->
<section id="hero-section" class="d-flex w-100 flex-column justify-content-center align-items-center bg-light" >
  

  <div class="container-lg w-100  flex-column container-fluid h-75 d-flex ps-lg-5 justify-content-lg-center align-items-center align-items-lg-center">
    <div class="position-relative mt-5">
      <h1 style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/iflex-fitness.png' ) ?>');" 
    id="hero-section-heading" class="position-relative">
      TRAINING 
    </h1> 
    <span id="hero-section-flex" class=" position-absolute top-0 end-0 me-n4 fs-1 fw-bold text-danger">
      <span class="text-black">i.</span>
     <span class="text-danger ">Flex</span>
    </span>
    </div>
    <br>
      <span class="for-greatness text-danger fs-1 fw-bold ">GROUND FOR GREATNESS</span>
  </div> 

  
</section>

<!-- SECOND SECTION -->
 
<!-- floating info -->
<div  class="floating-info-container container-fluid position-relative">
  <!-- small screen -->
  <div class="rounded position-relative d-block d-md-none justify-content-center  align-items-center px-3 py-3 py-lg-5 shadow-lg w-75  container">
    <?php get_template_part( 'template-parts/floating', 'info' ) ?>
  </div>

  <!-- medium to large screen -->
  <div class="rounded  position-relative d-none d-md-block justify-content-center align-items-center px-3 py-5 shadow-lg w-50 bg-white container">
    <?php get_template_part( 'template-parts/floating', 'info' ) ?>
  </div>
</div>

<!-- about us -->
<div class="about-us-container w-100 position-relative z-n1 ">
  <?php get_template_part( 'template-parts/about', 'us' ) ?>
</div>

</main>
<?php get_footer(); ?>
</body>
