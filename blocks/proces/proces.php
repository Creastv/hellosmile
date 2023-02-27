<?php
$proces = get_field( 'proces' );

$last = get_field( 'cta' );
?>

<div class="b-proces-l">
    <div class="b-proces-l__wraper">
        <ul>
            <?php 
            $i = 1;
            foreach($proces as $krok) { ?>
            <li>
                <div class="b-proces__step">
                    <?php echo $i; ?>
                </div>
                <div class="b-proces__desc">
                    <h3><?php echo $krok['tytul']; ?></h3>
                    <p><?php echo $krok['opis']; ?></p>
                </div>
            </li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>
