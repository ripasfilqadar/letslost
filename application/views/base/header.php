<?php include 'css.php';    ?>
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
          
        <?php }
          else{ ?>
          <ul class="nav nav-pills navbar-right">
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['user']['uname']?>  <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                 <a href="<?php echo base_url()?>user/edit"><li>Setting</li></a>
                 <a href="<?php echo base_url()?>userpage/profil"><li>Profil</li></a>
                  <a href="<?php echo base_url()?>login/logout"><li>Logout</li></a>
              </ul>
            </li>
          </ul>
          </ul>
         <?php }
         ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	