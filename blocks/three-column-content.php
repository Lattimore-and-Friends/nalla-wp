<?php $columns = get_field('three_column_content')?>
<?php $columnOne = $columns['column_one']?>
<?php $columnTwo = $columns['column_two']?>
<?php $columnThree = $columns['column_three']?>

<div class="flexible-block avatar-block  flexible-block--remove-padding-top avatar-block--3">
    <div class="container">
    <div class="avatar-block__blocks three-col__slider">
            <div class="avatar-block__block">
<a href="<?php echo $columnOne['link']?>"  class="avatar-block__block-inner">
                        <div class="responsive-image" style="background-image: url(<?php echo $columnOne['image']?>)">
                        </div>
</a>            
<div class="avatar-block__content">
                        <p class="avatar-block__content-inner">
                           <?php echo $columnOne['text_content']?>
</p>
                    </div>
</div>


            <div class="avatar-block__block">
<a href="<?php echo $columnTwo['link']?>" class="avatar-block__block-inner">
                        <div class="responsive-image" style="background-image: url(<?php echo $columnTwo['image']?>)">
                        </div>
                  
</a>
<div class="avatar-block__content">
                        <p class="avatar-block__content-inner">
                        <?php echo $columnTwo['text_content']?>
</p>
                    </div>

</div>


            <div class="avatar-block__block">
<a href="<?php echo $columnThree['link']?>" class="avatar-block__block-inner"> 
                       <div class="responsive-image" style="background-image: url(<?php echo $columnThree['image']?>)">
                        </div>
                   
</a>    
<div class="avatar-block__content">
                        <p class="avatar-block__content-inner">
                        <?php echo $columnThree['text_content']?>
</p>
                    </div>
</div>
    </div>
</div>
</div>