<?php
include "core/init.php";
if(empty($_POST) === false){
   $required_fields = array('username', 'password', 'password_again', 'first_name', 'last_name', 'Pcode', 'tandc');
	foreach($_POST as $key=>$value){
		if(empty($value) && in_array($key, $required_fields) === true){
			die(header("location:index.php?regiFailed=true&reason=emptyRegi"));
			break 1;
		}
	}

	if(empty($errors) === true){
		if(user_exists($_POST['username']) === true){
		die(header("location:index.php?regiFailed=true&reason=usernameExists"));
		}
		if(preg_match("/\\s/", $_POST['postcode']) == true){
		die(header("location:index.php?regiFailed=true&reason=postcodeSpaces"));
		}
		if(preg_match("/\\s/", $_POST['username']) == true){
		die(header("location:index.php?regiFailed=true&reason=usernameSpaces"));
		}
		if(strlen($_POST['password']) >= 7){
		die(header("location:index.php?regiFailed=true&reason=passwordMust"));
		}
		if($_POST['password'] !== $_POST['password_again']){
		die(header("location:index.php?regiFailed=true&reason=passwordMatch"));
		}
		if(!isset($_POST['tandc'])){
		die(header("location:index.php?regiFailed=true&reason=tandc"));
		}

	}
}

if (isset($_GET['success']) && empty($_GET['success'])){
	echo 'you are now register with PHP jobseekers! You may now login.';
}else{

if(empty($_POST) === false && empty($errors) === true){
	$register_data = array(
    'username'   => $_POST['username'],
    'password'   => $_POST['password'],
    'first_name' => $_POST['first_name'],
    'last_name'  => $_POST['last_name'],
	'Pcode'  => $_POST['Pcode'],
	

        );

			register_user($register_data);
	header('Location: successful_register.php');
	exit();
	


} else if (empty($errors) === false) {
	echo output_errors($errors);
}
}
?>