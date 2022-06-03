<?php
if (isset($_POST['str'])) {
	$MIN = 2147483647;
	$MAX = -$MIN;
	$i_min = -1;
	$i_max = -1;

	$str = explode(' ', $_POST['str']);
	foreach (array_map('intval', $str) as $i => $n) {
		if ($n > $MAX) {
			$MAX = $n;
			$i_max = $i;
		}
		if ($n < $MIN) {
			$MIN = $n;
			$i_min = $i;
		}
	}
	$str[$i_max] = $MIN;
	$str[$i_min] = $MAX;

	echo "MAX: " . $MAX . "<br>MIN: " . $MIN . "<br> New array: ";
	print_r($str);
}
?>