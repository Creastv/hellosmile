<?php
$miast = get_field( 'miasto' );
 $gabinety = new WP_Query(array(
    'post_type' => 'placowki',
    'tax_query' => array(
        array(
            'taxonomy' => 'miasto',
            'field' => 'slug',
            'terms' => array( $miast->name ),
            'operator' => 'IN'
        )
    )
) );
?>
<div class="b-miasta">
    <div class="b-miasta__wraper">
        <ul>
            <?php if ( $gabinety->have_posts() ) : while ( $gabinety->have_posts() ) : $gabinety->the_post();
            $inf = get_field('info', get_the_ID());
        ?>
            <li>
                <div class="miasto">
                    <p><b><?php the_title(); ?></b></p>
                    <span><?php echo $inf['adres']; ?></span>
                    <span><?php echo $inf['strona_www']; ?></span>
                </div>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </div>
</div>
<?php
$gabinety = null;
wp_reset_postdata();
