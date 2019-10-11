<?php

	session_start();

	if(isset($_REQUEST['submit'])) {
		$_SESSION['name'] = $_REQUEST['name'];
	}

	//session_destroy();
?>

<p>введите имя</p>
<form action="" method="GET">
	<input  name="name">
	<input type="submit" name="submit">
</form>

<a href="next1.php">далее</a>


