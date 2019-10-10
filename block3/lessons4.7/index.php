<?php

	session_start();

	if(isset($_REQUEST['submit'])) {
		$_SESSION['age'] = $_REQUEST['age'];
		$_SESSION['city'] = $_REQUEST['city'];
	}

	//session_destroy();
?>


<form action="" method="GET">
	<input  name="age">
	<input  name="city">
	<input type="submit" name="submit">
</form>

<a href="form.php">form.php</a>

<a href="logout.php">logout.php</a>

