<?php
	define("TITLE", "Shop Page");
	error_reporting(E_ALL);
	ini_set("display_errors", "1");
?>

<?php
	include("includes/header.php");
?>




<?php
	$Qty = "";

	$productsImage = array("img/iphone4.png","img/iphone5.jpg","img/iphone 6.jpg","img/iphone 3000.png");
						
	$productsName = array("Iphone4","Iphone5","Iphone6","Iphone3000");
						 
	$productsPrice = array(200,300,400,900);
?>
<div class="shopShowCase">
	<div class="shopBox">
<form method="get" action="cart.php" >
<?php echo '<img src="'.$productsImage[0].'">'  ?>
<br><br>
<input type="radio" name="ItemName1" value="<?php echo $productsName[0] ?>"> <?php echo $productsName[0] ?> 
<h4>Price: <?php echo $productsPrice[0] ?>$ </h4> <br>
Quantity: <input type="text" name="Qty1" placeholder="0" value="<?php echo $Qty ?>"><br><br>
	</div>

	<div class="shopBox">
<?php echo '<img src="'.$productsImage[1].'">'  ?>
<br><br>
<input type="radio" name="ItemName2" value="<?php echo $productsName[1] ?>"> <?php echo $productsName[1] ?> 
<h4>Price: <?php echo $productsPrice[1] ?>$ </h4> <br>
Quantity: <input type="text" name="Qty2" placeholder="0" value="<?php echo $Qty ?>"><br><br>
	</div>

	<div class="shopBox">
<?php echo '<img src="'.$productsImage[2].'">'  ?>
<br><br>
<input type="radio" name="ItemName3" value="<?php echo $productsName[2] ?>"> <?php echo $productsName[2] ?> 
<h4>Price: <?php echo $productsPrice[2] ?>$ </h4> <br>
Quantity: <input type="text" name="Qty3" placeholder="0" value="<?php echo $Qty ?>"><br><br>
	</div>

	<div class="shopBox">
<?php echo '<img src="'.$productsImage[3].'">'  ?>
<br><br>
<input type="radio" name="ItemName4" value="<?php echo $productsName[3] ?> " > <?php echo $productsName[3] ?> 
<h4>Price: <?php echo $productsPrice[3] ?>$ </h4> <br>
Quantity: <input type="text" name="Qty4" placeholder="0" value="<?php echo $Qty ?>"><br><br>
	</div>


<input type="submit" name="submit" value="Add To Cart"> 
</form>

</div>
<?php
	include("includes/footer.php");
?>

