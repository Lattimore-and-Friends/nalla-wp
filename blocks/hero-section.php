<div class="flexible-block banner  flexible-block--remove-padding-top banner--video-wide banner--white banner--text-white banner--video banner--content-v-bottom banner--content-h-left">
        <div>
        <div class="<?php echo get_field('hero_section')['width']?> hero">
        <?php $type = get_field('hero_section')['media_type']?>
        <?php $images = get_field('hero_section')['hero_carousel']?>

        <?php if(!$type){?>
        <?php if($images) {?>
        <div class="banner__inner slick__slider">

            <?php foreach($images as $image) {?>
            <div class="banner__container">
            <div class="banner__image" style="background-image: url(<?php echo $image['image']?>)">
            </div>
            <?php if(is_front_page()) {?>
            <div class="banner__text">
                <h2><?php echo $image['text']?></h2>
            </div>
            <?php } else {?>
            <div class="banner__text-page">
                <h2><?php echo $image['text']?></h2>
            </div>
          <?php   } ?>
            </div>
            <?php }?>
            </div>



        <?php }
        } ?>

<?php if($type) {?>
    <div class="banner__inner">
        
           <video autoplay muted loop preload playsinline controlslist="nodownload">
                    <source src="<?php echo get_field('hero_section')['hero_video']?>" type="video/mp4">
            </video>
  </div>
<?php }?>
</div>
</div>
</div>

