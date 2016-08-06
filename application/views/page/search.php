<section>
  <div class="container_2 row">
    <div class="hasil_search">
      <?php foreach ($trip as $row) { ?>
        <div class="kotakdata">
          <div class="datarow" style="display:none">
            <?php echo json_encode($row);?>
          </div>
          <div class="col-md-4">
            <center>
              <h4><?php echo $row['name']?></h4>
              <h4>Trip to <?php echo $row['destinate']?></h4>
            </center>
          </div>
          <div class="col-md-5">
            <h4><?php echo date('d-m-Y',strtotime($row['timeheld'])).' - '.date('d-m-Y',strtotime($row['timeend']))?></h4>
            <h4>Start From <?php echo $row['city_name']?></h4>
          </div>
          <div class="col-md-3">
            <button class="btn btn-primary">View</button>
          </div>
        </div>
        
      <?php } ?>
      
    </div>
    
  </div>
</section>
<script type="text/javascript">
$.fn.modal.Constructor.prototype.enforceFocus = function () {};
  $(".kotakdata button").click(function(){
    var data=$(this).closest('.kotakdata').find('.datarow').text();
    data=jQuery.parseJSON(data);
    // console.log(data);
        console.log(data.trip_id);
    $(".table .listpartisipan").empty();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url()?>trip/checkPartisipant?>",
      dataType: "json",
      data:{'trip_id':data.trip_id},
      success: function (response) {
        $("#detailTrip table tbody").empty();
        $("#detailTrip").modal('show');
        $(".available").text(data.desc);

        $(".partisipan").text(response.data.partisipan.length+" of "+data.quota+" partisipant");
        $(".namaTrip").text(data.city_name);
        $("#detailTrip [name='trip_id']").val(data.trip_id);
        for (var i = 0; i < response.data.partisipan.length; i++) {
          var text='<tr><td>'+(i+1)+'</td><td>'+response.data.partisipan[i].fullname+'</td></tr>';
          $("#detailTrip table tbody").append(text); 

        };
        if (response.code==200) {
          $("#detailTrip .modal-body .btn-primary").hide();
        }
        else{
          $("#detailTrip .modal-body .btn-danger").hide();
        }
      },
    });
  });
</script>
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


<div class="modal fade" tabindex="-1" role="dialog" id="detailTrip">
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
            <button type="button" class="btn btn-primary" onclick="join()">Join</button>
          </form>
          <form class="unjoin" >
            <input type="hidden" name="trip_id" >
            <button type="button" class="btn btn-danger" onclick="unjoin()">Unjoin</button>
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
            <tbody>
              
            </tbody>
            
          </table>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

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