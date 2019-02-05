<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mavel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name') ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() ); ?>/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() ); ?>/style.css">
	
	<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="page" class="site">
	<div id="content" class="site-content">
