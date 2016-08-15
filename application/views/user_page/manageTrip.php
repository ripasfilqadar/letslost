<div class="container listsearch">
<span style="display:none" class="datarow"><?php echo json_encode($trip);?></span>
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="<?php echo base_url()?>userpage/profil"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to Profil</a>
				</div>
				<div class="panel-footer">
					<div class="row">
						<!-- Judul -->
						<div class="col-md-6">
							<h1><?php echo $trip['name']?> </h1>
						</div>
						<div class="col-md-6">
							<h1>&nbsp;</h1>
						</div><br>
						<!-- Details -->
						<div class="col-md-6">
							<p><?php echo $trip['desc']?></p>
						</div>
						<div class="col-md-6 right">
							<div class="col-md-6">
								<button style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md" data-select="detailTrip">View as Guest</button>
							</div>
							<div class="col-md-6">
								<a href="#modalEditTrip"  style="margin-left: 5px" class="btn ladda-button btn-warning btn-md" size="md" data-toggle="modal" data-backdrop="static"  data-keyboard="false" data >Edit Trip</a>
								<a href="#" style="margin-left: 5px" class="btn ladda-button btn-danger btn-md" size="md" data-select="deleteTrip">Delete Trip</a>
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="table-responsive">
								<h3>Participants</h3>
								<table class="table">
									<thead>
									  <tr>
										<th>#</th>
										<th>Name</th>
										<th>Years</th>
										<th>Sex</th>
										<th>Phone Number</th>
										<th>Address</th>
									  </tr>
									</thead>
									<tbody>
									<?php 
									$i=1;
									foreach ($partisipant as $row) {?>
									  <tr>
										<td><?php echo $i?></td>
										<td><?php echo $row['fullname']?></td>
										<td><?php 
										$born= date('Y-m-d', strtotime($row['born']));
										$now=date('Y-m-d');
										echo $now-$born;
										 ?></td>
										<td><?php
											if ($row['gender']==0) echo 'Female';
											else echo 'Male';?></td>
										<td><?php echo $row['phone']?></td>
										<td>Alamat ga ada di DB</td>
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
<div class="modal fade" tabindex="-1" role="dialog" id="deleteTrip">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Warning</h4>
      </div>
      <div class="modal-body">
        <center>
          <h4>
            Apakah anda yakin menghapus trip ini?
          </h4>
        </center>
      </div>
      <div class="modal-footer">
      <form action="<?php echo base_url()?>trip/delete" method="POST">
      	<input type="hidden" name="trip_id">
	    <button type="submit" class="btn btn-danger" >Delete</button>
	    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      	
      </form>
      </div>
    </div>
  </div>
</div>				
<?php
$this->view('page/detailTrip');
$this->view('page/modalEditTrip');?>
<script type="text/javascript">
	$("[data-select='deleteTrip']").click(function(){
		var id="<?php echo $trip['trip_id']?>";
		$("#deleteTrip [name='trip_id']").val(id);
		$("#deleteTrip").modal('show');

	});
</script>