<?php

	function cut($str, $a = 10){
		return substr($str, 0, $a);
	}

	$str1 = 'qwertyuiopasdfgh';
	echo cut($str1, 4);
	echo '<br>';
	echo cut($str1);

	echo '<br>';
?>

<?php

	function first ($arr){
		echo array_shift($arr);
			if(!empty($arr)){
				first ($arr);
			}
	}

	$arr = [1,2,3,4,5,6,7];
	first($arr);

	echo '<br>';
?>

<?php
	function sumNine($num){
		$result = array_sum(str_split($num));
		if ($result>9) {
			$result = sumNine($result);
		}
		return $result;
	}

	echo sumNine(123);

?>