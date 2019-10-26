<?php
	if (isset($_GET['get'])){
	switch ($_GET['get']) {
		case 1:
			setcookie("box[1]",200000,time()+3600);
			break;

		case 2:
			setcookie("box[2]",220000,time()+3600);
			break;

		case 3:
			setcookie("box[3]",100000,time()+3600);
			break;

		case 4:
			setcookie("box[4]",150000,time()+3600);
			break;

		case 5:
			setcookie("box[5]",80000,time()+3600);
			break;
	}
	}



	if (isset($_COOKIE['box'])){
		$sum=array_sum($_COOKIE['box']);
		$num=count($_COOKIE['box']);
		echo "В корзине $num единиц товара на сумму $sum долларов.<br>";
	}

	var_dump($_COOKIE["box"]);

?>

<html>
	<p>
		<img src="1.webp" width="400"><br>
		Цена 200000$
		<a href="http://andrei17365/block3/lessons5/lessons5.7/lessons5.7.php?car1=в+корзину&get=1">в корзину</a>
	</p>
	<p>
		<img src="2.webp" width="400"><br>
		Цена 220000$
		<a href="http://andrei17365/block3/lessons5/lessons5.7/lessons5.7.php?car2=в+корзину&get=2">в корзину</a>
	</p>
	<p>
		<img src="3.webp" width="400"><br>
		Цена 100000$
		<a href="http://andrei17365/block3/lessons5/lessons5.7/lessons5.7.php?car3=в+корзину&get=3">в корзину</a>
	</p>
	<p>
		<img src="4.webp" width="400"><br>
		Цена 150000$
		<a href="http://andrei17365/block3/lessons5/lessons5.7/lessons5.7.php?car4=в+корзину&get=4">в корзину</a>
	</p>
	<p>
		<img src="5.webp" width="400"><br>
		Цена 80000
		<a href="http://andrei17365/block3/lessons5/lessons5.7/lessons5.7.php?car5=в+корзину&get=5">в корзину</a>
	</p>
</html>