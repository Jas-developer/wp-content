<div class="container mt-4 mb-4">
    <?php 
     $args = [
        'post_type' => 'coaches',
        'posts_per_page' => 1,
        'meta_query' => [
            [
                'key' => 'role',
                'value' => 'i.Flex Fitness Founder',
                'compare' => '='
            ]
        ]
     ];
     $marco = new WP_Query($args);

     if($marco->have_posts()) : ?>
       <?php while($marco->have_posts()): $marco->the_post(); ?>
       <div class="row g-3">
        <div class='col-lg-6 col-12 '>
            <img  class="rounded-circle img-fluid border border-light border-2" src="<?php echo get_theme_file_uri('assets/images/Marco-Antonio-Tamayo.webp')  ?>" alt="">
        </div>
        <div class='col-lg-6 col-12 d-flex align-items-center justify-content-center'>

            <div class=" bg-black border border-light border-1 text-light p-5">
                <p><?php echo esc_html(get_field('headline', get_the_ID()));?></p>
                 <h2><?php echo esc_html(get_the_title()); ?></h2>
                 <h5 class="text-danger"><?php  echo esc_html(get_field('role', get_the_ID())); ?></h5>
                 
                 <div class="d-flex justify-content-between align-items-center pt-4">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn border-1 bg-danger rounded-0 text-white text-decoration-none">VIEW PROFILE</a>
                    <a href="<?php  echo esc_url(get_field('facebook_link', get_the_ID()));?>" class="text-decoration-none">
                        <span class="dashicons dashicons-facebook fs-2 text-primary"></span>
                    </a>
                 </div>
            </div>
        </div>
    </div>
       <?php endwhile; ?>
     
    <?php endif;
    ?>
</div>

<!-- 166 -->