<?php

//echo $_SERVER['QUERY_STRING']; 
$quwery=$_SERVER['QUERY_STRING'];
parse_str($quwery, $get_array);

print_r($get_array); 
//echo $get_array['image'];
$image_folder="uploads/"; echo "<br>";
//echo "imafe folder ";
//echo $image_folder;
echo "<br>"; 
$image=$get_array['image'];echo "<br>";
echo "image:";
print_r($image); echo "<br>";
//echo $image['image'];
$rez= $image_folder.$image;
//echo "Rez "; echo $rez; echo "<br>";
//echo $_SERVER['SERVER_NAME'] ;
$url=$rez;
$url="base/uploads/".$image;
echo $url;
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Изображение</title>
    </head>
    <body>
   
   <?
     echo "/uploads/$row[1]";echo "<br>";
  echo "<img src='/uploads/$image' width=\"500\" height=\"600\" \>";
  ?>
echo " <a href="http://base/file.php">Click here</a>";
    </body>
    </html>