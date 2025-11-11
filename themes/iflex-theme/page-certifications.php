<?php  if ( ! defined( 'ABSPATH' ) ) exit; ?>
 <?php get_header(); ?>
 <main class="container-fluid flex-column pt-5 mb-4 d-flex justify-content-center align-items-center  p-0 page ">
    <div  class="d-flex flex-column  mt-5 pt-2 py-lg-2 p-0 gap-0 w-100  justify-content-center align-items-start">
       <!-- section 1-->
        <section 
        style='background-image:url("<?php echo get_theme_file_uri('assets/bg-images/arm-flexing.webp' ) ?>")' 
         class="container border border-0 cert-hero-section d-flex justify-content-start align-items-center  w-100">
            <div 
        class=" d-flex mt-5 py-4   w-md-75  flex-column justify-content-center align-items-start gap-4">
          <h1 class="fs-2 fw-semibold text-color text-start">
                Certification Options That Match Your Level of Expertise
          </h1>
           <p class='text-start z-2 text-color pl-lg-3 '>
            Take your training career to the next level. Our certification options are tailored to your level of expertise, helping you gain recognition, 
            boost credibility, and inspire others through your knowledge.
           </p>
           <a href="" class='btn px-4 z-2 py-2 bg-danger  rounded-pill fw-semibold text-white'>Apply Now</a>
        </div>
        </section>
      
    </div>
   <section class="vh-50 container  d-flex justify-content-start border-bottom border-1 align-items-center">
        <div 
        class=" d-flex py-4   w-md-75  flex-column justify-content-center align-items-start gap-4">
          <h1 class="fs-2 fw-semibold  text-color text-start">
                What is i.Flex Certification Program?
          </h1>
           <p class='text-start text-color  z-2 fw-normal'>
            Take your training career to the next level. Our certification options are tailored to your level of expertise, helping you gain recognition, 
            boost credibility, and inspire others through your knowledge.
           </p>
           
        </div>
        
      </section> 
      
      <!-- who is it for section -->
   <section class="d-flex container px-2  pb-2 pt-5 gap-2 gap-lg-5  flex-column justify-content-center align-items-start">
     
       <div class="who-is-it-container">
           <h2 class='text-color fw-bold  '>WHO IS IT FOR ?</h2>
      <br >
      <?php 
       get_template_part( '/template-parts/whos-it-for' );
      ?>
      
       </div>
   </section>
 </main>
 
         <?php get_footer(); ?>
