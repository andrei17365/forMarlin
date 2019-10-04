<?php

	if (isset($_REQUEST['hello']) and $_REQUEST['hello']==0) {
		echo 'не отмечен';
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello']==1) {
		echo 'отмечен';
	}
	echo '<br><br>';
?>

<form action='' method="GET">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>
<br><br>


<?php
		function input ($a, $b){
			return '<input type="text" name="'.$a.'" value="'.$b.'">';
		}

		echo input('age', 25);
		echo '<br>';
?>
<form action='' method="GET">

	<input type="submit">
</form>
<br><br>

<?php
    function input($name, $value)
    {
        if(isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
        }

        return '<input type="text" name="'.$name.'" value="'.$value.'">';
    }
?>


<form action="" method="GET">
    <p>html<input type="checkbox" name="lang[]" value="html"></p>
    <p>css<input type="checkbox" name="lang[]" value="css"></p>
    <p>php<input type="checkbox" name="lang[]" value="php"></p>
    <p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
    <input type="submit">
</form>

<?php
    if(isset($_REQUEST['lang']))
    {
        echo 'Вы знаете: ' . implode(',', $_REQUEST['lang']);
    }
?>


<form action="" method="GET">
    <p>Вы знаете PHP?</p>
    <p>да<input type="radio" name="php" value="1"></p>
    <p>нет<input type="radio" name="php" value="0"></p>
    <input type="submit">
</form>

<?php
    if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
        echo 'Вы не знаете PHP';
    }

    if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
        echo 'Вы  знаете PHP!';
    }
?>


<?php
    function input($type, $name, $value)
    {
        return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
    }
    echo input('text', 'input', '1');
?>


<?php
    function input($type, $name, $value)
    {
        if(isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
        }

        return '<input type="text" name="'.$name.'" value="'.$value.'">';
    }
    echo input('text', 'input', '1');
?>


<?php
    function input($name)
    {
        return '<input type="hidden" name="'.$name.'" value="0">
        <input type="checkbox" name="'.$name.'" value="1">';
    }
    echo input('checkbox');
?>