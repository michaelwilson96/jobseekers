<?php
	include "core/init.php";

if(empty($_POST) === false){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) === true || empty($password) === true){
	die(header("location:index.php?loginFailed=true&reason=blank"));
	} 	elseif(user_exists($username) === false){
	die(header("location:index.php?loginFailed=true&reason=noexist"));
	} 	elseif(user_active($username === false)){
	die(header("location:index.php?loginFailed=true&reason=notactive"));
	}	else{
	$login = login($username, $password);
	if($login === false){
	die(header("location:index.php?loginFailed=true&reason=nomatch"));
	}	else{
	$_SESSION['user_id'] = $login;
	die(header("location:index.php?loggedin=true&reason=loggedIn"));
	exit();
// set user session
//redirect the username
		}
}
		
}
?>