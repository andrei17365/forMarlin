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
        $query = "SELECT * FROM workers WHERE id > 0";

    //Делаем запрос к БД, результат запроса пишем в $result:
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
        for ($data = []; $row = mysqli_fetch_array($result); $data[] = $row);


		echo "<table><tr><th>id</th><th>name</th><th>age</th><th>salary</th><th>удаление</th><th>редактировать</th></tr>";
    	foreach ($data as $user) {
    		echo "<tr>";
    		echo "<td>$user[id]</td><td>$user[name]</td><td>$user[age]</td><td>$user[salary]</td><td><a href=\"?del_id=$user[id]\">удалить</a></td><td><a href=\"lessons4.1.php/?get=$user[id]\">редактировать</a></td>";
    		echo "<tr>";
    	}

    	echo "</table>";


    	if (isset($_GET['del_id'])) {
    		$query = "DELETE FROM workers WHERE id=$_GET[del_id]";
    		mysqli_query($link, $query) or die(mysqli_error($link));
    	}

    	if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['salary'])) {
    		$query = "INSERT INTO workers (name, age, salary) VALUES ('$_POST[name]', $_POST[age], $_POST[salary])";
    		mysqli_query($link, $query) or die(mysqli_error($link));
    	}

?>

<form action='' method="POST">
	<input type="text" name="name">
	<input type="text" name="age">
	<input type="text" name="salary">
	<input type="submit" value="Добавить нового работника">
</form>
