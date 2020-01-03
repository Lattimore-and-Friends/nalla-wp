<?php $stats = get_field('stats')?>

<div class="flexible-block title-block title-block--default">
        <div>
        <div class="container-project">
            <h2><?php echo $stats['title']?></h2>
                <div class="title-block__content">
                    <p><?php echo $stats['sub_title']?></p>
</div>
        </div>
    </div>
</div>
<?php $percentage = get_field('stats')['prefix']?>
<div class="flexible-block stat-block">
    <div class="container-project stat-container">
        <div class="stat-block-stat stat-block-stat--dark-grey">
            <div class="stat-block-stat__figure"><?php echo $percentage['percentage']?>
        </div>
<div class="stat-block-stat__subtitle"><?php echo $percentage['details']?>

</div>
<a class="button-stats" href="<?php echo $percentage['link']['link']?>"><?php echo $percentage['link']['title']?></a>  

</div>
<?php $number = get_field('stats')['number']?>

<div class="stat-block-stat stat-block-stat--dark-grey">
            <div class="stat-block-stat__figure"><?php echo $number['percentage']?>
        </div>
<div class="stat-block-stat__subtitle"><?php echo $number['details']?>

</div>
<a class="button-stats" href="<?php echo $number['link']['link']?>"><?php echo $number['link']['title']?></a>  

</div>
<?php $suffix = get_field('stats')['suffix']?>

<div class="stat-block-stat stat-block-stat--dark-grey">
            <div class="stat-block-stat__figure"><?php echo $suffix['number']?>
        </div>
<div class="stat-block-stat__subtitle"><?php echo $suffix['details']?>

</div>
<a class="button-stats" href="<?php echo $suffix['link']['link']?>"><?php echo $suffix['link']['title']?></a>  

</div>
</div>

</div>