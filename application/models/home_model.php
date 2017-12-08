<?php


class home_model extends CI_Model{


	public function getnumEmployee(){

		$query = $this->db->query("SELECT count(idEmployee) AS 'emp'  FROM employee");

		$result = $query->result_array();

		return $result;


	}


	public function getnumCustomer(){

		$query = $this->db->query("SELECT count(CustomerCode) AS 'cust'  FROM customer");

		$result = $query->result_array();

		return $result;


	}


	public function getnumvehicle(){

		$query = $this->db->query("SELECT count(idDelivery_Vehicle) AS 'vehi'  FROM delivery_vehicle");

		$result = $query->result_array();

		return $result;


	}

	public function getnumoutlet(){

		$query = $this->db->query("SELECT count(idOutlet) AS 'out'  FROM outlet");

		$result = $query->result_array();

		return $result;


	}



}