<?php 
$imgs = get_field( 'zdjecia' );
?>

<div class="b-przed-po">
    <div class="b-przed-po__wraper">
        <div class="swiper przed-po">
            <div class="swiper-wrapper">
                <?php foreach($imgs as $img) {?>
                <div class="swiper-slide">
                    <div class="b-przed-po__item">
                        <?php echo wp_get_attachment_image( $img['zdjecie'], 'full'); ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
