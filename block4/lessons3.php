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
    //    $query = "SELECT * FROM workers WHERE id > 0";

    //Делаем запрос к БД, результат запроса пишем в $result:
    //    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
    //    var_dump($result);

    //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
    //    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    //    var_dump($data);

    //На LIMIT
	$query = "SELECT * FROM workers WHERE id>0 LIMIT 0,6";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	echo '<br><br>';

	$query = "SELECT * FROM workers WHERE id>0 LIMIT 1,3";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data1 = []; $row = mysqli_fetch_assoc($result); $data1[] = $row);
	var_dump($data1);
	echo '<br><br>';

	//На ORDER BY
	$query = "SELECT * FROM workers WHERE id>0 ORDER BY salary";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data2 = []; $row = mysqli_fetch_assoc($result); $data2[] = $row);
	var_dump($data2);
	echo '<br><br>';

	$query = "SELECT * FROM workers WHERE id>0 ORDER BY salary DESC";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data3 = []; $row = mysqli_fetch_assoc($result); $data3[] = $row);
	var_dump($data3);
	echo '<br><br>';

	$query = "SELECT * FROM workers WHERE id>0  ORDER BY age LIMIT 1,5";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data4 = []; $row = mysqli_fetch_assoc($result); $data4[] = $row);
	var_dump($data4);
	echo '<br><br>';

	//На COUNT
	$query = "SELECT COUNT(*) FROM workers WHERE id>0";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$count = mysqli_fetch_assoc($result);
	var_dump($count);
	echo '<br><br>';

	$query = "SELECT COUNT(*) FROM workers WHERE salary=300";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$count = mysqli_fetch_assoc($result);
	var_dump($count);
	echo '<br><br>';

	//На LIKE
	$query = "SELECT * FROM pages WHERE athor  LIKE '%ов'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data5 = []; $row = mysqli_fetch_assoc($result); $data5[] = $row);
	var_dump($data5);
	echo '<br><br>';

	$query = "SELECT * FROM pages WHERE article  LIKE '%элемент%'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data6 = []; $row = mysqli_fetch_assoc($result); $data6[] = $row);
	var_dump($data6);
	echo '<br><br>';

	$query = "SELECT * FROM workers WHERE age  LIKE '3_'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data7 = []; $row = mysqli_fetch_assoc($result); $data7[] = $row);
	var_dump($data7);
	echo '<br><br>';

	$query = "SELECT * FROM workers WHERE name  LIKE '%я'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data8 = []; $row = mysqli_fetch_assoc($result); $data8[] = $row);
	var_dump($data8);
	echo '<br><br>';

?>
