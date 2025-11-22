<?php get_header(); ?>

<main id="modules-section" class="container overflow-hidden py-5  pt-5 justify-content-center align-items-center h-100 mt-lg-10 mt-8">
  
  <?php
  $args = [
    'post_type' => 'modules',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
  ];

  $module_query = new WP_Query($args);

  if ($module_query->have_posts()) {
    echo '<div class="row row-cols-1 align-items-center mt-5 justify-content-start row-cols-lg-2">';
    
    while ($module_query->have_posts()) {
      $module_query->the_post();
      
      $user_level   = get_user_meta(get_current_user_id(), 'trainer_level', true);
      $module_level = get_field('trainer_level_modules');
      $thumbnail    = get_field('thumbnail');
      $title        = get_the_title();
      $module_file  = get_field('iflex_modules');

      // Default to false
      $show_module = false;

      if (current_user_can('manage_options')) {
        $show_module = true;
      } elseif ($user_level && $module_level) {
        if (is_array($module_level)) {
          if (in_array($user_level, $module_level)) {
            $show_module = true;
          }
        } else {
          if ($module_level == $user_level) {
            $show_module = true;
          }
        }
      }

      if ($show_module) {
        ?>
        <div class="col mt-lg-5">
          <div id="module-card" class="d-flex flex-column w-100 align-items-start justify-content-start h-100 bg-white shadow-sm p-2">
            
            <!-- Image -->
            <div class="img-container w-100 mb-2">
              <?php 
              if ($thumbnail && isset($thumbnail['url'])) { 
                echo '<img src="' . esc_url($thumbnail['url']) . '" alt="' . esc_attr($title) . '" class="module-img w-100" />';
              } else { 
                echo '<div class="text-center text-muted w-100 d-flex justify-content-center align-items-center" style="height:200px;">
                        <span class="dashicons dashicons-format-image fs-3"></span>
                      </div>';
              } 
              ?>  
            </div>

            <!-- Buttons under image -->
            <div class="buttons d-flex gap-2 mb-2">
              <button class="px-4 border-0 text-light fw-bold bg-danger" onclick="window.location.href='<?php echo esc_url($module_file); ?>'">VIEW</button>
              <button 
                data-file='<?php echo $module_file ? esc_url( $module_file) : ''; ?>' 
                data-filename='download'
                class="download-btn border-0 text-danger px-4 bg-black fw-semibold"
              >DOWNLOAD</button>
            </div>

            <!-- Title & module content -->
            <div class="p-2 w-100">
              <h5 class="mb-2"><?php echo esc_html($title); ?></h5>
              <p>Contents will come here</p>
            </div>

          </div>
        </div>
        <?php
      }
    }

    echo '</div>'; // Close row
  } else {
    echo '<div class="text-center py-5"><p class="text-muted">No modules available.</p></div>';
  }
  ?>
</main>

<?php get_footer(); ?>
