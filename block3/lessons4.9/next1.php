<?php

	session_start();

	if(isset($_REQUEST['submit'])) {
		$_SESSION['surname'] = $_REQUEST['surname'];
	}

	//session_destroy();
?>

<p>введите фамилию</p>
<form action="" method="GET">
	<input  name="surname">
	<input type="submit" name="submit">
</form>

<a href="next2.php">далее</a>
