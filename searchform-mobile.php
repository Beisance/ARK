<!-- class definition legend in commments below this-->
<!-- tnsfb = 'topnav search form"-->
<!-- sb = 'search-box"-->
<!-- si = 'search input"-->
<form method="get" id="search-form" class="tnsf tnsf-m" action="<?php bloginfo('home'); ?>/">
	<div>
		<div id="search-container">
			<input type="text" placeholder="Search ark.beisance.com" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="search-box" class="tnsfsb tnsfsb-m tnsfsb-blue-border" />	
		</div>
		<input type="image" src="<?php bloginfo('template_directory'); ?>/img/header/img-search-button-mobile-ark.png" id="search-submit" value="Search" />	
	</div>
</form>


