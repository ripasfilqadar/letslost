<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Trip</h3>
                    <h5><?php echo sizeof($trip)?> Trip Created</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>Member</h3>
                    <h5><?php echo sizeof($member)?> Member Registered</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h4>User Joined Trip</h4>
                    <h5><?php echo sizeof($partisipant)?> Member Joined Trip</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Last Login</h3>
                    <h5><?php echo $_SESSION['admin']['last_login']?></h5>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
            </div>
        </div>
    </div>
</section>