<div class="container">
			<br/><br/>
			<div class="logo-responsive">
				<img src="<?php echo base_url()?>assets/img/logo.png" alt="">
			</div>

			<div class="page-header">
				<br/>
				<center>
					<form action="<?php echo base_url()?>page/search">
						<div id="custom-search-input">
							<div class="input-group col-md-12">
								<input class="form-control input-lg" title="Places, Cities, Regions, Countries, anyware." placeholder="Places, Cities, Regions, Countries, anyware." type="text" name="search">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="submit">
										<span class="fa fa-search"></span>
									</button>
								</span>
							</div>
						</div>
						<div>
							<a href="#modalAddTrip " data-toggle="modal" data-backdrop="static"  data-keyboard="false" ><u><h4 style="text-align:right; color:white">Or post a trip</h4></u></a>					
						</div>
					</form>
				</center>
			</div>
<?php include 'modalRegistrasi.php';			