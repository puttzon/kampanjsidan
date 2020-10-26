<?php
/* ========================================
Funktioner till functions php
======================================== */



/* ========================================
Skapar funktionerna för thumbnails, meny och titel
======================================== */
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');



/* ========================================
Köa in script och css
======================================== */
function theme_scripts()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('google-font', 'href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap"');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

register_nav_menu('navbar', ('Navbar'));
