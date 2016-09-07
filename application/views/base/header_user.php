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
            <li><a href="#modalAddTrips" data-toggle="modal" data-backdrop="static"  data-keyboard="false" style="color: white;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Post a Trip</a></li>
            <li class="dropdown">
            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">@<?php echo $_SESSION['user']['uname']?> <b class="caret"></b></a>

              <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                <li><a href="<?php echo base_url()?>userpage/profil"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
                <li><a href="trip.html"><i class="fa fa-map-marker" aria-hidden="true"></i> My Trip</a></li>
                <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url()?>login/logout"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalAddTrips">
      <div class="modal-dialog" role="document" style="width:75%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
          <div class="modal-body">
              <form action="<?php echo base_url()?>trip/add" method="POST" class="form-horizontal">
                <input type="hidden" name="organizer_id" value="<?php echo $_SESSION['user']['user_id']?>">
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Trip</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Name" name="trip_name">              
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Destinasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Destinasi" name="destinate">              
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Kota Keberangkatan</label>
                  <div class="col-sm-10">
                    <select class="selectpicker form-control" data-live-search="true" name="start_city">
                    <?php foreach ($city as $row) { ?>
                      <option value="<?php echo $row['city_id']?>"><?php echo $row['reg_name']."-".$row['city_name']?></option>
                      
                    <?php }?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Kota Tujuan</label>
                  <div class="col-sm-10">
                     <select class="selectpicker form-control" data-live-search="true" name="dest_city">
                    <?php foreach ($city as $row) { ?>
                      <option value="<?php echo $row['city_id']?>"><?php echo $row['reg_name']."-".$row['city_name']?></option>
                      
                    <?php }?>
                    </select>         
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Tanggal Berangkat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" name="timeheld">            
                  </div>
                </div>

                <div class="form-group">
                   <label class="col-sm-2 control-label" >Tanggal Pulang</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" name="timeend">            
                  </div>
                </div>
            
                <div class="form-group">
                   <label class="col-sm-2 control-label" >Deadline</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" name="deadline">            
                  </div>
                </div>

                <div class="form-group">
                   <label class="col-sm-2 control-label" >Quota</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" name="quota" placeholder="Quota">
                  </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Trip</button>
          </div>
        </form>
        </div>
      </div>
    </div>