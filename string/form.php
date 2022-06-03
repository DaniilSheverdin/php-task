<!DOCTYPE html>
<html>
<head>
<title>Строки</title>
<meta charset="utf-8" />
</head>
<body>
<ul>
	<li><a href="../files/form2.php">Файлы</a></li>
	<li><a href="../array/form3.php">Массивы</a></li>
</ul>

<h1>Строки</h1>
<h2>1 задание</h2>
<p style="width:50%">1. строка из букв строки Даны 2 слова, определить можно ли из 1ого слова составить 2ое,
при условии что каждую букву из строки 1 можно использовать только один раз.</p>
<br>
<form action="first.php" method="post">
    Первое слово <input type="text" name="str1" value="hello">
		Второе слово <input type="text" name="str2" value="hello">
    <input type="submit" name="submit" value="Проверить">
</form>

<h2>2 задание</h2>
<p style="width:50%">Палиндромом называют последовательность символов, которая читается как слева направо,
так и справа налево. Найти во введённой строке подстроку-палиндром максимальной длины.</p>
<br>
<form action="second.php" method="post">
    Строка<input type="text" name="str1" value="hello">
    <input type="submit" name="submit" value="Проверить">
</form>

<h2>3 задание</h2>
<p style="width:50%">Вводится слово, выводится его перевертыш. Например: "перевертыш" => "шытревереп"</p>
<br>
<form action="third.php" method="post">
    Слово<input type="text" name="str1" value="hello">
    <input type="submit" name="submit" value="Проверить">
</form>

<h2>4 задание</h2>
<p style="width:50%">"поиск с подсветкой", регулярные выражения
Дан текст и "слово", выделить красным слова в тексте которые содержат в себе "слово".
Например: Дано слово "мастер" и текст "MasterWebs - Форум веб-мастеров"</p>
<br>
<form action="fourth.php" method="post">
    Текст<input type="text" name="str1" value="hello world">
		Слово<input type="text" name="word" value="hello">
    <input type="submit" name="submit" value="Проверить">
</form>

<h2>5 задание</h2>
<p style="width:50%">Реализовать шифрование текста путем замены букв друг другом (напр. A => B, B=>X, итд). Каждая буква может представлять только одну другую букву. Написать три функции - первая генерирует ключ в виде нового алфавита. Вторая шифрует заданный текст по заданному ключу. Третья расшифровывает заданный зашифрованный текст по заданному ключу.</p>
<br>
<form action="fifth.php" method="post">
    Ключ<input type="text" name="key" value="abcde">
		Текст<input type="text" name="text" value="hello">
    <input type="radio" name="todo" value="encrypt" /> Зашифровать <br>
    <input type="radio" name="todo" value="decrypt" /> Расшифровать <br>
    <input type="submit" name="submit" value="Погнали">
</form>
<br><br>

</body>
</html>