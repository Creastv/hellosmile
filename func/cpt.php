<?php 
//////////////////////////////////////////////////////////////offers
function go_post_types_placowki() {

	$labels = array(
		'name'               => 'Placówki',
		'singular_name'      => 'Placówki',
		'menu_name'          => 'Placówki',
		'name_admin_bar'     => 'Placówki',
		'all_items'          => 'Placówki',
	);

	$args = array( 
	    'public' => false,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'publicly_queryable' => false,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "placowki", "with_front" => true ),
		'supports'      => array( 'title', ),
		// , 'editor' 
	);
    register_post_type( 'placowki', $args );

}
add_action( 'init', 'go_post_types_placowki' );

// add_action( 'init', 'go_taxonomy_woj', 0 );
  
// function go_taxonomy_woj() {
//   $labels = array(
//     'name' => _x( 'Wojewodztwo', 'go' ),
//     'singular_name' => _x( 'Wojewodztwo', 'go' ),
//     'search_items' =>  __( 'Search wojewodztwo' ),
//     'all_items' => __( 'All wojewodztwo' ),
//     'parent_item' => __( 'Parent Subject' ),
//     'parent_item_colon' => __( 'Parent Subject:' ),
//     'edit_item' => __( 'Edit Subject' ), 
//     'update_item' => __( 'Update Subject' ),
//     'add_new_item' => __( 'Add New Subject' ),
//     'new_item_name' => __( 'New Subject Name' ),
//     'menu_name' => __( 'Wojewodztwo' ),
//   );    
  
//   register_taxonomy('wojewodztwo',array('placowki'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'wojewodztwo' ),
//   ));
  
// }

add_action( 'init', 'go_taxonomy_miasto', 0 );
  
function go_taxonomy_miasto() {
  $labels = array(
    'name' => _x( 'Miasto', 'go' ),
    'singular_name' => _x( 'Miasto', 'go' ),
    'search_items' =>  __( 'Search miasto' ),
    'all_items' => __( 'All miasto' ),
    'parent_item' => __( 'Parent Subject' ),
    'parent_item_colon' => __( 'Parent Subject:' ),
    'edit_item' => __( 'Edit Subject' ), 
    'update_item' => __( 'Update Subject' ),
    'add_new_item' => __( 'Add New Subject' ),
    'new_item_name' => __( 'New Subject Name' ),
    'menu_name' => __( 'Miasto' ),
  );    
  
  register_taxonomy('miasto',array('placowki'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'miasto' ),
  ));
  
}

// //////////////////////////////////////////////////////////////Projects
// function go_post_types_projects() {

// 	$labels = array(
// 		'name'               => 'Projects',
// 		'singular_name'      => 'Project',
// 		'menu_name'          => 'Projects',
// 		'name_admin_bar'     => 'Projects',
// 		'all_items'          => 'Projects',
// 	);

// 	$args = array( 
// 	    'public' => true,
// 		'has_archive' => false,
// 		'show_in_rest' => true,
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'publicly_queryable' => true,
// 		'show_in_rest' => true,
// 		"rewrite"             => array( "slug" => "Projects", "with_front" => true ),
// 		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
// 		// , 'editor' 
// 	);
//     register_post_type( 'projects', $args );

// }
// add_action( 'init', 'go_post_types_projects' );
