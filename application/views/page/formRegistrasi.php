<script src='https://www.google.com/recaptcha/api.js'></script>
<form action="<?php echo base_url()?>login/signup" method="POST" class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label" >Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Name" name="fullname">              
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" >Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Username" name="uname">            
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" >HP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="HP" name="phone">            
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" >Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="E-Mail" name="email">             
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" >Website</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Website" name="website">             
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" >Bio</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Bio" name="bio">             
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label" >Born</label>
        <div class="col-sm-10">
          <input type="text" class="form-control datepicker" placeholder="Born" name="born">             
        </div>
      </div>          

      <div class="form-group">
        <label class="col-sm-2 control-label" >Gender</label>
        <div class="col-sm-10">
          <input type="radio"  name="gender" value="1"> L
          <input type="radio"  name="gender" value="0"> P          
        </div>
      </div>          

      <div class="form-group">
        <label class="col-sm-2 control-label" >Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" placeholder="Password" name="pass">              
        </div>
      </div>

      <div class="form-group">
         <label class="col-sm-2 control-label" >Confirm Password</label>
         <div class="col-sm-10">
          <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_pass">              
        </div>
      </div>
      <div class="g-recaptcha" data-sitekey="6LcBsyYTAAAAAD_D1iuhLN2GFhW-oy0wXrsOxkzU"></div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </div>
</form>