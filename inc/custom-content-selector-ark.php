<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<?php
	if (is_page(array('messages'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h2>';
		_e('Insightful and inspired messages to equip and build you in your walk with Jesus.');
		echo '</h2>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}	
	else if (is_page(array('testimonies'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h2>';
		_e('Stories, thoughts and testimonies about what Jesus is doing in our world and how we show that through our connect group.');
		echo '</h2>';
		echo '</p>';
		_e('If you would like to share a testimony with us, please send it to <a href="mailto:ark@beisance.com?Subject=Testimony..." target="_top">ark@beisance.com</a>.

		It will reviewed, anonymized [should you choose to], and then published in our testimony section. 
		
		Your testimonies must focus on Jesus and make Biblical sense. It must be well written and be between 100 to 200 words.
		
		Please title the email subject like this: Testimony:…
		
		By sending us your testimony you authorize us to publish it and it is subject to our legal and privacy policies.');	
		echo '</p>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}
	else if (is_404()) {
		echo '<div id="custom-content" class="four-oh-four"><!--start #custom-content-->
		<div id="custom-content-content">';
		_e('Uh-oh, we don\'t seem to have the page you\'re looking for. Please try searching or using the sitemap below.');
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
		include("sitemap-ark.php");
	}
	else {
	//nothing; 
	}	
?>	
	