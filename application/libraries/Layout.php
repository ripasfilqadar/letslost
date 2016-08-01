<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Layout
{
	function __construct() {
		$this->ci = &get_instance();
	}
	function render($url, $data=NULL,$header=NULL) {
		if ($header==NULL) {
			$header='header';
		}
		$this->ci->db->join('regions','regions.region_id=cities.region');
		$result=$this->ci->db->get('cities');
		$data['city']=$result->result_array();

		$this->ci->load->view('base/'.$header, $data);
		$this->ci->load->view($url, $data);
		$this->ci->load->view('page/modalAddTrip');
		$this->ci->load->view('base/footer', $data);
	}
}
?>