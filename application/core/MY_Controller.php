<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
/*		if (!isset($_SESSION['admin'])) {
			redirect('/');
		}*/
		$this->db->select('destinate');
		$data = $this->db->get('trip_view')->result_array();
		$path=APPPATH."../json/destinate.json";
		$myfile = fopen($path, "w+") or die("Unable to open file!");
		$destinate=json_encode($data);
		fwrite($myfile, $destinate);
		fclose($myfile);
		// print_r($destinate);
		// die();
		// echo json_encode($data);
		// die();
	}
}
