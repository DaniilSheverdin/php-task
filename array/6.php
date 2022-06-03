<?php
if (isset($_POST['str'])) {
	$str = (array_map('intval', explode(' ', $_POST['str'])));
	for ($i = 0; $i < count($str) - 1; $i++) {
		for ($j = $i + 1; $j < count($str); $j++) {
			if ($str[$i] > $str[$j]) {
				$buf = $str[$i];
				$str[$i] = $str[$j];
				$str[$j] = $buf;
			}
		}
	}
	echo "Без стандартной функции: ";
	print_r($str);

	$str = (array_map('intval', explode(' ', $_POST['str'])));
	sort($str);
	echo "<br>Функцией sort: ";
	print_r($str);
}
?>