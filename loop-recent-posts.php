<?php
/*
The loop that displays recent posts, excluding the post current;y being displayed on the single page being viewed.
 */
?>

<div id="spacer-4">
</div>

<div id="page-title" class="ptl ptl-m ptl-d ptl-front-page">
	<div id="page-title-content" class="ptlc ptlc-m ptlc-d ptlc-front-page">
		Recent Posts
	</div>	
</div>

<?php
	$currentID = get_the_ID();
	$my_query = new WP_Query( array(
		'category__in' => array(2, 37, 41), 
		'showposts' => '5', 
		'post__not_in' => array($currentID)));
	while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	
<div id="each-post">
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
		<?php echo get_character_limited_excerpt_recent_posts(); ?>
	</div>
</div>
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
<?php
	if ($my_query->current_post +1 == $my_query->post_count) {
	// check if this is the last post, if yes, do not output each post divider div
	}
	else {
		echo ('<div id="spacer-3">
		</div>');
	}
?>	
</div>
</div>

<?php endwhile; ?>

<div id="post-navigation" class="navigation">
	<?php wp_pagenavi() ?>
</div>

<div id="spacer-5">
</div>