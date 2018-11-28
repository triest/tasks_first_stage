<?

$a = 2;
$b = 3;
/*
1. Объявите в начале скрипта две целочисленных переменных $a и $b, начальные
значения определите с помощью констант. Написать скрипт:
a. если $a и $b положительные – выведите их сумму.
b. если $а и $b отрицательные – выведите из разность.
c. если $а и $b разных знаков – выведите их произведение.
Ноль можно считать положительным числом.
*/
function numbers($one, $two)
{

    if ($one >= 0 and $two >= 0) {
        return $one + $two;
    } elseif ($one < 0 and $two < 0) {
        return $one - $two;
    } elseif ($one * $two < 0) {
        return $one * $two;
    }
}

echo "1:\n";
echo numbers($a, $b);

echo "\n2:\n";
echo max($a, $b);

echo "\n3:\n";
/*
3. Присвойте $а значение в промежутке [0..9]. С помощью оператора switch
организуйте вывод чисел от $a до 9;

*/
$a = 4;
echo "Swith \n";
switch ($a) {
    case 0:
        echo "0, 1,2,3,4,5,6,7,8,9";
        break;
    case 1:
        echo "1,2,3,4,5,6,7,8,9";
        break;
    case 2:
        echo "2,3,4,5,6,7,8,9";
        break;
    case 3:
        echo "3,4,5,6,7,8,9";
        break;
    case 4:
        echo "4,5,6,7,8,9";
        break;
    case 5:
        echo "5,6,7,8,9";
        break;
    case 6:
        echo "6,7,8,9";
        break;
    case 7:
        echo " \n 7,8,9";
        break;
    case 8:
        echo "8,9";
        break;
    case 9:
        echo "9";
        break;

    default:
        break;
}

#functions for task 4
/*4. Реализуйте все арифметические операции в виде функций с двумя параметрами.
*/
echo "/n";
function add($a, $b)
{
    return $a + $b;
}

function minus($a, $b)
{
    return $a - $b;
}

function multi($a, $b)
{
    return $a * $b;
}

function devide($a, $b)
{
    if ($b != 0) {
        return $a / $b;
    } else {
        return null;
    }
}

$a = 6;
$b = 2;
echo "\n";
echo "functions math";
echo "\n";
echo add($a, $b);
echo "\n";
echo minus($a, $b);
echo "\n";
echo multi($a, $b);
echo "\n";
echo devide($a, $b);
echo "\n";

/*
5. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
$operation), где $arg1, $arg2 – значения аргументов. $operation – строка с названием
операции. В зависимости от переданного значения операции выполните одну из
арифметических операций (используйте функции из пункта 4) и верните
полученное значение (используйте switch).
*/
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'plus':
            return add($arg1, $arg2);
        case 'minus':
            return minus($arg1, $arg2);
        case 'multi':
            return multi($arg1, $arg2);
        case 'devide':
            return devide($arg1, $arg2);
        default:
            break;
    }
}

echo mathOperation(1, 2, "devide");

function max1($arg1, $arg2)
{
    if ($arg1 > $arg2) {
        return $arg1;
    }
    if ($arg1 < $arg2) { //2.
        return $arg2;
    }

}

function min1($arg1, $arg2)
{
    if ($arg1 < $arg2) {
        return $arg1;
    }
    if ($arg1 > $arg2) {
        return $arg2;
    }
}


/*
6. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
function power($val, $pow), где $val – заданное число, $pow – степень.

*/

function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } elseif ($pow < 0) {
        return power(1 / $val, -$pow); //отрицательная степень
    }

    return $val * power($val, $pow - 1);
}

echo "task 6";

echo " \n 3^2= ";
echo power(3, 2);

echo " \n 3^0= ";
echo power(3, 0);

echo " \n 9^-2= ";
echo power(9, -2);

echo " \ntask 7 \n";
/*
7. Написать функцию, которая принимают в качестве аргументов два числа и
вычисляет из них большее. Написать такую же функцию, чтобы она вычисляла
меньшее число.
Проверить, если произведение $a и $b больше 100, но меньше 1000, то от большего
числа отнять меньшее и вывести результат на экран. А если произведение этих
чисел больше 1000, то произведение этих чисел разделить на большее из чисел.

*/
$a = 20;
$b = 30;
function calc($a, $b)
{
	$multi=$a*$b;
	$max=max1($multi, 100) ;
	$min=min1($multi, 1000);

    if ($max > 100 and $min < 1000) {
        return $max - $min;
    } elseif ($max > 1000) {
        return ($multi) / max1($a, $b);
    }
}

echo "\n";
echo calc($a, $b);