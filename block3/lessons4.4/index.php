<?php

	session_start();

	if(isset($_REQUEST['country'])) {
		$_SESSION['country'] = $_REQUEST['country'];
	}
	echo $_SESSION['country'];
	//session_destroy();
?>

<?php
	if (empty($_REQUEST['country'])) {
?>
<form action="" method="GET">
	<input type="text" name="country">
	<input type="submit">
</form>
<?php
	}
?>
<a href="test.php">test</a>

