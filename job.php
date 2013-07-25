<!doctype html>
<html>
<?php
require "core/init.php";
include "includes/head.php";
include "includes/top_nav.php";
include "includes/header+search+circles.php";
?>
<h1>PHP Job Seekers</h1>

<?php include "includes/social.php"; ?>

<div style="margin-top:200px;">
<?php
$id = mysql_real_escape_string($_GET['id']);
$query = mysql_query("SELECT * FROM jobs WHERE job_ID = '$id'");
$job = mysql_fetch_array($query);
?>

<div id="jobpagep">
<p class="jobpagep">
<b>Description</b></br><?php echo $job['description'];?>
</p>
</div>
<form action="apply_mail.php" method="post" id="formey"><ul class="apply_here_ul"><li>Full name:</br><input type="text" name="full_name"/></li><li>Confirm Message*:</br><input type="text" name="apply_message"/></li><li>Submit CV*:</br><input type="file" name="cv"/></li><li><input type="submit" value="Apply"/></li><input type="hidden" name="job_data" value="<?php echo $job['email']; ?>"/></ul></form>
</div>


<img style="margin-left:68px; margin-top:20px;" src="images/ad_example.png" width="728" height="90">
<?php
include "includes/footer.php"; ?>