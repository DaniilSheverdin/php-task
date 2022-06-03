<?php
if (isset($_POST['str1'])) {

	$word = strtolower(str_replace(' ', '', $_POST['str1']));

	$res = longestP($word);
	echo "Длина: " . $res;
}

function isPalindrom($word)
{
	return $word == strrev($word);
}

function longestP($str)
{
	$n = strlen($str);
	$start = 0;
	$max = 1; //все подстроки длины 1 паллиндромы
	for ($i = 0; $i < $n; $i++) {
		for ($j = $i; $j < $n; $j++) {
			$flag = false;

			$flag = isPalindrom(substr($str, $i, $j - $i + 1));
			if ($flag && ($j - $i + 1) > $max) {
				$start = $i;
				$max = $j - $i + 1;
			}
		}
	}
	echo("Паллиндром максимальной длины: " . substr($str, $start, $max) . "<br>");
	return ($max);
}


?>