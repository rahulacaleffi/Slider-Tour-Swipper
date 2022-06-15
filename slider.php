
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/Slider-Tour-Swipper/assets/css-slider-travel.css">
<link rel="modulepreload" href="<?php echo get_template_directory_uri();?>/Slider-Tour-Swipper/assets/module-preload.js">
<script type="module" crossorigin src="<?php echo get_template_directory_uri();?>/Slider-Tour-Swipper/assets/module-slider.js"></script>
<style>
    .swiper{
        height:400px !important;
    }
</style>
<!-- Slider main container -->
<div class="travel-slider">
  <div class="travel-slider-planet" style="transform: translate(-50%, -50%) rotate(0deg); transition-duration: 0ms;width:100%">
        <img src="<?php echo get_template_directory_uri();?>/Slider-Tour-Swipper/assets/images/3909361.png">
        <!-- <div class="travel-slider-cities travel-slider-cities-8">
          <img src="images/usa.svg">
          <img src="images/england.svg">
          <img src="images/france.svg">
          <img src="images/italy.svg">
          <img src="images/russia.svg">
          <img src="images/egypt.svg">
          <img src="images/india.svg">
          <img src="images/japan.svg">
        </div> -->
  </div>
  <div class="swiper">
        <div class="swiper-wrapper" >

          <?php
          // configure what type of content and from where directly from dB
            global $wpdb;
            $results = $wpdb->get_results("SELECT * FROM `wd_posts` WHERE `post_type` LIKE 'product' AND `post_status` LIKE 'publish'");
            foreach ($results as $result => $value) {
              $link = get_the_post_thumbnail_url($value->ID,'full');
              $name = $value->post_title;
              ?>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="margin-right: 64px;">
                  <a href="<?php echo get_permalink( $value->ID );?>">
                    <img src="<?php echo $link;?>" class="travel-slider-bg-image">
                    <div class="travel-slider-content">
                      <div class="travel-slider-title"><?php echo $name;?></div>
                      <!-- <div class="travel-slider-subtitle"></div> -->
                    </div>
                  </a>
                </div>


              <?php
                
            }
          ?>

        </div>
  </div>
</div>