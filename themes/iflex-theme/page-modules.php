<?php get_header(); ?>

<main id="modules-section" class="container mt-lg-5 justify-content-center align-items-center vh-100 pt-5">
  <?php
  $args = [
    'post_type' => 'modules',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
  ];

  $module_query = new WP_Query($args);
  ?>

  <?php if ($module_query->have_posts()) : ?>
    <div class="row g-3 border-1 mt-lg-5">
      <?php while ($module_query->have_posts()) : $module_query->the_post(); ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="border rounded p-3 bg-white h-100">
            <?php $image = get_field('thumbnail'); ?>
            <?php if ($image) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="" class="img-fluid mb-3 rounded">
            <?php endif; ?>

            <h5 class="mb-2 text-dark"><?php the_title(); ?></h5>
            <p class="text-muted small mb-3"><?php echo wp_trim_words(get_the_content(), 20); ?></p>

            <?php $file = get_field('iflex_modules'); ?>
            <?php if ($file) : ?>
              <div class="d-flex gap-2">
                <a href="<?php echo esc_url($file['url']); ?>" class="btn btn-outline-secondary btn-sm">View</a>
                <a href="<?php echo esc_url($file['url']); ?>" download class="btn btn-primary btn-sm">Download</a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <div class="text-center py-5">
      <p class="text-muted">No modules available.</p>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
