<?php

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );


function pwd_excerpt_length( $length) {
    return 35;
}

add_filter( 'excerpt_length', 'pwd_excerpt_length', 999 );


function register_pwd_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )

    ));
}

add_action( 'init', 'register_pwd_menus' );

function pwd_create_widget( $name, $id, $description ) {

  register_sidebar(array(
      'name'          => __( $name ),
      'id'            => $id,
      'description'   => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
  ));
}

pwd_create_widget( 'Blog Sidebar', 'blog', 'Displays on side of blog page' );


function pwd_theme_styles() {


  wp_enqueue_style( 'googlefont_css' , 'http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,300italic,400italic');

  wp_enqueue_style( 'fontawesome_css' , 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

  wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts' , 'pwd_theme_styles');

function pwd_theme_js() {

  wp_enqueue_script('headroom_js' , get_template_directory_uri() . '/js/headroom.min.js' , array('menu_js') ,'', true );

   wp_enqueue_script('menu_js' , get_template_directory_uri() . '/js/menu-overlay.js' , array('jquery') ,'', true );

  wp_enqueue_script('main_js' , get_template_directory_uri() . '/js/theme.js' , array('headroom_js') ,'', true );

  wp_enqueue_script('sidr_js' , get_template_directory_uri() . '/js/sidr-min.js' , array('jquery') ,'', true );

}
add_action( 'wp_enqueue_scripts' , 'pwd_theme_js');


//enqueues customizer. Uncomment to start using the customizer
// @include(get_template_directory().'/customizer/customizer-functions.php')
?>