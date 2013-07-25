<div class="slider_block">
		<div id="slider-two">
<?php

$que = mysql_query("SELECT * FROM users ORDER BY rank DESC");
while($rowbo = mysql_fetch_assoc($que)){
?>
			<div style="height:200px;">
				<img src="demo/5.jpg" alt="picture">
				<span><?php echo $rowbo['first_name'] . " " . $rowbo['last_name'];?><span><br>
				<span class="class_span"><?php echo $rowbo['class'];?></span>
				<button style="margin-left:15px;" class="action blue"><span class="label"><a title="Login" style="text-decoration:none; color:white;">view more</a></span></button>
			</div>
<?php
}
?>
		</div>
		</div>