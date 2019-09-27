<?php
	$str = '';
	for ($i=1; $i<10; $i++){
		$str.=$i;
	}
	echo $str;
	echo '<br>';
?>

<?php
	$str = '';
	for ($i = 9; $i >  0; $i--){
		$str.=$i;
	}
	echo $str;
	echo '<br>';
?>

<?php
	$str = '-';
	for ($i = 1; $i < 10; $i++){
		$str=$str.$i.'-';
	}
	echo $str;
	echo '<br>';
?>

<?php
	$str = '';
	for ($i = 0; $i < 20; $i++){
		echo $str.='x';
		echo '<br>';
	}
	echo '<br>';
?>

<?php
	for ($i = 1; $i < 10; $i++){
		for ($j = 1; $j <= $i; $j++){
			echo $i;
		}
		echo '<br>';
	}
?>

<?php
	$str = '';
	for ($i=1; $i<6; $i++){
		echo $str.='xx';
		echo '<br>';
	}
	echo '<br>';
?>