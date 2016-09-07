      <!-- FOOTER -->
      <footer>      
        <!-- <p class="pull-right"><a href="#">Back to top</a></p> -->
        <center>
          <p class="copy" style="color: white;">Copyright &copy; <a href="#" style="color: white;">Let&#39;s Lost</a> 2016. &middot; <a href="#" style="color: white;">Privacy</a> &middot; <a href="#" style="color: white;">Terms</a></p>
        </center>
      </footer>
    </div>
  </body>
</html>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>


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
  $(".datepicker.dropdown-menu").click(function(){
      $(this).hide();
  });

  //auto suggest

</script>
<script>



var destinate = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('destinate'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: "<?php echo base_url()?>json/destinate.json",
});

var cities = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('city_name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: "<?php echo base_url()?>json/city.json",
});
var regions = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('reg_name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: "<?php echo base_url()?>json/regions.json",
});


var country = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('country_name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: "<?php echo base_url()?>json/countries.json",
});

$('#my-input').typeahead({
  highlight: true
},
{
  name: 'Cities',
  display: 'city_name',
  source: cities,
  templates: {
    header: '<h3 class="league-name">Cities</h3>'
  }
},
{
  name: 'Destinasi',
  display: 'destinate',
  source: destinate,
  templates: {
    header: '<h3 class="league-name">Destinate</h3>'
  }
},
{
  name: 'Regions',
  display: 'reg_name',
  source: regions,
  templates: {
    header: '<h3 class="league-name">Region</h3>'
  }
},
  {
  name: 'country',
  display: 'country_name',
  source: country,
  templates: {
    header: '<h3 class="league-name">Country</h3>'
  }
});

</script>
  </body>
</html>
