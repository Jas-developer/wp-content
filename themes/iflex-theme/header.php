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

 <header class="site-header w-100 bg-black py-3 px-3 d-flex flex-md-row flex-column align-items-center justify-content-between mx-auto">

  <!-- Logo + mobile toggle -->
  <div class="d-flex w-100 justify-content-between align-items-center px-3">
    <h1 class="text-danger m-0">Logo</h1>
    <button id="nav-toggle" class="d-md-none btn btn-sm text-light">Close</button>
  </div>

  <!-- Navigation -->
  <div class="nav-container w-100">

    <!-- Large screens -->
    <nav class="d-none d-md-flex p-3 justify-content-end w-100">
      <ul class="d-flex gap-4 list-unstyled m-0 align-items-center justify-content-end">
        <li><a class="text-decoration-none text-light" href="<?php echo home_url(); ?>">HOME</a></li>
        <li><a class="text-decoration-none text-light" href="<?php echo home_url('/about'); ?>">CERTIFICATIONS</a></li>
        <li><a class="text-decoration-none text-light" href="<?php echo home_url('/services'); ?>">CERTIFIED TRAINERS</a></li>
        <li>
          <a href="<?php echo home_url('/contact'); ?>" 
             class="bg-danger rounded-1 shadow border-0 px-3 py-1 text-light text-decoration-none d-inline-block">
             LOGIN
          </a>
        </li>
      </ul>
    </nav>

    <!-- Small screens -->
    <nav id="sm-nav-menu" class="d-md-none   d-none p-3">
      <ul class="d-flex flex-column gap-3 list-unstyled m-0 w-100 align-items-center">
        <li><a class="text-decoration-none text-light" href="<?php echo home_url(); ?>">HOME</a></li>
        <li><a class="text-decoration-none text-light" href="<?php echo home_url('/about'); ?>">CERTIFICATIONS</a></li>
        <li><a class="text-decoration-none text-light" href="<?php echo home_url('/services'); ?>">CERTIFIED TRAINERS</a></li>
        <li>
          <a href="<?php echo home_url('/contact'); ?>" 
             class="bg-danger rounded-1 shadow border-0 px-3 py-1 text-light text-decoration-none d-inline-block">
             LOGIN
          </a>
        </li>
      </ul>
    </nav>

  </div>
</header>
