<?php 
$link = get_field( 'link' );
$title = get_field( 'title' );
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

<div class="b-cta-bar <?php echo $classStyle; ?> <?php echo $classW; ?>">
    <div class="btn-cta-bar__wraper">
        <div class="col">
            <?php if($title) { ?>
            <p class="title"><?php echo $title; ?></p>
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
