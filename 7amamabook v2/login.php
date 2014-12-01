<?php
session_start();
session_regenerate_id();
include("header.php");
if($loggedIn){
	print ' <div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Login</h4></div>
									  <div class="panel-body">
										<h3>You are already logged in!</h3>
									  </div>
								  </div>
							  </div>
						</div>';
}else{
	if(@$_POST['user']){
		$name = secure($_POST['user']);
		$pass = secure($_POST['pass']);
		$time = time();
		$m = mysql_query("SELECT password,email FROM `users` WHERE `name` = '$name';");
		$row = mysql_fetch_assoc($m);
		if($pass == $row['password']){
			$ip = $_SERVER['REMOTE_ADDR'];
			$iiiid = session_id();
			$mail = mysql_real_escape_string($row['email']);
			mysql_query("INSERT INTO `sessions` (`id` ,`email` ,`IP` ,`time`) VALUES ('$iiiid', '$mail', '$ip', '$time');");
			echo "INSERT INTO `sessions` (`id` ,`email` ,`IP` ,`time`) VALUES ('$iiiid', '$mail', '$ip', '$time');";
			setcookie("PHPSESSID", $iiiid);
			print ' <div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Login</h4></div>
									  <div class="panel-body">
										Successfully logged in!
									  </div>
								  </div>
							  </div>
						</div>';
			print '<me#ta http-equiv="refresh" content="3;URL=index.php">';
		}else{
		print '
					<div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Login</h4></div>
									  <div class="panel-body">
										<h4 style="color:red">Wrong username or password!</h4>
										<form class="form" method="post" action="">
										<h4>Enter your username</h4>
										<input type="text" name="user" class="form-control input-lg" placeholder="Username">
										<h4>Enter your password</h4>
										<div class="input-group text-center">
										<input type="password" name="pass" class="form-control input-lg" placeholder="Password">
										  <span class="input-group-btn"><button class="btn btn-lg btn-primary" name="submit" value="submit" type="submit">OK</button></span>
										</div>
									  </form>
									  </div>
								  </div>
							  </div>
						</div>';
		}
	}else{
		print '
					<div class="padding">
						<div class="full col-sm-9">
							 <div class="col-sm-12">
								  <div class="panel panel-default">
									 <div class="panel-heading"><h4>Login</h4></div>
									  <div class="panel-body">
										<form class="form" method="post" action="">
										<h4>Enter your username</h4>
										<input type="text" name="user" class="form-control input-lg" placeholder="Username">
										<h4>Enter your password</h4>
										<div class="input-group text-center">
										<input type="password" name="pass" class="form-control input-lg" placeholder="Password">
										  <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit">OK</button></span>
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