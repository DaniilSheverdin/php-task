<?php
if (isset($_POST['str1']) && isset($_POST['str2'])) {
	$first_str = strtolower($_POST['str1']);
	$second_str = strtolower($_POST['str2']);
	$check = true;
	foreach (str_split($second_str) as $char) {
		if (substr_count($second_str, $char) > substr_count($first_str, $char)) {
			$check = false;
		}
	}
	if ($check) {
		print('Можно');
	}
	else {
		print('Нельзя');
	}
}
?>