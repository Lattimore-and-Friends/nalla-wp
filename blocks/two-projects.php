<?php $posts = get_field('two_projects')?>
<div class="container">
<p><?php echo $posts['title']?></p>

<div class="projects-list">
        <div class="projects-list__list">
            <?php if ($posts) {?>
                <?php foreach ($posts['project'] as $post) {?>
                    <?php setup_postdata($post); ?>
                <div class="project-index project-index--top-right">
                    <a href="/projects/edinburgh-tv-festival">
                            <div class="project-index__image">
                                <img src="<?php echo get_the_post_thumbnail($post)?>" sizes="100w"></div>
    <div class="project-index__content">
        <div  class="taxonomy-list"><h4>
            <span>Branding</span>
            <span>Digital</span>
</h4></div>
        <h3><?php echo the_title()?></h3>
        <p>Edinburgh TV Festival</p>
        <button  class="arrow-link">View Project<svg role="img" class="svg-arrow">
            <use xlink:href="/assets/svg/svg-sprite.svg#arrow"></use>
</svg></button>
    </div>
</a></div>
<?php wp_reset_postdata(); ?>
                <?php } ?>
            <?php } ?>
        </div>
<!---->    </div>
</div>
</div></div></div></div> </div>