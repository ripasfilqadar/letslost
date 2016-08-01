	<div class="container">

    <div class="page-header">
        <br/><br/><br/><br/><br/>
		<center>
			<form action="<?php echo base_url()?>page/search">
				<div class="input-group" style="width:100%;text-align:center;margin:0 auto;">
					<input class="form-control input-lg" title="Places, Cities, Regions, Countries, anyware." placeholder="Places, Cities, Regions, Countries, anyware." type="text" name="search">
					<span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button></span>
				</div>
				<div >
					<a href="#modalAddTrip " data-toggle="modal"    data-backdrop="static"  data-keyboard="false" ><u><h4 style="text-align:right; color:white">Or post a trip</h4></u></a>					
				</div>
			</form>
		</center>
      </div>

      <div class="row">
        <div class="col-xs-6">
			<center>
				<h1>LetsLost</h1>
				<p>"Life is the coffee, while jobs, money and position in society are the cups. They are just tools to hold and contain life, and do not change the quality of life."</p>
				<p>@sabaiX (www.lifetimejourney.me)</p>
			</center>
		</div>
        <div class="col-xs-6">
			<center>
				<img src="<?php echo base_url()?>assets/img/Google-Play-Store.png" width="190px" height="60px"><br><br>
				<img src="<?php echo base_url()?>assets/img/Apple-App-Store.png" width="190px" height="60px">
			</center>
		</div>
      </div>
	  
	  <hr>


<?php include 'modalRegistrasi.php';