<?php
include("engine.php");
if(@$_SESSION['token']){
	$user = getUserInfo(@$_SESSION['token']);
	if($user['name'])
		$loggedIn = true;
	else
		$loggedIn = false;
}else{
	$loggedIn = false;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>7amamaBook - Social network</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
            <!-- main right col -->
            <div class="column col-xs-12" id="main">
                
                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="<?php echo $siteURL; ?>" class="navbar-brand logo">7</a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left" action="search.php">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="<?php echo $siteURL; ?>"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      <li>
                        <a href="bounty.php"><i class="glyphicon glyphicon-usd"></i> Bounty</a>
                      </li>
					  <?php
						if($loggedIn){
					  ?>
                      <li>
                        <a href="logout.php"><span class="badge">Logout</span></a>
                      </li>
					  <?php
						}else{
					  ?>
                      <li>
                        <a href="login.php"><span class="badge">Login</span></a>
                      </li>
                      <li>
                        <a href="register.php"><span class="badge">Register</span></a>
                      </li>
					  <?php } ?>
                    </ul>
					<?php
						if($loggedIn){
					?>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo $user['name']; ?></a>
                        <ul class="dropdown-menu">
                          <li><a href="settings.php">Settings</a></li>
                          <li><a href="faq.php">FAQ</a></li>
                        </ul>
                      </li>
                    </ul>
					
				  <?php } ?>
                  	</nav>
                </div>
                <!-- /top nav -->
