<?

header('Content-Type: text/html; charset=utf-8');
echo "Task 1 \n";
//header('Content-Type: text/html; charset=utf-8');

/*
1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые
делятся на 3 без остатка.

*/

$i = 0;
while ($i <= 100) {
    $temp = $i % 3;
    if ($temp == 0) {
        echo $i . " ";
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
echo "task2\n";
echo "<br>";

$i = 0;

do {
    if ($i == 0) {
        echo "Это 0 \n";     
    } else {
        $temp = $i % 2;
        if ($temp == 0) {
            echo $i . " четное";
        } else {
            echo $i . " не четное";
        }
        echo "\n";
    }
    $i++;   //вынесен
} while ($i <= 10);

echo "<br>";
echo "\n task3 \n";
echo "<br>";
/*
3. Задание со звездочкой. Выведите с помощью цикла for числа от 0 до 9, НЕ
используя тело цикла. То есть выглядеть должно вот так:
for(…){// здесь пусто}
 */
for ($i = 0; $i < 9; $i++, print($i . ', ')) { //исправлен вывод
    # code...
}
echo "<br>";
echo "\n task4 \n";
echo "<br>";


/*5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
только города, начинающиеся с буквы «К».
*/




$arr = array(
    'Московская  область' => ["Москва", "Королев"],
    'Ленинградская область' => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    'Рязанская область' => ["Касимов", "Кораблино", "Михайлов", "Новомичуринск"]

);


$keys = array_keys($arr);


function print_cir($str)
{
    echo iconv("CP1251", "CP866", $str);
}

function serach_city($arr, $char)
{
    $keys = array_keys($arr);

    foreach ($keys as $key) {
        echo($key);
        echo ":";
        echo "\n";
        foreach ($arr[$key] as $city) {
            mb_internal_encoding("UTF-8");
            $temp = mb_substr($city, 0, 1);
            if ($temp === "К") {
                echo $city;
                echo ", ";
            }
        }
        echo "<br>";
    }
}

serach_city($arr, 'К');
serach_city($arr, 'К');
echo "<br>";
echo $temp;