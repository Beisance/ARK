<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="header-container-background" class="hcb">
	<div id="header-container-background-content" class="hcb-content">
	</div>
</div>

<div id="header-container"><!-- start #header-container-->
	<div id="header-container-content" class="hcc hcc-m hcc-d">
		<div id="topnav-menu-button" class="tnmb tnmb-m tnmb-d">
			<img id="topnav-menu-button-img" onclick="mobileMenuOpen()" class="tnmb-m" src="<?php echo get_template_directory_uri(); ?>/img/header/topnav-menu-button.png">
		</div>
		<div id="logo" class="tnl tnl-m tnl-d"><!-- start #logo-->
			<a href ="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.png"/>
			</a>
		</div><!-- end #logo-->
		<div id="search-desktop" class="tns tns-m tns-d"><!-- start #search-->
			<div id="search-menu-close">
				<a href ="#" onclick="return false;">
					<img id="search-menu-close-img" onclick="searchMenuclose()" class="smcl" src="<?php echo get_template_directory_uri(); ?>/img/header/search-menu-close.png">
				</a>
			</div>
			<div id="search-form-desktop">
				<?php include(TEMPLATEPATH . '/searchform-desktop.php'); ?>
			</div>
		</div><!-- end #search-->
		<div id="topnav" class="tnm tnm-m tnm-d"><!-- start #topnav-->
			<?php wp_nav_menu( array(
				'menu' => 'topnav',
				'class' => 'menu',
				'container' => 'topnav'
				)
			);
			?>
		</div><!-- end #topnav-->
	</div>
	
	<div id="topnav-mobile-menu" class="tmm tmm-m tmm-d"><!-- start #topnav-mobile-menu-->
		<div id="topnav-mobile-container" class="tnmc tnmc-m tnmc-d">
			<div id="topnav-mobile-container-content" class="tnmcc tnmcc-m tnmcc-d">	
				<div id="mobile-menu-button-close" class="mmbc">
					<img id="mobile-menu-button-close-img" onclick="mobileMenuClose()" class="mmbci" src="<?php echo get_template_directory_uri(); ?>/img/header/mobile-menu-close.png">
				</div>
				<div id="topnav-mobile" class="tnmm tnmm-m tnmm-d">
					<span class="jea">
						<?php wp_nav_menu( array(
							'menu' => 'topnav-extra',
							'class' => 'menu',
							'container' => 'topnav-mobile-container'
							)
						);
						?>
					</span>
					<span class="smi">
						<?php wp_nav_menu( array(
							'menu' => 'topnav',
							'class' => 'menu',
							'container' => 'topnav-mobile-container'
							)
						);
						?>
					</span>
				</div>
				<div id="search-mobile" class="tnsm tnsm-m tnsm-d"><!-- start #search-->
					<div id="search-form-mobile">
						<?php include(TEMPLATEPATH . '/searchform-mobile.php'); ?>
					</div>
				</div><!-- end #search-->
			</div>	
		</div>
	</div><!-- end #topnav-mobile-menu-->	
</div><!-- end #header-container-->

