<?php
if (isset($_POST['str'])) {
	print_r($arr);

	$sum = 0;
	$pr = 1;
	foreach ($arr as $a) {
		$sum += $a;
		$pr *= $a;
	}
	echo "<br>сумма функцией array_sum = " . array_sum($arr) . "<br>";
	echo "сумма без стандартных функций: " . $sum . "<br>";
	echo "сумма функицией array_product = " . array_product($arr) . "<br>";
	echo "произведение без стандартных функций: " . $pr . "<br>";
}
?>