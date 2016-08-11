		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="index.html"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to Search Page</a>
				</div>
				<div class="panel-footer">
					<div class="row">
					  <div class="col-md-6">
						<h2>@<?php echo $profil['uname']?></h2>
						<p><i class="fa fa-user" aria-hidden="true"></i> Name: <?php echo $profil['fullname']?> </p>
						<p><i class="fa fa-phone" aria-hidden="true"></i> Phone: <?php echo $profil['phone']?> </p>
						<p><i class="fa fa-inbox" aria-hidden="true"></i> Mail: <?php echo $profil['email'] ?></p>
					  </div>
					  <div class="col-md-6">
						<div class="col-md-6">.</div>
						<div class="col-md-6">
							<div class="col-md-6">.</div>
							<div class="col-md-6">
								<a href="#update" data-toggle="modal" data-backdrop="static"  data-keyboard="false"   style="margin-left: 5px" class="btn ladda-button btn-danger btn-md" size="md">Update Profile</a>
							</div>
						</div>
						<!-- <p><i class="fa fa-street-view" aria-hidden="true"></i> Address:  </p> -->
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Birthday: <?php echo date('d-m-Y',strtotime($profil['born']))?></p>
						<p><i class="fa fa-globe" aria-hidden="true"></i> Nationality: Indonesia</p>
					  </div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h1>My Trips</h1>
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
									<?php foreach ($mytrips as $row) { ?>
									  <tr class="listsearch">
										<td><?php echo $row['name']?>
					                      <br> <?php echo $row['desc']?><span style="display:none" class="datarow"><?php echo json_encode($row);?></span>
					                      </td>
					                      <td><?php echo $row['start']?></td>
					                      <td><?php echo $row['finish']?></td>
					                      <td><?php echo date('d-m-Y',strtotime($row['timeheld']))?></td>
					                      <td><?php echo date('d-m-Y',strtotime($row['timeend']))?></td>
					                      <td><button href="<?php echo base_url()?>page/detail" style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md">View</button></td>
					                    </tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-6">
							<h1>Trip's 1 Joined</h1>
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
									  <?php foreach ($jointrips as $row) { ?>
									  <tr class="listsearch">
										<td><?php echo $row['name']?>
					                      <br> <?php echo $row['desc']?><span style="display:none" class="datarow"><?php echo json_encode($row);?></span>
					                      </td>
					                      <td><?php echo $row['start']?></td>
					                      <td><?php echo $row['finish']?></td>
					                      <td><?php echo date('d-m-Y',strtotime($row['timeheld']))?></td>
					                      <td><?php echo date('d-m-Y',strtotime($row['timeend']))?></td>
					                      <td><button style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md">View</button></td>
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
		
		<!-- Modal -->
		<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Update Profile</h4>
			  </div>
			  <div class="modal-body">
				<form action="<?php echo base_url()?>login/update" method="POST" class="form-horizontal">
					<div class="form-group">
					  <label class="col-sm-2 control-label" >Nama</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Nama" name="fullname" value="<?php echo $_SESSION['user']['fullname']?>">              
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label" >Nomor HP</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Nomor HP" name="phone" value="<?php echo $_SESSION['user']['phone']?>">              
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label" >Email</label>
					  <div class="col-sm-10">
						<input type="email" class="form-control" placeholder="Mail" name="email" value="<?php echo $_SESSION['user']['phone']?>">              
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-sm-2 control-label" >Alamat</label>
					  <div class="col-sm-10">
						  <textarea class="form-control" rows="5" placeholder="Alamat"></textarea>     
					  </div>
					</div>
					
					<!-- Jenis Kelamin DropDown -->
					<!-- Tanggal Lahir Datetimepicker -->
					<!-- Negara DropDown -->
			  </div>
			  <div class="modal-footer">
				  <button type="submit" class="btn btn-primary">Save</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

<?php $this->view('page/detailTrip.php'); ?>