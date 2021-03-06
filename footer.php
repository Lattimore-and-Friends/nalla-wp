</div>
</div>
</div>



<?php $posts = get_field('recent_posts', 'option')?>

<div class="pre-footer">
<div class="container">

        <div class="pre-footer__cols">

        <?php if ($posts) {?>

<div class="flexible-block team-block">
   
<h4><?php echo get_field('footer_title', 'option')?></h4>
<div class="footer-block__inner ">
<?php foreach ($posts as $post) {?>
<?php setup_postdata($post); ?>      

    <div class="footer-member-index team-member-index--ikea">
        <div class="team-member-index__image responsive-image loaded">
        <?php echo get_the_post_thumbnail($post)?>
</div>
<div class="footer-member-index__content">
<?php echo get_the_term_list( $post->ID, 'post_kind', '<h4>', ', ', '</h4>' ) ?>
<h3><?php echo $person['name']?></h3>
<div class="footer-member-index__excerpt">
<h4 class="post-card__title"><?php echo the_title()?></h4>
</div>
<div class="time-content">
<a class="arrow-link" href="<?php the_permalink($post)?>"><p><?php echo the_time('d/m/y')?></p>
   <img class="svg-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/button-grey.jpg">
   
</a>
</div>
</div>
</div>

<?php }?>


</div></div>

    <div class="pre-footer__col">
        <div class="newsletter-footer">
            <h3><?php echo get_field('footer_heading', 'option')?></h3>

    <p><?php echo get_field('footer_instructions', 'option')?></p>

<div class="side-footer-link">
<a class="arrow-link arrow-link--white" href="<?php echo get_field('link', 'option')['url']?>">
<p><?php echo get_field('link', 'option')['title']?></p>
<img class="svg-arrow" src="<?php  echo get_template_directory_uri(); ?>/assets/images/button-white.png">

</a>
</div>
</div>
</div>
</div>
<?php wp_reset_postdata(); ?>

<?php }?>








</div>
</div>





<footer id="contact" class="footer">

    <div class="container">
  <div class="footer-containers">
<div class="footer__col">
<h2><?php echo get_field('main_footer_title', 'option')?></h2>
<div class="footer-column">
        <p class="footer-small-title"><?php echo get_field('general_enquiries_title', 'option')?></p>
<p><a href="<?php echo get_field('general_phone_number', 'option')['url']?>"><?php echo get_field('general_phone_number', 'option')['title']?></a></p>
<p><a href="<?php echo get_field('general_email', 'option')['url']?>"><?php echo get_field('general_email', 'option')['title']?> </a></p>
</div>
<div class="footer-column">
        <p class="footer-small-title"><?php echo get_field('business_enquiries_title', 'option')?></p>
        <p><?php echo get_field('business_name', 'option')?><br />
<a href="<?php echo get_field('business_email', 'option')['url']?>"><?php echo get_field('business_email', 'option')['title']?> </a></p>
</div>
</div>
  

<div class="footer__col">
    <h2><?php echo get_field('address_title', 'option')?></h2>
<div class="footer-column">
<p class="footer-small-title"><a href="<?php echo get_field('google_maps', 'option')['url']?>" target="_blank" rel="noopener"><?php echo get_field('google_maps', 'option')['title']?></a></p>
<p><?php echo get_field('address', 'option')?></p>
</div> 
</div>

<div class="footer__col">
    <h2><?php echo get_field('career_title', 'option')?></h2>
    <div class="footer-column">
<p class="footer-small-title"><a href="<?php echo get_field('career_link', 'option')['url']?>" target="_blank" rel="noopener"><?php echo get_field('career_link', 'option')['title']?></a></p>
<p><a href="<?php echo get_field('career_info', 'option')['url']?>"><?php echo get_field('career_info','option')['title']?></p></a>
</div>
</div> 

<div class="footer__col">
        <?php $images = get_field('images', 'option')?>
<?php if ($images) {?>
        <h2><?php echo get_field('social_title', 'option')?></h2>
        <div class="footer-column">
        <div class="social-links footer-small-title"> 
            <?php foreach($images as $image) {?> 
          <a href="<?php $image['link']?>" target="_blank">
                <img src="<?php echo $image['image']?>">
</a>
            <?php } ?>
</div>
            </div>
</div>

<?php } ?>

</div>




<div class="footer__bottom">
            <span class="footer__bottom-text">
                <p><?php echo get_field('copyright', 'option')?></p>
</span>
                <a href="<?php echo get_field('cookie_policy', 'option')['url']?>" class=" active"><?php echo get_field('cookie_policy', 'option')['title']?></a>
                <a href="<?php echo get_field('terms_and_conditions', 'option')['url']?>"><?php echo get_field('terms_and_conditions', 'option')['title']?></a>
            </div>
                


            </div>

            </footer>
<?php  wp_footer(); ?>

    </body>

    </html>