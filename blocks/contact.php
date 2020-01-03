<?php $contact = get_field('contact')?>
<?php $columnOne = $contact['column_one']?>
<?php $columnTwo = $contact['column_two']?>
<?php $business = $columnOne['business_enquiries']?>
<?php $general = $columnOne['general_enqueries']?>
<?php $address = $columnOne['address']?>
<div class="contact-container">
            <div class="two-col-left" style="background-color: <?php echo $columnOne['background_color']?>">
            <h2><?php echo $columnOne['title']?></h2>
                    <p><?php echo $columnOne['content']?></p>
                    <div class="queries">
                        <div class="column-one">
                          <p><?php echo $business?></p>
                        </div>
                        <div class="column-two">
                           <p><?php echo $general?></p>
                        </div>
                    </div>
                    <div class="address">
                        <p><?php echo $address ?></p>
                    </div>
</div>



    <div class="two-col-right" style="background-color: <?php echo $columnTwo['background_color']?>">
            <h2><?php echo $columnTwo['title']?></h2>
                    <p><?php echo $columnTwo['content']?></p>
                    <p><?php echo $columnTwo['details']?></p>
                   
</div>
</div>