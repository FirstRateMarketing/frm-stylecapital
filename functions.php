<?php

/** 
 *FullTimeForce
 *@link 
 *@package WordPress
 *@subpackage FullTimeForce
 *@since 1.0.0
 *@version 1.0.0
 */

define('URL', get_stylesheet_directory_uri());
define('IMG', URL . '/images');
define('JS', URL . '/libraries/js');
define('CSS', URL . '/libraries/css');

if (!function_exists('general_scripts')):
    function general_scripts()
    {
        wp_register_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
        wp_register_style('maincss', get_template_directory_uri() . '/public/css/app.css', '1.0.0', 'all');
        wp_enqueue_style('style');
        wp_enqueue_style('maincss');

        wp_register_script('mainjs', get_template_directory_uri() . '/public/js/main.min.js', array(), '1.0.0', true);
        wp_enqueue_script('mainjs');

        if (is_page('analysis') || is_page('colour-and-style-analysis')) {
            wp_register_style('accordionCSS', CSS . '/accordion.css', '1.0.0', 'all');
            wp_enqueue_style('accordionCSS');

            wp_register_script('accordionJS', JS . '/accordion.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('accordionJS');
        }
    }
endif;
add_action('wp_enqueue_scripts', 'general_scripts');

//add postthumbnail function
if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');

//excerpt 30 word
function my_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

//registrar menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header'),
            // 'footer-menu' => __( 'Footer' ),
        )
    );
}
add_action('init', 'register_my_menus');

//modulo de redes - get option
// require_once get_template_directory().'/inc/modules/information_module.php';