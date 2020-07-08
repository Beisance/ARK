<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		function mobileMenuOpen() {
			//Switching menu buttons to open state
			if (document.getElementById("topnav-menu-button-img").src == "');bloginfo  	   ('stylesheet_directory'); echo('/img/header/topnav-menu-button.png") {
				document.getElementById("topnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/topnav-menu-button-none.png";
					if ($(window).width() > 700) {
						//change header-container-background color, then overlay display visibility
						$(".ovl-m").css("display", "block");
						//Transitioning the overlay background-color with transition.min.js
						transition.begin(overlay, "background-color #202125 rgba(32,33,37,0.3) 1ms ease-in-out");
					}	
				//Toggling the mobile menu
				$(".tmm").animate({right: "0"}, 800);
				//Disable page scrolling: setting the class for the body
				$(".mb").css("overflow", "hidden");
					if ($(window).width() < 701) {
						$(".tnl").css("display", "none");
						document.getElementById("logo-mobile-image").src = "');bloginfo('stylesheet_directory'); echo('/img/header/logo-black.png";
						document.getElementById("mobile-menu-button-close-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/mobile-menu-close-white.png";
						document.getElementById("search-submit-mobile").src = "');bloginfo('stylesheet_directory'); echo('/img/header/search-icon-white.png";
					}	
			}
		}
	</script>');
?>