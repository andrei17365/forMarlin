<?php

	session_start();

	if(isset($_SESSION['name'])&isset($_SESSION['surname'])&isset($_SESSION['age'])) {
		echo "Привет $_SESSION[name] $_SESSION[surname]. Ваш возраст $_SESSION[age] лет.";
	}

	//session_destroy();
?>

