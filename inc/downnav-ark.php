<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="downnav"><!-- start #downnav-->
	<div id="downnav-content"><!-- start #downnav-content-->
		<div id="downnav-call-to-action" class="dca dca-m dca-d">
			<?php
				echo ('Fostering deep connections. <a href="https://chat.whatsapp.com/CJRzFo7rhNH8w74udKNp2p">Click here to join our  WhatsApp group</a>.'); 
			?>
		</div>
		<div id="downnav-menu" class="dnm dnm-m dnm-d">
			<?php
				wp_nav_menu( array(
					'menu' => 'downnav-ark',
					'class' => 'menu',
					'container' => 'downnav-menu'
					)
				);
			?>
		</div>
		<div id="downnav-copyright" class="dncr dncr-m dncr-d">
			<?php
				echo '<a href="https://ark.beisance.com">ARK</a> by <a href="https://www.beisance.com">Beisance</a>.';
			?>
			Copyright &#169; <?php echo date("Y") ?>. All rights reserved.
		</div>
	</div><!-- end #downnav-content-->
</div><!-- end #downnav-->
