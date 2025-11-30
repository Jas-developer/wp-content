<?php 
get_header();
?>

<main class="main-wrapper pt-3">

    <!-- HERO SECTION -->
    <section class="container w-100 mt-10">
        <div class="row">
            
            <!-- Left Image -->
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <img class="img-fluid" 
                     src="<?php echo get_theme_file_uri('assets/graphics/join-us.png'); ?>" 
                     alt="">
            </div>

            <!-- Right Text -->
            <div class="d-flex flex-column justify-content-center align-items-start col-lg-6 col-12 order-1 order-lg-2">
                <h2 class="fw-bold fs-1 pb-2 border-bottom border-2 border-danger">
                    Join Us at i.<span class="text-danger fw-bold">Flex</span> Gym
                </h2>

                <p class="text-color fs-5">
                    Become part of a community built on strength, discipline, and real progress. 
                    Whether you're here to push your limits, master a combat sport, or start a 
                    healthier lifestyle — i.Flex is where your journey begins.
                </p>
            </div>

        </div>
    </section>

    <!-- WHY JOIN US -->
    <section class="d-flex flex-column gap-3">

        <div class="container d-flex flex-column py-3 why-join-us-container mt-4">
            <h2 class="fw-bold fs-2">
                Why Train with i.<span class="text-danger fw-bold">Flex</span>?
            </h2>

            <p class="text-color fs-5">
                At i.Flex, you don’t just exercise — you evolve. Our environment is 
                supportive, intense, and built for people who want real results. Train 
                with coaches who care, teammates who motivate, and a culture that pushes 
                you to become your best.
            </p>
        </div>

        <!-- SCHOLAR PROGRAM -->
        <div class="container d-flex flex-column justify-content-center align-items-start py-2">
            <h2 class="fw-bold fs-3">Scholar Program</h2>

            <p class="text-color fs-5">
                Have passion and potential in combat sports? Apply for our i.Flex Scholar 
                Program — where chosen individuals train 100% FREE in exchange for 
                discipline, commitment, and growth. If you have the drive, we’ll give 
                you the opportunity.
            </p>

           <button class="border-bottom border-2 border-0 py-1 border-danger">
              <a class="d-flex justify-content-start align-items-center p-0  gap-2 text-decoration-none text-danger">
            <span class="p-0">Message us on Facebook</span> <span class="dashicons dashicons-external p-0"></span>
            </a>
           </button>
        </div>

        
    </section>
   <!-- TRAINING PROGRAMS -->
    <section class="d-flex flex-column bg-black text-light py-5">
       <div class="d-flex flex-column container justify-content-center align-items-start">
          <h2 class="fw-bold fs-2">Training Programs</h2>

            <p class=" fs-5">
                At i.Flex, we offer a complete training experience designed for every type of athlete — beginners, fitness enthusiasts, and aspiring fighters. Our program lineup includes:
            </p>
       </div>
       <div class="container">
         <?php get_template_part( 'template-parts/classes'); ?>
       </div>
    </section>
</main>

<?php get_footer(); ?>
