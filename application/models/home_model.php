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



	public function getMonthwiseCust(){

		$query = $this->db->query("SELECT COUNT(*) AS 'Nocust', MONTH(CustomerRegDate) AS 'mon' FROM customer WHERE YEAR(CustomerRegDate) = '2017' GROUP BY MONTH(CustomerRegDate)");


		$result = $query->result_array();

		return $result;

	}



	public function getRecentInvoice($to){

		$query = $this->db->query("select invoice.idInvoice as 'invId',invoice.InvoiceValue as 'InvoiceVal' from collection,invoice where collection.idCollection = invoice.Collection_idCollection and collection.CollectionDate between '2000/01/01' AND '$to' LIMIT 5 ");


		$result = $query->result_array();

		return $result;

	}






	public function getRecentInvoiceOutlet($to,$outlet){

		$query = $this->db->query("select invoice.idInvoice as 'invId',invoice.InvoiceValue as 'InvoiceVal' from collection,invoice where collection.idCollection = invoice.Collection_idCollection and collection.CollectionDate between '2000/01/01' AND '$to' AND collection.Outlet_idOutlet=$outlet LIMIT 5 ");


		$result = $query->result_array();

		return $result;

	}



	public function getnumEmployeeOutlet($outlet){

		$query = $this->db->query("SELECT count(idEmployee) AS 'emp'  FROM employee WHERE Outlet_idOutlet = $outlet");

		$result = $query->result_array();

		return $result;


	}


	public function getnumCustomerOutlet($outlet){

		$query = $this->db->query("SELECT count(CustomerCode) AS 'cust'  FROM customer WHERE Outlet_idOutlet = $outlet");

		$result = $query->result_array();

		return $result;


	}



	// public function getnumCustomerOutlet($outlet){

	// 	$query = $this->db->query("SELECT count(CustomerCode) AS 'cust'  FROM customer WHERE Outlet_idOutlet = $outlet");

	// 	$result = $query->result_array();

	// 	return $result;


	// }



	public function getnumvehicleOutlet($outlet){

		$query = $this->db->query("SELECT count(idDelivery_Vehicle) AS 'vehi'  FROM delivery_vehicle WHERE Outlet_idOutlet = $outlet ");

		$result = $query->result_array();

		return $result;


	}


	












}