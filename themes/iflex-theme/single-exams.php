
<?php if ( ! defined( 'ABSPATH' ) ) exit;  get_header(); ?>
  <div class="container mt-lg-10">
     <div class="d-flex vh-100 w-100 justify-content-center align-items-center">
       <!-- shorcodes will go here  -->
        <div class="p-4 rounded shadow">
          <?php echo do_shortcode(get_the_content()) ?>
        </div>
     </div>
  </div>
<?php get_footer();


