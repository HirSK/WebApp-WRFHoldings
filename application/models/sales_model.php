<?php

class gen_model extends CI_Model{

	//add main invoice details when the order is come
	function setInvoiceOrder($orderArray){

		$query = $this->db->query("insert into invoice (idInvoice,Customer_idCustomer,InvoiceValue,invoice_order_date) values($orderArray['idInvoice']),$orderArray['Customer_idCustomer']),$orderArray['InvoiceValue']),$orderArray['invoice_order_date'])");
		$result = $query->result();
		return $result;

	}
}