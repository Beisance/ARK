<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 * Subnav selector code
 */
?>

<?php
/* switching based on pages, for page showcases" */
/* ARK */
	if (is_page(array('the-group', 'location', 'calendar', 'membership', 'giving', 'contacts', 'messages', 'testimonies', 'privacy-policy', 'cookies-policy', 'events'))) {
		include("page-showcase-generic-ark.php");
	}
	else  if (is_category(array('messages', 'testimonies'))) {
		include("page-showcase-generic-ark.php");
	}
/* PSC Generic */	
	else {
		include("page-showcase-generic-ark.php");
	}
?>