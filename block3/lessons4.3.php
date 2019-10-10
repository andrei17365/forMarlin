<?php

	session_start();

	if(!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 0;
	} else {
		$_SESSION['counter'] = $_SESSION['counter']+1;
	}
	if ($_SESSION['counter'] == 0){
		echo 'Вы еще не обновляли страницу.';
	} else {
		echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';
	}

	//session_destroy();

?>


