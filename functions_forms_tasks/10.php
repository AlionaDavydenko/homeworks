<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
    <body>
<form action="10.php" method="post">
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
10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
*/
function uniqWords($text){
    $words = explode(" ", $text);
    $words = array_unique($words);
    return $words;
}
    $text = $_POST['comment'];
    $unique = uniqWords($text);
echo count($unique);
	
