<?php 
$left = get_field( 'lewo', 'options' );
$right = get_field( 'prawo', 'options' );

?>
<div class="f__info">
    <div class="f__info__wraper">
        <div class="col">
            <p><small><?php echo $left; ?></small></p>
        </div>
        <div class="col">
            <p><small><?php echo $right; ?></small></p>
        </div>
    </div>
</div>
