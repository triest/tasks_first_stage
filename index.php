<?php
function require_auth() {
	$AUTH_USER = 'admin';
	$AUTH_PASS = 'admin';
	//header('Cache-Control: no-cache, must-revalidate, max-age=0');
	$has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
	$is_not_authenticated = (
		!$has_supplied_credentials ||
		$_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
		$_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
	);
	if ($is_not_authenticated) {
	//	header('Location: http://base/redirec2t.php');
	//	header('HTTP/1.1 401 Authorization Required');
	//	header('WWW-Authenticate: Basic realm="Access denied"');
	//	exit;
	}
	 else{
//test change
	 }
}


//проверка авторизованости
require_auth();
 

if($_SERVER['PHP_AUTH_USER']!=null){
	echo "auth";
	header("Location: calc.php");
//	die();
//	Redirect('http://base/calc.php');
}
else{
	header("Location:  autorize.php");
	//Redirect('http://base/calc.php');
	echo "not auth";
}

//если авторизован
echo "Autorizated";

die();


