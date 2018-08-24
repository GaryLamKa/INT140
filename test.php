<?php
	define("TITLE" , "Cart");
	ini_set("display_errors", "1");
?>

<?php
	include("includes/header.php");	
?>
<?php
	$discountCode = "1234567890";

	$productsPrice = array(200,300,400,900);
	
	if (isset($_GET["ItemName1"]) && ($_GET["Qty1"] >= 1)){
	echo $_GET["ItemName1"]. "  Quantity: " .$_GET["Qty1"]. "<br>";
	};
	if (isset($_GET["ItemName2"]) && ($_GET["Qty2"] >= 1)){
	echo $_GET["ItemName2"]. "  Quantity: " .$_GET["Qty2"]. "<br>";
	};
	if (isset($_GET["ItemName3"]) && ($_GET["Qty3"] >= 1)){
	echo $_GET["ItemName3"]. "  Quantity: " .$_GET["Qty3"]. "<br>";
	};
	if (isset($_GET["ItemName4"]) && ($_GET["Qty4"] >= 1)){
	echo $_GET["ItemName4"]. "  Quantity: " .$_GET["Qty4"]. "<br>";
	};

	
	$CartEmpty = "Cart is empty!";
	
	if (($_GET["Qty1"] >= 1) ||($_GET["Qty2"] >= 1) ||($_GET["Qty3"] >= 1) ||($_GET["Qty4"] >= 1)){
	$total = $productsPrice[0] * $_GET["Qty1"] +  $productsPrice[1] * $_GET["Qty2"] + $productsPrice[2] * $_GET["Qty3"] + $productsPrice[3] * $_GET["Qty4"];
	};
	
	if (isset($_GET["ItemName1"]) && ($_GET["Qty1"] >= 1) ||  isset($_GET["ItemName2"])&& ($_GET["Qty2"] >= 1) ||  isset($_GET["ItemName3"]) && ($_GET["Qty3"] >= 1) ||  isset($_GET["ItemName4"])&& ($_GET["Qty4"] >= 1)){
	echo "The total prices is:  ". $total;
	}else{
	echo $CartEmpty;
	};
	
?>

<?php
$nameErr = $emailErr = $cardErr = $addressErr = $cardNumErr = "";
$name = $email = $card = $detail = $address = $cardNum = "";

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
  Discount Code: <input type="text" placeholder="10 digits number" value="<?php echo $NewDiscount;?>" >
  <br><br>
  <input type="submit" name="submit" value="Comfirm Information">  
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
echo "<br>";
echo $total;


?>

<form method="post" action="comfirm.php">
	<input type="submit" name="comfirm" value="Comfirm to send order">
</form>




<?php
	include("includes/footer.php");
?>

---------------------------
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
echo "<br>";
echo $total;


?>

<form method="post" action="comfirm.php">
	<input type="submit" name="comfirm" value="Comfirm to send order">
</form>


<input type="submit" name="submit" value="Submit"> 
</form>