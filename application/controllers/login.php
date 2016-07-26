<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Layout');
	}

	public function index()
	{
		$this->layout->render('page/index');
	}
}
