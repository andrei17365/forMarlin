<?php

	function isNumberRange ($a){
		return $a>0 and $a<10;
	}

	$arr = [1,-5,3,6,-2,6,-3];
	$result = [];

	foreach ($arr as $elem) {
		if (isNumberRange($elem)){
			$result[]=$elem;
		}
	}
	var_dump($result);
	echo '<br>';
?>

<?php

	function getDigitSum($a){
		return array_sum(str_split($a));
	}

	$yearSum13=[];
	for ($i=1; $i<=2019; $i++){
		if (getDigitSum($i)==13){
			$yearSum13[]=$i;
		}
	}
	var_dump($yearSum13);

	echo '<br>';
?>

<?php

	function isEven($a){
		return $a%2==0;
	}

	$arr1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
	$arr2 = [];

	foreach ($arr1 as $elem) {
		if (isEven($elem)){
			$arr2[] = $elem;
		}
	}

	var_dump($arr2);

	echo '<br>';
?>

<?php
	function getDivisors($a){
		$arr3 = [];
		for ($i=1; $i<=$a; $i++){
			if ($a%$i == 0){
				$arr3[] = $i;
			}
		}
		return $arr3;
	}

	function getCommonDivisors ($a, $b){
		return array_intersect(getDivisors($a), getDivisors($b));
	}

	var_dump(getCommonDivisors(12, 18));
?>