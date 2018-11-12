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
        //	die();
        	header("Location: http://cookie/".$page.".php");
        		die();
        }
        else{
  			header("Location: http://cookie/chose.php");
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
    </head>
    <body>
<?php echo $name_page;  ?>

        <form action="#" method="post">
            <div class="form-group">
          <label>Login:</label>

            <input type="text" name="login"><br>
            <label>Passowrd:</label>
            <input type="text" name="pass"><br>
            <input type="submit" name="SubmitButton">
          </div>
        </form>
       

    </body>
    </html>
