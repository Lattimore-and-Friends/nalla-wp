<?php $columns = get_field('three_column_content')?>
<?php $columnOne = $columns['column_one']?>
<?php $columnTwo = $columns['column_two']?>
<?php $columnThree = $columns['column_three']?>

<div class="flexible-block avatar-block  flexible-block--remove-padding-top avatar-block--3">
    <div class="container">
        <h1 class="three-col-title"><?php echo $columns['title']?></h1>
    <div class="avatar-block__blocks three-col__slider">

            <div class="avatar-block__block">
<a href="<?php echo $columnOne['link']?>"  class="avatar-block__block-inner">
                        <div class="responsive-image" style="background-image: url(<?php echo $columnOne['image']?>)">
                        </div>
</a>            
<div class="avatar-block__content">
    <div class="avatar-block__content-inner">
        <p><?php echo $columnOne['text_content']?></p>
</div>
    </div>
</div>


            <div class="avatar-block__block ">
<a href="<?php echo $columnTwo['link']?>" class="avatar-block__block-inner">
                        <div class="responsive-image" style="background-image: url(<?php echo $columnTwo['image']?>)">
                        </div>
                  
</a>
<div class="avatar-block__content">
                        <div class="avatar-block__content-inner">
                        <p><?php echo $columnTwo['text_content']?></p>
</div>
                    </div>

</div>


            <div class="avatar-block__block">
<a href="<?php echo $columnThree['link']?>" class="avatar-block__block-inner"> 
                       <div class="responsive-image" style="background-image: url(<?php echo $columnThree['image']?>)">
                        </div>
                   
</a>    
<div class="avatar-block__content">
                        <div class="avatar-block__content-inner">
                       <p> <?php echo $columnThree['text_content']?></p>
</div>
                    </div>
</div>
    </div>
</div>
</div>
