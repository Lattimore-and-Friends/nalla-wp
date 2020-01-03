<?php $gallery = get_field('client_logos')?>
<?php $button = $gallery['button']?>
<?php $images = $gallery['logos']?>
<?php $color = $gallery['background_color']?>
    <div class="logo-container" style="background-color: <?php echo $color?>">
        <?php if ($images) {?>
            <?php foreach ($images as $logo) {?>
        <div class="logo-images">
                <img src="<?php echo $logo?>">

        </div>
            <?php }?>
        <?php }?>
        <div class="project-button">
         <a href="<?php echo $button['link']?>" class="button button--white"><?php echo $button['title']?></a>
            </div>
</div>

