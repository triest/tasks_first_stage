<?

echo "Tesk1:";echo "\n";
echo "test";
$var=1; 

echo "\n";
echo $var;

echo "\n";
$var=3/4;
echo $var;

echo "\n";
define(TestConst, 42);
echo TestConst;

echo "\n";
echo decbin(42);
echo "\n";
echo dechex(42);

echo "\n";
echo "Task2:";echo "\n";


$var=1; 

echo "\n";
echo "$var";

echo "\n";
$var=3/4;
echo "$var";

echo "\n";
define(TestConst, 42);
echo "TestConst";

echo "\n";
echo decbin("42");
echo "\n";
echo dechex("42");

echo "\n";
echo "Task2:";echo "\n";


$var=1; 

echo "\n";
echo '$var';

echo "\n";
$var=3/4;
echo '$var';

echo "\n";
define(TestConst, 42);
echo 'TestConst';

echo "\n";
echo decbin('42');
echo "\n";
echo dechex('42');


echo "\n";
echo "Task3:";echo "\n";

echo "Bin:"; echo "\n";
for ($i=10; $i<20 ; $i++) {
	echo decbin($i);
	echo "\n";
	}
echo "Hex";echo "\n";
for ($i=0; $i<=15 ; $i++) {
	echo ($i);
	echo " ";
	}

echo "\n";
echo "Task5 \n" ;

$str1="Я помню чудное мгновенье:";
$str2="Передо мной явилась ты,";
$str3="Как мимолетное виденье,";
$str4="Как гений чистой красоты.”";
$str5="А.С. Пушкин";

echo $str1."\n";
echo $str2."\n";
echo $str3."\n";
echo $str4."\n";
echo "'<i>'". $str5."'</i>'";

echo "\n";
echo "Task6 \n" ;
echo $str1."\n".$str2."\n".$str3."\n".$str4."\n".$str5;

echo "Task7 \n";

$var1=10;
$var2='Привет';
$var1=$var1+$var2;
echo $var1;  //не численое значение. сложение не возможно


echo "\nTask8 \n";

echo "\n Functions \n";

