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

         //На SELECT
    	$query = "SELECT * FROM workers WHERE id = 3";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));

    	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    	var_dump($data);
    	echo '<br>';

    	$query1 = "SELECT * FROM workers WHERE salary = 1000";
    	$result = mysqli_query($link, $query1) or die(mysqli_error($link));

    	for ($data1 = []; $row = mysqli_fetch_assoc($result); $data1[] = $row);
    	var_dump($data1);
    	echo '<br>';

    	$query2 = "SELECT * FROM workers WHERE age = 23";
    	$result = mysqli_query($link, $query2) or die(mysqli_error($link));

    	for ($data2 = []; $row = mysqli_fetch_assoc($result); $data2[] = $row);
    	var_dump($data2);
    	echo '<br>';

    	$query3 = "SELECT * FROM workers WHERE salary > 400";
    	$result = mysqli_query($link, $query3) or die(mysqli_error($link));

    	for ($data3 = []; $row = mysqli_fetch_assoc($result); $data3[] = $row);
    	var_dump($data3);
    	echo '<br>';

    	$query4 = "SELECT * FROM workers WHERE salary >= 500";
    	$result = mysqli_query($link, $query4) or die(mysqli_error($link));
    	for ($data4 = []; $row = mysqli_fetch_assoc($result); $data4[] = $row);
    	var_dump($data4);
    	echo '<br>';

    	$query5 = "SELECT * FROM workers WHERE salary != 500";
    	$result = mysqli_query($link, $query5) or die(mysqli_error($link));
    	for ($data5 = []; $row = mysqli_fetch_assoc($result); $data5[] = $row);
    	var_dump($data5);
    	echo '<br>';

    	$query6 = "SELECT * FROM workers WHERE salary <= 900";
    	$result = mysqli_query($link, $query6) or die(mysqli_error($link));
    	for ($data6 = []; $row = mysqli_fetch_assoc($result); $data6[] = $row);
    	var_dump($data6);
    	echo '<br>';

    	$query7 = "SELECT * FROM workers WHERE name = 'Вася'";
    	$result = mysqli_query($link, $query7) or die(mysqli_error($link));
    	for ($data7 = []; $row = mysqli_fetch_assoc($result); $data7[] = $row);
    	var_dump($data7);
    	echo '<br><br>';

    	//На OR и AND
    	$query = "SELECT * FROM workers WHERE age > 25 AND age <= 28";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data8 = []; $row = mysqli_fetch_assoc($result); $data8[] = $row);
    	var_dump($data8);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE name = 'Петя'";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data9 = []; $row = mysqli_fetch_assoc($result); $data9[] = $row);
    	var_dump($data9);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data10 = []; $row = mysqli_fetch_assoc($result); $data10[] = $row);
    	var_dump($data10);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE name != 'Петя'";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data11 = []; $row = mysqli_fetch_assoc($result); $data11[] = $row);
    	var_dump($data11);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data12 = []; $row = mysqli_fetch_assoc($result); $data12[] = $row);
    	var_dump($data12);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE age >= 23 AND age < 27 OR salary = 1000";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data13 = []; $row = mysqli_fetch_assoc($result); $data13[] = $row);
    	var_dump($data13);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE age >= 23 AND age <= 27 OR salary >= 400 AND salary <= 1000";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data14 = []; $row = mysqli_fetch_assoc($result); $data14[] = $row);
    	var_dump($data14);
    	echo '<br><br>';

    	$query = "SELECT * FROM workers WHERE age = 27 OR salary != 400";
    	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    	for ($data15 = []; $row = mysqli_fetch_assoc($result); $data15[] = $row);
    	var_dump($data15);
    	echo '<br><br>';

    	//На INSERT
    	/*$query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
    	mysqli_query ($link, $query) or die(mysqli_error($link));

    	$query = "INSERT INTO workers (name, age, salary) VALUES ('Светлана', 26, 1200)";
    	mysqli_query ($link, $query) or die(mysqli_error($link));

    	$query = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), ('Петр', 31, 1000)";
    	mysqli_query ($link, $query) or die(mysqli_error($link));*/

    	//На DELETE
    	/*$query = "DELETE FROM workers WHERE id=7";
    	mysqli_query ($link, $query) or die(mysqli_error($link));

    	$query = "DELETE FROM workers WHERE name='Коля'";
    	mysqli_query ($link, $query) or die(mysqli_error($link));

    	$query = "DELETE FROM workers WHERE age=23";
    	mysqli_query ($link, $query) or die(mysqli_error($link));*/

    	//На UPDATE
    	$query = "UPDATE workers SET salary=200 WHERE name = 'Вася'";
    	mysqli_query ($link, $query);

    	$query = "UPDATE workers SET age = 35 WHERE id = 4";
    	mysqli_query ($link, $query);

    	$query = "UPDATE workers SET salary=700 WHERE salary=500";
    	mysqli_query ($link, $query);

    	$query = "UPDATE workers SET age = 35 WHERE id > 2 AND id <= 5";
    	mysqli_query ($link, $query);

    	$query = "UPDATE workers SET name = 'Женя', salary = 900  WHERE name='Вася'";
    	mysqli_query ($link, $query);

?>
