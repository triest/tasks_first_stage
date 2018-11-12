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
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $filename);
                $new_widht=200;$new_hight=200;
                // создаём уменшеную копию
                $filename='uploads/'.$_FILES['photo']['name'];
                list($widht,$hight)=getimagesize($filename);
                $newfile=imagecreatefromjpeg($filename);
                $newwidth=$new_widht;
                $newheigt=$new_hight;
                $thumb='uploads_small/'.$_FILES["photo"]['name'];
                $truecolor=imagecreatetruecolor($new_widht, $new_hight);
                imagecopyresampled($truecolor, $newfile, 0, 0, 0, 0, $newwidth, $newheigt, $widht, $hight);
                imagejpeg($truecolor,$thumb,100);

           
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}

if(isset($_GET['get_image'])){
	echo $_GET['get_image'];
}
?>

<?php
//images in dir
$image_folder="uploads_small/";
$images=scandir($image_folder); echo "<br>"; //надо с третьего смотреть
unset($images[0]);
unset($images[1]);
foreach ($images as $image) {
	if ($image!='.' && $image!='..'){
//	echo $image; echo "<br>";

	}

}

//фильтрует название



?>

<!DOCTYPE html>
<html>
<head>
	<title>Галлерея изображени</title>
</head>
<body>
 	 <form action="#" method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>

<?foreach ($images as $image) {
	echo "<a href='detail.php\\?image=$image'>";
 echo "<img src='$image_folder$image' \>";
  echo "</a>";
}
 ?>
</body>
</html>