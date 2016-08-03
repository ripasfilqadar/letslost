	  <!-- FOOTER -->
<!--       <footer style="position:absolut; bottom:0px; left:0px">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 LetsLost, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer> -->

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

<div class="modal fade" tabindex="-1" role="dialog" id="warning">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Warning</h4>
      </div>
      <div class="modal-body">
        <center>
          <h4>
            
          </h4>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php 
if (isset($_SESSION['warning'])) {
  ?>
  <script type="text/javascript">
  var text="<?php echo $_SESSION['warning']?>";
  $("#warning h4").text(text);
  $("#warning").modal('show');
  </script>
  <?php
  unset($_SESSION['warning']);
}
?>

<script type="text/javascript">
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'dd-mm-yyyy',
  });
</script>

  </body>
</html>
