<?php get_header(); ?>
<section id="modules-section" class="vh-100 d-flex  bg-danger">
  <?php

  $args = [
    'post_type' => 'modules',
    'posts_per_page' => -1,
    'orderby' =>  'date',
    'order' => 'DESC'
  ];
  
  $module_query = new WP_Query($args);

  if($module_query->have_posts()): ?>
   <div id="modules-container" class="justify-content-center container text-success d-flex align-items-center h-100 w-100">
    <?php while($module_query->have_posts()): $module_query->the_post(); ?>
    <!-- module card  -->
     <div id="module-card">
        <!-- module title -->
        <h1><?php echo get_the_title(); ?></h1>
        <!-- module file  -->
        <div id="module-file-container">
          <?php 
           $file = get_field('iflex_modules');

           if($file): ?>
           <a href="<?php echo esc_url($file['url']); ?>" download >
            Download Module: <?php  echo esc_html($file['filename']); ?>
           </a>
           <?php endif; ?>
        </div>
     </div>
      
    <?php endwhile;  wp_reset_postdata(); ?>
   </div>
  
    
   <?php else:  ?> 
     <div id="if-no-modules">
      <p>No available modules at the moment</p>
     </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>