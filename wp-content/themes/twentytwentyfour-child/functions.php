<?php 


// 




function twentytwentyfourChildEnqueueStyles() 
{
   
    wp_enqueue_style('twentytwentyfour-style'       , get_template_directory_uri()   . '/style.css');
    wp_enqueue_style('twentytwentyfour-child-style' , get_stylesheet_directory_uri() . '/style.css', 
    array('twentytwentyfour-style'));

    wp_enqueue_style( 'store-style'  , get_stylesheet_directory_uri()  . '/src/css/store-style.css' , array('twentytwentyfour-child-style') ) ;                   
}
add_action('wp_enqueue_scripts', 'twentytwentyfourChildEnqueueStyles');




