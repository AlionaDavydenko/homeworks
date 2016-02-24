<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
    <body>
<form action="12.php" method="post">
<u>Ваше имя:</u><br>
<input type="text" name="name" placeholder ="Ваше имя"/><br><br>
<u>Комментарий:</u><br>
<textarea input type="text" name="comment" placeholder ="Введите ваш комментарий"></textarea><br>
	<input type="submit" value = "Отправить"/><br><br>
</form>
    </body>
</html>
<?php
/*
12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
Пример:<br><br>
Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
*/
function backText($text){
	$back = explode(" ", $text);
	$back = array_reverse($back);
	return $back;
}
if($_POST){
    $text = $_POST['comment'];
    $a = backText($text);
	$b = implode(" ", $a);
	echo $b;
}