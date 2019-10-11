<?php

	session_start();

	if(isset($_REQUEST['submit'])) {
		$_SESSION['age'] = $_REQUEST['age'];
	}

	//session_destroy();
?>

<p>введите возраст</p>
<form action="" method="GET">
	<input  name="age">
	<input type="submit" name="submit">
</form>

<a href="next3.php">далее</a>
