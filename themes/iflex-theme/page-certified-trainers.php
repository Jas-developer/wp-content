<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<main class="certified-trainer-wrapper pt-5 mt-lg-10 mt-8">
  <div class="container">

    <?php
    // Get current page number
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    if ( get_query_var('page') ) {
      $paged = get_query_var('page');
    }

    // Custom query for certified trainers
    $args = array(
      'post_type'      => 'certified_trainers',
      'posts_per_page' => 8,
      'orderby'        => 'date',
      'order'          => 'DESC',
      'paged'          => $paged
    );

    $certified_trainers = new WP_Query($args);
    ?>

    <!-- Search area -->
    <div class="row position-relative z-2">
      <div id="search-trainer-container"
           class="d-flex flex-row gap-2 w-100 border-bottom border-1 justify-content-center align-items-center py-3">
        <input id="search-trainer-input" type="text" placeholder="Search i.Flex Trainer"
               class="w-75 text-center rounded-pill px-3 py-2">
        <button id="search-trainer-btn" class="rounded-pill px-4 btn btn-primary border border-0">SEARCH</button>
      </div>

      <div id="result-trainer-container"
           class="position-absolute top-100 d-none start-50 translate-middle-x mt-2 w-50 bg-light border rounded shadow-sm p-3 d-flex flex-column gap-2">
        <!-- results come here -->
      </div>
    </div>

    <hr class="text-light">

    <!-- Certified trainers grid -->
    <div id="trainers-container" class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3">
      <?php if ( $certified_trainers->have_posts() ) { ?>

        <?php while ( $certified_trainers->have_posts() ) {
          $certified_trainers->the_post(); ?> 
          
          <div class="col  d-flex justify-content-center">
            <div onclick="window.location.href='<?php echo esc_url(get_the_permalink()) ?>'"
                 style="cursor:pointer;"
             class="certified-trainer-card   h-100 shadow overflow-hidden d-flex flex-column justify-content-center align-items-center px-1  pb-5 gap-4">

              <!-- Trainer image -->
              <div class=" overflow-hidden  position-relative w-100">
                <?php $imageUrl = get_field('certified_trainer'); ?>
                <img class="trainer-img  w-100 "
                     src="<?php echo esc_url($imageUrl['url']); ?>"
                     alt="<?php echo esc_attr(get_the_title()); ?>">
              </div>

              <!-- Trainer content -->
              <div class="d-flex flex-column gap-1 w-100 justify-content-center align-items-start  px-2">
                <span class="trainer-level text-light px-2 py-1 rounded-pill px-4 text-center fw-bold fs-6 border border-0  bg-danger">
                  <?php echo esc_html(get_field('trainer_level')); ?>
                </span>
                <span class="trainer-name fs-4 text-dark fw-bold"><?php the_title(); ?></span>
                <span class="trainer-address fs-6 text-secondary">
                  <?php echo esc_html(get_field('trainer_address')); ?>
                </span>
                <!-- button -->
               <button onclick="window.location.href='<?php echo esc_url(get_permalink()); ?>'"
                       class="d-flex bg-transparent align-items-center gap-2 w-50 justify-content-start"
                       style="border: none; border-bottom: 2px solid #dc3545;">
                       <span class="text-danger fw-semibold mb-1">PROFILE</span>
                       <span class="dashicons dashicons-arrow-right-alt fs-5 text-danger"></span>
               </button>

              </div>

            </div>
          </div>

        <?php } // end while ?>

        <?php wp_reset_postdata(); ?>

      <?php } else { ?>
        <!-- No posts found -->
        <div class="text-center py-5">
          <h3 class="text-secondary">No certified trainers found.</h3>
        </div>
      <?php } ?>

    </div><!-- END trainers container -->

    <!-- Pagination -->
    <div class="pagination-wrapper mt-4 w-100 d-flex justify-content-center align-items-center">
      <?php
      echo paginate_links(array(
        'total'     => $certified_trainers->max_num_pages,
        'current'   => max(1, $paged),
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type'      => 'list',
      ));
      ?>
    </div>

  </div><!-- END container -->
</main>

<?php get_footer(); ?>
