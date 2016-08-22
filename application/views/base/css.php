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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/datepicker.css">
    <link href="<?php echo base_url()?>assets/css/letslost.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/font-awesome.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    
    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

    <script src="<?php echo base_url()?>assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/typeahead.js"></script>
	<script type="text/javascript">
		// Waiting for the DOM ready...
		$(function(){

		  // applied typeahead to the text input box
		  $('#my-input').typeahead({
			name: 'countries',

			// data source
			prefetch: '<?php echo base_url()?>assets/countries.json',

			// max item numbers list in the dropdown
			limit: 10
		  });

		});
	</script>
  </head>