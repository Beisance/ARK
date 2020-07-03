<!-- class definition legend in comments below this-->
<!-- tnsfb = 'topnav search form"-->
<!-- sb = 'search-box"-->
<!-- si = 'search input"-->
<!-- search submit is placed before search box, for desktop-->
<form method="get" id="search-form-desktop" class="tnsf tnsf-m" action="<?php bloginfo('home'); ?>/">
	<input type="image" id="search-submit-desktop" src="<?php bloginfo('template_directory'); ?>/img/header/search-icon.png" value="Search" />	
	<input type="text" placeholder="Search ARK" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="search-box-desktop" class="tnsfsb tnsfsb-m tnsfsb-blue-border" />	
</form>



