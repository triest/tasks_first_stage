<?

header('Content-Type: text/html; charset=utf-8');
echo "Task 1 \n"; 
//header('Content-Type: text/html; charset=utf-8');

 /*
 1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые
делятся на 3 без остатка.

*/  

$i=0;
while ($i <=100) {
	$temp=$i%3;
	if($temp==0){
		echo $i." ";
	}
$i++;
	}
/*2. С помощью цикла do…while напишите функцию для вывода чисел от 0 до 10,
чтобы результат выглядел так:
0 – это ноль
1 – нечетное число
2 – четное число
3 – нечетное число
…
10 – четное число
*/
echo "<br>";
echo "\n";
echo "task2\n";echo "<br>";

$i=0;

do{

if ($i==0){
  echo "Это 0 \n";
  $i++;
}
	else{
		$temp=$i%2;
		if($temp==0){
			echo $i." четное";
		}
	 	else{
	 		echo $i." не четное";
	 	}
	 	echo "\n";
	$i++;
}
}while ( $i<= 10);

echo "<br>";
echo "\n task3 \n";echo "<br>";

for ($i=0; $i < 9; $i++,print_r($i)) { 
	# code...
}
echo "<br>";
echo "\n task4 \n";echo "<br>";

$arr=array(
  'Московская  область'=>["Москва","Королев"],
  'Ленинградская область'=>["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
  'Рязанская область'=>["Касимов","Кораблино","Михайлов","Новомичуринск"]

);

$keys=array_keys($arr);
print_r($keys);

function print_cir($str){
 echo iconv("CP1251", "CP866", $str);
}

foreach ($keys as $key) {
	echo ($key);echo ":"; echo "\n";
	foreach ($arr[$key] as $city) {
		echo $city;echo ",";
		# code..
	}
	echo "\n";
}
echo "<br>";
echo "\n task5 \n";echo "<br>";
/*5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
только города, начинающиеся с буквы «К».
*/
foreach ($keys as $key) {
	echo ($key);echo ":"; echo "\n";
	foreach ($arr[$key] as $city) {
		$temp=substr($city,0,1);
		// echo $temp;
	 	if ($temp === "K") {echo $city; }	
		
	}
	echo "\n";
}


echo "<br>";
echo "Task 6\n";echo "<br>";
/*
6. Объявите массив, индексами которого являются буквы русского языка, а
значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’
=> ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Напишите функцию транслитерации строк.

*/

$verbs=array('а'=> 'a', 'б' => 'b', 'в'=> 'v', 'г' => 'g','д' => 'd','е' => 'e','ё' => 'io','ж' => 'zh','г' => 'g',
'з' => 'z', 'и' => 'i', 'й' => 'j',
'г' => 'g',
'к' => 'k', 'л' => 'l','м' => 'm','н' => 'n','о' => 'o','р' => 'r','с' => 's','т' => 't','у' => 'u','ф' => 'f','х' => 'ch',
'ц' => 'c','ч' => 'ch','ш' => 'sh','щ' => 'shh','ъ' => '"','ы' => 'y','ь' => '\'','э' => 'eh','ю' => 'ju', 'я' => 'ja',
	'э' => 'e', 'ю' => 'yu', 'я' => 'ya');

function transtation($input,$verbs){
	//echo $input;
	$input = preg_split('//u', $input, -1, PREG_SPLIT_NO_EMPTY);
	//$input=str_split($input);
	print_r($input);
	$rez='';
	//print_r($verbs);
	foreach ($input as $key=>$value) {
	//	  echo "Key1: ";
	  //     echo $value;  ;
		     echo $verbs[$value];
	      // var_dump($verbs[$key]);
	       // echo "string";
	}
	return $rez;
}

$answer=transtation("абвг",$verbs);

echo $answer;

echo "<br>";
echo "\n Task 7 \n";echo "<br>";
/*
7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
возвращает видоизмененную строчку.

*/
function space($str){
   
   return str_replace(' ', '_', $str);
}


$temp=space("Ghbdtn mir");
echo $temp;
echo "<br>";echo "<br>";
echo "\nTask 8 \n";echo "<br>";

/*
8. Объедините две ранее написанные функции в одну, которая получает строку на
русском языке, производит транслитерацию и замену пробелов на подчеркивания
(аналогичная задача решается при конструировании url-адресов на основе названия
статьи в блогах).

*/

function string_to_url($str){
	$str=transtation($str,$verbs); //транслит
	echo "\n";
	echo $str;
	$str=space($str);//пробелы
	return $str;
}

 string_to_url("привет мир");