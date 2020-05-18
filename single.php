<?php
/*
Template Name: ARK SinglePage
*/
?>

<?php get_header(); ?>

<div id="overlay" class="ovl ovl-m ovl-d">
</div>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-single"><!--start #socket-main-content-->		
		<div id="socket-main-content-stack-1" class="smcs-1-single"><!--start #"socket-main-content-stack-1-->		
			<?php include("inc/topnav.php"); ?>
		</div><!--end #"socket-main-content-stack-1-->
		<div id="socket-main-content-stack-2" class="smcs-2-single"><!--start #"socket-main-content-stack-2-->
			<?php include("inc/loop-selector.php"); ?>	
		</div><!--end #socket-main-content-stack-2-->
	</div><!--end #socket-main-content-->				
</div><!--end #socket-main-->

<?php include("inc/downnav.php"); ?>

<?php include("inc/footer.php"); ?>

<?php include("inc/google-analytics.php"); ?>

<div id="overlay" class="ovl ovl-m ovl-d">
</div>

</body>

</html>
