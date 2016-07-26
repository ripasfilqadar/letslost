<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->layout->render('page/index');
		$this->load->view('page/modalRegistrasi');
	}
}
