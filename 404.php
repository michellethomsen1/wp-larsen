<?php
/* The template for displaying 404 pages (Not Found) */
get_header(); ?>

<section class="container page-404"> 
	<div class="page-404-content">
		<h1>404</h1><span class="red-underline"></span>

		<h4>Øv! noget gik galt.. Vend tilbage til forrige side eller kontakt support</h4>
		
		<div class="buttons-404">
			<button  class="btn-type1 btn-typ3" onclick="goBack()">Tilbage</button>
			<button  class="btn-type1" onclick="window.location.href='<?php echo esc_url( home_url( '/kontakt' ) ); ?>'">Kontakt</button>
		</div><!-- 404-buttons -->

		<script>
			function goBack() {
				window.history.back();
			}
		</script>
	</div><!-- page-404-content-->
</section><!-- container-->

<?php get_footer(); ?>
