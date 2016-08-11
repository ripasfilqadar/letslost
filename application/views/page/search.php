    <div class="container">
      <div class="panel panel-default">
        <div class="panel-body">
          <a href="<?php echo base_url()?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to Search Page</a>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6">
              <h1>Trips</h1>
            </div>
            <div class="col-md-6">
              
            </div>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    <th>Trip Name</th>
                    <th>Location</th>
                    <th>From</th>
                    <th>Start</th>
                    <th>Finish</th>
                    <th>Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($trip as $row) {?>
                      <tr class="listsearch">
                      <td><?php echo $row['name']?>
                      <br> <?php echo $row['desc']?><span style="display:none" class="datarow"><?php echo json_encode($row);?></span>
                      </td>
                      <td><?php echo $row['start']?></td>
                      <td><?php echo $row['finish']?></td>
                      <td><?php echo date('d-m-Y',strtotime($row['timeheld']))?></td>
                      <td><?php echo date('d-m-Y',strtotime($row['timeend']))?></td>
                      <td><button data-id="<?php echo $row['trip_id']?>" style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md">View</button></td>
                      </tr>
                      
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
    var user=undefined;
    </script>
    <?php
    if (isset($_SESSION['user'])){?>
    <script type="text/javascript">
      var user='<?php echo json_encode($_SESSION["user"])?>';
    </script>
    <?php } ?>

<script type="text/javascript">
  function join(){
      var trip_id=$("[name='trip_id']").val();
      if (user!=undefined) {
        user=jQuery.parseJSON(user);
        $.each(user, function(key, value) {
            $("#dataMember [name='"+key+"']").val(value);
            // $("#dataMember [name='"+key+"']").prop('disabled',false).clone().appendTo("#dataMember form");
            // $("#dataMember [name='"+key+"']").prop('disabled',true);
        });
      };
      console.log($("#dataMember form"));
      
      $("#dataMember [name='trip_id']").val(trip_id);
      var name=$("#detailTrip .namaTrip").text();
      $("#dataMember form h4").text('Join To '+name);
      $("#dataMember").modal('show');
  }
  function unjoin(){
    var trip_id=$("[name='trip_id']").val();
    $.ajax({
      url: "<?php echo base_url()?>trip/unjoin?>",
      dataType: "json",
      data : {"trip_id":trip_id},
      method : "POST",
      success:function(response){
        alert(response.msg);
        $("#detailTrip .btn-primary").show();
        $("#detailTrip .btn-danger").hide();
      }
    });
  }
</script>


<?php include 'detailTrip.php';?>

<div class="modal fade" tabindex="-1" role="dialog" id="joinTrip">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
        <div>
          <h4>Trip To <span class="namaTrip"></span></h4>
          <form class="join" method="POST" >
            <input type="hidden" name="trip_id">
            <button type="button" class="btn btn-primary">Join</button>
          </form>
          <form class="unjoin" >
            <input type="hidden" name="trip_id" >
            <button type="button" class="btn btn-danger">Unjoin</button>
          </form>
          
        </div>
        <div class="desc">
          
        </div>
        <div class="sisa">
          <h4 class="available">Available</h4>
          <h4 class="partisipan">partisipan</h4>
        </div>
        <div>
          <table class="listpartisipan">
            
          </table>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="dataMember">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url()?>trip/join" class="form-horizontal" method="POST">
          <input type="hidden" name="trip_id">
          <center>
            <h4>Join Trip</h4>
          </center>
            <div class="form-group">
            <label class="col-sm-2 control-label" >Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Name" name="fullname">              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" >HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Phone" name="phone">              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" >Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Email" name="email">              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" >Gender</label>
            <div class="col-sm-10">
              <input type="radio"  name="gender"> L
              <input type="radio"  name="gender"> P          
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" >Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control datepicker" name="born">              
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Join Trip</button>
      </div>
      </form>
    </div>
  </div>
</div>    