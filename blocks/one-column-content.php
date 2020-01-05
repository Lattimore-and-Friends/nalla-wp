<?php $column = get_field('one_column_content')?>


<div class="flexible-block two-col-section-service" style="background-color: <?php echo $column['background_color']?>">
        <div>
        <div class="container">
            <div class="two-col-container --<?php echo $column['text_color']?> services">
            <h2 class="two-col-container --<?php  echo $column['text_color']?>"><?php echo $column['title']?></h2>
                <div class="title-block__content">
                    <p><?php echo $column['content']?></p>
                    <a href="<?php echo $column['button']['url']?>" class="button-white"><p><?php echo $column['button']['title']?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/button-white.png"></p></a>
</div>
</div>
        </div>
    </div>
</div>