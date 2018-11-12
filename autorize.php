<?
 session_start();
$name='admin';
$pass='admin';
	//session_start();

  if(isset($_POST['SubmitButton'])){
  	$name_form=$_POST['login'];
  	$pass_form=$_POST['pass'];

  	if($name==$name_form and $pass==$pass_form){
  		//echo "True";
  		setcookie('auch',$name);
  		setcookie($name,$name);
  		$name_page=$_COOKIE['name'];
        if(isset($_COOKIE[$name])){
        	$page=$_COOKIE[$name];
        //	echo $page;
      //  	die();
        	header("Location: http://base/".$page.".php");
        		die();
        }
        else{
  			header("Location: http://base/chose.php");
           die();
       }
  	}
  	elseif($_COOKIE['name']){
  		$name_page=$_COOKIE['name'];
  	}
  	else{
  		$name_page="гость";
  	}
  }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Авторизация</title>
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
<?php echo $name_page;  ?>
       <b> Войдите: </b>
       <br>
        Логин: admin
        <br>
        Пароль: admin
        <form action="#" method="post">
           <div class="form-group">
            <div class="input-group mb-3">
          <label>Login</label>
            <input type="text" name="login"><br>
            <label>Passowrd</label>
            <input type="text" name="pass"><br>
          </div>
            <input type="submit" name="SubmitButton">
          </div>
        </form>
       </div>
     </div>

    </body>
    </html>
