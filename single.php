<?php
/*
Template Name: ARK SinglePage
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
							<?php
								if (in_category( array('blog'))) {
									echo('ARK');
								}	
								else if ( is_home() ) {
									echo('Blog');
								}	
								else if (in_category( array('messages'))) {
									echo('Messages');
								}
								else if (in_category( array('messages-couples'))) {
									echo('<a href="'); get_bloginfo(); echo('">Messages: Couples</a>');
								}
								else if (in_category( array('messages-faith'))) {
									echo('Messages: Couples');
								}
								else if (in_category( array('messages-professional'))) {
									echo('Messages Professional');
								}
								else if (in_category( array('testimonies'))) {
									echo('Testimonies');
								}
								else if (in_category( array('events'))) {
									echo('Events');
								}
								else if (in_category( array('resources'))) {
									echo('Resources');
								}	
								else if (in_category( array('churches'))) {
									echo('Resources: Churches');
								}
								else if (in_category( array('study'))) {
									echo('Resources: Study');
								}
								else if (in_category( array('media'))) {
									echo('Resources: Media');
								}
								else if (in_category( array('news'))) {
									echo('News');
								}
								else if (in_category( array('thoughts'))) {
									echo('Thoughts');
								}
								else if (in_category( array('thoughts-general'))) {
									echo('Thoughts: General');
								}
								else if (in_category( array('thoughts-politics'))) {
									echo('Thoughts: Politics');
								}
								else if (in_category( array('thoughts-professional'))) {
									echo('Thoughts: Professional');
								}
								else if (in_category( array('updates'))) {
									echo('Updates');
								}
								else {
									$categories = get_the_category();
									if ( ! empty( $categories ) ) {
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
								}
							?>					
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
								if (in_category( array('resources'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-resources',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								else if (in_category( array('messages', 'faith', 'professional', 'couples'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-messages',
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
								if (in_category( array('resources'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-resources',
										'class' => 'menu',
										'container' => 'subnav-mobile-menu-container'
											)
										);
								}
								if (in_category( array('messages', 'faith', 'professional', 'couples'))) {
									wp_nav_menu( array(
										'menu' => 'subnav-messages',
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
				</div><!--end #page-title-nav-content-->
			</div><!--end #page-title-nav-->

			<div id="wrapper"><!-- start #wrapper -->

				<div id="wrapper-content" class="wrp wrp-m wrp-d"><!-- start #wrapper-content -->
					
					<?php include("inc/loop-selector.php"); ?>	
							
				</div><!-- end #wrapper-content -->

			</div><!-- end #wrapper-->
			
			<?php include("loop-recent-posts.php"); ?>

			<div id="spacer-3">
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
