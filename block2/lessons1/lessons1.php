<?php
	$arr = [1, 2, 0, 3, 6, 7];
	$flag = false;

	foreach ($arr as $elem) {
		if ($elem==5){
			$flag = true;
			break;
		}
	}

	if ($flag === true){
		echo 'Есть';
	} else {
		echo 'Нет';
	}

	echo '<br>';

?>

<?php
	$a = 30;
	$flag = false;

	$arr1 = range (2, $a-1);
	foreach ($arr1 as $elem) {
		if ($a%$elem == 0){
			$flag = true;
			break;
		}
	}

	if ($flag === true){
		echo 'да';
	}
	else {
		echo 'нет';
	}
	echo '<br>'
?>

<?php
	$arr2 = [2,3,4,4,5,6,3,2,6,7,5,3];
	$flag = false;
	$a = count($arr2);

	for ($i=1; $i<$a; $i++) {
		if ($arr2[$i]==$arr2[$i-1]) {
			$flag = true;
			break;
		}
	}

	if ($flag == true){
		echo 'есть';
	} else {
		echo 'нет';
	}
	echo '<br>';
?>