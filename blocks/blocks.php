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
        'name'              => 'placowki',
        'title'             => __('Placowki + mapa'),
        'render_template'   => 'blocks/placowki/placowki.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'placowki' ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-placowki',  get_template_directory_uri() . '/blocks/placowki/placowki.min.css' );
      },
    ));
    
    acf_register_block_type(array(
        'name'              => 'placowkilista',
        'title'             => __('Placowki - lista + mapa'),
        'render_template'   => 'blocks/placowki/placowki-lista.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'placowki' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-placowki-lista',  get_template_directory_uri() . '/blocks/placowki/placowki-lista.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'placowki-wybrane',
        'title'             => __('Placowki - miasto'),
        'render_template'   => 'blocks/placowki/placowki-miasto.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'placowki' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-placowki-lista',  get_template_directory_uri() . '/blocks/placowki/placowki-miasto.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'logos',
        'title'             => __('Logo - partneerzy'),
        'render_template'   => 'blocks/partnerzy/partnerzy.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Partnerzy' ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
         wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-partnerzy_init',  get_template_directory_uri() . '/blocks/partnerzy/partnerzy.js',  array(), '20130456', true );
          wp_enqueue_style( 'go-partnerzy',  get_template_directory_uri() . '/blocks/partnerzy/partnerzy.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'header-effect',
        'title'             => __('Header effecty'),
        'render_template'   => 'blocks/header/header-effecty.php',
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
        wp_enqueue_style( 'go-header-effect',  get_template_directory_uri() . '/blocks/header/header-effecty.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'faq-form',
        'title'             => __('Form'),
        'render_template'   => 'blocks/form/form.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Form' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-form',  get_template_directory_uri() . '/blocks/form/form.min.css' );
      },
    ));
    

    acf_register_block_type(array(
        'name'              => 'przed-po',
        'title'             => __('Przed - Po'),
        'render_template'   => 'blocks/przed-po/przed-po.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Faq form' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
         wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-przed-po_init',  get_template_directory_uri() . '/blocks/przed-po/przed-po.js',  array(), '20130456', true );
          wp_enqueue_style( 'go-przed-po',  get_template_directory_uri() . '/blocks/przed-po/przed-po.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'opinie',
        'title'             => __('Opinie'),
        'render_template'   => 'blocks/opinie/opinie.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Faq form' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-opinie_init',  get_template_directory_uri() . '/blocks/opinie/opinie.js',  array(), '20130456', true );
        wp_enqueue_style( 'go-opinie',  get_template_directory_uri() . '/blocks/opinie/opinie.min.css' );
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
      'name'              => 'anchor',
      'title'             => __('Anchor'),
      'render_template'   => 'blocks/anchor/anchor.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'anchor' ),
    ));

    acf_register_block_type(array(
      'name'              => 'tytul',
      'title'             => __('Tytuł'),
      'render_template'   => 'blocks/tytul/tytul.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tytul' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-tytul',  get_template_directory_uri() . '/blocks/tytul/tytul.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'tabela',
      'title'             => __('Tabela - dlaczego warto'),
      'render_template'   => 'blocks/tabela/tabela.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tabela' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-tabela',  get_template_directory_uri() . '/blocks/tabela/tabela.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'kolumny',
      'title'             => __('Sekcja 50/50 - Image'),
      'render_template'   => 'blocks/kolumny/kolumny.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'Kolumny' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-kolumny',  get_template_directory_uri() . '/blocks/kolumny/kolumny.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'ceny',
      'title'             => __('Ceny - nakładki'),
      'render_template'   => 'blocks/ceny/ceny-nakladki.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Ceny' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-ceny',  get_template_directory_uri() . '/blocks/ceny/ceny.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'kroki',
      'title'             => __('3 kroki'),
      'render_template'   => 'blocks/kroki/kroki.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'kroki' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-kroki',  get_template_directory_uri() . '/blocks/kroki/kroki.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'ceny-pro',
      'title'             => __('Ceny - produktów'),
      'render_template'   => 'blocks/ceny/ceny-pro.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Ceny' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-ceny-pro',  get_template_directory_uri() . '/blocks/ceny/ceny-pro.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'ceny-nakladek-sekcja',
      'title'             => __('Ceny - sekcja - ceny nakładek'),
      'render_template'   => 'blocks/ceny/ceny-sekcja.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Ceny' ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-ceny',  get_template_directory_uri() . '/blocks/ceny/ceny.min.css' );
        wp_enqueue_style( 'go-ceny-sekcja',  get_template_directory_uri() . '/blocks/ceny/ceny-sekcja.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'nakladki-vs-aparat',
      'title'             => __('Nakładki vs Aparat'),
      'render_template'   => 'blocks/nakladki-vs-aparat/n-vs-a.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Nakładki vs aparat' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-n-vs-a',  get_template_directory_uri() . '/blocks/nakladki-vs-aparat/n-vs-a.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'zalety',
      'title'             => __('Zalety'),
      'render_template'   => 'blocks/zalety/zalety.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'zalety' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-zalety',  get_template_directory_uri() . '/blocks/zalety/zalety.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'proces',
      'title'             => __('Proces Leczenia'),
      'render_template'   => 'blocks/proces/proces.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'proces' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-proces',  get_template_directory_uri() . '/blocks/proces/proces.min.css' );
      },
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
          wp_enqueue_style( 'go-sticky-sidebra',  get_template_directory_uri() . '/blocks/sticky-sidebar/sticky-sidebar.min.css' );
          wp_enqueue_script('go-sticky-sidebra-js', get_template_directory_uri() . '/blocks/sticky-sidebar/sticky-sidebar.js', array( 'jquery' ),'4', true );
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
