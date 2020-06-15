<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="socket-main" class="sm"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-frontpage"><!--start #socket-main-content-->	
		<div id="socket-main-content-slice-1" class="smcs1"><!--start #socket-main-content-slice-1-->	
			<div id="socket-main-content-slice-1-stack-1" class="smcs1-s1"><!--start #socket-main-content-slice-1-stack-1-->
				<div id="socket-header" class="sh-extra-ark">
							Extra ARK
						</div>
						<?php
							query_posts( array( 
								'category__in' => array(50), 
								'posts_per_page' => 1, 
							));
							get_template_part( 'loop-socket-frontpage-extra-ark-feed', 'index' );
							wp_reset_query();
						?>
			</div><!--end #socket-main-content-slice-1-stack-1-->
			<div id="socket-main-content-slice-1-stack-1" class="smcs1-s2"><!--start #socket-main-content-slice-1-stack-2-->
				<div id="stack-wrapper" class="sw-highlights"><!--start #stack-wrapper-->	
						<div id="socket-header" class="sh-highlights">
							Highlights
						</div>
						<?php
							query_posts( array( 
								'category__in' => array(51), 
								'posts_per_page' => 4, 
							));
							get_template_part( 'loop-socket-frontpage-highlights-feed', 'index' );
							wp_reset_query();
						?>
					</div><!--end #stack-wrapper-->	
			</div><!--end #socket-main-content-slice-1-stack-2-->
		</div><!--end #socket-main-content-slice-1-->
		<div id="socket-main-content-slice-2" class="smcs2"><!--start #socket-main-content-slice-2-->	
			<div id="socket-header" class="sh-latest">
					The Latest
				</div>
				<div id="spacer-1">
				</div>
				<?php
					query_posts( array( 
						'category__in' => array(2, 37, 41), 
						'posts_per_page' => 10, 
						'paged' => get_query_var('page')
					));
					get_template_part( 'loop-socket-frontpage-latest-feed', 'index' );
					wp_reset_query();
				?>
		</div><!--end #socket-main-content-slice-2-->
	</div><!--end #socket-main-content-->		
</div><!--end #socket-main-->		

