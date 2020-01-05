<?php $column = get_field('two_column_content')?>
<?php $columnOne = $column['column_one']?>
<?php $columnTwo = $column['column_two']?>
<div class="flexible-block graph-images <?php echo $column['width']?> avatar-block--2" style="background-color: <?php echo $column['background_color']?>">
        <div>
        <div class="container-md container-flex">
            <div class="two-col-container">
            <h2><?php echo $columnOne['title']?></h2>
                <div class="title-block__content flex-content column-one-container">
                    <p><?php echo $columnOne['content']?></p>
                    <?php if ($columnOne['link']) {?>
                    <a href="<?php echo $columnOne['link']['url']?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/button-white.png"></a>
                    <?php }?>
</div>
</div>

<?php if ($columnTwo['list_column']){?>

    <?php if($columnTwo['list']) {?>
<div class="two-col-container">
                <div class="title-block__content">
                    <h4><?php echo $columnTwo['title']?></h4>
                    <ul class="col-list">
                    <?php foreach($columnTwo['list'] as $list) {?>

                        <li><?php echo  $list['list_content']?></li>
                        <?php } ?>
                     </ul>
</div>
  
</div>
    <?php }?>
<?php } ?>

<?php if (!$columnTwo['list_column']){?>
    <div class="two-col-container">
            <h2><?php echo $columnTwo['title']?></h2>
                <div class="title-block__content">
                    <p><?php echo $columnTwo['content']?></p>
</div>
</div>
<?php }?>
        </div>
    </div>
</div>