<?php
include "core/classes/mailer.class.php";
$goback = header('Location: index.php');


$emailbo = $_POST['job_data'];
if(isset($_POST['full_name']) === true){
$mailer=new mailer($emailbo,"does it work","yes","From: contact@phpjobseekers.com"); 
$mailer->file("example.php"); 
$mailer->attach("text/plain","see.txt","tada 2 attachments"); 
$test=$mailer->send(); 
echo $test? $goback :"error"; 

}
?>