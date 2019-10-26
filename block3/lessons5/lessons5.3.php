<?php                              //Работа со cookie
	setcookie('count', 0);
	$count = $_COOKIE['count'] + 1;
	setcookie('count', $count);
	echo "Вы посетили наш сайт $_COOKIE[count] раз!";
?>