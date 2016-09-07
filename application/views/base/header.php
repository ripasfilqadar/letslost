<?php include 'css.php';    ?>
  
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url()?>">
            <img src="<?php echo base_url()?>assets/img/logosg.png" width="42px" height="50px">
          </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">

        <!--?php if (!isset($_SESSION['user'])) { ?-->

          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
            
              <?php if (!isset($_SESSION['user'])) { ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;"><i class="fa fa-fw fa-sign-in"></i> Sign in <b class="caret"></b></a>
              <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                <li>
                  <div class="row">
					  <div class="col-md-12">
						<form class="form" role="form" method="post" action="<?php echo base_url()?>login/checkLogin" accept-charset="UTF-8" id="login-nav">
							<div class="form-group">
							  <label class="sr-only" for="email">Email</label>
							  <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Email"/>
							</div>
							<div class="form-group">
							  <label class="sr-only" for="password">Password</label>
							  <input type="password" name="pass" id="password" class="form-control" required="required" placeholder="Password"/>
							</div>
							<div class="checkbox">
							  <label>
							  <input type="checkbox"> Remember me
							  </label>
							</div>
							<div class="form-group">
							  <input type="submit" value="Login" class="btn btn-lg btn-block btn-primary vertical-offset-10"/>
							</div>
						</form>
					  </div>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="<?php echo base_url()?>login/loginFB" style="margin-left: 5px" class="btn btn-block btn-social btn-facebook" size="md"><i class="fa fa-facebook"></i> Login With FB</a>
                  </div>
                </li>    
				<li role="separator" class="divider"></li>
                <li>
                  <div>
                    <span>No account yet?</span>
                    <a href="<?php echo base_url()?>login/registerpage" style="margin-left: 5px" class="btn ladda-button btn-success btn-md" size="md">Register</a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
          </ul>
          <?php } 
          elseif (isset($_SESSION['user'])) { ?>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#modalAddTrip " data-toggle="modal" data-backdrop="static"  data-keyboard="false" style="color: white;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Post a Trip</a></li>
            <li class="dropdown">
            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">@<?php echo $_SESSION['user']['uname']?> <b class="caret"></b></a>

              <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                <li><a href="<?php echo base_url()?>userpage/profil"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                <li><a href="trip.html"><i class="fa fa-map-marker" aria-hidden="true"></i> My Trip</a></li>
                <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url()?>login/logout"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
          </ul>
          <?php } ?>

        </div><!--/.nav-collapse -->

      </div>
    </nav>
    