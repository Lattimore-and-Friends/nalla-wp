
<?php $related = get_field('related_content')?>
<div class="related-content">
        <div class="container-project">
            <p><?php echo $related['title']?></p>
     
        <?php if($related['content']) {?>

            <?php foreach($related['content'] as $post) {?>
                <?php setup_postdata($post); ?>
        <div class="project-index project-index--featured project-index--top-right flexing">
        <a href="<?php echo the_permalink($post)?>">
                <picture class="project-index__image">
            <img  src="<?php echo get_the_post_thumbnail($post)?>">
        </picture>
    <div class="project-index__content">

        <p class="project-subject"><?php echo the_field('top_post_content')['title']?></p>
        <p class="project-subject"><?php  echo get_the_title($post)?></p>
        <button class="arrow-link">
        <svg role="img" class="svg-arrow">
        <use xlink:href="../assets/svg/svg-sprite.svg"></use>
</svg></button>
    </div>
</a>
        </div>
        <?php wp_reset_postdata(); ?>

        <?php } ?>

        <?php } ?>

</div>
            </div>
