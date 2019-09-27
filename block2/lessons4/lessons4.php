<?php
	$str='';
	$arr=[];
	for ($i=0; $i<5; $i++){
		$str.='x';
		$arr[]=$str;
	}
	var_dump($arr);
	echo '<br>';
?>

<?php
	$arr1=[];
	for ($i=1; $i<=5; $i++){
		$str='';
		for ($j=1; $j<=$i; $j++){
			$str.=$i;
		}
		$arr1[]= $str;
	}
	var_dump ($arr1);
	echo '<br>';
?>

<?php
	function arrayFill($a, $b) {
		$arr2 = [];
		for ($i = 0; $i < $b; $i++){
			$arr2[] = $a;
		}
		return $arr2;
	}

	var_dump (arrayFill('F', 6));
	echo '<br>';
?>

<?php
	$arr3 = [1,2,3,4,5,6,7,8,9];
	foreach ($arr3 as $elem) {
			if ($a <= 10){
				$a += $elem;
				$count++;
			} else break;
		}
	echo $count;
	echo '<br>';
?>

<?php
	$arr4 = [[1, 2, 3], [4, 5], [6]];
	$sum = 0;

	foreach ($arr4 as $elem) {
		foreach ($elem as $elem2) {
			$sum += $elem2;
		}
	}
	echo $sum;
	echo '<br>';
?>

<?php
	$arr5 = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
	$sum = 0;

	foreach ($arr5 as $elem) {
		foreach ($elem as $elem2) {
			foreach ($elem2 as $elem3) {
				$sum += $elem3;
			}
		}
	}
	echo $sum;
	echo '<br>';
?>

<?php
	$a = 1;
	while ($a<=9) {
		for ($i = 0; $i < 3; $i++){
			$arr6=[];
			for ($j = 0; $j < 3; $j++){
				$arr6[] = $a;
				$a++;
			}
			$arr7[] = $arr6;
		}
	}
	var_dump ($arr7);
?>