<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailClass extends CI_Controller {

	public $sender='ripas.filqadar@travelbaik.com';
	public $password='ripasripas';
	public $senderName='Lets Lost';
	function __construct(){
		parent::__construct();
		$this->load->library('email');
		 $this->load->library('session');
	}
	function sendEmail($receiver,$subject,$message){


	}
}