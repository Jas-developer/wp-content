<footer class="<?php echo !is_page(35) ? 'mt-lg-10 mt-8' : ''; ?>">


  
  <div class="footer-wrapper py-lg-5 py-4 container-fluid bg-leniar">
    
    <div class="container">
        <!-- 
         - two rows on md to lg screen
         - 1 column on sm screen 
         - using bootstrap grid system
        -->
      <div class="row">
        <!-- #1 -->
       <div class="col-lg-6 col-12 d-flex flex-column gap-lg-5 gap-4 justify-content-center align-items-start">
        <!--c-#1| header container -->
         <h1 class="text-light fw-bold fs-1 flex-column d-flex justify-content-center align-items-start ">
           <span>YOU ARE MEANT</span>
           <span>FOR GREATNESS,</span>
           <span><span class="text-danger">I.FLEX</span> DO YOU?</span>
         </h1>
        <!-- c-#2 | email container -->
         <div class="d-flex flex-row justify-content-start gap-1 align-items-center">
           <span class="dashicons dashicons-email text-light fw-bold"></span>
           <span class="text-light">i.flexfitness@gmail.com</span>
         </div> 
       </div>
       <!-- #2 -->
       <div class="col-lg-6 col-12 d-flex flex-column gap-4 mt-2 justify-content-between align-items-start">
        <!-- icons | container  -->
         <div class="w-100 d-flex flex-row justify-content-lg-end justify-content-start gap-4 align-items-center">
           <span class="dashicons dashicons-instagram text-light fs-2"></span>
           <span class="dashicons dashicons-linkedin text-light fs-2"></span>
           <span class="dashicons dashicons-facebook text-light fs-2"></span>
         </div>
         <!-- text-content-container -->
         <div class="flex-row d-flex  w-100 justify-content-between  text-light align-items-end">
          <span>Privacy Policy</span>
          <span>Terms & Conditions</span>
         </div>
       </div> 
      </div>
    </div>
    <!-- end of contanier --> 
  </div>
  <?php wp_footer(); ?>
</footer>
