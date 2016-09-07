    <div class="container">
      <div class="panel panel-default">
        <div class="panel-body">
          <a href="<?php echo base_url()?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to Search Page</a>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6">
              <h1>Trips</h1>
            </div>
            <div class="col-md-6">
              
            </div>
            <div class="col-md-12">
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
                    <?php foreach ($trip as $row) {?>
                      <tr class="listsearch">
                      <td><?php echo $row['trip_name']?>
                      <br> <?php echo $row['descript']?><span style="display:none" class="datarow"><?php echo json_encode($row);?></span>
                      </td>
                      <td><?php echo $row['start_city']?></td>
                      <td><?php echo $row['dest_city']?></td>
                      <td><?php echo date('d-m-Y',strtotime($row['timeheld']))?></td>
                      <td><?php echo date('d-m-Y',strtotime($row['timeend']))?></td>
                      <td><button data-select="detailTrip" data-id="<?php echo $row['trip_id']?>" style="margin-left: 5px" class="btn  btn-info" size="xs">View</button></td>
                      </tr>
                      
                    <?php } ?>
                  </tbody>
                </table>

                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="disabled">
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
            </nav>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


   


<?php include 'detailTrip.php';?>

<div class="modal fade" tabindex="-1" role="dialog" id="joinTrip">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
        <div>
          <h4>Trip To <span class="namaTrip"></span></h4>
            <input type="hidden" name="trip_id">
            <button type="button" class="btn btn-primary" onclick="join()" data-dismiss="modal">Join</button>
            <button type="button" class="btn btn-danger" onclick="unjoint()">Unjoin</button>
          
        </div>
        <div class="desc">
          
        </div>
        <div class="sisa">
          <h4 class="available">Available</h4>
          <h4 class="partisipan">partisipan</h4>
        </div>
        <div>
          <table class="listpartisipan">
            
          </table>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


