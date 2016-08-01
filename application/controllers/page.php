<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('cityModel');
		$this->load->model('tripmodel');
	}
	public function index()
	{
		$data['city']=$this->cityModel->get();
		$this->layout->render('page/index',$data);
		// $this->load->view('page/modalRegistrasi');
	}
	function search(){
		$input=$this->input->get();
		$data['trip']=$this->tripmodel->search($input);
		$this->layout->render('page/search',$data);
	}
}
