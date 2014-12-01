<?php
include("header.php");
function print_form($error = false){
	print '
					<div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Register a new account!</h4></div>
									  <div class="panel-body">';
									  
									  if($error)
										print '<h3 style="color:red">'.$error.'</h3>';
									  
									  print '
										<form class="form" method="post" action="">
										<h4>Enter your username</h4>
										<input type="text" name="user" class="form-control input-lg" placeholder="Username">
										<h4>Enter your email</h4>
										<input type="text" name="email" class="form-control input-lg" placeholder="Email">
										<h4>Enter your password</h4>
										<div class="input-group text-center">
										<input type="password" name="pass" class="form-control input-lg" placeholder="Password">
										  <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit">Sign up!</button></span>
										</div>
									  </form>
									  </div>
								  </div>
							  </div>
						</div>';
}
if($loggedIn){
	print ' <div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Register</h4></div>
									  <div class="panel-body">
										<h3>You are already registered!</h3>
									  </div>
								  </div>
							  </div>
						</div>';
}else{
	if(count($_POST) > 0){
		if((@$_POST['user']) AND (@$_POST['email']) AND (@$_POST['pass'])){
			$name = secure($_POST['user']);
			$email = secure($_POST['email']);
			$pass = secure($_POST['pass']);
			$m1 = mysql_query("SELECT * FROM `users` WHERE `name` = '$name';");
			$m2 = mysql_query("SELECT * FROM `users` WHERE `email` = '$email';");
			$row1 = mysql_fetch_assoc($m1);
			$row2 = mysql_fetch_assoc($m2);
			if($row1['id']){
				print_form('Username is already taken!');
			}else if(substr($_POST['user'], 0, 10) == '7amamaberg'){
				print_form('Username is already taken!');
			}else if($row2['id']){
				print_form('Email address is already in use!');
			}else{
				mysql_query("INSERT INTO `users` (`id` ,`name` ,`email` ,`password`) VALUES (NULL, '$name', '$email', '$pass');");
				print ' <div class="padding">
							<div class="full col-sm-9">
								 <div class="col-sm-12">
									  <div class="panel panel-default">
										 <div class="panel-heading"><h4>Register</h4></div>
										  <div class="panel-body">
											Successfully registered!!
										  </div>
									  </div>
								  </div>
							</div>';
				print '<meta http-equiv="refresh" content="2;URL=login.php">';
			}
		}else{
			print_form('You have to fill all fields');
		}
	}else{
		print_form();
	}
}
include("footer.php");
?>
