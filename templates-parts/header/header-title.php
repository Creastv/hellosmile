<?php
$displayTitle = get_field( 'display_title' );

?>
<?php  if($displayTitle || is_category() || is_author() || is_tag() || is_day() || is_month() || is_year() || is_tax()  ) { ?>
<header class="entry-header">
    <h1 class="entry-title">
        <?php if ( is_category() ) :
					single_cat_title();					
					elseif (is_404()) :
						_e( '404', 'go');
					elseif (is_page() ) :
						the_title();
					elseif ( is_tag() ) :
						single_tag_title();
					elseif ( is_author() ) :
						the_post();
						printf( __( '%s', 'go' ), get_the_author() );
						rewind_posts();
					elseif ( is_day() ) :
						printf( __( 'Dzień: %s', 'go' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Miesiąc: %s', 'go' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Rok: %s', 'go' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'go');
					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'go' );
					else :
						_e( 'Blog', 'go' );
				endif; ?>
    </h1>
    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
        <path id="Shape_3_copy_6" data-name="Shape 3 copy 6" d="M1283.5,1363a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1283.5,1363Z" transform="translate(-1269 -1345.999)" fill="#575289" />
    </svg>
    <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>
<?php } ?>
