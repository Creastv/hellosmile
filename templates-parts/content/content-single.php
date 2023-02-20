<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <?php
	get_template_part( 'templates-parts/header/header', 'title' ); 
	 ?>
    <div class="img">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
