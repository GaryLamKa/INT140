<?php
	date_default_timezone_set("Australia/Queensland");

	$exceptions = array ("25/12", "01/01");

	$discountWork = "You got discount,";
	$discountNotWork = "Discount not available.";

	$discountCode = "1234567890";
	
	$week = date("l");
	
	if(date("D") == "Fri"){
		echo "Today is $week. $discountWork here is the code $discountCode";
	}elseif(date("d/m") == $exceptions[0] || date("d/m") == $exceptions[1]){
		echo "Today is $week. $discountWork here is the code $discountCode";
	}else{
		echo "Today is $week. $discountNotWork";
	}

?>