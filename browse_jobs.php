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


		<div class="browse_job_data">
		<?php		

		$postcode_one = $_POST['postcode_one'];
		$desired_distance = $_POST['desired_distance'];
		$desired_title = $_POST['desired_title'];
		
		if(!empty($desired_title) && !empty($postcode_one)){
		$resulto = mysql_query("SELECT * FROM jobs WHERE title LIKE '%$desired_title%'");
		?>
			<p style="padding:15px;font-weight:bold;">Jobs containing "<?php echo $desired_title; ?>" and within <?php echo $desired_distance; ?> miles of your postcode</p>
		<?php
		while($mow = mysql_fetch_assoc($resulto)){
		$post = $mow['Pcode'];
		$calculated = calc_postcode_seperation($postcode_one, $post);

		if($calculated <= $desired_distance){
		?>
	<div class="job">
		<h3><a href="job.php?&id=<?php echo $mow['job_ID'] ;?>" title="<?php echo $mow['title']; ?>" style="text-decoration:none;"><?php echo $mow['title']; ?></a></h3> 
	<ul class="job_info">
	<li><?php echo $mow['advertiser']; ?></li>
	<li>
<?php
$date = $mow['time'];
echo date('d-m-Y', strtotime($date));
?>
</li>
		<li><?php echo $mow['Pcode']; ?></li>
		<li><?php echo $calculated . ' miles away'; ?></li>
	</ul>
		<p class="job_description"><?php echo $mow['description']; ?></p>
			</div>
		<?php
		} 
	}
	} else{
echo "No result to display";
	}
	?>
</div>
<img style="margin-left:68px; margin-top:20px;" src="images/ad_example.png" width="728" height="90">
<?php include "includes/footer.php"; ?>