<?php
session_start();
session_regenerate_id();
session_unset();
session_destroy();
include("header.php");
if($loggedIn){
	$_COOKIE['PHPSESSID'] = '';
	setcookie('PHPSESSID', '');
	unset($_COOKIE);
	print ' <div class="padding">
	<div class="full col-sm-9">
		 <div class="col-sm-12">
			  <div class="panel panel-default">
				 <div class="panel-heading"><h4>Login</h4></div>
				  <div class="panel-body">
					<h3>Logged out!</h3>
				  </div>
			  </div>
		  </div>
	</div>';
}else{
	print ' <div class="padding">
		<div class="full col-sm-9">
			 <div class="col-sm-12">
				  <div class="panel panel-default">
					 <div class="panel-heading"><h4>Login</h4></div>
					  <div class="panel-body">
						<h3>Not logged in!</h3>
					  </div>
				  </div>
			  </div>
		</div>';
}
print '<meta http-equiv="refresh" content="3;URL=index.php">';
?>