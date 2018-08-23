<?php
	ini_set("display_errors", "1");

	$items = array
	(
		array("nothing", 0, 0, 0),
		array("Phone", 200, 10, 8),
		array("Computer", 500, 5, 11),
		array("Tablet", 350, 20, 3),
		array("MP3", 100, 15, 20)
	);
	
	
	for ($row = 1; $row < 5; $row++) {
			echo "<p><strong>On sale items $row</strong></p>";
			echo "<ul>";
		for ($col = 0; $col < 3; $col++){
			echo $items[$row][$col]."<br>";
			}
			echo "</ul>";
		}
?>

<?php
	echo $items[1][0]. " prices: ".$items[1][1].", In stock:".$items[1][2].", sold: ".$items[1][3].".<br>";
	echo $items[2][0]. " prices: ".$items[2][1].", In stock:".$items[2][2].", sold: ".$items[2][3].".<br>";
	echo $items[3][0]. " prices: ".$items[3][1].", In stock:".$items[3][2].", sold: ".$items[3][3].".<br>";
	echo $items[4][0]. " prices: ".$items[4][1].", In stock:".$items[4][2].", sold: ".$items[4][3].".<br>";
?>

<br>

<?php
	$item = array("000"=>"HKD", "001"=>"USD", "002"=>"AUD");
	echo "Your currency is " .$item["001"]. "!";
?>

<?php



	$products = array
	(
		$name = array("iphone4", "iphone5", "iphone6", "iphone3000"),
		$price = array(100, 200, 300, 400),
		$image = array("img/iphone4.png","img/iphone5.jpg","img/iphone 6.jpg","img/iphone 3000.png")
	);
	
	if(!empty($products))
	{
		foreach($products as $key=>$value)
		{	
?>
		<div classs= "product-item">
				<div class="product-image">
					<img src="<?php echo $products[$key]["$image"];?>">
				</div>
			<div>
				<strong><?php echo $products[$key][$name]; ?></strong>
			</div>
			<div class="product-price"><?php echo "$" . $products[$key][$price];?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
		</div>
		
<?php
		}
	}
?>

