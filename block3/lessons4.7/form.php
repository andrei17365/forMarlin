<?php

	session_start();

	//session_destroy();

?>


<form>
	<input name="name">
	<input name="age" value="<?php if (isset($_SESSION['age'])) echo $_SESSION['age']?>">
	<input name="city" value="<?php if (isset($_SESSION['city'])) echo $_SESSION['city']?>">
	<input type="submit" name="submit">
</form>