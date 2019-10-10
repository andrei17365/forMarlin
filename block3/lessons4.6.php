<?php

	session_start();

	if(isset($_REQUEST['email'])) {
		$_SESSION['email'] = $_REQUEST['email'];
	}
	//session_destroy();

?>

<form>
	<input name="email">
	<input type="submit" name="submit">
</form>

<a href="lessons4.6.1.php">forms_test</a>

