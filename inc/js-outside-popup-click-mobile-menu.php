<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		//Outside popup click - close the mobile menu
		$(document).mouseup(function (e) {
			var container2 = $(".tmm");
			if(!container2.is(e.target) && container2.has(e.target).length === 0){
				if ($(".tmm").css("right") === "0px"){
					document.getElementById("topnav-menu-button-img").src = "');bloginfo('stylesheet_directory'); echo('/img/header/topnav-menu-button.png";
					transition.begin(overlay, "background-color rgba(32,33,37,0.5) #35434a 4000ms ease-out");
					$(".hc").css("background-color", "#ffffff");
					$(".ovl-m").css("display", "none");
					//Toggling the mobile menu
					container2.animate({right: "-100vh"}, 800);
				}	
			}				
		});	
	</script>');
?>