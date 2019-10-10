<?php

	session_start();

	if(!isset($_SESSION['test'])) {
		$_SESSION['test'] = 'Проба пера!';
	}
	//session_destroy();

?>
<a href="lessons4.2.2.php">next_page</a>


