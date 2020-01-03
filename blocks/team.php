<?php $team = get_field('team')?>

<div class="flexible-block team-block">
    <div class="container">
    <div class="team-block__inner">
        <?php foreach($team['person'] as $person) {?>
            <div class="team-member-index team-member-index--ikea">
                <div class="team-member-index__image responsive-image loaded">
                    <img src="<?php echo $person['image']?>"></div>
<div class="team-member-index__content">
    <h4><?php echo $person['role']?></h4>
    <h3><?php echo $person['name']?></h3>
    <div class="team-member-index__excerpt"><?php echo $person['details']?></div>
        <a href="<?php echo $person['email']['url']?>" class="arrow-link"> <span><?php echo $person['email']['title']?>
         <svg role="img" class="svg-arrow">
                 <use xlink:href="/assets/svg/svg-sprite.svg#arrow"></use>
</svg></span></a>
        <a href="<?php echo $person['linkedin']['url']?>" target="_blank" class="arrow-link"> 
        <span><?php echo $person['linkedin']['title']?> <svg role="img" class="svg-arrow">
            <use xlink:href="/assets/svg/svg-sprite.svg#arrow">
        </use>
</svg></span></a>
</div></div>
        <?php }?>
      

    </div>
</div></div>