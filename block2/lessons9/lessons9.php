<?php

	if (isset($_REQUEST['hello']) and $_REQUEST['hello']==0) {
		echo 'не отмечен';
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello']==1) {
		echo 'отмечен';
	}
	echo '<br><br>';
?>

<form action='' method="GET">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>
<br><br>


<?php
		function input ($a, $b){
			return '<input type="text" name="'.$a.'" value="'.$b.'">';
		}

		echo input('age', 25);
		echo '<br>';
?>
<form action='' method="GET">

	<input type="submit">
</form>
<br><br>