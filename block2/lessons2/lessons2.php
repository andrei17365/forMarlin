<?php
	function func ($a, $b){
		return $a == $b;
	}

	var_dump(func (10, 10));

	echo '<br>';
?>

<?php
	function func2 ($a, $b){
		return ($a+$b) == 10;
	}

	var_dump (func2 (5, 5));

	echo '<br>';
?>

<?php
	function func3 ($a){
		return $a < 0;
	}

	var_dump(func3(2));

	echo '<br>';
?>