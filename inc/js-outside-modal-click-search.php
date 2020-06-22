<?php
//Beisance|Intelix Custom script For Beisance|ARK
//We are echoing the javascript in php in order to utilize the WorPress function. This isn't the standard way to do this. We will fix our approach in a future update. - Olanrewaju Jeph 31/12/18.
?>

<?php
	echo ('
	<script>
		//Outside modal click - close the modal
		$(document).ready(function () {
			//Get the modal
			var modal = document.getElementById("search");
			//Close the modal on outside click
			window.onclick = functions(event){
				if(event.target == modal{
					modal.style.display = "none";
				}
			}	
		});	
	</script>');
?>