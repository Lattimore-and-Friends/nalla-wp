<?php $credits = get_field('credits')?>

<div class="flexible-block credits-block">
    <div class="container">
    <div class="credits-block__cols">
        <div class="credits-block__col">
            <?php foreach ($credits['credit'] as $credit) {?>
                <div class="credits-block-section">
                    <h6 class="credits-block-section__title"><?php echo $credit['role']?></h6>
    <div class="credits-block-section__credit"><?php echo $credit['name']?></div>
</div>
            <?php }?>
   
        </div>
        <div class="credits-block__col">
<!---->        </div>
    </div>
</div></div>