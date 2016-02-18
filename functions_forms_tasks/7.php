<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<form method="get" action="7.php">
<u><i>Пользователь:</i></u><br>
<input id="name" name="Пользователь" placeholder ="Введите ваше имя"><br>
<u><i>Комментарий:</i></u><br>
<textarea input type="text" name="Комментарий" placeholder ="Введите ваш комментарий"></textarea><br>
	<input type="submit" value = "Отправить"/><br><br>

</form>
</body>
</html>
<?php
function comment($com){
	$k = " ";
	foreach($_GET as $key=>$val){
		$k.= "{$val} <br>";
	}
	echo $k;
}
if($_GET){
	comment($_GET);
}else{
		"Оставьте ваш комментарий";
}
?>
