<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Member</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Join Date</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Born Date</th>
                            <th>Gender</th>
                            <th>Last Login</th>
                            <th>Region</th>
                            <th>City</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $gender=['P','L'];
                        foreach($member as $row){?>
                                <tr>
                                    <td><?php echo $row['uname']?></td>
                                    <td><?php echo $row['fullname']?></td>
                                    <td><?php echo $row['join_date']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['born']?></td>
                                    <td><?php echo $gender[$row['gender']]?></td>
                                    <td><?php echo $row['lastlog']?></td>
                                    <td><?php echo $row['region_name']?></td>
                                    <td><?php echo $row['city_name']?></td>
                                    <td>
                                    </td>
                                </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>