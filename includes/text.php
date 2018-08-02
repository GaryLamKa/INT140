<?php
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
			echo "<li>".$items[$row][$col]."</li>";
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