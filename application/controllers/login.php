<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'/third_party/php-graph-sdk-5.0.0/src/Facebook/Autoload.php';
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Layout');
		$this->load->model('member');
		$this->load->library('session');
		$this->load->model('admin');
		$this->load->library('facebook');
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

		$user=$this->member->getBy([ 'email'=> $input['email'],'pass'=> $input['pass']])[0];
		
		if(sizeof($user)>0){
			if ($user['flags']==0) {
				if (isset($input['type']) && $input['type']=='API') {
					$msg=['code'=>'500','msg'=>'Akun anda belum diaktivasi,silah kan cek email ','data'=>''];
					echo json_encode($msg)	;
					die();
				}
				$_SESSION['warning']='Akun anda belum diaktivasi, silahkan cek email';
				redirect('/');
			}
			$update['lastlog']=date('Y-m-d H:i:s');
			$this->member->update($user['user_id'],$update);
			if (isset($input['type']) && $input['type']=='API') {
				$msg=['code'=>'200','msg'=>'Login Berhasil ','data'=>$user];
				echo json_encode($msg)	;
				die();
			}
			$_SESSION['user']=$user;
		}
		else{
			if (isset($input['type']) && $input['type']=='API') {
				$msg=['code'=>'500','msg'=>'username dan password tidak ada yang coco','data'=>''];
				echo json_encode($msg)	;
				die();
			}
			$this->session->set_flashdata('warning','username dan password tidak ada yang cocok');
		}
		redirect('/');	
	}
	public function signup(){

		$secret='6LcBsyYTAAAAAMBYJeoS5P72Ge36lhY50ueDW6Lm';
		$input=$this->input->post();
		if (!isset($input['type'])) {
			$result=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$this->input->post("g-recaptcha-response"));
			$result=json_decode($result,true);
			if ($result['success']==false) {
				$_SESSION['warning']='Captcha tidak valid';
				redirect('/');
			}			
		}


		$update=['email'=>$this->input->post('email')];
		$user=$this->member->getBy($update);
		if (sizeof($user)>0) {
			if (isset($input['type']) && $input['type']=='API') {
				$msg=['code'=>'500','msg'=>'Email sudag digunakan','data'=>''];
				echo json_encode($msg);
				die();
			}
			$_SESSION['warning']='Email sudah digunakan';

		}
		$password=$this->input->post('pass');
		$confirm_pass=$this->input->post('confirm_pass');
		if ($password!=$confirm_pass) {
			if (isset($input['type']) && $input['type']!='API') {
				$msg=['code'=>'500','msg'=>'Email password yang anda masukkan tidak sama','data'=>''];
				echo json_encode($msg);
				die();
			}
			$_SESSION['warning']='Password yang anda masukkan tidak sama';
		}
		else{

			$data=$this->input->post();
			$data['pass']=md5($data['pass']);
			if (isset($data['type'])) {
				unset($data['type']);
			}
			$data['fullname']=$data['first_name'].' '.$data['last_name'];
			unset($data['confirm_pass'],$data['g-recaptcha-response'],$data['last_name'],$data['first_name']);
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
	        if (isset($input['type']) && $input['type']=='API') {
	        	$msg=['code'=>'200','msg'=>'Registrasi berhasil cek email ','data'=>''];
	        	echo json_encode($msg);
	        	die();
	        }
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
		// print_r($member);
		// die();
		if (sizeof($member)==0) {
			$_SESSION['warning']='Member tidak ditemukan';
		}
		else{			
			$this->member->update($member['user_id'],['flags'=>1]);

			$_SESSION['user']=$member;
			// print_r($_SESSION['user']);
			// die();
			redirect('/');
		}
		redirect('/');
	}

	function loginadmin()
	{
		$this->load->view('admin/login');
	}
	function checkloginadmin()
	{
		$input=$this->input->post();
		$input['admin_pass']=md5($input['admin_pass']);
		$admin=$this->admin->getBy($input);
		if (sizeof($admin)==0) {
			redirect('login/loginadmin');

		}
		else{
			$update['last_login']=date('Y-m-d H:i:s');
			$_SESSION['admin']=$admin[0];
			$this->admin->update($input,$update);
			redirect('adminpage');
		}
	}

	function registerpage(){
		$this->layout->render('page/registrasi-page');
	}
	function loginFBPart2(){
		$fb = $this->facebook->object();
		// Get user info
		$response = $fb->get('/me?fields=id,name,email,birthday,gender,first_name');
		$user     = $response->getDecodedBody();			
		$member=$this->member->getMember(['uname'=>'','email'=>$user['email']]);
		if(sizeof($member)>0){
			$tempMember=[];
			foreach($member as $row){
				if($user['id']==$row['fb_id']){
					$_SESSION['user']=$row;
					$_SESSION['warning']='Login Berhasil';
					redirect('/');					
				}
			}
			$_SESSION['warning']='Email sudah digunakan, silahkan login melalui email';
			redirect('/');
		}
		else{
			$data_insert=['uname'=>$user['first_name'],'email'=>$user['email'],'role'=>2,'fullname'=>$user['name'],'fb_id'=>$user['id']];
			if(isset($user['gender'])){
				if($user['gender']=='male') $data_insert['gender']=0;
				else $data_insert['gender']=1;
			}
			if(isset($user['birthday'])) $data_insert['birthday']=$user['birthday'];
			
			$this->member->input($data_insert);
			$data_insert['user_id']=$this->db->insert_id();
			$_SESSION['user']=$data_insert;
			redirect('/');			
		}
	}
	function LoginFB(){
	
		$status=$this->facebook->is_authenticated();
		
		if(!$status){
			$url=$this->facebook->login_url();
			header("Location: ".$url);
			exit;
		}
		else{
			$fb = $this->facebook->object();
			// Get user info
			$response = $fb->get('/me?fields=id,name,email,birthday,gender,first_name');
			$user     = $response->getDecodedBody();			
			$member=$this->member->getBy(['fb_id'=>$user['id']]);
			if(sizeof($member)>0){
				$_SESSION['user']=$member[0];
				$_SESSION['warning']='Login Berhasil';
				redirect('/');
			}
			else{
				$data_insert=['uname'=>$user['first_name'],'email'=>$user['email'],'role'=>2,'fullname'=>$user['name'],'fb_id'=>$user['id']];
				die();
				if(isset($user['gender'])){
					if($user['gender']=='male') $data_insert['gender']=0;
					else $data_insert['gender']=1;
				}
				if(isset($user['birthday'])) $data_insert['birthday']=$user['birthday'];
				
				$this->member->input($data_insert);
				$data_insert['user_id']=$this->db->insert_id();
				$_SESSION['user']=$data_insert;
				redirect('/');			
			}	
		}

	}
	function update(){
		$data=$this->input->post();
		$this->member->update($_SESSION['user']['user_id'],$data);
		redirect('userpage/profil') ;
	}
}