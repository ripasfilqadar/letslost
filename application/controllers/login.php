<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Layout');
		$this->load->model('member');
	}

	public function index()
	{
		$this->layout->render('page/index');
		$this->load->view('page/modalRegistrasi');
	}
	public function checkLogin()
	{
		$input=$this->input->post();
		$input['pass']=md5($input['pass']);
		$user=$this->member->getBy($input);
		if(sizeof($user)>0){
			$_SESSION['user']=$user[0];
			$update['lastlog']=date('Y-m-d H:i:s');
			$this->member->update($user[0]['user_id'],$update);
		}
		else{
			$this->session->set_flashdata('warning','username dan password tidak ada yang cocok');
		}
		redirect('/');	
	}
	public function signup(){
		$update=['email'=>$this->input->post('email')];
		var_dump($update);
		$user=$this->member->getBy($update);
		var_dump($user);
		if (sizeof($user)>0) {
			$_SESSION['warning']='Email sudah digunakan';
			redirect('/');
		}
		$password=$this->input->post('pass');
		$confirm_pass=$this->input->post('confirm_pass');
		if ($password!=$confirm_pass) {
			$_SESSION['warning']='Password yang anda masukkan tidak sama';
		}
		else{
			$data = array(
				'uname' =>$this->input->post('uname') ,
				'pass' => md5($password) ,
				'fullname'=>$this->input->post('fullname'),
				'phone'=>$this->input->post('phone'),
				'email'=>$this->input->post('email'),
				);
			$this->member->input($data);			
		}
			redirect('/');
	}
	function logout(){
		unset($_SESSION['user']);
		redirect('login');
	}
}
