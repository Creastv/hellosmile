<?php 
$posts = get_posts( array(
    'post_type'   => 'placowki',
    'numberposts' => -1,
) );
?>
<?php
$miasta = get_terms( 'miasto' );
?>
<div class="b-map-placowki">
    <div class="container">
        <div class="row">
            <div class="b-map-placowki__wraper">
                <div class="col">
                    <div class="lista-miast">
                        <?php
                        foreach ( $miasta as $miasto ) {
                            $gabinety = new WP_Query( array(
                                'post_type' => 'placowki',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'miasto',
                                        'field' => 'slug',
                                        'terms' => array( $miasto->slug ),
                                        'operator' => 'IN'
                                    )
                                )
                            ) );
                            ?>
                        <div class="miasto">
                            <div class="nazwa">
                                <img src="<?php echo get_template_directory_uri() ?>/blocks/placowki/pin.png" width="28px" height="28px" alt="<?php echo $miasto->name; ?> - Hello Smile">
                                <h2><?php echo $miasto->name; ?></h2>
                            </div>
                            <ul>
                                <?php if ( $gabinety->have_posts() ) : while ( $gabinety->have_posts() ) : $gabinety->the_post();
                                $inf = get_field('info', get_the_ID());
                                $location = get_field('lokalizacja', get_the_ID());
                                 if ( !empty( $location ) ) {
                                    $map_url = 'https://www.google.com/maps/dir/?api=1&destination=' . $location['lat'] . ',' . $location['lng'];
                                    // echo '<a href="'. esc_url( $map_url ) . '" rel="nooopener">Get directions</a>';
                                }
                                ?>
                                <li>

                                    <?php if($location) { ?>
                                    <a href="<?php echo esc_url( $map_url ); ?>" rel="nooopener" target="_blank">
                                        <?php } ?>
                                        <p><b><?php the_title(); ?></b></p>
                                        <?php if($inf['adres']) { ?>
                                        <span><?php echo $inf['adres']; ?></span>
                                        <?php } ?>
                                        <?php if($location) { ?>
                                    </a>
                                    <?php } ?>
                                    <?php if($inf['kod_pocztowy']) { ?>
                                    <span><?php echo $inf['kod_pocztowy']; ?></span>
                                    <?php } ?>
                                    <?php if($inf['strona_www']) { ?>
                                    <span><?php echo $inf['strona_www']; ?></span>
                                    <?php } ?>
                                </li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                        <?php
                    $gabinety = null;
                    wp_reset_postdata();
                        }
                    ?>
                    </div>
                </div>
                <div class="col">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
let locations = [
    <?php
$i=1;
foreach ($posts as $post) :
setup_postdata($post);
$location = get_field('lokalizacja', $post->ID);
$info =  get_field('info', $post->ID);
$title = get_the_title($post->ID);
?>['<?php echo $title; ?>', '<?php echo $info['adres']; ?>', '<?php echo $info['kod_pocztowy']; ?>', '<?php echo $info['strona_www']; ?>', '<?php echo $location['lat']; ?>', '<?php echo $location['lng']; ?>', '<?php echo $i; ?>'],
    <?php $i++; endforeach; ?>
    // ['Maroubra Beach', -33.950198, 151.259302, 1]
];
</script>
