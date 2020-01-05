<div class="container-project">

    <div class="flexible-block simple-content-block  flexible-block--remove-padding-bottom">
        <div class="container">
<!---->    <div class="simple-content-block__inner">
        <h4><?php echo get_field('services')['title']?></h4>

    </div>
</div></div>
<?php $services = get_field('services')['service_column']?>
    <div class="flexible-block accordion-block">
        <div class="container">
            <?php if ($services) {?>
                <?php foreach ($services as $service) {?>
        <div class="accordion-block-section accordion-block-section--photoshop">
            <h2><?php echo $service['category']?></h2>
<div class="accordion-block-section__content">
    <div class="accordion-block-section__content-main">
        <h3 class="p1">
            <span class="s1">
                <?php echo $service['details']?>
                </span></h3>
</div>
<?php if ($service['list']) {?>
    <div class="accordion-block-section__content-sub">
        <?php foreach ($service['list'] as $list) {?>
        <ul>

<li class="p1"><span class="s1"><?php echo $list['detail_list']?></span></li>
</ul>
        <?php } ?>
</div>
<?php } ?>
</div></div>
            <?php }?>
            <?php }?>
 
</div></div>
        </div>