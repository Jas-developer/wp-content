<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header w-80">
    <div class="nav-container">
        <nav class="d-flex p-3">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>







    
  </header>
