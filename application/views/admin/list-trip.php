<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Trip</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nama Trip</th>
                            <th>Kota Mulai</th>
                            <th>Kota Tujuan</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Website</th>
                            <th>Deadline</th>
                            <th>Kuota</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($trip as $row){?>
                                <tr>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['start']?></td>
                                    <td><?php echo $row['finish']?></td>
                                    <td><?php echo $row['timeheld']?></td>
                                    <td><?php echo $row['timeend']?></td>
                                    <td><?php echo $row['website']?></td>
                                    <td><?php echo $row['deadline']?></td>
                                    <td><?php echo $row['quota']?></td>
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