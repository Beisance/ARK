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
		//thoughts sub categories
		if (in_category('39')) {
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/thoughts/thoughts-general">General</a>';
			echo '</div>';
		}
		elseif (in_category('40')) {
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/thoughts/thoughts-politics">Politics</a>';
			echo '</div>';
		}
		elseif (in_category('41')) {
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/thoughts/thoughts-professional">Professional</a>';
			echo '</div>';
		}
		//messages sub categories
		elseif (in_category('34')) {
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/messages/messages-couples/">Couples</a>';
			echo '</div>';
		}
		elseif (in_category('33')) {
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/messages/messages-faith/">Faith</a>';
			echo '</div>';
		}
		elseif (in_category('35')) {
			echo '<div id="post-categories-socket-messages-front-page" class="post-categories">';
			echo '<a href="';
			bloginfo('wpurl');
			echo '/category/messages/messages-professional/">Professional</a>';
			echo '</div>';
		}
		else{
			//nothing
		}	
	?>

	<?php endwhile; ?>

	<div id="post-navigation" class="navigation">
		<?php posts_nav_link(' - ','Previous Page','Next Page'); ?> 
	</div>

	<?php else : ?>

	<?php endif; ?>

</div><!-- end #each-post-->