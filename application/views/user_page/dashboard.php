		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="index.html"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to Search Page</a>
				</div>
				<div class="panel-footer">
					<div class="row">
					  <div class="col-md-6">
						<h2>@letslostinc</h2>
						<p><i class="fa fa-user" aria-hidden="true"></i> Name: First Name + Last Name</p>
						<p><i class="fa fa-phone" aria-hidden="true"></i> Phone: +62811322233324</p>
						<p><i class="fa fa-inbox" aria-hidden="true"></i> Mail: inc@letslost.com</p>
					  </div>
					  <div class="col-md-6">
						<div class="col-md-6">.</div>
						<div class="col-md-6">
							<div class="col-md-6">.</div>
							<div class="col-md-6">
								<a href="#update" data-toggle="modal" data-backdrop="static"  data-keyboard="false"   style="margin-left: 5px" class="btn ladda-button btn-danger btn-md" size="md">Update Profile</a>
							</div>
						</div>
						<p><i class="fa fa-street-view" aria-hidden="true"></i> Address: Sulawesi 32A, Surabaya</p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Age: 23 Years</p>
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
									  <tr>
										<td>Explore Sumenep</td>
										<td>Sumenep</td>
										<td>Surabaya</td>
										<td>25/09/2016</td>
										<td>30/09/2016</td>
										<td><a href="#" style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md">View</a></td>
									  </tr>
									  <tr>
										<td>Explore Bali</td>
										<td>Bali</td>
										<td>Surabaya</td>
										<td>25/12/2016</td>
										<td>30/12/2016</td>
										<td><a href="#" style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md">View</a></td>
									  </tr>
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
									  <tr>
										<td>Explore Sumenep</td>
										<td>Sumenep</td>
										<td>Surabaya</td>
										<td>25/09/2016</td>
										<td>30/09/2016</td>
										<td><a href="#" style="margin-left: 5px" class="btn ladda-button btn-info btn-md" size="md">View</a></td>
									  </tr>
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
				<h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
			  </div>
			  <div class="modal-body">
				<form action="<?php echo base_url()?>login/signup" method="POST" class="form-horizontal">
					<div class="form-group">
					  <label class="col-sm-2 control-label" >Nama</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Nama" name="fullname">              
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label" >Nomor HP</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Nomor HP" name="fullname">              
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label" >Email</label>
					  <div class="col-sm-10">
						<input type="email" class="form-control" placeholder="Mail" name="fullname">              
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
				  <?php } ?>
			  </div>
			  <div class="modal-footer">
				  <button type="submit" class="btn btn-primary">Save</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>