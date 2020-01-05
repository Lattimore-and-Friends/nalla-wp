

<div class="flexible-block title-block title-block--default ">

<div class="taxonomy-filter taxonomy-filter--has-terms"> 
    <button class="taxonomy-filter__title">Service</button>
<div class="taxonomy-filter__terms">
    <button class="taxonomy-filter__nav-close">Close</button>
    <div class="taxonomy-filter__terms-inner">
        <a href="<?php the_permalink()?>" class="taxonomy-filter__all taxonomy-filter--active active"><span>Clear</span> All</a>
          
            <?php   $defaults = array(
'container' =>  false,
'echo' => false, 
'items_wrap'      => '%3$s',
'depth'           => 0,
'theme_location'  => 'project-service-menu',
);

echo strip_tags(wp_nav_menu( $defaults ), '<a><span>' );
?>
    </div>
    <div class="taxonomy-filter taxonomy-filter--has-terms">
            <button class="taxonomy-filter__title">Industry</button>
<div class="taxonomy-filter__terms">
    <button class="taxonomy-filter__nav-close">Close</button>
    <div class="taxonomy-filter__terms-inner">
        <a href="<?php the_permalink()?>" class="taxonomy-filter__all taxonomy-filter--active active"><span>Clear</span> All</a>
        <?php   $defaults = array(
'container' =>  false,
'echo' => false, 
'items_wrap'      => '%3$s',
'depth'           => 0,
'theme_location'  => 'project-industry-menu',
);

echo strip_tags(wp_nav_menu( $defaults ), '<a>' );
?>
    </div>
</div></div>

</div></div>

  
</div>
        <div class="container-project">
        <?php $projects = get_field('all_projects')['projects']?>

    

        <?php if($projects) {?>

            <?php foreach($projects as $post) {?>
                <?php setup_postdata($post); ?>
        <div class="project-index project-index--featured project-index--top-right flexing">
        <a href="<?php echo the_permalink($post)?>">
                <picture class="project-index__image">
            <img  src="<?php echo get_the_post_thumbnail($post)?>">
        </picture>
    <div class="project-index__content">


   <?php   $blocks = parse_blocks( $post->post_content ); 
             foreach ($blocks as $block) {
                $title = $block['attrs']['data']['top_post_content_title'];
                if($title) {
                  echo  '<p class="project-subject' . sanitize_title($title) . '">' . $title . '</p>';
                }
      ?>

       
 <?php     }?>
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


