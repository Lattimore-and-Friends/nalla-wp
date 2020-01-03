<?php $footer = get_field('extended_footer')?>
<?php $list = $footer['list']?>

    <div class="extended-footer" style="background-image: url(<?php echo $footer['background_image']?>)">
    <div class="container-project">
        <div class="footer-title">
        <h2><?php echo $footer['title'] ?></h2>
</div>
<?php if($list) {?>
    <div class="footer-content" >
<div class="footer-list">
<?php foreach($list as $lists) {?>
   <li> <img src="<?php echo get_template_directory_uri();?>/assets/images/checkmark.png"/><?php echo $lists['list_content']?></li>
<?php }?>
</div>
<?php } ?>

<div class="footer-roles">
<p class="roles"><?php echo $footer['role']?></p>
<p><?php echo $footer['contact_name'] ?></p>
<a class="button button--yellow-pencil" href="<?php echo $footer['button']['link']?>"><?php echo $footer['button']['title']?></a>
</div>
</div>
    </div>
</div>


