<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		function mobileMenuSubnav() {
				//Switching menu buttons to open & close states
				if (document.getElementById("subnav-menu-button-img").src == "');bloginfo('stylesheet_directory'); echo('/img/page-title-nav/img-subnav-menu-button-ark.png") 
			{
				document.getElementById("subnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/page-title-nav/img-subnav-menu-button-collapse-ark.png";
				$(".ptnc-m").css("border-bottom", "1px solid #CCCCCC");
				$(".ovl-m").css("display", "block");
				//Transitioning the overlay background-color with transition.min.js
				transition.begin(overlay, "background-color #F2F2F2 rgba(0,0,0,0.5) 500ms ease-in-out");
			}
				else 
			{
				document.getElementById("subnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/page-title-nav/img-subnav-menu-button-ark.png";
				$(".ptnc-m").css("border-bottom", "1px solid #CCCCCC");
				transition.begin(overlay, "background-color rgba(0,0,0,0.5) #F2F2F2 2000ms ease-out");
				$(".ovl-m").css("display", "none");
			}
				//Toggling the mobile menu
				$(".smm-m").slideToggle("slow");		
		}
	</script>');
?>