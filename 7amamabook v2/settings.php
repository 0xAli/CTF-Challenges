<?php
include("header.php");
function print_form($error = '',$user){
print '<div class="padding">
					<div class="full col-sm-9">
						 <div class="col-sm-12">
							  <div class="panel panel-default">
								 <div class="panel-heading"><h4>Update your account!</h4></div>
								  <div class="panel-body">';
									  
									  if($error)
										print '<h3 style="color:red">'.$error.'</h3>';
									  
									  print '
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
		$name = secure(preg_replace('/\s+/', '', $_POST['user']));
		$pass = secure($_POST['pass']);
		$mail = secure($_POST['email']);
		$id   = $user['id'];
		$m1 = mysql_query("SELECT * FROM `users` WHERE `name` = '$name' AND  `id` <> $id;");
		$m2 = mysql_query("SELECT * FROM `users` WHERE `email` = '$mail' AND  `id` <> $id;");
		$row1 = mysql_fetch_assoc($m1);
		$row2 = mysql_fetch_assoc($m2);
		if($row1['id']){
			print_form('Username is already taken!',$user);
		}else if($row2['id']){
			print_form('Email address is already in use!',$user);
		}else{
			mysql_query("UPDATE `users` SET `name` = '$name' WHERE `id` = '$id';");
			mysql_query("UPDATE `users` SET `password` = '$pass' WHERE `id` = '$id';");
			mysql_query("UPDATE `users` SET `email` = '$mail' WHERE `id` = '$id';");
			print ' <div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Settings</h4></div>
									  <div class="panel-body">
										Updated profile!
									  </div>
								  </div>
							  </div>
						</div>';
		}
	}else{
		print_form('',$user);
	}
}
include("footer.php");
?>