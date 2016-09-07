<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()?>assets/favicon.ico">

    <title>LetsLost</title>
    
    <!-- CSS  -->
    <link href="<?php echo base_url()?>assets/css/icon.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <link href="<?php echo base_url()?>assets/css/letslost.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap-social.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/font-awesome.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    
    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

    <script src="<?php echo base_url()?>assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/typeahead.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/typeahead.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/typeahead.jquery.js"></script>
    
	<script type="text/javascript">
		// Waiting for the DOM ready...
/*		$(function(){
		  // applied typeahead to the text input box
		  $('#my-input').typeahead({
			name: 'destinate',

			// data source
			prefetch: "<?php echo base_url()?>json/destinate.js",

			// max item numbers list in the dropdown
			limit: 20
		  });

		});*/
       /* $('.typeahead').typeahead({
          minLength: 1,
          highlight: true
        },
        {
          name: 'my-dataset',
          source: "<?php echo base_url()?>json/destinate.js",
        });
        $('.typeahead').typeahead('open');*/
/*        $(function(){
            var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // url points to a json file that contains an array of country names, see
            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
            prefetch: "<?php echo base_url()?>json/destinate.js",
            });

            // passing in `null` for the `options` arguments will result in the default
            // options being used
            $('#my-input').typeahead(null, {
            name: 'countries',
            source: countries
            });
        });*/
	</script>
  </head>

<!--  -->
<style type="text/css">
  #scrollable-dropdown-menu .tt-dropdown-menu {
  max-height: 150px;
  overflow-y: auto;
}
#multiple-datasets .league-name {
  margin: 0 20px 5px 20px;
  padding: 3px 0;
  border-bottom: 1px solid #ccc;
    max-height: 150px;
  overflow-y: auto;
}
</style>
