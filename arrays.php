<?

echo "string";
header('Content-Type: text/html; charset=utf-8');
echo "task1";
   

$i=0;
while ($i <=100) {
	$temp=$i%3;
	if($temp==0){
		echo $i." ";
	}
$i++;
	}

echo "\n";
echo "task2\n";

$i=0;

do{
$temp=$i%2;
	if($temp==0){
		echo $i." четное";
	}
	 else{
	 	echo $i." не четное";
	 }
	 echo "\n";
$i++;
}while ( $i<= 10);

echo "\n task3 \n";

for ($i=0; $i < 9; $i++,print_r($i)) { 
	# code...
}

echo "\n task4 \n";

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

echo "\n task5 \n";

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
echo "Task 6\n";


$verbs=array('а'=> 'a', 'б' => 'b', 'в'=> 'v', 'г' => 'g','э' => 'e', 'ю' => 'yu', 'я' => 'ya');

function transtation($input,$verbs){
	//echo $input;
	$input=str_split($input);
	//print_r($input);
	$rez='';
	//print_r($verbs);
	foreach ($input as $key) {
	       echo $key;
	     // var_dump($verbs[$key]);
	       // echo "string";
	}
	return $rez;
}

$answer=transtation('абвг',$verbs);
//echo "Answer:";
//echo $answer;

echo "Task 7";

function space($str){
   
   return str_replace(' ', '_', $str);
}

$temp=space("Ghbdtn mir");
echo $temp;

echo "Task 8";