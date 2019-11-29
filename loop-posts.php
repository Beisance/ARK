<?php
/*
The loop that displays posts.
 */
?>

<div id="each-post-news-stack" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	<div id="each-post-title" class="ept ept-m ept-d"><!-- start #each-post-title-->
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
		<div id="each-post-thumbnail" class="epthumb-standard epthumb-recent">
			<?php the_post_thumbnail(); ?>
		</div>
		<div id="each-post-excerpt">
			<?php echo get_character_limited_excerpt(); ?>
		</div>
	</div>
	<div id="post-categories">
		<div id="post-categories-socket-front-page-feed" class="post-categories">
			<?php
				//thoughts sub categories
				if (in_category('39')) {
					echo '<a href="';
					bloginfo('wpurl');
					echo '/category/thoughts/thoughts-general">General</a>';
				}
				elseif (in_category('40')) {
					echo '<a href="';
					bloginfo('wpurl');
					echo '/category/thoughts/thoughts-politics">Politics</a>';
				}
				elseif (in_category('41')) {
					echo '<a href="';
					bloginfo('wpurl');
					echo '/category/thoughts/thoughts-professional">Professional</a>';
				}
				//messages sub categories
				elseif (in_category('34')) {
					echo '<a href="';
					bloginfo('wpurl');
					echo '/category/messages/messages-couples/">Couples</a>';
				}
				elseif (in_category('33')) {
					echo '<a href="';
					bloginfo('wpurl');
					echo '/category/messages/messages-faith/">Faith</a>';
				}
				elseif (in_category('35')) {
					echo '<a href="';
					bloginfo('wpurl');
					echo '/category/messages/messages-professional/">Professional</a>';
				}
				else{
					//nothing
				}	
			?>
		</div>
	</div>	
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

	<div id="post-navigation" class="navigation">
		<?php wp_pagenavi() ?>
	</div>
	
	<?php else : ?>

		<?php 
			if (is_search()) {
				_e('There are no results matching your search term[s]. Please try again using a different term or terms, or navigate using the sitemap below.');
				include("inc/sitemap-ark.php");
			}
			else if (is_404()) {
				_e('Oh-dear, we don\'t seem to have the page you\'re looking for. Please try searching or using the sitemap below.'); 
				include("inc/sitemap-ark.php");
			}
			else {
				echo('<div id="each-post-title" class="ept ept-m ept-d ept-front-page"><!-- start #each-post-title-->
							<span class="each-post-title-span">
								No Posts
							</span>
							</div><!-- end #each-post-title-->');
				echo('<div id="each-post-excerpt">');
					_e('There are no posts at this time. Please visit again soon.'); 
				echo('</div>');	
			}
		?>

	<?php endif; ?>

</div><!-- end #each-post-->