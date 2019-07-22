<?php
/*
The loop that displays posts.
 */
?>

<div id="each-post-news-stack" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	<div id="each-post-title" class="ept-m ept-d ept-front-page"><!-- start #each-post-title-->
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<span class="each-post-title-span">
				<?php the_title(); ?>
			</span>
			<span class="news-stack-active-sponsored">
				<?php if(is_sticky()) {
					echo '<span class="active-stack">ACTIVE</span>';
					}
					else{
						// nothing
					}
				?>
				<?php
				/* sponsored */
					if (in_category('44')) {
						echo '<span class="sponsored-stack">SPONSORED</span>';
					}
					else{
						// nothing
					}
				?>
			</span>
		</a>
	</div><!-- end #each-post-title-->
	<div id="each-post-author-date-time" class="epadt epadt-m epadt-d epadt-front-page">
		<div id="each-post-author">
			<?php the_author_link(); ?>
		</div>
		<div id="each-post-date-time">
			<?php the_time('F jS, Y') ?> <?php the_time() ?>
		</div>
	</div>
	<div id="each-post-summary-news-stack">
		<div id="each-post-excerpt">
			<?php echo get_character_limited_excerpt_thoughts(); ?>
		</div>
	</div>
	<?php
		//updates sub categories
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
		else{
			//nothing
		}	
	?>
	
	<?php
		if ($wp_query->current_post +1 == $wp_query->post_count) {
		// check if this is the last post, if yes, do not output each post divider div
		}
		else {
			echo ('<div id="spacer-1">
			</div>');
		}
	?>	

	<?php endwhile; ?>
	<?php else : ?>
	
	<?php 
		echo('<div id="each-post-title" class="ept ept-m ept-d ept-front-page"><!-- start #each-post-title-->
					<span class="each-post-title-span">
						No Posts
					</span>
					</div><!-- end #each-post-title-->');
		echo('<div id="each-post-excerpt">');
			_e('There are no posts at this time. Please visit again soon.'); 
		echo('</div>');	
	?>
	
	<?php endif; ?>
	<div id="socket-call-to-action" class="scta scta-m scta-d">
		<div id="socket-call-to-action-content" class="sctac sctac-m sctac-d scta-border-1">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>updates">MORE UPDATES</a>
		</div>
	</div>
</div><!-- end #each-post-news-stack-->
