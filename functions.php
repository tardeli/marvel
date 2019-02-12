<?php
/**
 * mavel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mavel
 */
 
 add_theme_support( 'title-tag' );
 add_theme_support( 'description' );
 
 add_theme_support( 'custom-logo', array(
    'height'      => 76,
    'width'       => 300,
    'flex-height' => true
 ) );
 
 register_nav_menus( array(
    'primary' => 'Primary Menu', 'Principal'
 ) );
 
 //imagem destacada
 add_theme_support( 'post-thumbnails' );
 set_post_thumbnail_size(825, 510, true);
 
 //wigdth
 function novos_init(){
	 register_sidebar(array(
		'name'=> 'footer',
		'id'=>'footer',
		'before_widget'=>'<div class=\'lateral\'>',
		'after_widget'=>'</div>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>',
		
	 ));
 }
 
 add_action('widgets_init','novos_init');
 
 

