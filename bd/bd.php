<?php
include_once "gifresizer.php";

$host = 'localhost'; // адрес сервера 
$database = 'basephp'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 $query ="select * from images";
 $query ="select * from images order by views";
 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
  //  echo $rows;
 }   
// выполняем операции с базой данных
     
// закрываем подключение
mysqli_close($link);
?>


<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("uploads/" . $filename)){
                echo $filename . " is already exists.";
            } else{
            	echo "Old filename:"; echo $filename;
            	$ext = end(explode(".", $filename));
            	$filename_new=md5(microtime(true));
            	$filename_new=$filename_new.'.'.$ext;
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $filename_new);
                $new_widht=200;$new_hight=200;
                // создаём уменшеную копию
                $filename='uploads/'.$filename_new;
                list($widht,$hight)=getimagesize($filename);
                $newfile=imagecreatefromjpeg($filename);
                $newwidth=$new_widht;
                $newheigt=$new_hight;
                $thumb='uploads_small/'.$filename_new;
                $truecolor=imagecreatetruecolor($new_widht, $new_hight);
                if($ext==="gif"){
                  //  system("convert ".$filename ."-coalesce coalesce.gif");
                  //  system("convert -size 200x100 coalesce.gif -resize 200x10 small.gif");
                }
                    else{
                imagecopyresampled($truecolor, $newfile, 0, 0, 0, 0, $newwidth, $newheigt, $widht, $hight);
                imagejpeg($truecolor,$thumb,100);
}
                echo $name; echo "<br>";
             //   die();
                 $query ="INSERT INTO `images`( `name`) VALUES ('$filename_new')";
                 echo $query;
               $link = mysqli_connect($host, $user, $password, $database); 
    // выполняем запрос
  				  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
mysqli_close($link);
           
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}


function gifResize($file_origin,$file_dest,$percent){       
   $crop_w = 0;
   $crop_h = 0;
   $crop_x = 0;
   $crop_y = 0;
   $image = new Imagick($file_origin);
   $originalWidth = $image->getImageWidth();
   $originalHeight = $image->getImageHeight();
   $size_w = ($originalWidth*$percent)/100;
   $size_h = ($originalHeight*$percent)/100;
   if(($size_w-$originalWidth)>($size_h-$originalHeight)){
       $s = $size_h/$originalHeight;
       $size_w = round($originalWidth*$s);
       $size_h = round($originalHeight*$s);
   }else{
       $s = $size_w/$originalWidth;
       $size_w = round($originalWidth*$s);
       $size_h = round($originalHeight*$s);
   }       
   $image = $image->coalesceImages();

   foreach ($image as $frame) {
       $frame->cropImage($crop_w, $crop_h, $crop_x, $crop_y);
       $frame->thumbnailImage($size_h, $size_w);
       $frame->setImagePage($size_h, $size_w, 0, 0);
   }
   $imageContent = $image->getImagesBlob();
   $fp = fopen($file_dest,'w');
   fwrite($fp,$imageContent);
   fclose($fp);

}

if(isset($_GET['get_image'])){
//	echo $_GET['get_image'];
}
?>



<?php

    $link = mysqli_connect($host, $user, $password, $database); 
//фильтрует название
  $query ="SELECT id,name,type,views FROM `images` ORDER BY views DESC";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Галлерея изображений c базой данных</title>
</head>
<body>
	<div class="container">
<div class="row">
 	 <form action="#" method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>



 
 <?
  for ($i = 0 ; $i < $rows ; ++$i)
    {
          if($result)
{
        $row = mysqli_fetch_row($result);
      //	echo "<a href='detail.php\\?image=$image'>";
            echo "<a href='detailbd.php\\?image=$row[1]'>"; echo "<br>";
        echo "<img src='uploads_small\\$row[1]' \>"; echo "<br>";
         echo "</a>";
           echo "Просмотры:"; echo "$row[3]";
     }
    }
 ?>
	</div>
</div>
</body>
</html>