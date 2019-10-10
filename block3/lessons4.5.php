<?php

	session_start();

	if(!isset($_SESSION['time'])) {
		$_SESSION['time'] = time();
	}
	$t = time() - $_SESSION['time'];
	echo "Вы вошли $t секунд(ы) назад";


	//session_destroy();

?>


