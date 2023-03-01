<?php 
$thisid = get_the_ID();

// get solution cpt's to create the link bar
$posts = get_posts( array(
    'post_type'   => 'placowki',
    'numberposts' => -1,
) );
?>

<?php if ($posts) : ?>
<?php foreach ($posts as $post) :
setup_postdata($post);
$location = get_field('lokalizacja', $post->ID);
$info =  get_field('info', $post->ID);
$title = get_the_title($post->ID);
?>
<?php echo $title; ?>

<?php if( $info ) { ?>
<?php echo $info['adres']; ?>
<?php echo $info['strona_www']; ?>
<?php } ?>

<?php if( $location ) { ?>
<div class="acf-map" data-zoom="16">
    <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
</div>
<?php } ?>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

<?php endif; ?>
