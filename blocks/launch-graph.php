<?php $graph = get_field('launch_graph')?>

<div class="flexible-block" style="background-color: <?php echo $column['background_color']?>">
        <div>
        <div class="container">
            <div class="two-col-container container-lg">
            <h3><?php echo $graph['title']?></h3>
                <div class="graph__content">
                    <p><?php echo $graph['details']?></p>
                    <div class="graph-images">
                   <picture>
                       <source media="(min-width: 720px)" srcset="<?php echo $graph['image']?>">
                       <source media="(max-width: 720px)" srcset="<?php echo $graph['mobile_image'] ?>">
                       <img src="<?php echo $graph['image']?>">
                   </picture>
</div>
</div>
</div>
        </div>
    </div>
</div>