<?php
/**
 * Child theme stylesheet einbinden in Abhängigkeit vom Original-Stylesheet
 */

function child_theme_styles()
{
    wp_enqueue_style('inspiro-style', get_template_directory_uri() . '/assets/css/minified/style.min.css');
    wp_enqueue_style('child-theme', get_stylesheet_directory_uri() . '/style.css', array('inspiro-style'));

}
add_action('wp_enqueue_scripts', 'child_theme_styles'); ?>