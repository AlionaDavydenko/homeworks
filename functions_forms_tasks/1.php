<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
    <body>
<form action="" method="post">
<u>Ваше имя:</u><br>
<input type="text" name="name" placeholder ="Введите ваше имя"/><br><br>
<u>Комментарий:</u><br>
<textarea input type="text" name="comment" placeholder ="Введите ваш комментарий"></textarea><br>
<u>Другой комментарий:</u><br>
<textarea input type="text" name="text" placeholder ="Введите ещё один комментарий"></textarea><br>
	<input type="submit" value = "Отправить"/><br><br>	
</form>
    </body>
</html>
<?php
/*
1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
*/
function getCommonWords($a, $b){
	$comm = explode(" ", $a);
	$tex = explode(" ", $b);
	$result = array_intersect($comm, $tex);
	echo "<pre>";
     print_r($result);
	 echo "</pre>";
}
     if($_POST){
    $comment = $_POST['comment'];
	$text = $_POST['text'];
	 getCommonWords($comment, $text);
	 }