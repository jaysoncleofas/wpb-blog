<?php

//Theme Support
function wpb_theme_setup()
{
    //Thumbnails
    add_theme_support('post-thumbnails');
    //Post Format
    add_theme_support('post-formats', array('aside', 'gallery'));
}
add_action('after_setup_theme', 'wpb_theme_setup');
//End Theme Support


//Excerpt Length Control
function set_excerpt_length()
{
    return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');
//End Excerpt Length Control

//Widget Location
function wpb_init_widgets($id)
{
    register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="font-italic">',
    'after_title' => '</h4>'
    ));

    register_sidebar(array(
    'name' => 'Box1',
    'id' => 'box1',
    'before_widget' => '<div class="card-body align-items-start">',
    'after_widget' => '</div>',
    'before_title' => '<h3 mb-0">',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Box2',
    'id' => 'box2',
    'before_widget' => '<div class="card-body align-items-start">',
    'after_widget' => '</div>',
    'before_title' => '<h3 mb-0">',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Box3',
    'id' => 'box3',
    'before_widget' => '<div class="card-body align-items-start">',
    'after_widget' => '</div>',
    'before_title' => '<h3 mb-0">',
    'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'wpb_init_widgets');
//End Widget

//Register Menus
function register_my_menus()
{
    register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
     )
   );
}
 add_action('init', 'register_my_menus');

 //Customizer file
 require get_template_directory().'/inc/customizer.php';
