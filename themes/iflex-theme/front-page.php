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

  <div class="container  w-100 h-100 d-flex flex-column    justify-content-center align-items-center ">
  <div class="w-100 d-flex mt-4 flex-column justify-content-center align-items-start">
    <div class="position-relative mt-5 px-3 px-md-0">
      <h1 id="hero-section-heading" class="position-relative  z-2"><span class="text-white">i.</span>Flex <span class="text-white">Fitness</span></h1>
      <div class="w-100 d-flex gap-2 flex-column">
         <h3 class="fw-semibold text-white z-2">Training Ground for Greatness!</h3>
        <a class="btn btn-danger z-2 px-5 border border-0 text-light fw-bold border-danger w-auto align-self-start">
          JOIN NOW
        </a>
      </div>
    </div>
  </div>
</div>

  </section>


  <!-- ==========================
      CLASSES SECTION
  =========================== -->
  <div class="  position-relative">

    
    <div class="rounded position-relative  h-100  justify-content-center align-items-center px-3 pt-5  w-100 bg-white container">
      <?php get_template_part( 'template-parts/classes'); ?>
    </div>

  </div>


  <!-- ==========================
      BE A CERTIFIED TRAINER SECTION
  =========================== -->
  <section class="container position-relative">
    <?php get_template_part( 'template-parts/about-us'); ?>
    <hr class="text-dark">
  </section>
  
  <!-- PRICING -->
   <section class="container position-relative mb-4  gap-lg-2 flex-lg-row">
    
    <div class="row">
       <div id="pricing-heading-container" class="flex-column col-12 col-lg-4  position-relative   px-lg-5 align-items-start d-flex  justify-content-center">
   
        <h2 class="fs-1 fw-bold text-danger ">
        Our Rates & Pricing
      </h2>
      <p class="fs-5">
        Our Rates is still subject for discount if you visit our Ma'a Branch
      </p>
     
      <button class="bg-transparent border border-0 p-0 m-0">
        <a href="" class="text-decoration-none text-white bg-danger px-4 py-2">BOOK NOW</a>
      </button>
    </div>
   <div class="pricing-content-container col-12 col-lg-8 p-0 px-2 mt-5 mt-lg-2">
     <?php get_template_part('template-parts/our-pricing'); ?>
   </div>
    </div>
   </section>
  
</main>

<?php get_footer(); ?>
</body>
