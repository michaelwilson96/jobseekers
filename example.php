<? 
include("core/classes/mailer.class.php"); 
$mailer=new mailer("michael.wilson@allpark.co.uk","does it work","yes","From: contact@phpjobseekers.com"); 
$mailer->file("example.php"); 
$mailer->attach("text/plain","see.txt","tada 2 attachments"); 
$test=$mailer->send(); 
echo $test?"sent":"error"; 
?>