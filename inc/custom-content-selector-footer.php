<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<?php
	//messages sub categories footer - harvesters ng
		if (is_single()&in_category(array('guest-ministry-message-harvesters-ikeja'))) {
			echo '<div id="custom-content"><!--start #custom-content-->
			<div id="custom-content-content">';
			_e('----');
			echo '<h2>';
			_e('About Harvesters International Christian Center');
			echo '</h2>';
			echo '<p>';
			_e('Harvesters is not just a space, it is an experience. It is a series of impactful and transformational encounters that bring change to the lives of people. It is felt, seen, tasted, heard, and perceived like fragrance. It encapsulates on the outside and penetrates beyond our human fibers into the depths of the heart. Under the intense focus of the Spirit and the Word, change happens. “As we behold in a glass with open face, we are being changed…”');
			echo '<p>';
			_e('For more information about Harevsters, please visit their website by clicking');echo'<a href="https://harvestersng.org/" target="_blank">&nbsp;here</a>.';
			echo '</div><!--end #custom-content-content-->
			</div><!--end #custom-content-->';
		}	
	else {
	//nothing; 
	}	
?>	
	
	
	