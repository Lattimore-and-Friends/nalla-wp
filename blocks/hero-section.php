<div class=" banner  flexible-block--remove-padding-top banner--video-wide banner--white banner--text-white banner--video banner--content-v-bottom banner--content-h-left">
        <div>
<div class="<?php echo get_field('hero_section')['width']?><?php if (is_front_page()){?> hero <?php }?>">
        <?php $type = get_field('hero_section')['media_type']?>
        <?php $images = get_field('hero_section')['hero_carousel']?>

        <?php if(!$type){?>
        <?php if($images) {?>
        <div class="banner__inner slick__slider">

            <?php foreach($images as $image) {?>
            <div class="banner__container">
            
            <div class="banner__image">
                <picture>
                <source media="(min-width: 720px)" srcset="<?php echo $image['image']?>">
                       <source media="(max-width: 720px)" srcset="<?php echo $image['mobile_image'] ?>">
                       <img src="<?php echo $image['image']?>">
                </picture>
            </div>
            <?php if(is_front_page()) {?>

            <div class="banner__text">
                <h2 class="large-text"><?php echo $image['text']?></h2>
                <h2 class="mobile-text"><?php echo $image['mobile_text']?></h2>
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

