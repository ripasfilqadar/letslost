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
          console.log(key);
            if(key=="gender"){
              $("#dataMember [value='"+value+"']").prop('checked',true);
              $("#dataMember .modal-footer").append('<input type="hidden" name="gender" value="'+value+'">');
            }
            else if(key=="born"){
             $("#dataMember .modal-footer").append('<input type="hidden" name="born" value="'+value+'">'); 
            }
            else{
              $("#dataMember [name='"+key+"']").val(value);
              $("#dataMember  [name='"+key+"']").prop('disabled',false).clone().appendTo("#dataMember .modal-footer").hide();
            }
            $("#dataMember .modal-body [name='"+key+"']").prop('disabled',true);


        });
      };
      console.log("#dataMember form");
      $("#dataMember [name='trip_id']").val(trip_id);
      var name=$("[data-select='name']").text();
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
        location.reload();
        $("#detailTrip .btn-primary").show();
        $("#detailTrip .btn-danger").hide();
      }
    });
  }
</script>


<script type="text/javascript">
  $("[data-select='detailTrip']").click(function(){
    var data=$(this).closest('.listsearch').find('.datarow').text();
    data=jQuery.parseJSON(data);
    $("[name='trip_id']").val(data.trip_id);
    $(".table .listpartisipan").empty();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url()?>trip/checkPartisipant?>",
      dataType: "json",
      data:{'trip_id':data.trip_id},
      success: function (response) {
        console.log(response);
        $("#detailTrip table tbody").empty();
        $("#detailTrip").modal('show');


        $(".available").text(parseInt(data.quota) - parseInt(response.data.partisipan.length));
        $(".partisipan").text(response.data.partisipan.length+" of "+data.quota+" partisipant");
        $(".namaTrip").text(data.city_name);
        $("[data-select='name']").text(data.name);
        $("#detailTrip [name='trip_id']").val(data.trip_id);
        $("[data-select='desc']").text(data.desc);
        for (var i = 0; i < response.data.partisipan.length; i++) {
          var text='<tr><td>'+(i+1)+'</td><td>'+response.data.partisipan[i].fullname+'</td></tr>';
          $("#detailTrip table tbody").append(text); 
        };
        if (response.code==200) {
          $("[data-select='button-join']").hide();
        }
        else{
          $("[data-select='button-unjoin']").hide();
        }
      },
    });
  });
</script>

<div class="modal fade" tabindex="-1" role="dialog" id="detailTrip">
  <div class="modal-dialog" role="document"  style="width:80%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">


        <div class="panel-footer">
          <div class="row">
            <!-- Judul -->
            <div class="col-md-6 name">
              <h1 data-select="name"> </h1>
            </div>
            <div class="col-md-6">
              <h1>&nbsp;</h1>
            </div><br>
            <!-- Details -->
            <div class="col-md-6">
              <div class="media"> 
                <div class="media-left"> 
                  <a href="#"> 
                    <img alt="64x64" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY1ZmJlYmJjMyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjVmYmViYmMzIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> 
                  </a> 
                </div> 
                <div class="media-body">
                  <p data-select="desc"></p>
                </div> 
              </div>
              <br>
            </div>
            <div class="col-md-6 right">
              <div class="col-md-6">
                <p>&nbsp;</p>
              </div>
              <div class="col-md-6">
                <button  style="margin-left: 5px" data-dismiss="modal" class="btn ladda-button btn-warning btn-md" size="md" onclick="join()" data-select="button-join">Join</button>
                 
                <button  style="margin-left: 5px" data-select="button-unjoin" class="btn btn-danger ladda-button " size="md" onclick="unjoin()">UnJoin</button>
              </div>
              <br><br>
            </div>
            
            <div class="col-md-12">
              <div class="table-responsive">
                <div class="alert alert-info" role="alert">
                  <b><span class="available"></span> Seat Available!!</b>
                </div>
                <h3 class="partisipan">3 of 10 Participants</h3>
                <table class="table">
                  <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
    <form action="<?php echo base_url()?>trip/join" method="POST" data-select="form-submit" class="form-horizontal">
      <div class="modal-body">
          <center>
            <h4 data-select="name-trip">Join Trip</h4>
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
            <label class="col-sm-2 control-label" >Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control datepicker" name="born">              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" >Gender</label>
            <div class="col-sm-10">
              <input type="radio"  name="gender" value="1"> L
              <input type="radio"  name="gender" value="0"> P          
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="trip_id">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Join Trip</button>
      </div>
    </div>
  </form>
  </div>
</div>    