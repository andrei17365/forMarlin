<?php

	session_start();

?>

<form>
	<input name="name">
	<input name="surname">
	<input type="password" name="password">
	<input name="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']?>">
	<input type="submit" name="submit">
</form>

