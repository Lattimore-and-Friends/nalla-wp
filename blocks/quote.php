<?php $quote = get_field('quote')?>

<div class="flexible-block two-col-section avatar-block--2" style="background-color: <?php echo $quote['background_color']?>">
        <div>
        <div class="container container-flex">
            <div class="two-col-container">
            <h2 style="color: <?php echo $quote['quote_color']?>"><?php echo $quote['quote']?></h2>
                <div class="title-block__content">
                    <p><?php echo $quote['person']?></p>
                    <p><?php echo $quote['role']?></p> 

</div>
</div>


        </div>
    </div>
</div>