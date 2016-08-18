<?php
class Member extends Base_model {

	public $table='member';
	function __construct()
	{   
	    parent::__construct();          
	}
	function getData(){
		$this->db->select("cities.city_name, regions.reg_name, member.*");		
		$this->db->from('member');
		$this->db->join('cities', 'member.city_id = cities.city_id');
		$this->db->join('regions', 'cities.reg_id = regions.reg_id');
		$result=$this->db->get();
		return $result->result_array();
	}
	function update($id,$data){
		$this->db->where('user_id',$id);
		$this->db->update($this->table,$data);
	}
	function getTrip(){
		$query="SELECT *
			FROM `trip_view` look
    			WHERE look.`trip_id` IN
			(
				SELECT `partisipant`.`trip_id` 
				FROM `partisipant` 
				WHERE `partisipant`.`user_id` ='".$_SESSION['user']['user_id']."')";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function getByHash($id){
		$query="SELECT * FROM member WHERE md5(user_id)='".$id."'";
		$result=$this->db->query($query);
		return $result->result_array();
	}

}
?>
