<?php

	session_start();

	if(!isset($_SESSION['test'])) {
		$_SESSION['test'] = 'test';
	}

	echo $_SESSION['test'];
	//session_destroy();

?>

