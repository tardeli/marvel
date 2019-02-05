<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mavel
 */

get_header();
?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="index.php">
		<?php the_custom_logo();?>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <?php
		if ( has_nav_menu( 'primary' ) ) {
			 wp_nav_menu( array( 
			 'theme_location' => 'primary',
			 'menu_class' => 'nav navbar ml-auto',
			 'container_class' => 'collapse navbar-collapse'
			 ) );
	  } ?>
	</nav>
	<main class="container">
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
		
			<article class="img-thumbnail margin">
				<h2><a href="<?php the_permalink() ;?>" title="<?php the_title() ;?>"><?php the_title() ;?></a></h2>
			</article>
		
			<?php
				if(is_home()){
					if(has_post_thumbnail()){
						the_post_thumbnail();
						the_excerpt();
					}
				}else{
					the_post_thumbnail();
					the_content();
				}
			
			?>
			<p>
				<small>
					<?php the_time('d/m/Y');?> postado por <?php the_author_posts_link();?>
				</small>
			</p>
			
		<?php 
		} //final while
		?>
	<div class="float-left">
		<?php next_posts_link("<i=class='fas fa-chevron-left'></i>Posts Antigos");?>
	</div>	
	<div class="float-right">
		<?php previous_posts_link("<i=class='fas fa-chevron-right'></i>Posts Novos");?>
	</div>
		
	<?php 
	} //final if
	?>
	</main>
	

<?php
//get_sidebar();
get_footer();
