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
          <img src="<?php echo base_url()?>assets/img/logos.png" width="185px" height="25px">
          </a>
        </div>
        
        <form class="navbar-form navbar-left" action="<?php echo base_url()?>page/search">
          <div id="custom-search-input2">
            <div class="input-group col-md-12">
              <input class="form-control" title="Places, Cities, Regions, Countries, anyware." placeholder="Places, Cities, Regions, Countries, anyware." type="text" name="search">
              <span class="input-group-btn">
                <button class="btn btn-danger" type="submit">
                  <span class="fa fa-search"></span>
                </button>
              </span>
            </div>
          </div>
        </form>
        


        <div id="navbar" class="navbar-collapse collapse">

        <!--?php if (!isset($_SESSION['user'])) { ?-->

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#modalAddTrip " data-toggle="modal" data-backdrop="static"  data-keyboard="false" style="color: white;">Post a Trip</a></li>
            <li class="dropdown">
            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">@<?php echo $_SESSION['user']['uname']?> <b class="caret"></b></a>

              <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                <li><a href="<?php echo base_url()?>userpage/profil">My Profile</a></li>
                <li><a href="trip.html">My Trip</a></li>
                <li><a href="#">Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url()?>login/logout">Logout</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>