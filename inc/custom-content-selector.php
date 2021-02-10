<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<?php
	//extra ark category
	if (in_category(array('extra-ark'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h3>';
		_e('Extra ARK content will be subscription only in the coming weeks.');
		echo '</h3>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}
	//messages
	elseif (is_page(array('messages'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h3>';
		_e('Insightful and inspired messages to equip and build you in your walk with Jesus.');
		echo '</h3>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}
	//messages sub categories 1
		elseif (in_category(array('messages', 'messages-couples', 'messages-faith', 'messages-professional'))) {
			echo '<div id="custom-content"><!--start #custom-content-->
			<div id="custom-content-content">';
			echo '<h3>';
			_e('Insightful and inspired messages to equip and build you in your walk with Jesus.');
			echo '</h3>';
			echo '</div><!--end #custom-content-content-->
			</div><!--end #custom-content-->';
		}
		
	//thoughts
	elseif (is_page(array('thoughts'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h3>';
		_e('Our quick thoughts on general, political and professional topics.');
		echo '</h3>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}
		//thoughts sub categories
			elseif (in_category(array('thoughts', 'thoughts-general', 'thoughts-politics', 'thoughts-professional'))) {
				echo '<div id="custom-content"><!--start #custom-content-->
				<div id="custom-content-content">';
				echo '<h3>';
				_e('Our quick thoughts on general, political and professional topics.');
				echo '</h3>';
				echo '</div><!--end #custom-content-content-->
				</div><!--end #custom-content-->';
			}
	//updates
	elseif (is_page(array('updates'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h3>';
		_e('Information on what\'s new at ARK');
		echo '</h3>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}
	//updates category
	elseif (in_category(array('updates'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h3>';
		_e('Information on what\'s new at ARK');
		echo '</h3>';
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
	}
	//testimonies
	else if (is_page(array('testimonies'))) {
		echo '<div id="custom-content"><!--start #custom-content-->
		<div id="custom-content-content">';
		echo '<h3>';
		_e('Stories, thoughts and testimonies about what Jesus is doing in our world and how we show that through our connect group.');
		echo '</h3>';
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
	//404
	else if (is_404()) {
		echo '<div id="custom-content" class="four-oh-four"><!--start #custom-content-->
		<div id="custom-content-content">';
		_e('Uh-oh, we don\'t seem to have the page you\'re looking for. Please try searching or using the sitemap below.');
		echo '</div><!--end #custom-content-content-->
		</div><!--end #custom-content-->';
		include("sitemap.php");
	}
	else {
	//nothing; 
	}	
?>	
	