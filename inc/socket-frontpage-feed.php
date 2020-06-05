<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-frontpage"><!--start #socket-main-content-->	
		<div id="socket-main-content-stack-1" class="smcs-1-frontpage"><!--start #"socket-main-content-stack-1-->	
			<?php include("topnav.php"); ?>
		</div><!--end #"socket-main-content-stack-1-->
		<div id="socket-main-content-stack-2" class="smcs-2-frontpage"><!--start #"socket-main-content-stack-2-->	
			<div id="socket-main-content-stack-2-slice-1"><!--start #"socket-main-content-stack-2-slice-1-->	
				<div id="socket-main-content-stack-2-slice-1-stack-1"><!--start #"socket-main-content-stack-2-slice-1-stack-1-->	
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
				</div><!--end #"socket-main-content-stack-2-slice-1-stack-1-->
				<div id="socket-main-content-stack-2-slice-1-stack-2"><!--start #"socket-main-content-stack-2-slice-1-stack-2-->	
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
				</div><!--end #"socket-main-content-stack-2-slice-1-stack-2-->	
			</div><!--end #"socket-main-content-stack-2-slice-1-->	
			<div id="socket-main-content-stack-2-slice-2"><!--start #"socket-main-content-stack-2-slice-2-->	
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
			</div><!--end #"socket-main-content-stack-2-slice-2-->	
		</div><!--end #socket-main-content-stack-2-->
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->
