<?php
error_reporting(0);
session_start();

require "db/connect.php";
require "functions/main.php";
require "functions/users.php";

if(logged_in() === true) {

$session_user_id = $_SESSION['user_id'];
$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'Pcode');
}

$errors = array();
?>
