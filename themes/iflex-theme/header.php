<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="header-container" class="container">
  
   <nav class="row align-items-center py-3 d-lg-fixed">
    <!-- LOGO AND HAMBURGER BUTTON  -->
    <div class="container col-lg-4 col-12">
        <!-- LARGE SCREEN - LOGO -->
          <div class="d-none align-items-center d-lg-flex">
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
           <span style="margin-left:-10px; font-size:25px;" class="dashicons dashicons-menu-alt3 text-danger position-absolute top-50 start-50 translate-middle z-3"></span>
           </button>
         </div>
      </div>
    </div>
  <!-- NAVIGATION LINKS  -->
   <div id="nav-items" class="nav-hidden col-lg-8 z-2">
      <ul class="list-unstyled  gap-lg-4 fw-semibold gap-3 nav flex-lg-row flex-column align-items-center">
        <li><a href="#" class="text-decoration-none text-light">HOME</a></li>
        <li><a href="#" class="text-decoration-none text-light">CERTIFICATIONS</a></li>
        <li><a href="#" class="text-decoration-none text-light">CERTIFIED TRAINERS</a></li>
        <li><a href="#" class="text-decoration-none text-light">MEMBERSHIPS</a></li>
         <button id="login-button" class="bg-danger border border-0 text-light py-2 shadow-sm  px-4 rounded-1">LOGIN</button>
      </ul>
   </div>
</nav>

</header>