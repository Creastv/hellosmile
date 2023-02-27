<?php 
$steps = get_field( 'steps' );
$link = get_field('link');
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>

<div class="b-steps">
    <div class="container">
        <div class="row">
            <div class="b-steps__wraper">
                <?php if($steps) { ?>
                <?php foreach($steps as $step) { ?>
                <div class="b-steps__item">
                    <?php if($step['zdjecie_wyrozniajace']) { ?>
                    <?php echo  wp_get_attachment_image( $step['zdjecie_wyrozniajace'], $size );?>
                    <?php } ?>
                    <?php if($step['subtytul']) { ?>
                    <span><?php echo $step['subtytul']; ?></span>
                    <?php } ?>
                    <?php if($step['tytul']) { ?>
                    <h3><?php echo $step['tytul']; ?></h3>
                    <?php } ?>
                    <?php if($step['opis']) { ?>
                    <p><?php echo $step['opis']; ?></p>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
            <?php if($link) { ?>
            <div class="btn-wrap">
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
