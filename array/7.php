<?php
if (isset($_POST['str']) && isset($_POST['n'])) {
	$str = (array_map('intval', explode(' ', $_POST['str'])));
	$ind = array_search($_POST['n'], $str);
	if (!$ind) {
		echo 'Число должно входить в массив';
		return;
	}
	unset($str[$ind]);
	print_r($str);
	$sorted = sort($str);
	if ($sorted == $str) {
		echo 'Массив упорядочен';
		return;
	}
	echo 'Массив не упорядочен';


}
?>