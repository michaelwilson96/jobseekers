<nav class="very_top_bar">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" target="_parent" style="height:18px;line-height:18px;">Home</a></li>
	<li class="topmenu"><a href="jobs.php" title="Find a Job" style="height:18px;line-height:18px;">Jobs</a></li>
	<li class="topmenu"><a href="learn.php" title="Learn Programming" target="_parent" style="height:18px;line-height:18px;">Learn</a></li>
	<li class="topmenu"><a href="companies.php" title="Company Search" style="height:18px;line-height:18px;">Companies</a></li>
	<li class="topmenu"><a href="facebook.com" title="Recruiters Search" style="height:18px;line-height:18px;">Recruiters</a></li>
	<li class="topmenu"><a href="jobseekers.php" title="Job Seekers Search" style="height:18px;line-height:18px;">Jobseekers</a></li>
	<li class="topmenu"><a href="advertisers.php" title="Advertisers Information" style="height:18px;line-height:18px;">Advertisers</a></li>
	<li class="toplast"><a href="forum.php" title="PHP Job Seekers Forum" style="height:18px;line-height:18px;">Forum</a></li>
</ul>
</nav>
<?php
if(logged_in() === true){
?>
<div class="dropdown left" style="position:absolute; top:10px; left:830px;">
  <a href="#" class="button left"><span class="icon icon68"></span><span class="label">Settings</span><span class="toggle"></span></a>
  <div class="dropdown-slider">
    <a href="#" class="ddm"><span class="icon icon3"></span><span class="label">My Profile</span></a>
    <a href="logout.php" class="ddm"><span class="icon icon151"></span><span class="label">My Information</span></a>
  </div> <!-- /.dropdown-slider -->
    <a href="logout.php" style="text-decoration:none; margin-left:5px; color:white;">or logout?</a>
</div> <!-- /.dropdown -->

<?php
}else{
?>
<div style="position:absolute; top:10px; left:880px;">
<button class="action blue"><span class="label"><a title="Login" class="login_top_button" style="text-decoration:none; color:white;">Login</a></span></button>
<button style="margin-left:-2px;" class="action red"><span class="label"><a style="text-decoration:none; color:white;" title="Sign in" class="signup_top_button">Sign Up</a></span></button>
</div>
<?php
} 
?>
<script>
$('.login_top_button').click(function(){
new Messi('<form style="margin-left:125px;" action="login.php" method="post"><ul class="best_jobs_ul"><li><input type="text" name="username" class="best_jobs_username" placeholder="Login.."/></li><li><input type="password" name="password" class="best_jobs_password" placeholder="Password.."/></li><li class="best_jobs_li_submit"><input name="mini_login_submit" type="submit" class="best_jobs_submit" value="Login"/></form></li></ul>', {title: 'Login', titleClass: 'info'});
});
$('.signup_top_button').click(function(){
new Messi('<form action="register.php" style="margin-left:35px;" method="post"><ul class="signup_top_ul"><li>Username*:</br><input type="text" name="username"/></li><li>Password*:</br><input type="password" name="password"/></li><li>Confirm Password*:</br><input type="password" name="password_again"/></li><li>First name*:</br><input type="text" name="first_name"/></li><li>Last name*:</br><input type="text" name="last_name"/></li><li>Email*:</br><input type="text" name="email"/></li><li>Postcode*:</br><input type="text" name="Pcode"/></li><li><input type="checkbox" name="tandc" value="tandc">I accept the Terms and conditions</li><li><input type="submit" value="Register" /></li></ul></form>', {title: 'Sign up', titleClass: 'error'});
});
</script>