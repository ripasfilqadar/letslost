<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Layout
{
	function __construct() {
		$this->ci = &get_instance();
	}
	function render($url, $data=NULL) {
		$this->ci->db->join('regions','regions.reg_id=cities.reg_id');
		$result=$this->ci->db->get('cities');
		$data['city']=$result->result_array();

		$this->ci->load->view('base/header', $data);
		$this->ci->load->view($url, $data);
		$this->ci->load->view('base/footer', $data);
	}
	function renderUser($url, $data=NULL){
		$this->ci->db->join('regions','regions.reg_id=cities.reg_id');
		$result=$this->ci->db->get('cities');
		$data['city']=$result->result_array();

		$this->ci->load->view('base/header_user', $data);
		$this->ci->load->view($url, $data);
		$this->ci->load->view('page/modalAddTrip');
		$this->ci->load->view('base/footer', $data);
	}
	function renderAdmin($url,$data=NULL)
	{
		$this->ci->load->view('admin/header',$data);
		$this->ci->load->view($url);
		$this->ci->load->view('admin/footer');
	}
}
?>