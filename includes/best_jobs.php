<div class="job_container">
		<div class="search_results">
		<?php
		$postcode_one = $user_data['Pcode'];
		$desired_distance = 20;
		$desired_title = "php";
		if(!empty($postcode_one)){
		$resulto = mysql_query("SELECT * FROM jobs WHERE title LIKE '%$desired_title%'");
		?>
			<p style="padding:15px;">Jobs containing "<?php echo $desired_title; ?>" and within <?php echo $desired_distance; ?> miles of your postcode</p>
		<?php
		while($mow = mysql_fetch_assoc($resulto)){
		$post = $mow['Pcode'];
		$calculated = calc_postcode_seperation($postcode_one, $post);

		if($calculated <= $desired_distance){
		?>
	<div class="job">
		<h3><a href="#" title="<?php echo $mow['title']; ?>" style="text-decoration:none;"><?php echo $mow['title']; ?></a></h3> 
	<ul class="job_info">
		<li><?php echo $mow['Pcode']; ?></li>
		<li><?php echo $calculated . ' miles away'; ?></li>
	</ul>
		<p class="job_description"><?php echo $mow['description']; ?></p>
			</div>
		<?php
		} 
		}
	} elseif(logged_in() === true){ 
	
	echo '<div class="update_pcode"><p style="text-align:center">We have been unable to give you any results? make sure your postcode is correct. <strong>Example: AB10</strong></p><form action="" method="post"><input type="text" name="pcodeUpdate"/><input type="submit" value="update"/></form></div>';
	}
	?>
</div>
<?php
include "mini_login_box.php";
?>

</div>