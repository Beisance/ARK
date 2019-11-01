<?php
/*
The loop that displays singles.
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
		<div id="each-post-excerpt-single">
			<?php the_content(); ?>
		</div>
	</div>
	
	<?php include("inc/custom-content-selector-footer-ark.php"); ?>

	<?php endwhile; ?>

	<div id="post-navigation" class="navigation">
		<?php posts_nav_link(' - ','Previous Page','Next Page'); ?> 
	</div>

	<?php else : ?>

	<?php endif; ?>

</div><!-- end #each-post-->