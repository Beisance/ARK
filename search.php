<?php
/*
Template Name: ARK SearchPage
*/
?>

<?php get_header(); ?>

<?php include("inc/page-showcase-selector-ark.php"); ?>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content">
		<div id="socket-main-content-island" class="smci smci-d smci-m">

			<div id="page-title-nav" class="ptn ptn-m ptn-d ptn-front-page">
				<div id="page-title-nav-content" class="ptnc ptnc-m ptnc-d ptnc-front-page">
					<div id="page-title" class="ptl ptl-m ptl-d ptl-front-page">
						<div id="page-title-content" class="ptlc ptlc-m ptlc-d ptlc-front-page">
							Search Results
						</div>	
					</div>			
				</div>
			</div>

			<div id="wrapper"><!-- start #wrapper -->

				<div id="wrapper-content" class="wrp wrp-m wrp-d"><!-- start #wrapper-content -->

					<?php include("inc/loop-selector-ark.php"); ?>		
					
				</div><!-- end #wrapper-content -->

			</div><!-- end #wrapper-->

			<div id="spacer-1">
			</div>	

			<?php include("inc/bread-nav-ark.php"); ?>

		</div><!--end #socket-main-content-island-->	
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->

<?php include("inc/downnav-ark.php"); ?>

<?php include("inc/footer-ark.php"); ?>

<?php include("inc/google-analytics-ark.php"); ?>

<div id="overlay" class="ovl ovl-m ovl-d">
</div>

</body>

</html>
