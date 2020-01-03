<?php $columns = get_field('three_column_text_content')?>
<?php $columnOne = $columns['column_one']?>
<?php $columnTwo = $columns['column_two']?>
<?php $columnThree = $columns['column_three']?>

<div class="flexible-block avatar-block two-col-section flexible-block--remove-padding-top avatar-block--3">
    <div class="avatar-block__blocks">
            <div class="avatar-block__block one">
                       <h2> <?php echo $columnOne['title']?></h2>
            
                <div class="avatar-block__content">
                        <p class="avatar-block__content-inner">
                           <?php echo $columnOne['content']?></p>
                    </div>
            </div>


            <div class="avatar-block__block two">
           <h2> <?php echo $columnTwo['title']?> </h2>                

            <div class="avatar-block__content">
                        <p class="avatar-block__content-inner">
                        <?php echo $columnTwo['content']?></p>
                    </div>
            </div>


            <div class="avatar-block__block three">
                     <h2>  <?php echo $columnThree['title']?> </h2>
                   
            <div class="avatar-block__content">
                        <p class="avatar-block__content-inner">
                        <?php echo $columnThree['content']?></p>
                    </div>
                </div>
            </div>
</div>