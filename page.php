<?php
/*
Template Name: ARK DefaultPage
*/
?>

<?php get_header(); ?>

<div id="socket-main" class="sm-page"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-frontpage"><!--start #socket-main-content-->		
		<div id="socket-main-content-page" class="smcp"><!--start #socket-main-content-page-->	
			<div id="socket-header" class="sh-page">
				<?php wp_title(""); ?>
			</div>
			<div id="spacer-1">
			</div>
			<?php include("inc/custom-content-selector.php"); ?>
			<?php include("inc/loop-selector.php"); ?>	
		</div><!--end #socket-main-content-page-->
	</div><!--end #socket-main-content-->				
</div><!--end #socket-main-->

<?php include("inc/downnav.php"); ?>

<?php include("inc/footer.php"); ?>

<?php include("inc/google-analytics.php"); ?>

</body>

</html>
