<?php
/*
Template Name: ARK DefaultPage
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
							<?php the_title(); ?>
						</div>	
					</div>
					<div id="subnav-menu-button" class="snvmb snvmb-m snvmb-d">
						<div id="subnav-menu-button-content" class="snvmbc snvmbc-m snvmbc-d">
							<img id="subnav-menu-button-img" onclick="mobileMenuSubnav()" class="snmb-m" src="<?php bloginfo('stylesheet_directory'); ?>/img/page-title-nav/img-subnav-menu-button-ark.png">
						</div>
					</div>	
					<div id="subnav" class="snv snv-m snv-d">
						<div id="subnav-content" class="snvc snvc-m snvc-d snvc-front-page snv">
							<?php
								if (is_page( array('messages'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-messages',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('messages', 'messages-faith', 'messages-professional', 'messages-couples'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-messages',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (is_page( array('thoughts'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-thoughts',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('thoughts', 'thoughts-general', 'thoughts-politics', 'thoughts-professional'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-thoughts',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (is_page( array('updates'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-updates',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('updates', 'updates-services'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-updates',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else {
									wp_nav_menu( array(
										'menu' => 'subnav-activities',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
							?>
						</div>
					</div>
					<div id="subnav-mobile-menu" class="smm smm-m smm-d">
						<div id="subnav-mobile-menu-container" class="smmc smmc-m smmc-d">
							<?php
								if (is_page( array('messages'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-messages',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('messages', 'messages-faith', 'messages-professional', 'messages-couples'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-messages',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (is_page( array('thoughts'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-thoughts',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('thoughts', 'thoughts-general', 'thoughts-politics', 'thoughts-professional'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-thoughts',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (is_page( array('updates'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-updates',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('updates', 'updates-services'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-updates',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else {
									wp_nav_menu( array(
										'menu' => 'subnav-activities',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
							?>	
						</div>
					</div>	
				</div>
			</div>
	
			<div id="wrapper"><!-- start #wrapper -->
				
				<div id="wrapper-content" class="wrp wrp-m wrp-d"><!-- start #wrapper-content -->

					<?php include("inc/custom-content-selector-ark.php"); ?>
					
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
