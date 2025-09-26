<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
   <style>
  body {
    font-family: 'Roboto', sans-serif; /* Default text */
  }

  h1, h2, h3,span,li,a,button, .site-title {
    font-family: 'Montserrat', sans-serif; /* Headings */
  }
</style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header py-3 d-flex align-items-center justify-content-between w-75 mx-auto">
    <div class="logo text-danger">
      <h1>Logo</h1>
    </div>
    <div class="nav-container ">
      <!-- large screens -->
        <nav class="d-md-flex d-none p-3 justify-content-center w-100">
            <ul class="d-flex gap-4 list-unstyled align-items-center justify-content-center m-0 flex-row fw-normal">
                <li ><a class="text-decoration-none text-light text-shadow" href="<?php echo home_url(); ?>">HOME</a></li>
                <li><a class="text-decoration-none text-light" href="<?php echo home_url('/about'); ?>">CERTIFICATIONS</a></li>
                <li><a class="text-decoration-none text-light" href="<?php echo home_url('/services'); ?>">CERTIFIED TRAINERS</a></li>
                <li><button class="text-decoration-none bg-danger rounded-1 shadow border-0 px-3 py-1 text-light" href="<?php echo home_url('/contact'); ?>">LOGIN</button></li>
            </ul>
        </nav>

        <!-- small screens -->
    </div>







    
  </header>
