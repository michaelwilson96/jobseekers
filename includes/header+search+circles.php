<header>
<img src="images/header-image.jpg" class="header-image" alt="header"/>

</header>
<nav class="top_bar">
<form action="browse_jobs.php" method="post">
<ul class="form_ul">
<li><input class="first" type="text" name="desired_title" placeholder="Im looking for..." value="<?php echo $desired_title; ?>"></li>
<li><input class="second" type="text" name="postcode_one" placeholder="My Postcode..." value="<?php echo $postcode_one; ?>"></li>
<li>
<select class="third" name="desired_distance">
<option value=5>within 5 miles</option>
<option value=10>within 10 miles</option>
<option value=20>within 20 miles</option>
<option value=30>within 30 miles</option>
</select>
</li>
<li><input type="submit" class="search_submit"></li>
</ul>
</form>
</nav>
<div id="all_circles">
<div class="circle_one" id="advanced">
<img src="images/pencil.png" class="pencil"/>
</div>
<div class="circle_two" id="advanced">
<img src="images/briefcase.png" class="pencil"/>
</div>
<div class="circle_three" id="advanced">
<img src="images/mug_coffee.png" class="pencil"/>
</div>
</div>
<div id="main">