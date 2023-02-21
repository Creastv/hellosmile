<?php
function register_acf_block_types() {
  //Done
    acf_register_block_type(array(
        'name'              => 'accordions',
        'title'             => __('Accordions'),
        'render_template'   => 'blocks/accordions/block-accordions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Accordions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-accordions',  get_template_directory_uri() . '/blocks/accordions/accordions.min.css' );
          wp_enqueue_script('go-accordions', get_template_directory_uri().'/blocks/accordions/accordions.js', array( 'jquery' ),'4', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'header',
        'title'             => __('Header'),
        'render_template'   => 'blocks/header/header.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'header' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-header',  get_template_directory_uri() . '/blocks/header/header.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'header-2',
        'title'             => __('Header - multi images'),
        'render_template'   => 'blocks/header2/header2.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'header' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-header2',  get_template_directory_uri() . '/blocks/header2/header2.min.css' );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'list',
        'title'             => __('List'),
        'render_template'   => 'blocks/list/block-list.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'list' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-list',  get_template_directory_uri() . '/blocks/list/list.min.css' );
          wp_enqueue_script('go-list-cdn', '//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js', array( 'jquery' ),'4', true );
           wp_enqueue_script('go-list', get_template_directory_uri().'/blocks/list/list.js', array( 'jquery' ),'4', true );
      },
    ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
