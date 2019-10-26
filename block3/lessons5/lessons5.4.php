<?php                              //Работа со cookie
	if (isset($_REQUEST['text'])){
		setcookie('bday', $_REQUEST['text'], time()+3600*24*30*365);
	}
?>
<?php
	if (!isset($_COOKIE['bday'])) {
?>
	<p> введите дату рождения в формате дд.мм.гггг </p>
	<form>
		<input type="text" name="text">
		<input type="submit">
	</form>
<?php
	}
?>
<?php

	$arr = explode('.', $_COOKIE['bday']);
	$day = mktime(0,0,0,$arr[1],$arr[0]);
	if (time()<$day){
		$dayB = ($day-time())/(3600*24);
		$day1=floor($dayB);
		echo "До дня рождения осталось $day1 дней!";
	} else {
		$dayB = (time()-$day)/(3600*24);
		$day1=365 - floor($dayB);
		echo "До дня рождения осталось $day1 дней!";
	}
?>