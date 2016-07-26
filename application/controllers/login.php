<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Layout');
		$this->load->model('user');
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
		$user=$this->user->getBy($input);
		print_r($input);
		if(sizeof($user)>0){
			$_SESSION['user']=$user[0];
		}
		else{
			$this->session->set_flashdata('warning','username dan password tidak ada yang cocok');
		}
		redirect('/');	
	}
	public function signup(){
		$password=$this->input->post('pass');
		$confirm_pass=$this->input->post('confirm_pass');
		if ($password!=$confirm_pass) {
			$this->session->set_flashdata('warning','Password yang anda masukkan tidak sama');
		}
		else{
			$data = array(
				'uname' =>$this->input->post('uname') ,
				'pass' => md5($password) ,
				'fullname'=>$this->input->post('fullname'),
				'phone'=>$this->input->post('phone'),
				'email'=>$this->input->post('email'),
				);
			$this->user->input($data);			
		}
			redirect('/');
	}
}
