<section>
	<div class="col-md-2"></div>
	<div class="row row col-md-8 col-md-offset-2" style="background:white;border-radius:10px;margin-left:auto">
		<div class="col-md-12" >
			<div class="col-md-6">
				<h4><?php echo $trip['name']?></h4>
				<p>
					<?php echo $trip['desc']?>
				</p>
			</div>
			<div class="col-md-6" style="margin-top:50px">
				<button class="btn btn-primary edit" data-id=<?php echo $trip['trip_id']?>>Edit</button>
				<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Remove</button>
			</div>	
		</div>
		<div class="col-md-12">
			<h4>Participant</h4>
			<table  class="table table-bordered">
				<tbody>
					<?php $i=1; foreach ($partisipant as $row) { ?>
						<tr>
							<td><?php echo $i?></td>
							<td><?php echo 'umur'?></td>
							<td><?php 
								if ($row['gender']==0) echo 'Pria';
								else echo 'Wanita';?>
							</td>
							<td><?php echo $row['phone']?></td>

						</tr>						
					<?php }?>
				</tbody>
			</table>
		</div>

		
	</div>
		
</section>
<?php load_view('page/modalAddTrip.php'); ?>
<div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?php echo base_url()?>trip/delete" method="POST">
    	<input type="hidden" name="trip_id" value="<?php echo $trip['trip_id']?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Warning</h4>
      </div>
      <div class="modal-body">
        <center>
          <h4>
            Remove this trip?
          </h4>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Remove</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script type="text/javascript">
	$(".edit").click(function(){
		var id=$(this).attr('data-id');
		var data='<?php echo json_encode($trip);?>';
		var url='<?php echo base_url()?>trip/update';
		$("#modalAddTrip button.btn-primary").text('Edit Trip');
		$("#modalAddTrip form").append('<input type="hidden" name="trip_id" value="'+id+'"">');
		data=jQuery.parseJSON(data);
		$("#modalAddTrip form").attr('action',url);
		$.each(data, function(key, value) {
	     	$("#modalAddTrip [name='"+key+"']").val(value);
	     });
		$("#modalAddTrip").modal('show');
	});
</script>


