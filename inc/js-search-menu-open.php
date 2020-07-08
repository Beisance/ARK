<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		//Switching search menu on
		$(document).ready(function () {
			$(".searchMenuOpen").click(function() {
				$(".tnm").css("display", "none");
				if ($(window).width() > 1099) {
					$(".searchMenuOpen").css("display", "inline-block");
				}
				else{
					$(".searchMenuOpen").css("display", "none");
				}
				$(".tns").css("display", "block");
				$("search-box").focus();
			});
		});	
	</script>');
?>