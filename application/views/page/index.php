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
								<input class="form-control input-lg" title="Places, Cities, Regions, Countries, anyware." placeholder="Places, Cities, Regions, Countries, anyware." type="text" id="my-input" class="typeahead" name="search">
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
				
				<div class="row">
					<h3 style="color:white;">
						<ul class="nav nav-pills">
						  <li role="presentation" class="disabled" style="color:white;"><a href="#">Popular Trip:</a></li>
						  <li role="presentation"><a href="#">Trip Karang Menaja <span class="badge">13</span></a></li>
						  <li role="presentation"><a href="#">Trip Komodo Island <span class="badge">22</span></a></li>
						  <li role="presentation"><a href="#">Trip Bali GWK <span class="badge">56</span></a></li>
						  <li role="presentation"><a href="#">Trip Yogya <span class="badge">31</span></a></li>
						</ul>
					</h3>
				</div>
			</div>
<?php include 'modalRegistrasi.php';			
 include 'modalAddTrip.php';			?>