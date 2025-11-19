<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <?php wp_body_open(); ?>
   
  <header id="<?php if(!is_front_page(  )) : echo 'header-container-v2'; else: echo 'header-container'; endif;
     ?>" class="overflow-hidden z-3">
  
   <div class="container-fluid  overflow-hidden">
    <nav class="row align-items-center  py-3 d-lg-fixed">
    <!-- LOGO AND HAMBURGER BUTTON  -->
    <div class="container col-lg-4 col-12">
        <!-- LARGE SCREEN - LOGO -->
          <div class="d-none align-items-center   d-lg-flex">
              <?php 
                if(has_custom_logo()){
                  the_custom_logo();
                }
              ?>
          </div>
        <!-- SMALL | MEDIUM SCREEN - LOGO & BUTTON -->
        <div id="logo-container" class="row align-items-center d-flex d-lg-none justify-content-center  p-0">
         <div id="sm-logo" class="logo-container d-flex  col-6 d-flex justify-content-start align-items-center">
           <?php 
                if(has_custom_logo()){
                  the_custom_logo();
                }
              ?>
               
         </div>
         <div class="button-container align-items-center  justify-content-end col-6 d-flex ">
           <button id="toggle-button" class="border-0 position-relative bg-transparent">
           <span style="margin-left:-10px; font-size:25px;" class="dashicons dashicons-menu-alt3 text-light position-absolute top-50 start-50 translate-middle z-3"></span>
           </button>
         </div>
      </div>
    </div>
  <!-- NAVIGATION LINKS  -->
   <div id="nav-items" class="nav-hidden pe-lg-5 col-lg-8 z-2">
      <ul class="list-unstyled  gap-lg-4 fw-semibold gap-3 nav flex-lg-row flex-column align-items-center">
        <li><a href="<?php echo home_url(); ?>" 
         class="<?php if(is_front_page()): 
          echo 'custom-underline'; else: echo 'text-decoration-none'; endif; ?> text-light">HOME</a>
        </li>
        <li><a href="<?php echo get_permalink(35); ?>" 
          class="<?php if(is_page(35)): 
          echo 'custom-underline'; else: echo 'text-decoration-none'; endif; ?> text-light">CERTIFICATIONS</a>
        </li>
        <li><a href="<?php echo get_permalink(37)?>" 
          class="<?php if(is_page(37) || is_singular( 'certified_trainers' )): echo 'custom-underline'; else: echo 'text-decoration-none'; endif; ?> text-light">CERTIFIED TRAINERS</a>
        </li>
       <!-- show only if user is logged in  -->
        <?php if(is_user_logged_in()): ?> 
          <li><a href="<?php echo get_permalink(16); ?>" class="<?php  if(is_page(16)): echo 'custom-underline'; else: echo 'text-decoration-none';
              endif;  ?> d-inline-block transition-transform hover-scale-105 text-light">MODULES</a>
          </li>
           <div class="logged-in-container d-flex gap-4  justify-content-center align-items-center">
            <button id="login-button" 
              onclick="window.location.href='<?php echo get_permalink(39) ?>'"
              class="<?php if(is_page(39)): echo 'border-2'; else: echo 'border-0'; endif; ?> 
              bg-danger border shadow-md fw-semibold text-light py-2 shadow-sm  px-5 rounded-pill">
              EXAMS
            </button>
            <button class="text-light fw-bold cursor-pointer border border-0 bg-transparent" 
            onclick="window.location='<?php echo wp_logout_url(home_url()); ?>'">Logout</button>
           </div> 
        <!-- show only if user is not logged in -->
          <?php else:  ?>
            <li><a href="#" class="text-decoration-none text-light">JOIN US</a></li>
            <button id="login-button" onclick="window.location.href='<?php echo wp_login_url() ?>'"
            class="bg-danger border border-0 text-light py-2 shadow-sm  px-4 rounded-1">LOGIN</button>
        <?php endif; ?>
      </ul>
   </div>
</nav>
   </div>
   
</header>
