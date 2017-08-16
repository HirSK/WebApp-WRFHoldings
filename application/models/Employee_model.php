<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model{

	function __construct(){
		//call the model constructor
		parent::__construct();
	}

	function insert_employee($employee_array){

		$sql = $this->db->insert_string('employee',$employee_array);
		$query = $this->db->query($sql);

		if($query==true){
			return true;
		}else{
			$last_query = $this->db->last_query();
			return $last_query;
		}
	}
}