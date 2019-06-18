<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 * Subnav selector code
 */
?>

<?php
/* switching based on pages, for loop" */

/* start posts pages switching */	
if ( is_home() ) {
	query_posts( array( 'cat' => 24, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-posts', 'index' );
}
//front page olive notes feed
else if (is_front_page()) {
	query_posts( array( 'cat' => 2, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-socket-messages', 'index' );
}
/* ARK media pages */
else if (is_page( array('messages'))) {
	query_posts( array( 'cat' => 2, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-posts', 'index' );
}
else if (is_page( array('testimonies'))) {
	query_posts( array( 'cat' => 3, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-posts', 'index' );
}
else if (is_page( array('events'))) {
	query_posts( array( 'cat' => 15, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-posts', 'index' );
}
else if (is_page( array('news'))) {
	query_posts( array( 'cat' => 17, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-posts', 'index' );
}
else if (is_page( array('resources'))) {
	query_posts( array( 'cat' => 27, 'paged' => get_query_var('paged')));
	get_template_part( 'loop-posts', 'index' );
}
/* pages with custom content switching */
else if (is_page( array('sitemap'))) {
	include("sitemap-ark.php");
}
/* start category switching */
else if (is_category(array('messages', 'testimonies', 'events', 'news'))) {
	get_template_part( 'loop-posts', 'index' );
}	
/* start search switching */
else if (is_search()) {
	get_template_part( 'loop-posts', 'index' );
}
/* start 404 switching */
else if (is_404()) {
	include("custom-content-selector-ark.php");
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
