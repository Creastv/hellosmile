<?php 
$link = get_field( 'link' );
$title = get_field( 'title' );
$subtitle = get_field( 'subtitle' );
$desc = get_field( 'desc' );
$style = get_field( 'style' );
$w = get_field( 'width' );
if($w == "Narrow") {
$classW = "narrow";
}
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
$classStyle = "b-cta-bar--main";
if($style == 'Revers') {
    $classStyle = "b-cta-bar--revers";
} 
?>

<div class="b-cta-bar b-cta-bar--v2 <?php echo $classStyle; ?> <?php echo $classW; ?>">
    <div class="btn-cta-bar__wraper">
        <?php if($title) { ?>
        <div class="col">
            <p class="main-title"><?php echo $title; ?></p>
        </div>
        <?php } ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
            <path id="Shape_3_copy_4" data-name="Shape 3 copy 4" d="M1863.5,4358a14.46,14.46,0,0,1-14.5-14.388,2.633,2.633,0,0,1,5.265,0,9.235,9.235,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1863.5,4358Z" transform="translate(-1849 -4341)" fill="#575289" />
        </svg>

        <div class="col">
            <?php if($subtitle) { ?>
            <p class="title"><?php echo $subtitle; ?></p>
            <?php } ?>
            <?php if($desc) { ?>
            <p class="desc"><?php echo $desc; ?></p>
            <?php } ?>
        </div>
        <?php if($link) { ?>
        <div class="col">
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
        <?php } ?>
    </div>
</div>
