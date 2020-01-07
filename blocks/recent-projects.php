
    <div class="container">
            <h2><?php echo get_field('recent_projects')['title']?></h2>
     <div class="container-project ">
        <?php $projects = get_field('recent_projects')['recent_project']?>
        <?php if($projects) {?>

            <?php foreach($projects as $post) {?>
                <?php setup_postdata($post); ?>
        <div class="project-index project-index--featured project-index--top-right flexing">

        <div class="project-image">
            <?php echo get_the_post_thumbnail($post)?>
            </div>
            </a>


    <div class="project-subject">
    <?php   $blocks = parse_blocks( $post->post_content ); 
             foreach ($blocks as $block) {
                $title = $block['attrs']['data']['top_post_content_title'];
                if($title) {
                  echo  '<p' . '>' . $title . '</p>';
                }           
    }?>
              <a href="<?php echo the_permalink($post)?>">
                <p class="project-title"><?php  echo get_the_title($post)?></p>
                    <button class="arrow-link">
                        <img class="svg-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/button-white.png">
                    </button>
    </a>
    
    </div>
        <?php wp_reset_postdata(); ?>
        </div>

        <?php } ?>

        <?php } ?>

</div>
</div>



