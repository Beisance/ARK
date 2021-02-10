<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="downnav"><!-- start #downnav-->
	<div id="downnav-content"><!-- start #downnav-content-->
		<div id="downnav-call-to-action" class="dca dca-m dca-d">
			<?php
				echo ('Fostering deep connections. <a href="https://forms.gle/bQANmRe2Nx1oXgws7">Click here to fill out a form to join our Signal group</a>.'); 
			?>
		</div>
		<div id="downnav-menu" class="dnm dnm-m dnm-d">
			<?php
				wp_nav_menu( array(
					'menu' => 'downnav',
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
