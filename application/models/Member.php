<?php
class Member extends Base_model {

	public $table='member';
	function __construct()
	{   
	    parent::__construct();          
	}
	function getData(){
		$this->db->select("member.uname, 
					member.email, 
					member.role, 
					member.fullname,  
					member.join_date, 
					cities.city_name, 
					regions.reg_name, 
					member.phone, 
					member.website, 
					date_format(now(),'%Y')-date_format(member.born,'%Y')-(date_format(now(),'00-%m-%d')<date_format(member.born,'00-%m-%d')) AS age,
					member.gender");		
		$this->db->from('member');
		$this->db->join('cities', 'member.city_id = cities.city_id');
		$this->db->join('regions', 'cities.reg_id = regions.reg_id');
		$this->db->where('flags',1);
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
		$query="SELECT date_format(now(),'%Y')-date_format(member.born,'%Y')-(date_format(now(),'00-%m-%d')<date_format(member.born,'00-%m-%d')) AS age,
			member.*
			FROM member 
			WHERE md5(user_id)='".$id."' 
				AND flags = 1";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	
	function getMember($data){
		$query="SELECT * FROM MEMBER WHERE uname='".$data['uname']."' or email='".$data['email']."'";
		$result=$this->db->query($query);
		return $result_array();
	}

}
?>
