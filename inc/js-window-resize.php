<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		$(document).ready(function () {
			$(window).resize(function () {
				if ($(window).width() > 767) {
					$("#topnav-mobile-menu").fadeOut();
					document.getElementById("topnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/topnav-menu-button.png";
				}
				else
				{}
			});
		});
	</script>');	
?>