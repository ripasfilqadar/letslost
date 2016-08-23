<?php
class Partisipant extends Base_model {

	public $table='partisipant';
	function __construct()
	{   
	    parent::__construct();          
	}
	function delete($data){
		$data['flags']=0;
		$this->db->where('trip_id',$data['trip_id']);
		$this->db->where('user_id',$data['user_id']);
		$this->db->update($this->table,$data);
	}

}
?>
