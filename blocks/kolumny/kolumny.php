<?php 
$img = get_field( 'zdjecie_wyrozniajace' );
$sze = get_field( 'szerokosc' );

if($sze == "Full") {
    $szeClass = "full";
}


$pos = get_field( 'pozycja_zdjecia' );
if($pos == "Prawo") {
    $posClass = "right";
} else {
    $posClass = "left";
}

?>
<div class="b-kolumny <?php echo $szeClass; ?>">
    <?php if($sze == "Full") { ?>
    <div class="container">
        <div class="row">
            <?php } ?>
            <div class="b-kolumny__wraper <?php echo $posClass; ?>">
                <div class="col">
                    <InnerBlocks />
                </div>
                <div class="col">
                    <?php echo wp_get_attachment_image( $img, 'full' ); ?>
                </div>
            </div>
            <?php if($sze == "Full") { ?>
        </div>
    </div>
    <?php } ?>
</div>
