<?php
	define("TITLE", "Shop Page");
?>

<?php
	include("includes/header.php");
?>

<?php

	$photo =array("img/iphone4.png","img/iphone5.jpg","img/iphone 6.jpg","img/iphone 3000.png");

	$items = array
	(
		array("nothing", 0, 0, 0),
		array("Phone4", 200, 10, 8),
		array("iPhone5", 300, 5, 11),
		array("iPhone6", 550, 20, 3),
		array("iPhone3000", 1000, 15, 20)
	);
	
	
		for ($row = 1; $row < 5; $row++) {
			echo "<p><strong>On sale items $row</strong></p>";
			echo "<ul>";
			
		for($i=0; $i<count($photo); $i++) {
			echo '<img src="'.$photo[$i].'">';
			}
			
		for ($col = 0; $col < 3; $col++){
			echo $items[$row][$col]."<br>";
			}
			echo "</ul>";
		}
	
	
	
	
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

	for($i=0; $i<count($photo); $i++) {
	echo '<img src="'.$photo[$i].'">';
	}
	
	echo "<br>";
	
	echo '<img src="'.$photo[0].'">' .$items[1][0]. " prices: ".$items[1][1].", In stock:".$items[1][2].", sold: ".$items[1][3].".<br>";
	echo '<img src="'.$photo[1].'">' .$items[2][0]. " prices: ".$items[2][1].", In stock:".$items[2][2].", sold: ".$items[2][3].".<br>";
	echo '<img src="'.$photo[2].'">' .$items[3][0]. " prices: ".$items[3][1].", In stock:".$items[3][2].", sold: ".$items[3][3].".<br>";
	echo '<img src="'.$photo[3].'">' .$items[4][0]. " prices: ".$items[4][1].", In stock:".$items[4][2].", sold: ".$items[4][3].".<br>";
?>

<br>

<?php
	$item = array("000"=>"HKD", "001"=>"USD", "002"=>"AUD");
	echo "The currency is " .$item["001"]. "!";
?>


<?php
	include("includes/footer.php");
?>