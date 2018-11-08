<?

$verbs=array('а'=> 'a', 'б' => 'b', 'в'=> 'v', 'г' => 'g','д' => 'd','е' => 'e','ё' => 'io','ж' => 'zh','г' => 'g',
'з' => 'z', 'и' => 'i', 'й' => 'j',
'г' => 'g',
'к' => 'k', 'л' => 'l','м' => 'm','н' => 'n','о' => 'o','р' => 'r','с' => 's','т' => 't','у' => 'u','ф' => 'f','х' => 'ch',
'ц' => 'c','ч' => 'ch','ш' => 'sh','щ' => 'shh','ъ' => '"','ы' => 'y','ь' => '\'','э' => 'eh','ю' => 'ju', 'я' => 'ja',
	'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => ' ','п'=>'p','_'=>'_');

function transtation($input,$verbs){
//	echo $input;
	$input = preg_split('//u', $input, -1, PREG_SPLIT_NO_EMPTY);
	//$input=str_split($input);
	print_r($input);
	$rez='';
//	print_r($verbs);
	foreach ($input as $key=>$value) {
	//	  echo "Key1: ";
	  //     echo $value;  ;
		     echo $verbs[$value];
		  //  echo "<br>";
		     $rez.=$verbs[$value];
	      // var_dump($verbs[$key]);
		 //    echo $rez;
	       // echo "string";
	}
	echo "<br>";
	echo "in translation: ";
	echo $rez; echo "<br>";
	return $rez;
}

$answer=transtation("привет_мир",$verbs);

//echo $answer;
/*
7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
возвращает видоизмененную строчку.

*/
function space($str){
   
   return str_replace(' ', '_', $str);
}


//$temp=space("Privet mir");
//echo $temp;
//echo "<br>";echo "<br>";
echo "\nTask 8 \n";echo "<br>";

/*
8. Объедините две ранее написанные функции в одну, которая получает строку на
русском языке, производит транслитерацию и замену пробелов на подчеркивания
(аналогичная задача решается при конструировании url-адресов на основе названия
статьи в блогах).

*/

function string_to_url($str){
	$str=space($str);
	echo "string to url"; echo "<br>";
	echo $str;

	$str=transtation($str,$verbs); //транслит
/*	echo "from transtation:"; echo "\n";
*/
}


$temp=string_to_url("привет мир");
//echo $temp;