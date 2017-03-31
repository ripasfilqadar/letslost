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
		$data['mytrips']=$this->tripModel->getBy(['organizer'=>$_SESSION['user']['user_id']]);
		$data['jointrips']=$this->member->getTrip();	
		// var_dump($data['mytrips']);	
		$_SESSION['user']=$data['profil'];
		$this->layout->renderUser('user_page/profil',$data);	
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
	function detailTrip($id=NULL){
		if ($id==NULL) {
			redirect('userpage/profil');
		}
		$data['trip']=$this->tripModel->getBy(['trip_id'=>$id]);
		if (sizeof($data['trip'])>0) {
			$data['trip']=$data['trip'][0];
		}
		$data['partisipant']=$this->partisipant->getBy(['trip_id'=>$id]);
		$this->layout->renderUser('user_page/detail-trip',$data);
	}
	function manageTrip($id=NULL){
		if ($id==NULL) {
			redirect('userpage/profil');
		}
		$data['trip']=$this->tripModel->getBy(['trip_id'=>$id]);
		if (sizeof($data['trip']>0)) $data['trip']=$data['trip'][0];

		$data['partisipant']=$this->partisipant->getBy(['trip_id'=>$id]);
		$this->layout->renderUser('user_page/manageTrip',$data);
	}

	function allTrip()
	{
		$user_id = $_SESSION['user']['user_id'];
		$type = $this->input->get('type');
		$all_trip = $this->member->getUserTrip(	['user_id'=> $user_id]);

		if (isset($type) && $type == 'API') {
			echo json_encode($all_trip);
			die();
		}
	}
}
