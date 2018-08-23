<?php
	define("TITLE", "Checkout Page");
?>

<!DOCTYPE HTML>  
<html>
<head>
<title><?php echo TITLE; ?> </title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $cardErr = $addressErr = $cardNum = "";
$name = $email = $card = $detail = $address = $cardNumErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "empty";
  } else {
    $address = test_input($_POST["address"]);
    if (!preg_match("/^[0-9a-zA-Z_]{5,}$/",$address)) {
      $addressErr = "Address is wrong"; 
    }
  }

  if (empty($_POST["detail"])) {
    $detail = "";
  } else {
    $detail = test_input($_POST["detail"]);
  }

  if (empty($_POST["card"])) {
    $cardErr = "card type is required";
  } else {
    $card = test_input($_POST["card"]);
  }
  
  if (empty($_POST["cardNum"])) {
  	$cardNumErr = "card is required";
  } else {
  	$cardNum = test_input($_POST["cardNum"]);
  	if (!preg_match("/^[0-9a-zA-Z_]{5,}$/",$cardNum))
  		$cardNumErr = "Wrong card number";
  }
  
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Checkout Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Full Name: <input type="text" name="name" placeholder="Peter Chan" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" placeholder="example@gmail.com" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Address: <input type="text" name="address" placeholder="4000 June St. BNE" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  Detail for shipping: <textarea name="detail" rows="5" cols="40" placeholder="e.g: Second floor room 2.4"><?php echo $detail;?></textarea>
  <br><br>
  Card:
  <input type="radio" name="card" <?php if (isset($card) && $card=="visa") echo "checked";?> value="visa">VISA
  <input type="radio" name="card" <?php if (isset($card) && $card=="mastercard") echo "checked";?> value="mastercard">MasterCard
  <input type="radio" name="card" <?php if (isset($card) && $card=="americanex") echo "checked";?> value="americanEx">AmericanExpress  
  <span class="error">* <?php echo $cardErr;?></span>
  <br><br>
  Card Number:<input type="text" name="cardNum" placeholder="xxxx-xxxx-xxxx-xxxx" value="<?php echo $cardNum;?>">
  <span class="error">* <?php echo $cardNumErr;?></span>
  <br><br>  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Information:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $detail;
echo "<br>";
echo $card;
echo $cardNum;
echo "<br>"
?>




</body>
</html>