<?php $top = get_field('top_post_content');
// Get the taxonomy's terms
$services = get_terms(
    array(
        'taxonomy'   => 'service', 'industry',
        'hide_empty' => true,
    ), $args
);



?>
<div class="container">
        <div class="project-intro">
            <div class="project-container">
                <div class="taxonomy-list">
                <h4>
               <?php  // Check if any term exists
if ( ! empty( $services ) && is_array( $services ) ) {
    // Run a loop and print them all
    foreach ( $services as $term ) { ?>
     <span>   <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name; ?>
        </a></span><?php
    }
} ?>


             
</h4></div>
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