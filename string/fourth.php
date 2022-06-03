<?php
if (isset($_POST['str1']) && isset($_POST['word'])) {
	$str = $_POST['str1'];
	$word = $_POST['word'];
	$rep = sprintf("<font color=#ff0000>%s</font>", $word);
	$str = str_replace($word, $rep, $str);
	echo $str;
}
?>