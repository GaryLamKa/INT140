<?php
$nameEr = $emailEr = $cardEr = $addressEr = "";
$name = $email = $card = $address = "";

if ($_SERVER["REQUSEST_MOETHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameEr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameEr = "Only letters and white space allowed";
		}
	}
	
	



}


echo $name;

?>