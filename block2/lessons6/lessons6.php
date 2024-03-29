<?php


function rus2translit($text)
{
	// Русский алфавит
	$rus_alphabet = array(
		'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
		'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
		'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
		'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
		'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
		'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
	);

	// Английская транслитерация
	$rus_alphabet_translit = array(
		'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
		'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
		'H', 'C', 'CH', 'SH', 'SH', '`', 'Y', '`', 'E', 'IU', 'IA',
		'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
		'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
		'h', 'c', 'ch', 'sh', 'sh', '`', 'y', '`', 'e', 'iu', 'ia'
	);

	return str_replace($rus_alphabet, $rus_alphabet_translit, $text);
}

$lorem = 'Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих
наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно
говорил этот человек, открывший истину, которого я бы назвал зодчим счастливой жизни. Действительно,
никто не отвергает, не презирает, не избегает наслаждений только из-за того, что это наслаждения,
но лишь из-за того, что тех, кто не умеет разумно предаваться наслаждениям, постигают великие
страдания. Равно как нет никого, кто возлюбил бы, предпочел и возжаждал бы само страдание только
за то, что это страдание, а не потому, что иной раз возникают такие обстоятельства, когда страдания
и боль приносят некое и немалое наслаждение. Если воспользоваться простейшим примером, то кто из нас
стал бы заниматься какими бы то ни было тягостными физическими упражнениями, если бы это не приносило
с собой некоей пользы? И кто мог бы по справедливости упрекнуть стремящегося к наслаждению, которое
не несло бы с собой никаких неприятностей, или того, кто избегал бы такого страдания, которое
не приносило бы с собой никакого наслаждения?';

echo rus2translit($lorem);
echo '<br>';
?>

<?php

	function func($num, $str1, $str2, $str3){
		if ($num == 1){
			$str4 = $num.' '.$str1;
		}
		if ($num == 2 or $nun == 3 or $num == 4){
			$str4 = $num.' '.$str2;
		}
		if ($num > 4){
			$str4 = $num.' '.$str3;
		}
		return $str4;
	}

	echo func(5, 'яблоко', 'яблока', 'яблок');
	echo '<br>';
?>

<?php

	function digitToString($a){
		$zero = 6-strlen($a);
		$str = '';
		for ($zero; $zero>0; $zero--){
			$str .=0;
		}
		$str.=$a;
		return $str;
	}

	$ticket = [];
	for ($i=0; $i<=999999; $i++){
		$ticket[] = digitToString($i);
	}
	foreach ($ticket as $elem) {
		if (($elem[0]+$elem[1]+$elem[2]) == ($elem[3]+$elem[4]+$elem[5])){
			echo ($elem.' ');
		}
	}


	echo '<br>';
?>

<?php
	function getDivisors($a){
		$arr4 = [];
		for ($i=1; $i<$a; $i++){
			if ($a%$i == 0){
				$arr4[] = $i;
			}
		}
		return $arr4;
	}

	function getArrSum($a){
		return array_sum($a);
	}

	for ($i=1; $i<=10000; $i++){
		$a = getArrSum(getDivisors($i));
		if ($i == getArrSum(getDivisors($a))) {
			echo ($i.' и '.$a.'<br>');
		}
	}

	echo '<br>';
?>