<?php
if (isset($_POST['str'])) {
	$str = (array_map('intval', explode(' ', $_POST['str'])));
	$new = [];
	foreach ($str as $elem) {
		$new[] = $elem;
		if ($elem < 0) {
			$new[] = 0;
		}
	}
	print_r($new);


}
?>