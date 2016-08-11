<?php
class Member extends Base_model {

	public $table='member';
	function __construct()
	{   
	    parent::__construct();          
	}
	function getData(){
		$this->db->select("city_name(city_id) AS city_name, region_name(region) as region_name, member.*");		
		$result=$this->db->get('member');
		return $result->result_array();
	}
	function update($id,$data){
		$this->db->where('user_id',$id);
		$this->db->update($this->table,$data);
	}
	function getTrip(){
		$query="SELECT city_name(start_city) AS start, city_name(destinate) as finish,trip.* FROM trip where trip_id IN (SELECT trip_id from partisipant where user_id='".$_SESSION['user']['user_id']."')";
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