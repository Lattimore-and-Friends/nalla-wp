<?php $gallery = get_field('client_logos')?>
<?php $button = $gallery['button']?>
<?php $images = $gallery['logos']?>
<?php $color = $gallery['background_color']?>
<div class="logos"  style="background-color: <?php echo $color?>">
    <div class="container">
        <div class="logo-flex-container">
        <div class="logo-container">
        <?php if ($images) {?>
            <?php foreach ($images as $logo) {?>
        <div class="logo-images">
                <img src="<?php echo $logo?>">

        </div>
            <?php }?>
        <?php }?>
       
</div>
<div class="project-button">
         <a href="<?php echo $button['link']?>" class="button button--white"><?php echo $button['title']?></a>
            </div>
            </div>

</div>
            </div>
            </div>