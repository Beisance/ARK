<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<?php
/* switching based on pages, for loop" */

/* start posts pages switching */	
if ( is_home() ) {
	query_posts( array( 
		'category__in' => array(24), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
/* ARK media pages */
else if (is_page( array('messages'))) {
	query_posts( array( 
		'category__in' => array(2), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
else if (is_page( array('testimonies'))) {
	query_posts( array( 
		'category__in' => array(3), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
else if (is_page( array('events'))) {
	query_posts( array( 
		'category__in' => array(15), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
else if (is_page( array('news'))) {
	query_posts( array( 
		'category__in' => array(17), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
else if (is_page( array('resources'))) {
	query_posts( array( 
		'category__in' => array(27), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
else if (is_page( array('thoughts'))) {
	query_posts( array( 
		'category__in' => array(37), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
else if (is_page( array('updates'))) {
	query_posts( array( 
		'category__in' => array(42), 
		'posts_per_page' => 10, 
		'paged' => get_query_var('page')
	));
	get_template_part( 'loop-posts', 'index' );
	wp_reset_query();
}
/* pages with custom content switching */
else if (is_page( array('sitemap'))) {
	include("sitemap.php");
}
/* start category switching: if it is any category, since we're not specifying any */
else if (is_category()) {
	get_template_part( 'loop-posts', 'index' );
}	
/* start search switching */
else if (is_search()) {
	get_template_part( 'loop-posts', 'index' );
}
/* start 404 switching */
else if (is_404()) {
	include("custom-content-selector.php");
}
/* start single pages switching */	
else if (is_single()) {
	get_template_part( 'loop-single-page', 'index' );
}
/* other pages switching */		
else {
	get_template_part( 'loop-general-page', 'index' );
}
?>
