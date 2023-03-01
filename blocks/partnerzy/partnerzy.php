<?php 
$imgs = get_field( 'partnerzy' );
?>

<div class="b-partnerzy">
    <div class="container">
        <div class="row">
            <div class="b-partnerzy__wraper">
                <span>Nasi<br>Partnerzy:</span>
                <div class="swiper partnerzy">
                    <div class="swiper-wrapper">
                        <?php foreach($imgs as $img) {?>
                        <div class="swiper-slide">
                            <div class="b-partnerzy__item">
                                <?php echo wp_get_attachment_image( $img['logo'], 'full'); ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
