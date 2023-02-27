<?php 
$nakladki = get_field( 'nakladki' );
$img = get_field( 'zdjecie_wyrozniajace' );
$inf = get_field( 'info' );

$link = get_field( 'link' );
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>

<div class="b-ceny-n-sekcja">
    <div class="b-ceny-n-sekcja__wraper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if($img) { ?>
                    <?php echo wp_get_attachment_image( $img, $size ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="274.001" height="162" viewBox="0 0 274.001 162">
                        <path id="Shape_3" data-name="Shape 3" d="M773,4406c-75.547,0-137-61.5-137-137.109a24.871,24.871,0,1,1,49.742,0,87.259,87.259,0,1,0,174.517,0,24.871,24.871,0,1,1,49.742,0C910,4344.5,848.546,4406,773,4406Z" transform="translate(-635.998 -4244)" fill="#9ef8df" opacity="0.6" />
                    </svg>

                    <?php } ?>
                </div>
                <div class="col">
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
                    <?php if($inf) { ?>
                    <?php echo $inf; ?>
                    <?php } ?>
                    <?php if($link) { ?>
                    <div class="btn-wrap">
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
