<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()?>assets/favicon.ico">

    <title>LetsLost</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/letslost.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url()?>assetsjs/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

    <script src="<?php echo base_url()?>assets/js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
			<img src="<?php echo base_url()?>assets/img/logotype B.png" width="160px" height="22px">
		  </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php if (!isset($_SESSION['user'])) { ?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
      				<a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <strong class="caret"></strong></a>

      				<div class="dropdown-menu" style="padding: 10px;min-width:240px;">
      					  
      					<form action="<?php echo base_url()?>login/checkLogin" method="POST" role="form" class="form-horizontal">
      								
      						<input class="form-control" name="email" placeholder="Email" type="email" style="margin-bottom:.5em">
      								
      						<input class="form-control" name="pass" placeholder="Password" type="password" style="margin-bottom:.5em">      						      								
      						<input class="btn btn-primary" style="margin-top:.75em;width: 100%; height: 32px; font-size: 13px;" type="submit" value="Sign In">
                  <a href="#modalRegistrasi" data-toggle="modal">or sign up</a>
      					</form>					  
      					  
      				</div>
      			</li>
      			<li class="divider-vertical"></li>
          </ul>
          
        <?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	