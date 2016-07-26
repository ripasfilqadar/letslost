<?php
class Base_model extends CI_Model {

	public $table;
	function __construct()
	{   
	    parent::__construct();          
	}
	function insert($data) {
	    $this->db->insert($this->table,$data);
	}

	function get() {
	    $query=$this->db->get($this->table);
	    return $query->result_array();
	}
	function getById($id){
		$query=$this->db->get_where($this->table,array('id'=>$id));
		return $query->result_array();
	}
	function update($id,$data) {
		$this->db->where('id',$id);
	    $this->db->update($this->table,$data)
	}

	function delete($id) {
	    $this->db->where('id',$id);
	    $this->db->delete($this->table);
	}

}
?>