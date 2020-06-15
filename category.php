<?php
/*
Template Name: ARK GenericCategoryPage
*/
?>

<?php get_header(); ?>

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
				<?php
					if (in_category( array('blog'))) {
						echo('ARK');
					}	
					elseif ( is_home() ) {
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
						echo('ARK');
					}
				?>	
			</div>
			<div id="spacer-1">
			</div>
			<?php include("inc/custom-content-selector.php"); ?>
			<?php include("inc/loop-selector.php"); ?>	
		</div><!--end #socket-main-content-slice-2-->
	</div><!--end #socket-main-content-->				
</div><!--end #socket-main-->

<?php include("inc/downnav.php"); ?>

<?php include("inc/footer.php"); ?>

<?php include("inc/google-analytics.php"); ?>

<div id="overlay" class="ovl ovl-m ovl-d">
</div>

</body>

</html>
