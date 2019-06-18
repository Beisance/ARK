<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		function mobileMenuTopnav() {
			//Switching menu buttons to open & close states
			if (document.getElementById("topnav-menu-button-img").src == "');bloginfo('stylesheet_directory'); echo('/img/header/img-topnav-menu-button-ark.png") 
			{
				document.getElementById("topnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/img-topnav-menu-button-cancel-ark.png";
			}
			else 
			{
				document.getElementById("topnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/img-topnav-menu-button-ark.png";
			}
			//Toggling the mobile menu
			$(".tmm-m").slideToggle("slow");
		}
	</script>');
?>