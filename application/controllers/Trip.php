<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('tripModel');
		$this->load->model('partisipant');
		$this->load->model('member');
	}
	public function index()
	{
		
	}
	function addPage(){
		$input=$this->input->post();
		$this->tripModel->insert($input);
		redirect('/');
	}
	function add(){
		$data=$this->input->post();

		// var_dump($data);
		// $data['timeend']='10/08/2016';
		$data['timeheld']=date('Y-m-d', strtotime($data['timeheld']));
		$data['timeend']=date('Y-m-d', strtotime($data['timeend']));
		// var_dump($data);
		if (isset($data['type']) && $data['type']=='API') {
			$type='API';
			unset($data['type']);
		}
		$this->tripModel->input($data);
		if (isset($type)) {
			$msg=['code'=>'200','msg'=>'Trip Berhasil Ditambahkan','data'=>''];
			echo json_encode($msg);
			die();
		}
		$_SESSION['warning']='Trip Berhasil Ditambahkan';
		redirect('/');
	}
	function checkPartisipant(){
		$input['trip_id']=$this->input->post('trip_id');

		$data['partisipan']=$this->partisipant->getBy($input);
		// var_dump($input);
		$code=201;
		if(!isset($_SESSION['user'])){
			$msg=['code'=>201,'data'=>$data];
			echo json_encode($msg);
		}
		else{
			foreach ($data['partisipan'] as $row) {
				if ($row['user_id']==$_SESSION['user']['user_id'] ) {
					$code=200;
					break;
				}
			}
			$msg=['code'=>$code,'data'=>$data];
			echo json_encode($msg);			
		}
	}
	function join(){
		$input=$this->input->post();		
		if (isset($_SESSION['user'])) {
			$user=$this->member->getBy(['user_id'=>$_SESSION['user']['user_id']]);

			// var_dump($input);
			$input=array_merge($input,$user[0]);
			unset($input['uname'],$input['pass'],$input['join_date'],$input['website'],$input['region'],$input['bio'],$input['lastlog']);
		}
		else{
			if (isset($input['type']) && $input['type']="API") {
				$type=$input['type'];
				unset($input['type']);
			}
		}
		if (isset($input['user_id'])) {
			$partisipant=$this->partisipant->getBy(['trip_id'=>$input['trip_id'],'user_id'=>$input['user_id']]);
			if (sizeof($partisipant)>0) {
				$msg='Anda sudah terdaftar dalam trip';
				$msg=['code'=>'500','msg'=>$msg,'data'=>''];
				if (isset($type)) {
					echo json_encode($msg);
					die();
				}
				else{
					$_SESSION['warning']=$msg;
					redirect('/');
				}
			}
		}
		
		$this->partisipant->input($input);
		if (isset($type)) {
			$msg=['code'=>200, 'msg'=>'Anda berhasil bergabung pada trip'];
			echo json_encode($msg);
			die();
		}

		$_SESSION['warning']='Anda berhasil bergabung pada trip';
		redirect('/');
	}
	function unjoin(){
		$input=$this->input->post();
		
		if (isset($input['type'])) {
			$type=$input['type'];
			unset($input['type']);
		}
		if (!isset($input['user_id'])) {
			$input['user_id']=$_SESSION['user']['user_id'];			
		}
		$this->partisipant->delete($input);
		$msg=['code'=>200, 'msg'=>'Anda batal mengikuti trip','data'=>''];
		echo json_encode($msg);
	}
	function update(){
		$input=$this->input->post();

		if (isset($input['type']) && $input['type']=='API') {
			$type=$input['type'];
			$user_id=$input['organizer_id'];
			unset($input['type'],$input['organizer_id']);
		}
		else{
			$user_id=$_SESSION['user']['user_id'];
		}

		$trip=$this->tripModel->getBy(['trip_id'=>$input['trip_id']])[0];
		
		if (intval($trip['organizer_id'])!=intval($user_id)) {
			$warning='Terjadi kesalahan';
			if (isset($type)) {
				$msg=['code'=>'500','msg'=>$warning,'data'=>''];
				echo json_encode($msg);
				die();
			}
			$_SESSION['warning']=$warning;
			redirect('userpage/profil');
		}
		$this->tripModel->update(['trip_id'=>$input['trip_id']],$input);
		if (isset($type)) {
			$trip=$this->tripModel->getBy(['trip_id'=>$input['trip_id']])[0];
			$msg=['code'=>'200','msg'=>'Trip Berhasil di Update','data'=>$trip];
			echo json_encode($msg);
			die();
		}
		redirect('userpage/detailtrip/'.$input['trip_id']);
	}
	function delete(){
		$input=$this->input->post();

		if (isset($input['type']) && $input['type']=='API') {
			$type=$input['type'];
			$user_id=$input['organizer_id'];
			unset($input['type'],$input['organizer_id']);
		}
		else{
			$user_id=$_SESSION['user']['user_id'];
		}
		$trip=$this->tripModel->getBy($input)[0];
		
		if (intval($trip['organizer_id'])!=intval($user_id)) {
			$warning='Terjadi kesalahan';
			if (isset($type)) {
				$msg=['code'=>'500','msg'=>$warning,'data'=>''];
				echo json_encode($msg);
				die();
			}
			$_SESSION['warning']=$warning;
			redirect('userpage/profil');
		}

		$this->tripModel->delete($input);
		if(isset($type)){
			$msg=['code'=>'200','msg'=>'Trip Berhasil dihapus','data'=>''];
			echo json_encode($msg);
			die();
		}
		$_SESSION['warning']='Trip Berhasil dihapus';
		redirect('userpage/profil');
	}
}
