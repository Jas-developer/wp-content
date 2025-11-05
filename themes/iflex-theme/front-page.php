<?php get_header(); ?>

<main class="front-page-wrapper">

  <!-- ==========================
       HERO SECTION
  =========================== -->
  <!-- ----
   h1 is hidden | for seo purpose only 
   ---- -->
   <h1 class='visually-hidden'>i.Flex Fitness Philippines - Training Ground for Greatness!</h1>
  <section style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/iflex-fitness.webp' ); ?>');"  id="hero-section" class="d-flex w-100 flex-column justify-content-center  align-items-center ">

    <div class="container-lg w-100 flex-column container-fluid h-75 d-flex ps-lg-5 justify-content-lg-center align-items-center align-items-lg-start">
      
      <div class=" w-100  d-flex flex-column justify-content-center align-items-center align-items-lg-start">
        <div class="position-relative mt-5">
        <h2 
          id="hero-section-heading" 
          class="position-relative z-2  "
         
        >
          TRAINING
        </h2>

        <span id="hero-section-flex" class="position-absolute top-0 end-0 me-n4 z-2 fs-1 fw-semibold text-danger">
          <span class="text-light">i.</span>
          <span class="logo-color">Flex</span>
          <span class="text-light">Fitness</span>
        </span>
   <div class="w-100 d-flex flex-column ">
     <h3 class="for-greatness text-white   fs-lg-1 fs-md-2 fs-3 z-2 fw-bold">
        GROUND FOR GREATNESS
      </h3>
    <hr class=" w-50 z-2  custom-hr">
      <a class='align-items-center btn btn-light z-2 px-5 border border-1 text-danger fw-bold border-danger w-auto align-self-start  ' >
        JOIN NOW
      </a>
   </div>
      </div>
      

      </div>

    </div>
  </section>


  <!-- ==========================
       FLOATING INFO SECTION
  =========================== -->
  <div class="floating-info-container container-fluid position-relative">

    <!-- Small screen -->
    <div class="rounded bg-white position-relative d-block d-md-none justify-content-center align-items-center px-3 py-3 py-lg-5 shadow-lg w-100 container">
      <?php get_template_part( 'template-parts/floating', 'info' ); ?>
    </div>

    <!-- Medium to large screen -->
    <div class="rounded position-relative d-none d-md-block justify-content-center align-items-center px-3 py-5 shadow-lg w-100 bg-white container">
      <?php get_template_part( 'template-parts/floating', 'info' ); ?>
    </div>

  </div>


  <!-- ==========================
       ABOUT US SECTION ||
  =========================== -->
  <div class="about-us-container mt-n1 pt-md-3 pt-0 pt-lg-0 w-100 position-relative">
    <?php get_template_part( 'template-parts/about', 'us' ); ?>
  </div>
  
</main>

<?php get_footer(); ?>
</body>
