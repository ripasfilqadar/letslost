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
		if (isset($input['type'])&& $input['type']=='API') {
			unset($input['type']);
			$type='API';
		}
		$data['trip']=$this->tripmodel->search($input);
		if (isset($type)) {
			$msg=['code'=>'200','msg'=>'Data Pencarian','data'=>$data['trip']];
			echo json_encode($msg);
			die();	
		}
		$this->layout->render('page/search',$data);
	}
}
