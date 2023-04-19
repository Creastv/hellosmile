<?php 
$posts = get_posts( array(
    'post_type'   => 'placowki',
    'numberposts' => -1,
) );
?>
<div class="b-map-placowki">
    <div class="container">
        <div class="row">
            <div class="b-map-placowki__wraper">
                <div class="col">
                    <InnerBlocks />
                </div>
                <div class="col">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var locations = [
    <?php
$i=1;
foreach ($posts as $post) :
setup_postdata($post);
$location = get_field('lokalizacja', $post->ID);
$info =  get_field('info', $post->ID);
$title = get_the_title($post->ID);
if ( !empty( $location ) ) {
    $map_url = 'https://www.google.com/maps/dir/?api=1&destination=' . $location['lat'] . ',' . $location['lng'];
    // echo '<a href="'. esc_url( $map_url ) . '" rel="nooopener">Get directions</a>';
}
?>['<?php echo $title; ?>', '<?php echo $info['adres']; ?>', '<?php echo $info['kod_pocztowy']; ?>', '<?php echo $info['strona_www']; ?>', '<?php echo $location['lat']; ?>', '<?php echo $location['lng']; ?>', '<?php echo $i; ?>'],
    <?php $i++; endforeach; ?>
    // ['Maroubra Beach', -33.950198, 151.259302, 1]
];
</script>
