<?php
/*
The loop that displays singles.
 */
?>

<div id="each-post-news-stack" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	<div id="each-post-summary-news-stack">
		<div id="each-post-excerpt-single">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
		if (is_category (array('tba'))) {
			//nothing
		}
		else{
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
					// tech
					if (in_category('40')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/olive-notes/news">News</a>';
					}
					elseif (in_category('41')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/olive-notes/advisory">Advisory</a>';
					}
					elseif (in_category('42')) {
						echo '<a href="';
						bloginfo('wpurl');
						echo '/category/olive-notes/living-healthy">Living Healthy</a>';
					}
					else{
						//nothing
					}
			echo '</div>';
		}	
	?>

	<?php endwhile; ?>

	<div id="post-navigation" class="navigation">
		<?php posts_nav_link(' - ','Previous Page','Next Page'); ?> 
	</div>

	<?php else : ?>

	<div id="no-post-message" class="post"><!-- #start no-post-message-->
		<div id="no-post-message-content">
			<?php _e('There are no posts at this time. Please visit again soon.'); ?>
		</div>	
	</div><!-- end #no-post-message-->

	<?php endif; ?>

</div><!-- end #each-post-->