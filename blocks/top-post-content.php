<?php $top = get_field('top_post_content');




?>
<div class="container">
        <div class="project-intro">
            <div class="project-container">
                <div class="taxonomy-list">
                <?php echo get_the_term_list( $post->ID, 'service', '<h4>', ' . ', ' .  </h4>' ) ?>
                <?php echo get_the_term_list( $post->ID, 'industry', '<h4>', ' . ', '</h4>' ) ?>


   </div>
                <h1><?php echo $top['title']?></h1>
                <div class="project-intro-copy">
                    <h3 class="p1">
                    <span class="s1">
                       <?php echo $top['content']?></span></h3>

<?php if ($top['lists']) {?>
    <?php foreach($top['lists'] as $list) {?>

<h4 class="p1"><span class="s1"><?php echo $list['list_title']?></span></h4>

<ul class="ul1">
    <?php foreach($list['list'] as $listContent) {?>
<li class="li1"><span class="s1"><?php echo $listContent['list_content']?></span></li>
    <?php } ?>
</ul>
<?php } ?>
<?php }?>

</div>
            </div>
        </div>
    </div>