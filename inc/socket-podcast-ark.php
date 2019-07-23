<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="spacer-2">
</div>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content">
		<div id="socket-main-content-island" class="smci smci-d smci-m islandx">

			<div id="page-title-nav" class="ptn ptn-m ptn-d ptn-front-page">
				<div id="page-title-nav-content" class="ptnc ptnc-m ptnc-d ptnc-front-page">
					<div id="page-title" class="ptl ptl-m ptl-d ptl-front-page">
						<div id="page-title-content" class="ptlc ptlc-m ptlc-d ptlc-front-page">
							Podcast
						</div>	
					</div>
				</div>
			</div>
		
			<?php 
				echo do_shortcode("[playlist ids='358,357']");
			?>
			<div id="podcast-subscription" class="ps ps-m ps-d"> 
				Subscribe via <a href="<?php echo esc_url( home_url( '/' ) ); ?>deep-connections-itunes">Apple Podcasts</a>, <a href="<?php echo esc_url( home_url( '/' ) ); ?>deep-connections-play">Google Play</a>, or <a href="<?php echo esc_url( home_url( '/' ) ); ?>deep-connections-itunes-feed">RSS</a>.
			</div>
			<div id="socket-call-to-action" class="scta scta-m scta-d">
				<div id="socket-call-to-action-content" class="sctac sctac-m sctac-d">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>podcast-audio">MORE PODCASTS</a>
				</div>
			</div>
		</div><!--end #socket-main-content-island-->	
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->


