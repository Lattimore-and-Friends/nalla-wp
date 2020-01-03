<?php $content = get_field('image_and_content')?>
    <div class="flexible-blocks--project flexible-blocks"> 
           <div class="flexible-block full-width-image-block full-width-image-block__one">
               <div class="container">
                <?php foreach ($content['images_and_content'] as $contents) {?>
                    <?php if (!$contents['image_count']) {?>
               <div class="flexible-block horizontal-images-block horizontal-images-block--1">
                   <div class="container">
        <div class="full-width-image-block__image-wrap">

            <div class="horizontal-image__inner">
                <div class="responsive-image">
            <img src="<?php echo $contents['image']?>" sizes="100w">
            <div class="full-width-image-block__caption"><?php echo $contents['caption']?></div>
        </div>
</div>

</div>
</div></div>
                    <?php }?>
                    <?php if($contents['image_count']) {?>
                        <div class="flexible-block full-width-image-block full-width-image-block__two">
                            <div class="container">
                            <?php foreach($contents['two_images'] as $two) {?>

        <div class="full-width-image-block__image-wrap">
            <div class="responsive-image">
                <img src="<?php echo $two?>"></div>
<!---->        </div>
                            <?php }?>
</div>
</div>
                    <?php }?>
    <div class="flexible-block simple-content-block  flexible-block--remove-padding-top">
        <div class="container">
<!---->    <div class="simple-content-block__inner">
        <h5><?php echo $contents['title']?></h5>
        <p class="p1"><span class="s1"><?php echo $contents['content']?></span></p>

    </div>   
                   </div>


</div>
                <?php }?>
   <!-- <div class="flexible-block parallax-image-block"><div class="parallax-image" style="background-image: url(<?php echo $content['background_image']?>)"></div></div> -->




  

</div>