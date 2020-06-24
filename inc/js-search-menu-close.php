<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		//Switching menu search menu off
		$(document).ready(function () {
			$(".smcl").click(function() {
				if ($(window).width() > 1099) {
					$(".tnm").css("display", "block");
					$(".tns").css("display", "none");
					$(".searchMenuOpen").css("display", "inline-block");
				}
				else{
					$(".tnm").css("display", "none");
				}	
			});
		});	
	</script>');
?>