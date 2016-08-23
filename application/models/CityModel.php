<?php
class cityModel extends Base_model {

	public $table='cities';
	function __construct()
	{   
	    parent::__construct();          
	}
	function get(){
		$this->db->join('regions','regions.reg_id=cities.reg_id');
		$result=$this->db->get('cities');
		return $result->result_array();
	}
	

}
?>
