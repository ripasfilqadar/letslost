
<script type="text/javascript">
  $(".listsearch button").click(function(){
    var data=$(this).closest('.listsearch').find('.datarow').text();
    data=jQuery.parseJSON(data);
    // console.log(data);
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
              <h1>Explore Sumenep </h1>
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
                  <p>Mengunjungi Kraton Sumenep dan Tempat Bersejarah Lainnya.. lalu ke pantai lombang untuk berjemur dengan bule cantik</p>
                </div> 
              </div>
              <br>
            </div>
            <div class="col-md-6 right">
              <div class="col-md-6">
                <p>&nbsp;</p>
              </div>
              <div class="col-md-6">
                <a href="#joint" data-toggle="modal" data-backdrop="static"  data-keyboard="false"  style="margin-left: 5px" class="btn ladda-button btn-warning btn-md" size="md">Join</a>
                <!-- if cancel join >
                <a href="#" style="margin-left: 5px" class="btn ladda-button btn-danger btn-md" size="md">UnJoin</a-->
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
