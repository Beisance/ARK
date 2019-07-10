<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content">
		<div id="socket-main-content-island" class="smci smci-d smci-m island">

			<div id="page-title-nav" class="ptn ptn-m ptn-d ptn-front-page">
				<div id="page-title-nav-content" class="ptnc ptnc-m ptnc-d ptnc-front-page">
					<div id="page-title" class="ptl ptl-m ptl-d ptl-front-page">
						<div id="page-title-content" class="ptlc ptlc-m ptlc-d ptlc-front-page">
							Thoughts
						</div>	
					</div>
					<div id="subnav-menu-button" class="snvmb snvmb-m snvmb-d">
						<div id="subnav-menu-button-content" class="snvmbc snvmbc-m snvmbc-d">
							<img id="subnav-menu-button-thoughts-img" onclick="mobileMenuSubnavThoughts()" class="snmb-m" src="<?php bloginfo('stylesheet_directory'); ?>/img/page-title-nav/img-subnav-menu-button-thoughts-ark.png">
						</div>
					</div>	
					<div id="subnav" class="snv snv-m snv-d">
						<div id="subnav-content" class="snvc snvc-m snvc-d snvc-front-page snv">
							<?php
								wp_nav_menu( array(
									'menu' => 'subnav-thoughts',
									'class' => 'menu',
									'container' => 'subnav-content',
									'fallback_cb' => 'false'
									)
								);
							?>
						</div>
					</div>
					<div id="subnav-mobile-menu" class="smm smm-t-m">
						<div id="subnav-mobile-menu-container" class="smmc smmc-m smmc-d">
							<?php
								wp_nav_menu( array(
									'menu' => 'subnav-thoughts',
									'class' => 'menu',
									'container' => 'subnav-mobile-menu-container'
									)
								);
							?>	
						</div>
					</div>	
				</div>
			</div>
		
			<?php 
				query_posts( array( 'cat' => 37, 'posts_per_page' => 2, 'paged' => get_query_var('paged')));
				get_template_part( 'loop-socket-thoughts', 'index' );
			?>
		</div><!--end #socket-main-content-island-->	
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->

<div id="spacer-2">
</div>
