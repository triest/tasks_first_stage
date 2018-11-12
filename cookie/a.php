<?
//echo "string";
//echo  setcookie($_COOKIE[$AUTH_USER],"value",time()+$int);
//echo $_SESSION['login'];echo "\n";
$name=$_COOKIE['auch'];
//echo "auth: ";
//echo $name; echo "\n";
setcookie($name,'a');


echo "page a save in cookie";
/* if(!$_COOKIE[$AUTH_USER]){
 			setcookie($_SESSION['login'] ,"a");
          }
          */