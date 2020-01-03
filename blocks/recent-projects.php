<div class="flexible-block title-block title-block--default ">

  <div>
       
    </div>
</div>
        <div class="container-project">
            <h2><?php echo get_field('recent_projects')['title']?></h2>
     
        <?php $projects = get_field('recent_projects')['recent_project']?>
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
    }?>
        <p class="project-subject"><?php  echo get_the_title($post)?>  <button class="arrow-link">
            <img class="svg-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/Button.png">
   </button></p>
    
    </div>
</a>
        </div>
        <?php wp_reset_postdata(); ?>

        <?php } ?>

        <?php } ?>

</div>



