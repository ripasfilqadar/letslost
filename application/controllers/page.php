<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'/third_party/php-graph-sdk-5.0.0/src/Facebook/Autoload.php';
class Page extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('cityModel');
		$this->load->model('tripmodel');
		$this->load->library('facebook');
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
	public function tes($value='')
	{
		$status=$this->facebook->is_authenticated();
		echo $status;
		echo $this->facebook->login_url();

	}
	function callbackLogin(){
		$this->load->view('callback');
	}
	function loginFB(){
		echo 'login';
	}
}
