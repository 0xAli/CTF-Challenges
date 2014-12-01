<?php
include("header.php");
if(!$loggedIn){
	print ' <div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Login</h4></div>
									  <div class="panel-body">
										<h3>Log in first!</h3>
									  </div>
								  </div>
							  </div>
						</div>';
}else{
	if(@$_POST['user']){
		$name = secure($_POST['user']);
		$pass = secure($_POST['pass']);
		$mail = secure($_POST['email']);
		$id   = $user['id'];
		mysql_query("UPDATE `users` SET `name` = '$name' WHERE `id` = $id;");
		mysql_query("UPDATE `users` SET `password` = '$pass' WHERE `name` = '$name';");
		mysql_query("UPDATE `users` SET `email` = '$mail' WHERE `name` = '$name';");
		print ' <div class="padding">
					<div class="full col-sm-9">
						 <div class="col-sm-12">
							  <div class="panel panel-default">
								 <div class="panel-heading"><h4>Login</h4></div>
								  <div class="panel-body">
									Updated profile!<br/>
									You have to login again!
								  </div>
							  </div>
						  </div>
					</div>';
		print '<meta http-equiv="refresh" content="3;URL=logout.php">';
	}else{
		print '<div class="padding">
					<div class="full col-sm-9">
						 <div class="col-sm-12">
							  <div class="panel panel-default">
								 <div class="panel-heading"><h4>Update your account!</h4></div>
								  <div class="panel-body">
									<form class="form" method="post" action="">
									<h4>New username</h4>
									<input type="text" name="user" class="form-control input-lg" value="'.$user['name'].'" placeholder="Username">
									<h4>New email</h4>
									<input type="text" name="email" class="form-control input-lg" value="'.$user['email'].'" placeholder="Email">
									<h4>New password</h4>
									<div class="input-group text-center">
									<input type="password" name="pass" class="form-control input-lg" value="'.$user['password'].'" placeholder="Password">
									  <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit">Update!</button></span>
									</div>
								  </form>
								  </div>
							  </div>
						  </div>
					</div>';
	}
}
include("footer.php");
?>