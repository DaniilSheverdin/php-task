<?php
if (isset($_POST['str1']) && isset($_POST['str2'])) {
	$str1 = (array_map('intval', explode(' ', $_POST['str1'])));
	$str2 = (array_map('intval', explode(' ', $_POST['str2'])));
	$str3 = array_merge($str1, $str2);
	sort($str3);
	print_r($str3);
}
?>