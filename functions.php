<?php

function load_style()
{
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap_css');

    wp_register_style('style_css', get_template_directory_uri(). '/style.css', array(), false, 'all');
    wp_enqueue_style( 'style_css');
}
add_action('wp_enqueue_scripts', 'load_style');

function load_javascript()
{
    wp_deregister_script('jquery');
    
    wp_register_script('jquery', get_template_directory_uri(). '/assets/js/jquery.min.js', '', 1, true);
    wp_enqueue_script( 'jquery');

    wp_register_script('test', get_template_directory_uri(). '/assets/js/test.js', '', 1, true);
    wp_enqueue_script( 'test');
}
add_action('wp_enqueue_scripts', 'load_javascript');
