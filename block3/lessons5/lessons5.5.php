<?php
	/*
	setcookie('age', mt_rand(10,70), time()+3600);
	echo $_COOKIE['age'];

	setcookie('age', mt_rand(10,70), time()+3600*3);
	echo $_COOKIE['age'];

	setcookie('age', mt_rand(10,70), time()+3600*24);
	echo $_COOKIE['age'];

	setcookie('age', mt_rand(10,70), time()+3600*24*365);
	echo $_COOKIE['age'];

	setcookie('age', mt_rand(10,70), time()+3600*24*365*10);
	echo $_COOKIE['age'];

	setcookie('age', mt_rand(10,70), mktime(24,59,59));
	echo $_COOKIE['age'];
	*/
	setcookie('age', mt_rand(10,70), mktime(24,59,59,12,31));
	echo $_COOKIE['age'];
	var_dump($_COOKIE);
?>