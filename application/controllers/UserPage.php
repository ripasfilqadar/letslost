<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPage extends CI_Controller {
	public $header='header_user';
	function __construct(){
		parent::__construct();
		$this->load->model('tripModel');
		$this->load->model('member');
		$this->load->model('partisipant');

	}
	public function index(){
		$this->layout->render('user_page/dashboard','','$this->header');
	}
		
	function profil(){
		$id['user_id']=$_SESSION['user']['user_id'];
		$data['profil']=$this->member->getBy($id)[0];
		$data['mytrips']=$this->tripModel->getBy(['organizer_id'=>$_SESSION['user']['user_id']]);
		$data['jointrips']=$this->member->getTrip();	
		// var_dump($data['mytrips']);	
		$this->layout->render('user_page/profil',$data,$this->header);	
	}
	function editMember(){
		$input=$this->input->post();
		if (isset($input['email'])) {
			$member=$this->member->getBy(['email'=>$input['email']]);
			if (sizeof($member)>0) {
				$_SESSION['warning']='Email '.$input['email'].' sudah digunakan';
				redirect ('userpage/profil');
			}
		}
		$this->member->update($input['user_id'],$input);
		 redirect('userpage/profil');
	}
}
