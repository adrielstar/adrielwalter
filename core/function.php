<?php
	function age()
	{
	//My Birthday is
	  $birthDate = "10/29/1986";
	  //explode the date to get month, day and year
	  $birthDate = explode("/", $birthDate);

	  //date in mm/dd/yyyy format; or it can be in other formats as well
	  //get age from date or birthdate
	  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
	    ? ((date("Y") - $birthDate[2]) - 1)
	    : (date("Y") - $birthDate[2]));
	  	echo $age . " jaar";
		}
?>