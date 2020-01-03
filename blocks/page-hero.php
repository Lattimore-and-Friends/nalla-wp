<div class=" banner  flexible-block--remove-padding-top banner--video-wide banner--white banner--text-white banner--video banner--content-v-bottom banner--content-h-left">
                  <div>
                  <div class="container">
                  <?php $type = get_field('page_hero')['media_type']?>
                  <?php $images = get_field('page_hero')['image']?>
                  <?php if(!$type){?>
                    <div class="banner__page-banner">
                        <div class="page-banner__image" style="background-image: url(<?php echo $images?>)">
                        </div>

                </div>

                  <?php 
                  } ?>

<?php if($type) {?>
    <div class="banner__inner">
        
           <video autoplay muted loop preload playsinline controlslist="nodownload">
                    <source src="https://admin.nalla.co.uk/wp-content/uploads/2019/01/20190104_Nalla_Website_Reel_1600x600.webm" type="video/webm">
                    <source src="https://admin.nalla.co.uk/wp-content/uploads/2019/01/20190104_Nalla_Website_Reel_1920x1080.mp4" type="video/mp4">
            </video>
  </div>
<?php }?>
</div>
</div>
</div>
