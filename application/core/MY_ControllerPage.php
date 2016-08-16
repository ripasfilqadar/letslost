<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_ControllerPage extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('TripModel');
		$data=$this->TripModel->get();
		
	}
}
?>