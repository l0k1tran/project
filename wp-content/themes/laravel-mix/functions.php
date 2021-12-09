<?php
 define('THEME_URL', get_stylesheet_directory());

 define('CORE', THEME_URL . "/core");

 require_once (CORE . "/init.php");
 if (!isset($content_width)){
     $content_width =620;
 }
 if(!function_exists('little_theme_setup')){
     function little_theme_setup(){
         $language_folder = THEME_URL . '/languages ';
         load_theme_textdomain ('little', $language_folder);
         add_theme_support('automatic-feed-links');
         add_theme_support('post-thumnails');
         add_theme_support('post-formats',array(
             'image',
             'video', 
             'gallery',
             'quote',
             'link'
         ));
         add_theme_support('tittle-tag');
         $default_background = array('default-color' => '#e8e8e8');
         add_theme_support('custom-background',$default_background);
         register_nav_menu('primary-menu', __('Primary Menu','little'));
         $sidebar = array(
              'name' => __('Main Sidebar','little'),
              'id' => 'main-sidebar',
              'Description '=> __('Default sidebar'),
              'class' => 'main-sidebar',
              'before_title'=> '<h3 class="widgettitle">',
              'after_title' => '</h3>' 
         );
         register_sidebar($sidebar);
     }
     add_action('init', 'little_theme_setup');


 }

 if(!function_exists('tittle_menu')){
     function tittle_menu($menu){
         $menu = array(
             'them_location' => $menu,
             'container' => 'nav',
             'container_class' => $menu
         );
         wp_nav_menu($menu);
     }
 }

 function tittle_style(){
    wp_register_style('main-style',get_template_directory_uri() . "/style.css", 'all');
    wp_enqueue_style('main-style');
    wp_register_style('tailwind-style',get_template_directory_uri() . "/tailwind.css", 'all');
    wp_enqueue_style('tailwind-style');
}
add_action('wp_enqueue_scripts','tittle_style');