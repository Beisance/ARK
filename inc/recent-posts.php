<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="socket-main" class="sm"><!--start #socket-main-->	
	<div id="socket-main-content" class="smc-recent"><!--start #socket-main-content-->	
		<div id="socket-main-content-stack-2" class="smcs-2-frontpage"><!--start #"socket-main-content-stack-2-->	
			<div id="socket-main-content-slice-2" class="smcs2"><!--start #socket-main-content-slice-2-->	
				<div id="socket-header" class="sh-latest">
					Recent Posts
				</div>
				<div id="spacer-1">
				</div>
				<?php
					query_posts( array( 
						'category__in' => array(2, 37, 42), 
						'posts_per_page' => 5, 
					));
					get_template_part( 'loop-recent-posts', 'index' );
					wp_reset_query();
				?>
			</div><!--end #socket-main-content-slice-2-->
		</div><!--end #socket-main-content-stack-2-->
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->
