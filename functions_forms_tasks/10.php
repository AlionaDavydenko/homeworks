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
	