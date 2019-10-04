<?php
    echo round((mktime(0,0,0,12,31) - time())/(60*60*24));
echo '<br>';
?>


<?php
    if (empty($_REQUEST['year'])){
?>

<form action="" method="GET">
    <input type="text" name="year"><br><br>
    <input type="submit">
</form>

<?php
}
?>
<?php
    if (isset($_REQUEST['year'])){
        $year = date('L', mktime(0,0,0,1,1,$_REQUEST['year']));

            if ($year!=0){
                echo 'Високосный';
            }
            else echo 'Не високосный';

    }
?>

<br><br>


<?php
    if (empty($_REQUEST['name'])){
?>

<form action="" method="GET">
    <input type="text" name="name"><br><br>
    <input type="submit">
</form>

<?php
echo 'Введите дату в формате 31.12.2025';
}
?>
<?php
    if (isset($_REQUEST['name'])){
        $dt=explode('.', $_REQUEST['name']);
        $day = date('l', mktime(0,0,0,$dt[1],$dt[0],$dt[2]));
        echo $day;
    }
?>

<br><br>

<?php
	$month=[1=>'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
	$week=['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
	$day = date('w', time());
	$a = date('n', time());
	echo (date('d', time()).' '.$month[$a].' '.date('Y', time()).' года, '.$week[$day]);
	echo '<br>';
?>
<br><br>



<?php
	if (empty($_REQUEST["birthday"])){
?>

<form action="" method="GET">
	<input type="text" name="birthday"><br>
	<input type="submit">
</form>

<?php
	echo 'Введите дату рождения в формате 01.12.1990';
}
?>
<?php
	if (isset($_REQUEST['birthday'])){
		$date=explode('.', $_REQUEST['birthday']);
		$a=0;
		$day = mktime(0,0,0,$date[1],$date[0]) - time();
		if ($day>0){
			$a = $day/(60*60*24);
		} else {
			$day1 = mktime(0,0,0,$date[1],$date[0],(date('Y',time()))+1) - time();
			$a = $day1/(60*60*24);
		}
		echo 'До дня рождения осталось '.round($a).' дней.';
	}
?>
<br><br><br>

<?php

	$a=0;
	$day = strtotime("last Sunday May") - time();
	if ($day>0){
		$a = $day/(60*60*24);
	} else {
		$day1 = strtotime("last Sunday May + 1 year") - time();
		$a = $day1/(60*60*24);
	}
	echo 'До масленницы '.round($a).' дней.';
	echo '<br>';
?>

<br><br>

<?php
	if (empty($_REQUEST["text1"])){
?>

<form action="" method="GET">
	<input type="text" name="text1"><br>
	<input type="submit">
</form>

<?php
	echo 'Введите дату рождения в формате 01.12';
}
?>
<?php
	if (isset($_REQUEST['text1'])){
		$a = explode('.', $_REQUEST[text1]);
		$dateBith = mktime(0,0,0,$a[1],$a[0]);
		if ($dateBith>=strtotime("20 January") and $dateBith<=strtotime("19 February")){
			echo 'Водолей';
		}
		if ($dateBith>=strtotime("20 February") and $dateBith<=strtotime("20 March")){
			echo 'Рыбы';
		}
		if ($dateBith>=strtotime("21 March") and $dateBith<=strtotime("19 April")){
			echo 'Овен';
		}
		if ($dateBith>=strtotime("20 April") and $dateBith<=strtotime("20 May")){
			echo 'Телец';
		}
		if ($dateBith>=strtotime("21 May") and $dateBith<=strtotime("20 June")){
			echo '<Близнецы>';
		}
		if ($dateBith>=strtotime("21 June") and $dateBith<=strtotime("22 July")){
			echo 'Рак';
		}
		if ($dateBith>=strtotime("23 July") and $dateBith<=strtotime("22 August")){
			echo 'Лев';
		}
		if ($dateBith>=strtotime("23 August") and $dateBith<=strtotime("22 September")){
			echo 'Дева';
		}
		if ($dateBith>=strtotime("23 September") and $dateBith<=strtotime("23 October")){
			echo 'Весы';
		}
		if ($dateBith>=strtotime("24 October") and $dateBith<=strtotime("22 November")){
			echo 'Скорпион';
		}
		if ($dateBith>=strtotime("23 November") and $dateBith<=strtotime("21 December")){
			echo 'Стрелец';
		}
		if ($dateBith>=strtotime("21 December") and $dateBith<=strtotime("19 January")){
			echo 'Козерог';
		}

	}
?>
<br><br><br>


<?php
	if (empty($_REQUEST['text2'])){
?>

<form action="" method="GET">
	<textarea type="textarea" name="text2"></textarea>
	<input type="submit">
</form>

<?php
	echo 'Введите текст';
	}
?>
<?php
	$arr1 = explode(' ', $_REQUEST['text2']);
	$arr2 = str_split($_REQUEST['text2']);
	$numSpase = 0;
	foreach ($arr2 as $elem) {
		if ($elem===' '){$numSpase++;}
	}
	echo count($arr1).' слов. '.strlen($_REQUEST['text2']).' символов в тексте. '.(strlen($_REQUEST['text2'])-$numSpase).' символов без пробелов.';
?>
<br><br><br>



<?php
	if (empty($_REQUEST['text3'])){
?>

<form action="" method="GET">
	<textarea type="textarea" name="text3"></textarea>
	<input type="submit">
</form>

<?php
	echo 'Введите текст';
	}
?>
<?php
	$arr3 = str_split($_REQUEST['text3']);
	$arr4 = [];
	foreach ($arr3 as $elem) {
		if (array_key_exists($elem, $arr4)){
			$arr4[$elem]++;
		}
		else {
			$arr4[$elem]=1;
		}
	}
	foreach ($arr4 as $key => $value) {
		$proc = $value/count($arr3)*100;
		echo $key.' '.round($proc, 2).'<br>';
	}
?>
<br><br><br>





<?php
	if (empty($_REQUEST['name1'])){
?>

<form acction="" method="GET">
	<input type="text" name="name1">
	<input type="submit">
</form>

<?php
	echo 'Веедите буквы';
	}
?>
<?php
	$arr5 = ['name', 'space', 'april', 'programming', 'imagination', 'volume'];
	if (isset($_REQUEST['name1'])){
		$symbol = str_split($_REQUEST['name1']);
		$ok = [];
		foreach ($arr5 as $elem) {
			$flag = true;
			$word = [null];
			$word = str_split($elem);
			for ($i=0; $i<count($symbol); $i++){
				if (!in_array($symbol[$i], $word)){
					$flag = false;
				}

			}
			if ($flag){
				$ok = $elem;
			}
		}
		var_dump($ok);
	}
?>