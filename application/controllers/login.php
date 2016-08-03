<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Layout');
		$this->load->model('member');
		 $this->load->library('session');
		// $this->load->library('../controllers/EmailClass');
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
		$user=$this->member->getBy($input)[0];
		if(sizeof($user)>0){
			if ($user['flags']==0) {
				$_SESSION['warning']='Akun anda belum diaktivasi, silahkan cek email';
				redirect('/');
			}
			$_SESSION['user']=$user;
			$update['lastlog']=date('Y-m-d H:i:s');
			$this->member->update($user['user_id'],$update);
		}
		else{
			$this->session->set_flashdata('warning','username dan password tidak ada yang cocok');
		}
		redirect('/');	
	}
	public function signup(){
		$secret='6LcBsyYTAAAAAMBYJeoS5P72Ge36lhY50ueDW6Lm';

		$result=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$this->input->post("g-recaptcha-response"));
		$result=json_decode($result,true);
		if ($result['success']==false) {
			$_SESSION['warning']='Captcha tidak valid';
			redirect('/');
		}

		$update=['email'=>$this->input->post('email')];
		$user=$this->member->getBy($update);
		if (sizeof($user)>0) {
			$_SESSION['warning']='Email sudah digunakan';

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
				'flags'=>0,
				);
			$id=$this->member->input($data);
			$pesan='<a href="'.base_url().'login/aktivasi/'.md5($id).'" <h4>Aktivasi Akun</h4></a>';
			$email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'rif2602@gmail.com',
            'smtp_pass' => 'ripasripas',          
            'mailpath' => '/usr/sbin/sendmail',
		    'charset' => 'iso-8859-1',
		    'wordwrap' => TRUE,
            'mailtype'  => 'html', 
	        );

	        $this->load->library('email', $email_config);
	        $this->email->set_newline("\r\n");	

	        $this->email->from('rif2602@gmail.com', 'Lets Lost');
	        $this->email->to($data['email']);
	        $this->email->subject('Aktivasi Akun');
	        $this->email->message($pesan);
	        $this->email->send();
			$_SESSION['warning']='Silahkan cek email anda untuk aktivasi';
		}
		// echo $data['message_display'];
			redirect('/');
	}
	function logout(){
		unset($_SESSION['user']);
		redirect('login');
	}
	function aktivasi($id){
		$member=$this->member->getByHash($id)[0];
		if (sizeof($member)==0) {
			$_SESSION['warning']='Member tidak ditemukan';
		}
		else{			
			$this->member->update($member['user_id'],['flags'=>1]);
			$_SESSION['warning']='Aktivasi akun anda berhasil, silahkan login';
		}
		redirect('/');
	}
}
