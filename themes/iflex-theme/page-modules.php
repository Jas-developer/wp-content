<?php get_header(); ?>
<section id="modules-section" class="d-flex vh-100 w-100 container  justify-content-center align-items-center">
  <?php

  $args = [
    'post_type' => 'modules',
    'posts_per_page' => -1,
    'orderby' =>  'date',
    'order' => 'DESC'
  ];
  
  $module_query = new WP_Query($args);  
  ?>
  <!-- module/files container  -->
 <?php if( $module_query): ?>
   <div class="row w-100 row-cols-lg-2 g-2 justify-content-start align-items-center">
       <?php while($module_query->have_posts()): $module_query->the_post(); ?>
          <div class="col-lg-6 col-12">
            <div class="d-flex rounded-3 shadow-lg justify-content-center flex-column py-3 px-4 align-items-start module-card bg-black">
            <!-- title -->
             <h3 class="module-title text-danger fw-100">
               <?php echo get_the_title() ?>
             </h3>
             <!-- discription -->
              <div class="module-description">
                 <p class="text-light"> <?php echo get_the_content(); ?></p>
              </div>
              <!-- download button -->
                <?php $file = get_field('iflex_modules'); ?>
                <div id="module-download-button" class="d-flex gap-2 justify-content-center align-items-center">
                 <?php if($file): ?>
                  <span class="text-white custom-underline">View Module</span>
                  <a href="<?php echo esc_url($file['url']); ?>" download class="btn btn-primary">
                   Download Module
                 </a>
                 <?php endif; ?>
               </div>
          </div>
          </div>
       <?php endwhile; ?>
   </div>
<?php else: ?>
  <div class="no-module">
    <span>No module available</span>
  </div>
<?php endif; ?>  
</section>
<?php get_footer(); ?>