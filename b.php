<?
$name=$_COOKIE['auch'];
//echo "auth: ";
//echo $name; echo "\n";
setcookie($name,'b');

echo "is are page B";
?>


  <!DOCTYPE html>
    <html>
    <head>
        <title>B</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <style type="text/css">
         .input-group-addon {
    min-width:300px;
    text-align:left;
}
       </style>
    </head>
    <body>
      <br><br>
      <div class="container">
  <div class="row">
   Это страница B.
       </div>
     </div>

    </body>
    </html>