<?php get_header(); ?>
 <main class="classes-main-wrapper">
  <section class="container mt-10 mb-4 d-flex justify-content-start flex-column">
    <h2 class="fs-1 text-danger text-uppercase fw-bold"><?php echo esc_html(get_the_title()); ?></h1>
    <p class="fs-5 text-color"><?php echo esc_html(get_the_content()); ?></p>
    <br>
    <button class="d-flex bg-transparent justify-content-start border border-0  w-100">
      <a href="" class='text-white bg-danger px-4 py-2  rounded-1 fw-semibold text-decoration-none'>JOIN NOW</a>
    </button>
  </section>
  <section class="w-100 d-flex flex-lg-row gap-2 flex-column">
     <div class="single-class-content py-5 py-lg-0 d-flex border w-100 container  justify-content-end align-items-center">
        <div class=" single-class-cards  d-flex flex-column ">
            <div class=" d-flex flex-wrap h-100  position-relative">
              <?php 
               
               for( $i = 1; $i <= 4; $i++){ ?>
                 <div class="box text-light d-flex p-3 flex-column <?php if($i <=2 ){
                    echo 'justify-content-end';
                 } else {
                  echo 'justify-content-start';
                 } ?>  align-items-center w-50 h-50">
                   <div class="d-flex flex-row justify-content-start align-items-center gap-2 w-100">
                     <span class="dashicons dashicons-yes-alt text-white"></span>
                  <h4  class='text-start fs-4 fw-bold text-dark fs-5  w-100 semibold'>
                   <?php $title = get_field('why_'.$i.'_title'); 
                    if($title){
                      echo esc_html($title);
                    }
                   ?></h4>
                   </div>
                   
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
     <div class="single-class-image d-flex p-1 p-md-0 position-relative  d-flex justify-content-center align-items-center">
        <?php $image_url = get_field('class_image');
           if($image_url){ ?>
              <img class='img-fluid '  src="<?php echo esc_url($image_url['url']); ?>" alt="<?php echo get_the_title(); ?>" >
          <?php  };
        ?>
     </div>
  </section>
 </main>
<?php get_footer(); ?>
