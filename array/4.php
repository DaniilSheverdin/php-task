<?php
if (isset($_POST['str'])) {
	$str = explode(' ', $_POST['str']);

	if (array_unique($str) != $str) {
		echo "Есть";
		return;
	}

	echo "Нет";
}
?>