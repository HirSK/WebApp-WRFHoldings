<?php


class chart_model extends CI_Model{



	public function getEmployee(){



		$query = $this->db->query("SELECT count(idEmployee) AS Number_of_employee,Outlet_idOutlet FROM employee GROUP BY Outlet_idOutlet");

		$result = $query->result_array();

		return $result;



	}





}
