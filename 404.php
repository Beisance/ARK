<?php
/*
Template Name: ARK 404Page
*/
?>

<?php get_header(); ?>

<?php include("inc/page-showcase-selector.php"); ?>

<?php include("inc/company-showcase.php"); ?>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content">
		<div id="socket-main-content-island" class="smci smci-d smci-m">

			<div id="page-title-nav" class="ptn ptn-m ptn-d ptn-front-page">
				<div id="page-title-nav-content" class="ptnc ptnc-m ptnc-d ptnc-front-page">
					<div id="page-title" class="ptl ptl-m ptl-d ptl-front-page">
						<div id="page-title-content" class="ptlc ptlc-m ptlc-d ptlc-front-page">
							404
						</div>	
					</div>
					<div id="subnav-menu-button" class="snvmb snvmb-m snvmb-d">
						<div id="subnav-menu-button-content" class="snvmbc snvmbc-m snvmbc-d">
							<img id="subnav-menu-button-img" onclick="mobileMenuSubnav()" class="snmb-m" src="<?php bloginfo('stylesheet_directory'); ?>/img/page-title-nav/subnav-menu-button.png">
						</div>
					</div>	
					<div id="subnav" class="snv snv-m snv-d">
						<div id="subnav-content" class="snvc snvc-m snvc-d snvc-front-page snv">
							<?php
								wp_nav_menu( array(
									'menu' => 'subnav-activities',
									'class' => 'menu',
									'container' => 'subnav-mobile-menu-container'
										)
									);
							?>
						</div>
					</div>
					<div id="subnav-mobile-menu" class="smm smm-m smm-d">
						<div id="subnav-mobile-menu-container" class="smmc smmc-m smmc-d">
							<?php
								wp_nav_menu( array(
									'menu' => 'subnav-activities',
									'class' => 'menu',
									'container' => 'subnav-mobile-menu-container'
										)
									);
							?>	
						</div>
					</div>	
				</div>
			</div>

			<div id="wrapper"><!-- start #wrapper -->

				<div id="wrapper-content" class="wrp wrp-m wrp-d"><!-- start #wrapper-content -->

					<?php include("inc/loop-selector.php"); ?>		
					
				</div><!-- end #wrapper-content -->

			</div><!-- end #wrapper-->

			<div id="spacer-1">
			</div>	

			<?php include("inc/bread-nav.php"); ?>

		</div><!--end #socket-main-content-island-->	
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->

<?php include("inc/downnav.php"); ?>

<?php include("inc/footer.php"); ?>

<?php include("inc/google-analytics.php"); ?>

<div id="overlay" class="ovl ovl-m ovl-d">
</div>

</body>

</html>
