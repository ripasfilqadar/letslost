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
          <a class="navbar-brand" href="#">
          <img src="<?php echo base_url()?>assets/img/logotype B.png" width="160px" height="22px">
          </a>
        </div>
        
        <form class="navbar-form navbar-left">
          <div id="custom-search-input2">
            <div class="input-group col-md-12">
              <input class="form-control" title="Places, Cities, Regions, Countries, anyware." placeholder="Places, Cities, Regions, Countries, anyware." type="text">
              <span class="input-group-btn">
                <button class="btn btn-danger" type="button">
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
                <li><a href="dashboard.html">Your Profile</a></li>
                <li><a href="trip.html">Your Trip</a></li>
                <li><a href="#">Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>