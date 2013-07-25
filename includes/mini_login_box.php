<?php
if(logged_in() === false){
?>
<form class="best_jobs_login" action="login.php" method="post">
<ul class="best_jobs_ul">
<li><input type="text" name="username" class="best_jobs_username" placeholder="Login.."/></li>
<li><input type="password" name="password" class="best_jobs_password" placeholder="Password.."/></li>
<li class="best_jobs_li_submit"><input name="mini_login_submit" type="submit" class="best_jobs_submit" value="Login"/><span><a href="#">or sign up?</a></span></li>
</ul>
</form>
<?php
} else{


}
?>