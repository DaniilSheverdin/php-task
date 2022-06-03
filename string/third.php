<?php
if (isset($_POST['str1'])) {
	$str = strtolower($_POST['str1']);
	$rev = "";
	for ($i = strlen($str) - 1; $i > -1; $i--) {
		$rev .= $str[$i];
	}
	print($rev);
}
?>