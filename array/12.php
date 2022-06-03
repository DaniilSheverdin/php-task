<?php
/* Возвращает соответствующую числу форму слова */
function inclineWord($number, $word1, $word2, $word3)
{
	$number %= 100;
	//до 20
	if ($number < 20) {
		if ($number == 1) {
			return $word1;
		}
		elseif (($number < 5) && ($number != 0)) {
			return $word2;
		}
		else {
			return $word3;
		}
	}
	else {
		//если больше 20 то только по последней цифре.
		$number %= 10;
		if ($number == 1) {
			return $word1;
		}
		elseif (($number < 5) && ($number != 0)) {
			return $word2;
		}
		else {
			return $word3;
		}
	}
}

function smallNumberToText($number, $isFemale)
{
	$spelling = array(
		0 => 'ноль', 10 => 'десять', 100 => 'сто',
		1 => 'один', 11 => 'одиннадцать', 20 => 'двадцать', 200 => 'двести',
		2 => 'два', 12 => 'двенадцать', 30 => 'тридцать', 300 => 'триста',
		3 => 'три', 13 => 'тринадцать', 40 => 'сорок', 400 => 'четыреста',
		4 => 'четыре', 14 => 'четырнадцать', 50 => 'пятьдесят', 500 => 'пятьсот',
		5 => 'пять', 15 => 'пятнадцать', 60 => 'шестьдесят', 600 => 'шестьсот',
		6 => 'шесть', 16 => 'шестнадцать', 70 => 'семьдесят', 700 => 'семьсот',
		7 => 'семь', 17 => 'семнадцать', 80 => 'восемьдесят', 800 => 'восемьсот',
		8 => 'восемь', 18 => 'восемнадцать', 90 => 'девяносто', 900 => 'девятьсот',
		9 => 'девять', 19 => 'девятнадцать'
	);
	$femaleSpelling = array(
		1 => 'одна', 2 => 'две'
	);
	$hundred = floor($number / 100);
	$dec = floor(($number % 100) / 10);
	$firstNumber = $number % 10;
	if ($number == 0) {
		return null;
	}
	if ($hundred) {
		$key = $hundred * 100;
		$strNum[] = $spelling[$key];
	}
	if ($dec == 1) {
		$key = $number % 100;
		$strNum[] = $spelling[$key];
	}
	elseif ($dec != 0) {
		$key = $dec * 10;
		$strNum[] = $spelling[$key];
	}
	if ($dec != 1 && $firstNumber != 0) {
		if ((($firstNumber == 1) or ($firstNumber == 2)) and ($isFemale == 1)) {
			$strNum[] = $femaleSpelling[$firstNumber];
		}
		else {
			$strNum[] = $spelling[$firstNumber];
		}
	}
	return implode(' ', $strNum);
}
function numberToText($number)
{
	if ($number == 0) {
		return 'Ноль';
	}
	//Миллионы
	$triad = floor($number / 1000000);
	if ($triad) {
		$strNum[] = smallNumberToText($triad, 0);
		$strNum[] = inclineWord($triad, 'миллион', 'миллиона', 'миллионов');
	}
	//тысячи
	$triad = floor(($number % 1000000) / 1000);
	if ($triad) {
		$strNum[] = smallNumberToText($triad, 1);
		$strNum[] = inclineWord($triad, 'тысяча', 'тысячи', 'тысяч');
	}
	//Меньше тысячи
	$triad = $number % 1000;
	if ($triad) {
		$strNum[] = smallNumberToText($triad, 0);
	}
	return implode(' ', $strNum);
}

if (isset($_POST['n'])) {
	echo(numberToText($_POST['n']));
}