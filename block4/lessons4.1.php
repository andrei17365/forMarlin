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

		$name = $data[0]['name'];
		$age = $data[0]['age'];
		$salary = $data[0]['salary'];


    	if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['salary'])) {

    		$query = "UPDATE workers SET name='$_POST[name]', age=$_POST[age], salary=$_POST[salary] WHERE id=$_GET[get]";
    		mysqli_query($link, $query) or die(mysqli_error($link));
    	}

?>

<form action='' method="POST">
<?php
	echo "<input type=\"text\" name=\"name\" value=\"$name\">";
	echo "<input type=\"text\" name=\"age\" value=\"$age\">";
	echo "<input type=\"text\" name=\"salary\" value=\"$salary\">";
?>
<input type="submit" value="Редактировать">
</form>

<a href="lessons4.php">назад</a>