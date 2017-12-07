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


	public function viewCollection($first_date,$second_date,$outlet){

		$query = $this->db->query("SELECT * FROM `collection` WHERE CollectionDate BETWEEN '$first_date' AND '$second_date' AND Outlet_idOutlet= $outlet");

		$result = $query->result();

		return $result;
		
	}



	public function viewInvoices($collectID){


		$query = $this->db->query("SELECT * FROM `invoice` WHERE Collection_idCollection='$collectID'");

		$result = $query->result_array();

		return $result;



	}


	public function viewCheque($first_date,$second_date,$outlet){

		$query = $this->db->query("select * from collection,invoice,cheque
								where
								collection.idCollection = invoice.Collection_idCollection
								AND
								invoice.idInvoice = cheque.cheque_invoice_id
								AND
								collection.CollectionDate BETWEEN '$first_date' AND '$second_date'
								AND
								collection.Outlet_idOutlet =$outlet ");

		$result = $query->result_array();

		return $result;
	}



	public function viewCredit($first_date,$second_date,$outlet){

		$query = $this->db->query("select * from collection,invoice,credit
								where
								collection.idCollection = invoice.Collection_idCollection
								AND
								invoice.idInvoice = credit.invoice_credit_id
								AND
								collection.CollectionDate BETWEEN '$first_date' AND '$second_date'
								AND
								collection.Outlet_idOutlet =$outlet");

		$result = $query->result_array();

		return $result;
	}


	public function viewCash($first_date,$second_date,$outlet){

		$query = $this->db->query("select * from collection,invoice
								where
								collection.idCollection = invoice.Collection_idCollection
								AND
								collection.CollectionDate BETWEEN '$first_date' AND '$second_date'
								AND
								collection.Outlet_idOutlet =$outlet
								AND
								invoice.cash !=' '");


		$result = $query->result_array();

		return $result;


	}


	public function returnCredit($first_date,$second_date,$outlet){



	$query = $this->db->query("select * from collection,invoice,credit
								where
								collection.idCollection = invoice.Collection_idCollection
								AND
								invoice.idInvoice = credit.invoice_credit_id
								AND
								credit.credit_lasttaken_date BETWEEN '$first_date' AND '$second_date'
								AND
								collection.Outlet_idOutlet =$outlet");

		$result = $query->result_array();

		return $result;
	}






 


}