<?php
class TripModel extends Base_model {

	public $table='trip';
	function __construct()
	{   
	    parent::__construct();          
	}
	function search($data){
		$query='SELECT * FROM trip_view 
				WHERE start_country LIKE ("%'.$data["search"].'%") 
					OR start_city LIKE ("%'.$data["search"].'%") 
        				OR dest_country LIKE ("%'.$data["search"].'%") 
        				OR dest_reg LIKE ("%'.$data["search"].'%") 
        				OR dest_city LIKE ("%'.$data["search"].'%")
        				OR destinate LIKE ("%'.$data["search"].'%")
					AND timeheld >= NOW()
					OR trip_name LIKE ("%'.$data["search"].'%");';
		
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function getBy($data){
		$this->db->select("trip_view.*");
		$query=$this->db->get_where('trip_view',$data);
		return $query->result_array();
	}
	
	function get(){
		$this->db->select("trip_view.*");
		$query=$this->db->get('trip_view');
		return $query->result_array();	
	}

}
?>
