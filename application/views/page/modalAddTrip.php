
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddTrip">
  <div class="modal-dialog" role="document" style="width:75%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
          <?php if (!isset($_SESSION['user'])) {?>
          <form action="<?php echo base_url()?>login/checkLogin" class="form-horizontal" method="POST">
          <center>
            <h4>You Must Log in</h4>
          </center>
            <div class="form-group">
            <label class="col-sm-2 control-label" >Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Name" name="email">              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" >Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Name" name="pass">              
            </div>
          </div>
          <div class="form-group">
            <div>
              <a  class="col-sm-12" href="#warning" data-toggle="modal" style="text-align:right">or sign up</a>
            </div>
          </div>
          
          <?php }
          else {?>
            <form action="<?php echo base_url()?>trip/add" method="POST" class="form-horizontal">
            <input type="hidden" name="organizer_id" value="<?php echo $_SESSION['user']['user_id']?>">
            <div class="form-group">
              <label class="col-sm-2 control-label" >Nama Trip</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Name" name="name">              
              </div>
            </div>
           
            <div class="form-group">
              <label class="col-sm-2 control-label" >Kota Keberangkatan</label>
              <div class="col-sm-10">
                <select class="selectpicker form-control" data-live-search="true" name="start_city">
                <?php foreach ($city as $row) { ?>
                  <option value="<?php echo $row['city_id']?>"><?php echo $row['region_name']."-".$row['city_name']?></option>
                  
                <?php }?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" >Kota Tujuan</label>
              <div class="col-sm-10">
                 <select class="selectpicker form-control" data-live-search="true" name="destinate">
                <?php foreach ($city as $row) { ?>
                  <option value="<?php echo $row['city_id']?>"><?php echo $row['region_name']."-".$row['city_name']?></option>
                  
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
               <label class="col-sm-2 control-label" >Website</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="website" placeholder="Website">            
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
          <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php if (!isset($_SESSION['user'])) {?>
          <button type="submit" class="btn btn-primary">Login</button>
        <?php } else{ ?>
          <button type="submit" class="btn btn-primary">Add Trip</button>
          <?php } ?>
      </div>
    </form>
    </div>
  </div>
</div>