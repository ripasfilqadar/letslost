<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpage extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin');	
		$this->load->model('tripmodel')	;
		$this->load->model('member');
		$this->load->model('partisipant');
	}
	public function index()
	{
		$data['trip']=$this->tripmodel->get();
		$data['member']=$this->member->get();
		$data['partisipant']=$this->partisipant->get();
		$this->layout->renderAdmin('admin/dashboard',$data);
	}
	function trip()
	{
		$data['trip']=$this->tripmodel->get();
		$this->layout->renderAdmin('admin/list-trip',$data);
	}
	function member(){
		$data['member']=$this->member->getData();
		$this->layout->renderAdmin('admin/list-member',$data);

	}
}
