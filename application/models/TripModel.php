<?php
class TripModel extends Base_model {

	public $table='trip';
	function __construct()
	{   
	    parent::__construct();          
	}
	function search($data){
		$query='SELECT DISTINCT * FROM trip,cities WHERE destinate IN 
				(SELECT cities.city_id FROM countries ,cities  ,regions  WHERE countries.country_name LIKE("%'.$data["search"].'%") OR
				regions.region_name LIKE("%'.$data["search"].'%") OR
				cities.city_name LIKE("%'.$data["search"].'%")) 
				or start_city IN 
				(SELECT cities.city_id FROM countries ,cities  ,regions  WHERE countries.country_name LIKE("%'.$data["search"].'%") OR
				regions.region_name LIKE("%'.$data["search"].'%") OR
				cities.city_name LIKE("%'.$data["search"].'%")) 
				AND timeheld >= NOW()
				or name LIKE("%'.$data["search"].'%") and start_city=city_id';
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function getBy($data){
		$this->db->select("city_name(start_city) AS start, city_name(destinate) as finish, trip.*");
		$query=$this->db->get_where('trip',$data);
		return $query->result_array();
	}
	

}
?>