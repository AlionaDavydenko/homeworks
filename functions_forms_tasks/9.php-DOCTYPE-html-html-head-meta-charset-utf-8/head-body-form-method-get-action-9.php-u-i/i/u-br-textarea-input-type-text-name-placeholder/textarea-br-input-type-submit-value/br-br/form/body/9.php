<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
    <body>
<form method="get" action="9.php">
<u><i>Комментарий:</i></u><br>
<textarea input type="text" name="Комментарий" placeholder ="Введите ваш комментарий"></textarea><br>
	<input type="submit" value = "Отправить"/><br><br>
</form>
    </body>
</html>
<?php
if($_GET){
	foreach($_GET as $key=>$value){
		echo strrev($value) . "<br>";
	}
	}
	?>
