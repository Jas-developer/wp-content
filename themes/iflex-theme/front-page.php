<?php get_header(); ?>
<!-- FRONT-PAGE CONTENT -->
<section 
  id="hero-section" 
  style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/iflex-fitness.png' ) ?>')" 
  class="d-flex flex-column justify-content-center align-items-center bg-black"
>
  <div class="hero-section-overlay">
  </div>

  <div class="container-lg container-fluid h-75 d-flex ps-lg-5 justify-content-lg-start align-items-center align-items-lg-end">
    <h1 id="hero-section-heading" class="text-white w-100">
      TRAINING GROUND
      <br>
      <span class="text-danger">FOR GREATNESS</span>
    </h1>
  </div>

  <div class="divider-container position-relative">
  </div>
</section>

<!-- SECOND SECTION -->

<!-- floating info -->
<div class="floating-info-container container-fluid position-relative">
  <!-- small screen -->
  <div class="rounded position-relative d-block d-md-none justify-content-center align-items-center px-3 py-3 py-lg-5 shadow-lg w-75 bg-white container">
    <?php get_template_part( 'template-parts/floating', 'info' ) ?>
  </div>

  <!-- medium to large screen -->
  <div class="rounded position-relative d-none d-md-block justify-content-center align-items-center px-3 py-5 shadow-lg w-50 bg-white container">
    <?php get_template_part( 'template-parts/floating', 'info' ) ?>
  </div>
</div>

<!-- about us -->
<div class="about-us-container w-100 position-relative z-n1">
  <?php get_template_part( 'template-parts/about', 'us' ) ?>
</div>

<?php get_footer(); ?>
</body>
