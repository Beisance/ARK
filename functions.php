<?php
	if (function_exists('register_sidebar'))
		register_sidebar();
		
	function new_excerpt_more($more) {
		   global $post;
		return '&nbsp;<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	function blockusers_init() {
		if ( is_admin() && ! current_user_can( 'administrator' ) ) {
			wp_redirect( home_url() );
			exit;
		}
	}
	if ( function_exists( 'add_theme_support' ) ) { 
	  add_theme_support( 'post-thumbnails' ); 
	}
	function intro_text($length) { /*We are shortening the_excerpt for use in the "all-news" page template */
		global $post;
		$text = get_the_excerpt($post->ID);
		if (strlen($text) > $length) {
		$text = substr($text,0,strpos($text,' ',$length)) . '<a href="' . get_permalink() . '"> Read More  »</a>'; } ;
		return apply_filters('the_excerpt',$text);
	}

	/* Limit the excerpt by character length */
	function get_character_limited_excerpt(){
		$permalink = get_permalink($post->ID);
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 300);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		$excerpt = $excerpt.'...';
		return $excerpt;
	}
	
	//custom thoughts excerpt
	function get_character_limited_excerpt_thoughts(){
		$permalink = get_permalink($post->ID);
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 200);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		$excerpt = $excerpt.'... <a href="'.$permalink.'">Read More  »</a>';
		return $excerpt;
	}
	
	/* Limit the excerpt by character length */
	function get_character_limited_excerpt_recent_posts(){
		$permalink = get_permalink($post->ID);
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 150);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		$excerpt = $excerpt.'... <a href="'.$permalink.'">Read More  »</a>';
		return $excerpt;
	}

	/* Limit the excerpt by character length */
	function get_character_limited_excerpt_social_sharing(){
		$permalink = get_permalink($post->ID);
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 50);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		$excerpt = $excerpt.'...';
		return $excerpt;
	}
	
	function getFeed($feed_url) {  
		  
		$content = file_get_contents($feed_url);  
		$x = new SimpleXmlElement($content);  
		  
		echo "<ul>";  
		  
		foreach($x->channel->item as $entry) {  
			echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";  
		}  
		echo "</ul>";  
	} 

	function remove_comments_rss( $for_comments ) {
		return;
	}
	add_filter('post_comments_feed_link','remove_comments_rss');

	add_theme_support( 'menus' );
	
?>