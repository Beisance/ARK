<?php
/*
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<div id="page-showcase"><!-- start #page-showcase-->
	<div id="page-showcase-content" class="psc psc-m psc-d"><!-- start #page-showcase-content-->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>the-group">
			<picture id="picture-showcase">
			  <source media="(max-width: 1099px)" srcset="<?php echo get_template_directory_uri(); ?>/img/showcase/page/page-showcase-1-960w.png">
			  <source media="(min-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/img/showcase/page/page-showcase-1-1920w.png">
			  <img src="<?php echo get_template_directory_uri(); ?>/img/showcase/main/page-showcase-1-1920w.png" alt="Learn more about ARK">
			</picture>		
		</a>	
	</div><!-- end #page-showcase-content-->
</div><!-- end #page-showcase-->
