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
      'name'              => 'btn',
      'title'             => __('Btn'),
      'render_template'   => 'blocks/btn/btn.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'btn' ),
    ));

     acf_register_block_type(array(
      'name'              => 'cta-bar',
      'title'             => __('CTA-bar'),
      'render_template'   => 'blocks/cta-bar/cta-bar.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'btn' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-cta-bar',  get_template_directory_uri() . '/blocks/cta-bar/cta-bar.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'vote-bar',
        'title'             => __('Vote - bar'),
        'render_template'   => 'blocks/vote-bar/vote-bar.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Vote' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-vote',  get_template_directory_uri() . '/blocks/vote/vote.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'sticky-sidebar',
        'title'             => __('Sticky sidebar'),
        'render_template'   => 'blocks/sticky-sidebar/sticky-sidebar.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'sticky-sidebar' ),
       'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-vote',  get_template_directory_uri() . '/blocks/sticky-sidebar/sticky-sidebar.min.css' );
      },
    ));
    
    acf_register_block_type(array(
        'name'              => 'posts',
        'title'             => __('Ostatnio dodane posty'),
        'render_template'   => 'blocks/posts/posts.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Posts' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-posts',  get_template_directory_uri() . '/blocks/posts/posts.min.css' );
      },
    ));
    //  acf_register_block_type(array(
    //     'name'              => 'list',
    //     'title'             => __('List'),
    //     'render_template'   => 'blocks/list/block-list.php',
    //     'category'          => 'formatting',
    //     'icon' => array(
    //       'background' => '#bc9c3b',
    //       'foreground' => '#fff',
    //       'src' => 'ellipsis',
    //     ),
    //   'mode'            => 'preview', 
    //   'keywords'          => array( 'list' ),
    //   'supports' => array( 'align' =>false ),
    //   'enqueue_assets'    => function(){
    //       wp_enqueue_style( 'go-list',  get_template_directory_uri() . '/blocks/list/list.min.css' );
    //       wp_enqueue_script('go-list-cdn', '//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js', array( 'jquery' ),'4', true );
    //        wp_enqueue_script('go-list', get_template_directory_uri().'/blocks/list/list.js', array( 'jquery' ),'4', true );
    //   },
    // ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
