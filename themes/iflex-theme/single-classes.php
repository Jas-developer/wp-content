<?php get_header(); ?>
 <main class="classes-main-wrapper">
  <section class="container mt-10 mb-4 d-flex flex-column">
    <h2 class="fs-1 text-danger text-uppercase fw-bold"><?php echo esc_html(get_the_title()); ?></h1>
    <p class="fs-5 text-color"><?php echo esc_html(get_the_content()); ?></p>
  </section>
   
  <section class="w-100 d-flex flex-md-row  flex-column">
     <div class="single-class-content d-flex border container  justify-content-end align-items-center">
        <div class=" single-class-cards  d-flex flex-column ">
            <div class=" d-flex flex-wrap h-100  position-relative">
              <?php 
               
               for( $i = 1; $i <= 4; $i++){ ?>
                 <div class="box text-light d-flex p-3 flex-column <?php if($i <=2 ){
                    echo 'justify-content-end';
                 } else {
                  echo 'justify-content-start';
                 } ?>  align-items-center w-50 h-50">
                  <h4  class='text-start fs-4 fw-bold text-dark fs-5  w-100 semibold'>
                   <?php $title = get_field('why_'.$i.'_title'); 
                    if($title){
                      echo esc_html($title);
                    }
                   ?></h4>
                   
                  <p class='text-start fs-5 w-100'>
                   <?php $content = get_field('why_'.$i.'_content');
                   if($content){
                    echo esc_html($content);
                   }
                  ?></p>
                </div>
              <?php  }
              
              ?>
           </div>
        </div>
     </div>
     <div class="single-class-image d-flex  position-relative  d-flex justify-content-center align-items-center">
        <?php $image_url = get_field('class_image');
           if($image_url){ ?>
              <img class='rounded-5' src="<?php echo esc_url($image_url['url']); ?>" alt="<?php echo get_the_title(); ?>" >
          <?php  };
        ?>
     </div>
  </section>
 </main>
<?php get_footer(); ?>
