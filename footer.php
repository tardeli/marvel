<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mavel
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

	<!-- Footer Elements -->
	<div class="container">

	  <!-- Grid row-->
	  <div class="row">

		<!-- Grid column -->
		<div class="col-md-12 py-5">
		  <div class="mb-5 flex-center icon-centro">

			<!-- Facebook -->
			<a class="fb-ic">
			  <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
			</a>
			<!-- Twitter -->
			<a class="tw-ic">
			  <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
			</a>
			<!-- Google +-->
			<a class="gplus-ic">
			  <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
			</a>
			<!--Linkedin -->
			<a class="li-ic">
			  <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
			</a>
			<!--Instagram-->
			<a class="ins-ic">
			  <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
			</a>
		
		  </div>
		</div>
		<!-- Grid column -->

	  </div>
	  <!-- Grid row-->

	</div>
	<!-- Footer Elements -->

	<!-- Copyright -->
  <div class="footer-copyright text-center py-3 rodape">© <?=date('Y');?> 
	Copyright:- Acadêmico Pós Graduação - Tardeli da Rocha
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<?php wp_footer(); ?>

</body>
</html>
