<?php
$pro = get_field( 'produkty' );
?>
<div class="b-ceny-pro">
    <div class="b-ceny-pro__wraper">
        <?php foreach($pro as $item) { ?>
        <div class="b-ceny-pro__item">
            <div class="item__nazwa">
                <h3><?php echo $item['nazwa']?></h3>
                <?php if($item['opis']) { ?>
                <?php echo $item['opis']; ?>
                <?php } ?>
            </div>
            <div class="item__cena">
                <?php if($item['cena']) { ?>
                <span><?php echo $item['cena']; ?></span>
                <?php } ?>
                <?php if($item['sufix_do_ceny']) { ?>
                <span><?php echo $item['sufix_do_ceny']; ?></span>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
