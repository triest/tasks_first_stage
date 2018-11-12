<?php

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
//echo "Rez "; echo $rez; echo "<br>";
//echo $_SERVER['SERVER_NAME'] ;
$url=$rez;
$url="base/uploads/".$image;
//echo $url;
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Изображение</title>
         <!--add boootstrap -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
  <div class="row">
      <?
   //  echo "/uploads/$row[1]";echo "<br>";
      echo "<img src='/uploads/$image' width=\"500\" height=\"600\" \>";
      ?>
      <br> <br> 

      <? echo " <a href=\"http://base/file.php\">Go Back!</a>"; ?>
    </div>
</div>
    </body>
    </html>