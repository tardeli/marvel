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
 
 
 
 

