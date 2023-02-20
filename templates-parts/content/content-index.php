<?php 
$excerpt = get_field('excerpt');
$pdf = get_field('pdf');
$doc = get_field('doc');
?>
<article id="post-<?php the_ID(); ?> " <?php post_class('l-item'); ?>>
    <div class="l-item__left">
        <?php if(has_post_thumbnail()) {?>
        <?php the_post_thumbnail('licytacja'); ?>
        <?php } else { ?>
        <img src="<?php bloginfo('template_url'); ?>/src/img/licytacja.jpg" alt="Licytacja" />
        <?php } ?>
    </div>
    <div class="l-item__right">
        <h2 class=" title-page"><?php the_title(); ?></a></h2>
        <?php if($pdf['url']) { ?>
        <p> <?php echo $excerpt; ?></p>
        <?php } ?>
        <div class="links">
            <?php if($pdf['url']) { ?>
            <a href="<?php echo $pdf['url']; ?>" target="_blank">pobierz PDF</a>
            <?php } ?>
            <?php if($doc['url']) { ?>
            <a href="<?php echo $doc['url']; ?>" target="_blank">pobierz DOC</a>
            <?php } ?>
        </div>
    </div>
</article>
