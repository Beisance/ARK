<?php
/*
Template Name: ARK DefaultPage
*/
?>

<?php get_header(); ?>

<div id="socket-main" class="sm"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-frontpage"><!--start #socket-main-content-->		
		<div id="socket-main-content-slice-2" class="smcs2"><!--start #socket-main-content-slice-2-->	
			<div id="socket-header" class="sh-latest">
				<?php wp_title(""); ?>
			</div>
			<?php include("inc/custom-content-selector.php"); ?>
			<?php include("inc/loop-selector.php"); ?>	
		</div><!--end #socket-main-content-slice-2-->
	</div><!--end #socket-main-content-->				
</div><!--end #socket-main-->

<?php include("inc/downnav.php"); ?>

<?php include("inc/footer.php"); ?>

<?php include("inc/google-analytics.php"); ?>

</body>

</html>
