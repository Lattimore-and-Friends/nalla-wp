<?php $footer = get_field('extended_footer')?>
<?php $list = $footer['list']?>

    <div class="extended-footer" style="background-image: url(<?php echo $footer['background_image']?>)">
    <div class="container">
        <div class="footer-title">
        <h2><?php echo $footer['title'] ?></h2>
</div>
<?php if($list) {?>
    <div class="footer-content" >
<div class="footer-list container-lg">
<?php foreach($list as $lists) {?>
   <li> <img src="<?php echo get_template_directory_uri();?>/assets/images/checkmark.png"/><p><?php echo $lists['list_content']?></p></li>
<?php }?>
</div>
<?php } ?>

<div class="footer-roles">
<p class="name"><?php echo $footer['contact_name'] ?></p>

<p class="roles"><?php echo $footer['role']?></p>
<a class="button button--yellow-pencil" href="<?php echo $footer['button']['link']?>"><?php echo $footer['button']['title']?></a>
</div>
</div>
    </div>
</div>


