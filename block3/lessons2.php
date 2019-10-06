<?php                                 //GET-запросы
	echo $_GET['get'];
	echo '<br>';
?>

<?php
	echo $_GET['get']*$_GET['get'];
	echo '<br>';
?>

<?php
	echo $_GET['get1']+$_GET['get2'];
	echo '<br>';
?>

<?php
	if ($_GET['get']==1){
		echo "привет";
	}
	if ($_GET['get']==2){
		echo 'пока';
	}
	echo '<br>';
?>

<?php                              //GET-запросы и массивы
	$arr = ['a', 'b', 'c', 'd', 'e'];
	if (isset($arr[$_GET['get']]))
		echo $arr[$_GET['get']];
	echo '<br>';
?>

<?php                              //GET-запросы и ссылки
	if (isset($_GET['get'])){
		echo $_GET['get'];
	}
	echo '<br>';
?>

<a href="http://andrei17365/block3/lessons2.php/?get=1">ссылка 1</a>
<a href="http://andrei17365/block3/lessons2.php/?get=2">ссылка 2</a>
<a href="http://andrei17365/block3/lessons2.php/?get=3">ссылка 3</a>
<br>


<?php                              //Ссылки и циклы
	if (isset($_GET['get'])){
		echo $_GET['get'];
	}
	echo '<br>';

	for ($i=1; $i<=10; $i++){
		echo "<a href=\"http://andrei17365/block3/lessons2.php/?get=$i\">ссылка $i</a> ";
	}
?>

<?php
	if (isset($_GET['get'])){
		echo $_GET['get'];
	}
	echo '<br>';

	for ($i=1; $i<=10; $i++){
		echo "<p><a href=\"http://andrei17365/block3/lessons2.php/?get=$i\">ссылка $i</a></p>";
	}
?>

<?php
	if (isset($_GET['get'])){
		echo $_GET['get'];
	}
	echo '<br>';
	echo '<ul>';
	for ($i=1; $i<=10; $i++){
		echo "<li><a href=\"http://andrei17365/block3/lessons2.php/?get=$i\">ссылка $i</a></li>";
	}
	echo '</ul>';
?>

<?php                              //Ссылки и массивы
	$arr1 = ['a', 'b', 'c', 'd', 'e'];
	if (isset($_GET['get']) and isset($arr1[$_GET['get']]))
		echo $arr1[$_GET['get']];
	echo '<br>';
?>
<a href="http://andrei17365/block3/lessons2.php/?get=0">ссылка 0</a>
<a href="http://andrei17365/block3/lessons2.php/?get=1">ссылка 1</a>
<a href="http://andrei17365/block3/lessons2.php/?get=2">ссылка 2</a>
<a href="http://andrei17365/block3/lessons2.php/?get=3">ссылка 3</a>
<a href="http://andrei17365/block3/lessons2.php/?get=4">ссылка 4</a>
<br>

<?php
	$arr2 = ['a', 'b', 'c', 'd', 'e'];
	if (isset($_GET['get']) and isset($arr2[$_GET['get']]))
		foreach ($arr2 as $key => $value) {
			echo "<a href=\"http://andrei17365/block3/lessons2.php/?get=$key\">ссылка $value</a>  ";
		}
	echo '<br>';
?>