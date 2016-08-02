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
		$this->tripModel->input($data);
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
			$user=$this->input->post();
		}
		$this->partisipant->input($input);
		$msg=['code'=>200, 'msg'=>'Anda berhasil'];
		$_SESSION['warning']='Anda berhasil bergabung pada trip';
		redirect('/');
	}
	function unjoin(){
		$input=$this->input->post();
		$input['user_id']=$_SESSION['user']['user_id'];
		$this->partisipant->delete($input);
		$msg=['code'=>200, 'msg'=>'Anda batal mengikuti trip'];
		echo json_encode($msg);
	}
	function update(){
		$input=$this->input->post();
		$this->tripModel->update($input['trip_id'],$input);
		redirect('userpage/detailtrip/'.$input['trip_id']);
	}
	function delete(){
		$input=$this->input->post();
		$this->tripModel->delete($input);
		$_SESSION['warning']='Trip Berhasil dihapus';
		redirect('userpage/profil');
	}
}
