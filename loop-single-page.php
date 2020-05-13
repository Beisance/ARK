<?php
/*
The loop that displays singles.
 */
?>

<div id="each-post-news-stack" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	<div id="post-categories" class="pc-single">
		<span class="pc-single-span">
			<?php
				if (in_category( array('blog'))) {
					echo('ARK');
				}	
				else if ( is_home() ) {
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
					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					}
				}
			?>
		</span>	
	</div>
	
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
	
	<div id="each-post-thumbnail" class="epthumb-single">
			<?php the_post_thumbnail(); ?>
	</div>
	
	<div id="each-post-author-date-time" class="epadt epadt-m epadt-d epadt-single">
		<div id="each-post-author" class="epa-single">
			<?php the_author_link(); ?>
		</div>
		<div id="each-post-date-time" class="epdt-single">
			<span class="epdt-twitter"><a href="https://twittert.com/bsx_ark" target="_blank">@bsx_ark</a></span><span class="epdt-slash">/</span><?php the_time('F jS, Y') ?> <?php the_time() ?>
		</div>
	</div><!-- end #each-post-author-date-time-->
	
	<div id="each-post-summary-news-stack">
		<div id="each-post-excerpt-single">
			<?php the_content(); ?>
		</div>
	</div>
	
	<?php include("inc/custom-content-selector-footer.php"); ?>

	<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>

</div><!-- end #each-post-->

