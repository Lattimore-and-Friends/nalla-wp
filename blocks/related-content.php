
<?php $related = get_field('related_content')?>
     
            <?php if ($related['content']) {?>

<div class=" team-block">

<div class="container">
<p><?php echo $related['title']?></p>

<h4><?php echo $related['sub_title']?></h4>
<div class="team-block__inner flex">

<?php foreach ($related['content'] as $post) {?>
<?php setup_postdata($post); ?>      

    <div class="team-member-index team-member-index--ikea">
        <div class="team-member-index__image responsive-image loaded">
        <?php echo get_the_post_thumbnail($post)?>
</div>
<div class="team-member-index__content">
<?php echo get_the_term_list( $post->ID, 'post_kind', '<h4>', ', ', '</h4>' ) ?>
   <p><?php echo get_the_title($post)?></p>


<?php $blocks = parse_blocks( $post->post_content ); ?>

 <?php  foreach ( $blocks as $block ) {
                  $title = $block['attrs']['data']['top_post_content_title'];
                  if($title) {
                    echo '<h3>' . $title . '</h3>';
                  } 
                }?><div class="team-member-index__excerpt">
<a class="arrow-link" href="<?php the_permalink($post)?>"><?php echo the_time('d/m/y')?>   
</a>
</div></div>
</div>

<?php }?>


</div></div></div>
<?php wp_reset_postdata(); ?>

<?php }?>

