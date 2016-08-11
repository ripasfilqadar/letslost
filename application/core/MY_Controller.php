<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!isset($_SESSION['admin'])) {
			redirect('/');
		}
	}
}
