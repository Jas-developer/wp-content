<?php get_header();?>

<section class="our-coaches-wrapper ">
   
<div class="coach-container ">
   
 <div class="container  ">
    <div class="py-5 ">

<?php 
if(have_posts()){
    
    //  <!-- cards -->
echo '<div class="w-100 mt-10">'; 
echo ' <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 w-100 g-2">'; 
 while(have_posts()){
  the_post();
   $post_id = get_the_ID();
   $image = get_field('iflex_coaches', $post_id);
   $fb_link = get_field('facebook_link', $post_id);
   $role = get_field('role', $post_id)

   ?> 
    


    <div class="col">
      <div class="d-flex flex-column rounded-2 pb-5 bg-light justify-content-center align-items-center">

        <!-- image -->
        <div class="coach-img-container d-flex justify-content-center align-items-center">
          <div class="position-relative">
            <img 
              src="<?php 
              echo esc_url($image['url']); ?>" 
              alt="" 
              class="coach-img"
            >
            <img 
              src="<?php echo get_theme_file_uri('assets/LOGO.png') ?>" 
              alt="" 
              class="iflex-badge-logo"
            >
          </div>      
        </div>

        <!-- name -->
        <h5><?php esc_html(the_title()); ?></h5>

        <!-- position -->
        <div class="bg-danger w-100">
          <p class="text-light text-center m-0 py-2"><?php echo esc_html( $role);?></p>
        </div>

        <!-- text, btn, link -->
        <div class="d-flex w-100 flex-column justify-content-center align-items-center">
          <div class="d-flex align-items-start pt-2 flex-column gap-2">

            <a href="<?php echo esc_url($fb_link); ?>" class="text-decoration-none border-bottom border-dark border-1 text-black">
              <span>Facebook link</span>
              <span class="dashicons dash-class dashicons-arrow-up-alt"></span>
            </a>

            <a href="<?php echo esc_url(get_permalink($post_id)); ?>" class="text-decoration-none">
              <button class="btn bg-danger border-0 rounded-0 text-light">
              VIEW PROFILE
            </button>
            </a>

          </div>
        </div>

      </div>
    </div>




 <?php }
    
     ?> <!-- VIEW ALL COACHES BUTTON -->
       </div>
    </div>

   
  <?php
 echo '</div>';
 echo '</div>';
echo '</div>';  

}else{

} ?>

   

</section>

 <?php get_footer(); ?>