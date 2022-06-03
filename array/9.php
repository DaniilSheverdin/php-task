<?php
if (isset($_POST['str'])) {
	$str = (array_map('intval', explode(' ', $_POST['str'])));
	shuffle($str);
	print_r($str);
}
?>