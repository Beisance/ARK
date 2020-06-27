<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		//Outside popup click - close the search bar
		$(document).mouseup(function (e) {
			var container1 = $(".tns");
			if(!container1.is(e.target) && container1.has(e.target).length === 0){
				container1.hide();
				if ($(window).width() > 1099) {
					$(".tnm").css("display", "block");
				}	
			}				
		});	
	</script>');
?>