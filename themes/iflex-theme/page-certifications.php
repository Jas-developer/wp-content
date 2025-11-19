<?php  if ( ! defined( 'ABSPATH' ) ) exit; ?>
 <?php get_header(); ?>
 <main class="container-fluid flex-column pt-5 mb-4 d-flex justify-content-center align-items-center  p-0 page ">
    
   <section class="vh-50 container flex-column mt-7    d-flex justify-content-start border-bottom border-1 align-items-center">
      
    <div class="row row-cols-1 row-cols-lg-2  w-100">
      <div class="text-content  d-flex align-items-start justify-content-center flex-column gap-2">
         <h2 class="fs-1 fw-bold">Certification Options That Match Your Level of Expertise</h2>
         <h4 class='fs-5'>Take your training career to the next level. Our certification options are tailored to your level of expertise, helping you gain recognition, boost credibility, and inspire others through your knowledge.</h4>
         <button class='border-0 bg-transparent d-flex justify-content-start'>
            <a href="" class="bg-danger text-white  text-decoration-none px-4 py-2 rounded-2"> APPLY NOW</a>
         </button>
      </div>
      <div class="img-container  ">
          <img  width='400' height='500' class="img-fluid border border-4 shadow border-danger rounded-pill" src="<?php echo get_theme_file_uri('/assets/certifications/icons/certificate.webp'); ?>" alt="i.Flex Fitness Certifications" >
      </div>
    </div>
   
   
   <div 
        class=" d-flex py-4    w-100  flex-column justify-content-center align-items-start gap-4">
          <h3 class="fs-2  fw-bold  text-color text-start">
                What is i.Flex Certification Program?
          </h3>
           <p class='text-start text-color fs-5 z-2 fw-normal'>
            Take your training career to the next level. Our certification options are tailored to your level of expertise, helping you gain recognition, 
            boost credibility, and inspire others through your knowledge.
           </p>
           
        </div>
        
   </section> 
      
      <!-- who is it for section -->
   <section class="d-flex container px-2  pb-2 pt-5 gap-2 gap-lg-5  flex-column justify-content-center align-items-start">
     
       <div class="who-is-it-container">
           <h2 class='text-color fs-2 fw-bold  '>WHO IS IT FOR ?</h2>
      <br >
      <?php 
       get_template_part( '/template-parts/whos-it-for' );
      ?>
      
       </div>
   </section>
 </main>
 
         <?php get_footer(); ?>
