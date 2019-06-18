<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content">
		
		<div id="overlay" class="ovl ovl-m ovl-d">
		</div>
		
		<div id="page-title-nav" class="ptn ptn-m ptn-d ptn-front-page">
			<div id="page-title-nav-content" class="ptnc ptnc-m ptnc-d ptnc-front-page">
				<div id="page-title" class="ptl ptl-m ptl-d ptl-front-page">
					<div id="page-title-content" class="ptlc ptlc-m ptlc-d ptlc-front-page">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Messages</a>
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
							wp_nav_menu( array(
								'menu' => 'subnav-messages',
								'class' => 'menu',
								'container' => 'subnav-content',
								'fallback_cb' => 'false'
								)
							);
						?>
					</div>
				</div>
				<div id="subnav-mobile-menu" class="smm smm-m smm-d">
					<div id="subnav-mobile-menu-container" class="smmc smmc-m smmc-d">
						<?php
							wp_nav_menu( array(
								'menu' => 'subnav-messages',
								'class' => 'menu',
								'container' => 'subnav-mobile-menu-container'
								)
							);
						?>	
					</div>
				</div>	
			</div>
		</div>
		
		<div id="pre-wrapper">
		</div>
		
		<?php include("loop-selector-ark.php"); ?>
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->