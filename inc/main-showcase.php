<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="main-showcase" class="ms"><!-- start #main-showcase-->
	<div id="main-showcase-content"> 
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>the-group">
			<picture id="picture-showcase">
			  <source media="(max-width: 799px)" srcset="<?php echo get_template_directory_uri(); ?>/img/showcase/main/main-showcase-2-960w.jpg">
			  <source media="(min-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/img/showcase/main/main-showcase-2-1920w.jpg">
			  <img src="<?php echo get_template_directory_uri(); ?>/img/showcase/main/main-showcase-2-1920w.jpg" alt="Season's Greetings. Learn more about ARK">
			</picture>		
		</a>	
	</div><!-- end #main-showcase-content-->
</div><!-- end #main-showcase-->

