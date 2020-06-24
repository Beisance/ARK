<!-- class definition legend in commments below this-->
<!-- tnsfb = 'topnav search form"-->
<!-- sb = 'search-box"-->
<!-- si = 'search input"-->
<form method="get" id="sfm" class="tnsf tnsf-m" action="<?php bloginfo('home'); ?>/">	
	<div id="search-container">
	<input type="image" src="<?php bloginfo('template_directory'); ?>/img/header/search-button-topnav.png" id="search-submit-mobile" value="Search" />	
	<input type="text" placeholder="Search ARK" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="search-box-mobile" class="tnsfsb tnsfsb-m tnsfsb-blue-border" />
	</div>
</form>



