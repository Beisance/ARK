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
				//change header-container-background color, then overlay display visibility
				$(".hcb").css("background-color", "rgba(187,187,189,1)");
				$(".ovl-m").css("display", "block");
				//Transitioning the overlay background-color with transition.min.js
				transition.begin(overlay, "background-color #202125 rgba(32,33,37,0.3) 1ms ease-in-out");
				//Toggling the mobile menu
				$(".tmm-m").animate({right: "0"}, 800);
			}
		}
	</script>');
?>