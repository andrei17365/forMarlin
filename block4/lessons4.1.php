<?php
    //Устанавливаем доступы к базе данных:
        $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
        $user = 'root'; //имя пользователя, по умолчанию это root
        $password = ''; //пароль, по умолчанию пустой
        $db_name = 'test'; //имя базы данных

    //Соединяемся с базой данных используя наши доступы:
        $link = mysqli_connect($host, $user, $password, $db_name);

    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
        mysqli_query($link, "SET NAMES 'utf8'");

    //Формируем тестовый запрос:
        $query = "SELECT * FROM workers WHERE id = $_GET[get]";

    //Делаем запрос к БД, результат запроса пишем в $result:
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
		for ($data = []; $row = mysqli_fetch_array($result); $data[] = $row);

			echo $_POST;

    	if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['salary'])) {
    		if ($_POST[name]!=='Имя' && $_POST[age]!=='Возраст' && $_POST[salary]!=='Зарплата') {
    			$query = "UPDATE workers SET name='$_POST[name]', age=$_POST[age], salary=$_POST[salary] WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    		if ($_POST[name]!=='Имя' && $_POST[age]!=='Возраст') {
    			$query = "UPDATE workers SET name='$_POST[name]', age=$_POST[age] WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    		if ($_POST[name]!=='Имя' && $_POST[salary]!=='Зарплата') {
    			$query = "UPDATE workers SET name='$_POST[name]', salary=$_POST[salary] WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    		if ($_POST[age]!=='Возраст' && $_POST[salary]!=='Зарплата') {
    			$query = "UPDATE workers SET age=$_POST[age], salary=$_POST[salary] WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    		if ($_POST[name]!=='Имя') {
    			$query = "UPDATE workers SET name='$_POST[name]' WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    		if ($_POST[age]!=='Возраст') {
    			$query = "UPDATE workers SET age=$_POST[age] WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    		if ($_POST[salary]!=='Зарплата') {
    			$query = "UPDATE workers SET salary=$_POST[salary] WHERE id=$_GET[get]";
    			mysqli_query($link, $query) or die(mysqli_error($link));
    		}
    	}

?>

<form action='' method="POST">
	<input type="text" name="name" value="Имя">
	<input type="text" name="age" value="Возраст">
	<input type="text" name="salary" value="Зарплата">
	<input type="submit" value="Редактировать">
</form>

<a href="lessons4.php">назад</a>