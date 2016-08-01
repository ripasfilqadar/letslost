<section>
	<div class="col-md-2"></div>
	<div class="row row col-md-8 col-md-offset-2" style="background:white;border-radius:10px;margin-left:auto">
		<div class="col-md-12" >
		<div style="float:right">
			<button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Update Profile</button>
		</div>
			<div class="col-md-6">
				<center>
					<h4>@<?php echo $profil['uname']?></h4>
					<table>
						<tr>
							<td>Nama</td>
							<td><?php echo $profil['fullname']?></td>
						</tr>
						<tr>
							<td>HP</td>
							<td><?php echo $profil['phone']?></td>
						</tr>
						<tr>
							<td>Mail</td>
							<td><?php echo $profil['email']?></td>
						</tr>
					</table>
				</center>
			</div>
			<div class="col-md-6">
				<center>
					<table>
						<tr>
							<td>
								<!-- <?php echo $profil['region_name'].', '.$profil['city_name'];?> -->
							</td>
						</tr>
						<tr>
							
						</tr>
					</table>
				</center>
			</div>
			
		</div>

		<div class="col-md-6">
			<h4>My Trips</h4>
			<?php
			foreach ($mytrips as $mytrip) { ?>
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="col-md-6"><?php echo $mytrip['name']?></div>
					<div class="col-md-6"><?php echo date('d/m/Y', strtotime($mytrip['timeheld'])).' To '.date('d/m/Y',strtotime($mytrip['timeend']))?> </div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6"><?php echo $mytrip['destinate'];?></div>
					<div class="col-md-6"><?php echo 'Start from '.$mytrip['start']?></div>					
				</div>
				<div>
					<button data-id=<?php echo $mytrip['trip_id'];?>>View</button>
				</div>
				
			</div>
			<?php } ?>
		</div>
		<div class="col-md-6">
			<h4>Trip(s) Joined</h4>
			<?php
			foreach ($jointrips as $jointrip) { ?>
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="col-md-6"><?php echo $jointrip['name']?></div>
					<div class="col-md-6"><?php echo date('d/m/Y', strtotime($jointrip['timeheld'])).' To '.date('d/m/Y',strtotime($jointrip['timeend']))?> </div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6"><?php echo $jointrip['destinate'];?></div>
					<div class="col-md-6"><?php echo 'Start from '.$jointrip['start']?></div>					
				</div>
				<div>
					<button data-id=<?php echo $jointrip['trip_id'];?>>View</button>
				</div>
				
			</div>
			<?php } ?>
		</div>
	</div>
		
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <form action="<?php echo base_url()?>userpage/editmember" method="POST" class="form-horizontal">
    <input type="hidden" name="user_id" value="<?php echo $profil['user_id'];?>">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Profile</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-2 control-label" >Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Name" name="fullname" value="<?php echo $profil['fullname']?>">              
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Username" name="uname" value="<?php echo $profil['uname']?>">            
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="HP" name="phone" value="<?php echo $profil['phone']?>">            
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" placeholder="E-Mail" name="email" value="<?php echo $profil['email']?>">             
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Profile</button>
      </div>
    </form>
    </div>
  </div>
</div>