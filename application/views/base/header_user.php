<?php include 'css.php';    ?>
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
        <div class="navbar-header" style="width:50%">
           <ul class="nav navbar-nav navbar-right" style="width:100%">
            <form class="navbar-form navbar-left" role="search" style="width:60%" action="<?php echo base_url()?>page/search" method="GET">
            <div class="form-group" style="width:80%">
              <input type="text" class="form-control" placeholder="Places, Cities, Anywhere" style="width:100%" name="search">
            </div>
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </form>
          <a href="#modalAddTrip " data-toggle="modal"    data-backdrop="static"  data-keyboard="false" ><u><h4>Or post a trip</h4></u></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
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
            </li> ...
          </ul>
            <li class="divider-vertical"></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      </ul>
      </div>
      </div>
    </nav>