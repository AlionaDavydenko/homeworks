<?php
/*1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<form>
<u><i>Name:</i></u><br>
<textarea id="text" name="name" placeholder ="Введите ваше имя"></textarea><br>
<u><i>Text:</i></u><br>
<textarea input type="text" name="text" placeholder ="Введите текст"></textarea><br>
	<input type="submit" value = "Отправить"/><br><br>

</form>
</body>
</html>
<?php
function getCommonWords($a, $b);
