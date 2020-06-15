<?php
/*
Template Name: ARK SinglePage
*/
?>

<?php get_header(); ?>

<div id="socket-main" class="sm-single"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-single"><!--start #socket-main-content-->		
		<div id="socket-main-content-slice-2" class="smcs2-single"><!--start #socket-main-content-slice-2-->	
			<?php include("inc/loop-selector.php"); ?>	
		</div><!--end #socket-main-content-slice-2-->
	</div><!--end #socket-main-content-->				
</div><!--end #socket-main-->

<?php include("inc/recent-posts.php"); ?>

<?php include("inc/downnav.php"); ?>

<?php include("inc/footer.php"); ?>

<?php include("inc/google-analytics.php"); ?>

<div id="overlay" class="ovl ovl-m ovl-d">
</div>

</body>

</html>
