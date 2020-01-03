<?php $awards = get_field('awards')?>


<div class="flexible-block  image-and-list-block  flexible-block--remove-padding-bottom  title-block--default">
        <div>
        <div class="container">
            <h2><?php echo $awards['title']?></h2>
                <div class="title-block__content">
                    <p><?php echo $awards['content']?></p>
</div>
        </div>
    </div>
</div>
    <?php foreach ($awards['award'] as $award){ ?>
    <div class="flexible-block image-and-list-block  ">
        <div class="container">
    <div class="image-and-list-block__inner">
        <div class="responsive-image">
            <img src="<?php echo $award['image']?>"></div>
        <h4><?php echo $award['title']?></h4>
        <?php foreach($award['lists'] as $list) {?>
        <ul>
                <li><?php echo $list['year']?> -  <?php echo $list['details']?></li> 
        </ul>
        <?php }?>
    </div>
<!----></div></div>
            <?php }?>

