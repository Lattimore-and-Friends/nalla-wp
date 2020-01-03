<?php $graph = get_field('launch_graph')?>

<div class="flexible-block" style="background-color: <?php echo $column['background_color']?>">
        <div>
        <div class="container">
            <div class="two-col-container">
            <h2><?php echo $graph['title']?></h2>
                <div class="graph__content">
                    <p><?php echo $graph['details']?></p>
                    <img class="graph-image" src="<?php echo $graph['image']?>">
</div>
</div>
        </div>
    </div>
</div>