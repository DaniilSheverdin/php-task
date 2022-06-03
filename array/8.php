<?php
if (isset($_POST['str'])) {
	$str = explode(' ', $_POST['str']);
	print_r(array_unique($str));
}
?>