<?php


class view_sales_model extends CI_Model{


	//add main invoice details when the order is come
	function setInvoiceOrder($orderArray){

		// print($orderArray['idInvoice']);

		// $query = $this->db->query("insert into invoice (idInvoice,Customer_idCustomer,InvoiceValue,invoice_order_date) values('$orderArray['idInvoice']','$orderArray['Customer_idCustomer']','$orderArray['InvoiceValue']','$orderArray['invoice_order_date']') ");
		// $result = $query->result();
		// return $result;
	}

	function getInvoiceData($id){
		$query = $this->db->query("select InvoiceValue,Customer_idCustomer,CustomerName from invoice,customer where invoice.idInvoice=$id and customer.CustomerCode=invoice.Customer_idCustomer");
		$result = $query->result();
		return $result;

	}


	function updateInvoiceData($id,$invoice_array){

		$this->db->where('idInvoice', $id);
        $ret = $this->db->update('invoice', $invoice_array);
        return $ret;
	}


	public function viewCollection($first_date,$second_date){

		$query = $this->db->query("SELECT * FROM `collection` WHERE CollectionDate BETWEEN '$first_date' AND '$second_date'");

		$result = $query->result();

		return $result;
		
	}


}