<?php 
$nakladki = get_field( 'nakladki' );
?>

<div class="b-ceny-nakladek">
    <div class="b-ceny-nakladek__wraper">
        <?php foreach($nakladki as $item) {?>
        <div class="b-ceny-nakladek__item">
            <div class="nazwa">
                <?php if($item['nazwa']) { ?>
                <h3><?php echo $item['nazwa']; ?></h3>
                <?php } ?>
                <?php if($item['dopisek']) { ?>
                <p><?php echo $item['dopisek']; ?></p>
                <?php } ?>
            </div>
            <div class="cena">
                <?php if($item['cena']) { ?>
                <div class="numer">
                    <?php echo $item['cena']; ?>
                </div>
                <?php } ?>
                <div class="sufix">
                    <?php if($item['sufix']) { ?>
                    <span><?php echo $item['sufix']; ?></span>
                    <?php } ?>
                    <?php if($item['dopisek_do_ceny']) { ?>
                    <span><?php echo $item['dopisek_do_ceny']; ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
