<?php
/*
The loop that displays posts.
 */
?>

<div id="each-post-news-stack" class="post" id="post-<?php the_ID(); ?>"><!-- start #each-post-news-stack-->
	
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	<div id="spacer-1">
	</div>
	
	<div id="each-post-news-stack-content" class="epnsc-latest"><!-- start #each-post-news-stack-content-->	
	
		<div id="each-post-news-stack-1" class="epns-1-latest"><!-- start #each-post-news-stack-1-->
		
			<div id="each-post-title" class="ept-m ept-d ept-latest"><!-- start #each-post-title-->
				<span class="epts-latest">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
						if (in_category('47')) {
							echo '<span class="sponsored-stack">SPONSORED</span>';
						}
						else{
							// nothing
						}
					?>
				</span>
			</div><!-- end #each-post-title-->
			<div id="each-post-author-date-time" class="epadt epadt-m epadt-d epadt-front-page">
				<div id="each-post-author" class="epa-frontpage">
					<?php the_author_link(); ?>
				</div>
				<div id="each-post-date-time">
					<?php the_time('F jS, Y') ?> <?php the_time() ?>
				</div>
			</div>
			
		</div><!-- end #each-post-news-stack-1-->	
		
		<div id="each-post-news-stack-2" class="epns-2-latest"><!-- start #each-post-news-stack-2-->
			<div id="stack-wrapper" class="sw-latest"><!--start #stack-wrapper-->
				<div id="each-post-summary-news-stack">
					
					<div id="each-post-excerpt">
						<?php echo get_character_limited_excerpt(); ?>
					</div>
					
				</div>
				<div id="post-categories">
					<div id="post-categories-socket-front-page-feed" class="post-categories">
						<?php
							//subscription
							if (in_category('50')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/extra-ark/">Subscription</a>';
							}
							else{
								//nothing
							}	
						?>
						<?php
							//first category
							if (in_category('2')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/messages/">Messages</a>';
							}
							elseif (in_category('37')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/thoughts/">Thoughts</a>';
							}
							elseif (in_category('42')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/Updates/">Updates</a>';
							}
							elseif (in_category('51')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/highlights/">Highlights</a>';
							}
							else{
								//nothing
							}	
						?>
						<?php
							//next sub category: any under the main categories listed above
							//messages sub categories
							if (in_category('33')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/messages/messages-faith">Faith</a>';
							}
							elseif (in_category('34')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/messages/messages-couples">Couples</a>';
							}
							elseif (in_category('35')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/messages/messages-professional">Professional</a>';
							}
							else{
								//nothing
							}
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
							else{
								//nothing
							}
							//updates sub categories
							if (in_category('44')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/updates/updates-services">Services</a>';
							}
							elseif (in_category('45')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/updates/updates-content">Content</a>';
							}
							else{
								//nothing
							}	
						?>
						<?php
							//sub category 2: checking if this is a guest ministry post
							if (in_category('46')) {
								echo '<a href="';
								bloginfo('wpurl');
								echo '/category/messages/guest-ministry-message-harvesters-ikeja/">Guest Ministry Message - Harvesters Ikeja</a>';
							}
							else{
								//nothing
							}	
						?>
					</div>
				</div>	
			</div>
		</div><!-- end #each-post-news-stack-2-->

		<div id="each-post-news-stack-3" class="epns-3-latest"><!-- start #each-post-news-stack-3-->	
			
			<div id="each-post-thumbnail" class="epthumb-standard epthumb-recent epthumb-frontpage">
				<?php
					if (has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					else { 
						echo '<img src="';echo get_template_directory_uri();echo'/img/pages-posts/posts/default-posts-image-template.png"/>';
					}
				?>	
			</div>
			
		</div><!-- end #each-post-news-stack-3-->	
	
	</div><!-- end #each-post-news-stack-content-->	

	<?php endwhile; ?>

	<div id="post-navigation" class="navigation">
		<?php wp_pagenavi() ?>
	</div>
    
	<?php else : ?>
	
	<?php 
		echo('<div id="socket-header" class="sh-latest">
				In the Pipeline
			</div><!-- end #socket-header-->
			<div id="spacer-1">
			</div>
			');
		
			_e('There are posts in the pipeline. Please visit again soon.'); 	
		echo('<div id="spacer-8"></div>');		
	?>
	
	<?php endif; ?>
	
</div><!-- end #each-post-news-stack-->
