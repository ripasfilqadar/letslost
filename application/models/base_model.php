<?php
class Base_model extends CI_Model {

	public $table;
	function __construct()
	{   
	    parent::__construct();          
	}
	function input($data) {		
		// $data['timesubmit']=date('d-m-Y H:i:s');
	    $this->db->insert($this->table,$data);
	}

	function get() {
	    $query=$this->db->get($this->table);
	    return $query->result_array();
	}
	function getBy($data){
		
		$query=$this->db->get_where($this->table,$data);
		return $query->result_array();
	}

	function update($id,$data) {
		$data['update']=date('d-m-Y H:i:s');
		$this->db->where('id',$id);
	    $this->db->update($this->table,$data);
	}

	function delete($data) {
	    $this->db->where($data);
	    $this->db->delete($this->table);
	}
}
?>