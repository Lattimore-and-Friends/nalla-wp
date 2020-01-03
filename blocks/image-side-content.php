<?php $content = get_field('image_side_content')?>

<div class="container-project">
<div class="flexible-block simple-content-block  flexible-block--remove-padding-bottom">
    <div class="container">
<!---->    <div class="simple-content-block__inner">
        <h4><?php echo $content['title']?></h4>
        <h3><?php echo $content['sub_title']?></h3>

    </div>
</div></div>
<?php if ($content['content_section']) {?>
    <?php foreach ($content['content_section'] as $contents) {?>
    <div  class="flexible-block parallax-block parallax-block--image-<?php echo $contents['flip']?>">
        <div class="container">
    <div class="parallax-block__inner">
        <div class="parallax-block__image">
                <img src="<?php echo $contents['image']?>" alt="Image Example" 
                   sizes="(min-width:720px) calc(65% - 40px), calc(100% - 40px)">
        </div><!-- Comment so that there's no spacing between these two elements
     --><div  class="parallax-block__text parallax-element">
            <div class="parallax-block__text-inner">
                <h1><?php echo $contents['title']?></h1>
                <h3 class="p1"><span class="s1"><?php echo $contents['name']?></span></h3>

<p class="p1">
    <span class="s1"><?php echo $contents['content']?></span></p>
    
</div>
</div>    </div>
</div></div>


    <?php } ?>
<?php } ?>
   
    </div>