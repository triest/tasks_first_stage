<?php
$host = 'localhost'; // адрес сервера 
$database = 'basephp'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

//echo $_SERVER['QUERY_STRING']; 
$quwery=$_SERVER['QUERY_STRING'];
parse_str($quwery, $get_array);

//print_r($get_array); 
//echo $get_array['image'];
$image_folder="uploads/"; echo "<br>";
//echo "imafe folder ";
//echo $image_folder;
//echo "<br>"; 
$image=$get_array['image'];echo "<br>";
//echo "image:";
//print_r($image); echo "<br>";
//echo $image['image'];
$rez= $image_folder.$image;

$url=$rez;


$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$query=  "UPDATE images 
    SET views = views + 1
    WHERE name = '".$image."'";

 //  echo $query; 

 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

//get views

 $query=  "SELECT views FROM `images`
    WHERE name = '".$image."'limit 1 ";

     $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 if($result)
{
    $row = mysqli_fetch_row($result);
  
 }   


?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Изображение</title>
    </head>
    <body>
   

    <?
      echo "Просмотры:"; echo "$row[0]"; echo "<br>";

  echo "<img src='/uploads/$image' width=\"500\" height=\"600\" \>";
  ?>
   <br>
  <a href="http://base/bd.php">Click here</a>
    </body>
    </html>