 <?php 
   
   

  $iflex_classes = new WP_Query(
    array(
        'post_type' => 'classes',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC'
    ));

   $classes = array(
    "d-flex gap-3 flex-column  justify-content-lg-center align-items-start  class-card",
    "d-flex gap-3 flex-column  justify-content-lg-end align-items-start   class-card",
    "d-flex gap-3 flex-column  justify-content-lg-center align-items-start  class-card",
    "d-flex gap-3 flex-column  justify-content-lg-start align-items-start  class-card"
   );
  
   $i = 0;

  if($iflex_classes->have_posts()){ ?>
    <div class='d-flex justify-content-center g-0 flex-column align-items-start'>
        <p class= "m-0 fs-4 fw-semibold" >CLASSES DESIGNED</p>
        <h1 class="fw-bold m-0 classes-header text-danger">FOR YOU</h2>
    </div>
     <div class="row-cols-lg-4 pt-3 row  row-cols-2 ">
       <?php 
         while( $iflex_classes->have_posts()){ $iflex_classes->the_post(); ?>
         <div class="<?php echo $classes[$i];  ?>">
            <img class='class-img rounded-5' src="<?php $image = get_field('class_image'); if($image){
             echo esc_url($image['url']); }   ?>" alt="Marco Antonio Tamayo, i.Flex Fitness Founder">
            <div class="d-flex w-100 flex-row gap-2 justify-content-between align-items-center">
                <h5><?php echo esc_html(get_the_title()); ?></h5> 
               <a href="<?php echo esc_url(get_permalink()); ?>" class="bg-danger btn border border-0 text-light rounded-pill px-3 py-2">
                <span class="dashicons dash-class dashicons-arrow-up-alt"></span>
            </a>
            </div>
        </div>

        <?php $i++; }
       ?>
    </div>
 <?php  } wp_reset_postdata();
 
 ?>
 
 
 
  