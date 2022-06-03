<?php
if (isset($_POST['n'])) {
	$result = [];
	for ($i = 0; $i < $_POST['n']; $i++) {
		$result[] = $i % 2 == 0 ? 0 : 1;
	}
	print_r($result);
}
?>