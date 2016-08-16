
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditTrip">
  <div class="modal-dialog" role="document" style="width:75%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">    
        <form action="<?php echo base_url()?>trip/update" method="POST" class="form-horizontal">
        <input type="hidden" name="organizer_id" value="<?php echo $_SESSION['user']['user_id']?>">
        <input type="hidden" name="trip_id" value="<?php echo $trip['trip_id']?>">
        <div class="form-group">
          <label class="col-sm-2 control-label" >Nama Trip</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $trip['name']?>">              
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-sm-2 control-label" >Kota Keberangkatan</label>
          <div class="col-sm-10">
            <select class="selectpicker form-control" data-live-search="true" name="start_city">
            <?php foreach ($city as $row) { ?>
              <option value="<?php echo $row['city_id']?>" <?php if($row['city_id']==$trip['start_city']) echo 'selected'?> ><?php echo $row['region_name']."-".$row['city_name']?></option>
              
            <?php }?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label" >Kota Tujuan</label>
          <div class="col-sm-10">
             <select class="selectpicker form-control" data-live-search="true" name="destinate">
            <?php foreach ($city as $row) { ?>
              <option value="<?php echo $row['city_id']?>"  <?php if($row['city_id']==$trip['destinate']) echo 'selected'?>><?php echo $row['region_name']."-".$row['city_name']?></option>
              
            <?php }?>
            </select>         
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label" >Tanggal Berangkat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control datepicker" name="timeheld" value="<?php echo date('d-m-Y',strtotime($trip['timeheld']))?>">            
          </div>
        </div>

        <div class="form-group">
           <label class="col-sm-2 control-label" >Tanggal Pulang</label>
           <div class="col-sm-10">
            <input type="text" class="form-control datepicker" name="timeend"value="<?php echo date('d-m-Y',strtotime($trip['timeend']))?>">            
          </div>
        </div>


        <div class="form-group">
           <label class="col-sm-2 control-label" >Website</label>
           <div class="col-sm-10">
            <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo $trip['website']?>">            
          </div>
        </div>

        <div class="form-group">
           <label class="col-sm-2 control-label" >Deadline</label>
           <div class="col-sm-10">
            <input type="text" class="form-control datepicker" name="deadline" value="<?php echo $trip['deadline']?>">            
          </div>
        </div>

        <div class="form-group">
           <label class="col-sm-2 control-label" >Quota</label>
           <div class="col-sm-10">
            <input type="text" class="form-control" name="quota" placeholder="Quota" value="<?php echo $trip['quota']?>">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Trip</button>
      </div>
    </form>
    </div>
  </div>
</div>