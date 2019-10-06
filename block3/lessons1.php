<?php                              //Переменные и строки
	$name = 'Иван';
	echo 'Привет, '.$name.'!';
	echo "Привет, $name!";
	echo '<br>';
?>

<?php
	$arr = ['name' => 'Иван', 'age' => 30];
	echo 'Привет, '.$arr['name'].'! Тебе '.$arr['age'].' лет.';
	echo '<br>';
	echo "Привет $arr[name]! Тебе $arr[age] лет.";
	echo '<br>';
	echo "Привет {$arr['name']}! Тебе {$arr['age']} лет.";
	echo '<br>';
?>

<?php                                   //Формировани тегов
	$text = '!!!';
	echo '<p>'.$text.'<p>';
	echo '<br>';
	echo "<p>$text<p>";
	echo '<br>';
?>

<?php
	$href = 'index.html';
	$text = 'ссылка';
	echo '<a href="'.$href.'">'.$text.'</a>';
	echo '<br>';
	echo "<a href=\"$href\">$text</a>";
	echo '<br>';
?>


<?php                                    //Теги и циклы
	$arr = [1,2,3,4,5];
	foreach ($arr as $elem) {
		echo "<p>$elem</p>";
	}
	echo '<br>';
?>

<?php
	$arr1 = [1,2,3,4,5];
	echo "<ul>";
	foreach ($arr1 as $elem) {
		echo "<li>$elem</li>";
	}
	echo "</ul>";
	echo '<br>';
?>

<?php
	$arr2 = [
        ['href'=>'1.html', 'text'=>'ссылка 1'],
        ['href'=>'2.html', 'text'=>'ссылка 2'],
        ['href'=>'3.html', 'text'=>'ссылка 3'],
    ];
    foreach ($arr2 as $elem) {
    	echo "<a href=\"$elem[href]\">$elem[text]</a>";
    }
    echo '<br>';
?>

<?php
	$arr3 = [
        ['href'=>'1.html', 'text'=>'ссылка 1'],
        ['href'=>'2.html', 'text'=>'ссылка 2'],
        ['href'=>'3.html', 'text'=>'ссылка 3'],
    ];
    echo "<ul>";
    foreach ($arr3 as $elem) {
    	echo "<li><a href=\"$elem[href]\">$elem[text]</a></li>";
    }
    echo "</ul>";
    echo '<br>';
?>

<?php
    $arr4 = [
        ['name'=>'Коля', 'age'=>30, 'salary'=>500],
        ['name'=>'Вася', 'age'=>31, 'salary'=>600],
        ['name'=>'Петя', 'age'=>32, 'salary'=>700],
    ];
    echo "<table><tr>";
    foreach ($arr4 as $elem) {
    	echo "<tr>";
    	foreach ($elem as $subelem) {
    		echo "<td>$subelem</td>";
    	}
    	echo "</tr>";
    }
    echo "</table></tr>";
?>
