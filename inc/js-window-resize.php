<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		$(document).ready(function () {
			$(window).resize(function () {
				if ($(window).width() > 1099) {
					$(".searchMenuOpen").css("display", "inline-block");
					$(".tnm").css("display", "block");
				}
				else
				{
					document.getElementById("topnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/topnav-menu-button.png";
					$(".tnm").css("display", "none");
					$(".searchMenuOpen").css("display", "none");
					$(".tmm").css("right", "-100vh");
				}
				$(".hcb").css("background-color", "rgba(255,255,255,1)");
				$(".hc").css("background-color", "#ffffff");
				$(".tns").css("display", "none");
				$(".tnl").css("display", "block");
				$(".ovl-m").css("display", "none");
				document.getElementById("logo-mobile-image").src = "');bloginfo('stylesheet_directory'); echo('/img/header/logo-none.png";
				document.getElementById("mobile-menu-button-close-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/mobile-menu-close.png";
			});
		});
	</script>');	
?>