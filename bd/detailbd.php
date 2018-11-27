<?php
$host = 'localhost'; // адрес сервера 
$database = 'basephp'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$quwery = $_SERVER['QUERY_STRING'];
parse_str($quwery, $get_array);
$image_folder = "bd/uploads/";
$image = $get_array['image'];
$rez = $image_folder . $image;
$url = $rez;
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query = "UPDATE images 
             SET views = views + 1
               WHERE name = '" . $image . "'";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$query = "SELECT views 
            FROM `images`
              WHERE name = '" . $image . "'limit 1 ";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    $row = mysqli_fetch_row($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Изображение</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <?
        echo "Просмотры:";
        echo "$row[0]";
        echo "<br>";

        echo "<img src='/bd/uploads\\$image' width=\"500\" height=\"600\" \>";
        ?>
        <br>
        <a class="btn btn-primary" href="http://tasksfirststage/bd/bd.php"> Назад </a>

    </div>
</div>
</body>
</html>