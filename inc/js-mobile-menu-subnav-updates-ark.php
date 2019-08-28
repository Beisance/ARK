<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		function mobileMenuSubnavUpdates() {
				//Switching menu buttons to open & close states
				if (document.getElementById("subnav-menu-button-updates-img").src == "');bloginfo('stylesheet_directory'); echo('/img/page-title-nav/img-subnav-menu-button-updates-ark.png") 
			{
				document.getElementById("subnav-menu-button-updates-img").src = "');bloginfo('stylesheet_directory'); echo('/img/page-title-nav/img-subnav-menu-button-collapse-updates-ark.png";
				$(".ovl-m").css("display", "block");
				//Transitioning the overlay background-color with transition.min.js
				transition.begin(overlay, "background-color #FFFFFF rgba(32,33,37,0.8) 500ms ease-in-out");
			}
				else 
			{
				document.getElementById("subnav-menu-button-updates-img").src = "');bloginfo('stylesheet_directory'); echo('/img/page-title-nav/img-subnav-menu-button-updates-ark.png";
				transition.begin(overlay, "background-color rgba(32,33,37,0.5) #F2F2F2 2000ms ease-out");
				$(".ovl-m").css("display", "none");
			}
				//Toggling the mobile menu
				$(".smm-u-m").slideToggle("slow");		
		}
	</script>');
?>