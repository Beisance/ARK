<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK.
 */
?>

<div id="bread-nav"><!-- start #bread-nav-->
	<div id="bread-nav-content" class="bnc bnc-m bnc-d"><!-- start #bread-nav-content-->
		<div id="bread-nav-home"><!-- start #bread-nav-home-->
			<a href ='<?php bloginfo('wpurl'); ?>/'><img alt="bread-nav home" longdesc="bread-nav home" src="<?php echo get_template_directory_uri(); ?>/img/footer/img-ark-logo-icon-bread-nav-ark.png" id="img7" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'img7',/*url*/'<?php echo get_template_directory_uri(); ?>/img/footer/img-ark-logo-icon-bread-nav-mouseover-ark.png')"/></a>
		</div><!-- end #bread-nav--home-->
		<div id="bread-nav-separator"><!-- start #bread-nav-separator-->
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer/img-bread-nav-separator-ark.png">
		</div>
		<div id="bread-nav-trail" class="menu-item"><!-- start #="bread-nav-trail-->
			<?php
				if(function_exists('bcn_display'))
				{
					bcn_display();
				}
			?>
		</div><!-- end #="bread-nav-trail-->
	</div><!-- end #bread-nav-content-->
</div><!-- end #bread-nav-->
