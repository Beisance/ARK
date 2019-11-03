<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="socket-main" class="sm-gray"><!--start #socket-main-->	
	<div id="socket-main-content">
		<div id="socket-main-content-island" class="smci smci-d smci-m">
			<?php
				query_posts( array( 'category__in' => array(2, 37, 41), 'posts_per_page' => 10, 'paged' => get_query_var('paged')));
				get_template_part( 'loop-socket-front-page-feed', 'index' );
			?>
		</div><!--end #socket-main-content-island-->	
	</div><!--end #socket-main-content-->
</div><!--end #socket-main-->
