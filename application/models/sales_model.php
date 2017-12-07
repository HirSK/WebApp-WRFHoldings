<?php


class sales_model extends CI_Model{


	//add main invoice details when the order is come
	function setInvoiceOrder($orderArray){

		try {
            $this->db->insert('preorder_invoice', $orderArray);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
	}

	function getInvoiceData($id){
		$query = $this->db->query("select InvoiceValue,Customer_idCustomer,CustomerName from preorder_invoice,customer where preorder_invoice.idInvoice=$id and customer.CustomerCode=preorder_invoice.Customer_idCustomer");
		$result = $query->result();
		return $result;

	}


	function updateInvoiceData($invoice_array){
		try {
			
			// $invoice_array['Collection_idCollection'] = $this->getMaxCollectionID();		


            $ret = $this->db->insert('invoice', $invoice_array);

            // $ret = $this->db->insert_id() + 0;
            return $ret;

        } catch (Exception $err) {
            return $err->getMessage();
        }

		
	}

	function getMaxCollectionID(){
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(idCollection) AS `maxid` FROM `collection`')->row();
		if ($row) {
    		$maxid = $row->maxid; 
		}
		return $maxid;
	}


	function insertCollectionData($tablename, $data_arr) {
        try {
        	// $id = checkForExistingCollection($tablename,$data_arr);
        	// if($id){
        	// 	return $id;
        	// }else{
        		$this->db->insert($tablename, $data_arr);

            	$ret = $this->db->insert_id() + 0;
            	return $ret;
        	
            
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }


  //   function checkForExistingCollection($tablename,$data_arr){
  // //   	$sql = 'SELECT idCollection FROM $tablename WHERE field IN ( ' . implode( ',', $data_arr ) . ' );';
		// // $result = $db->query( $sql );
		// // return $result;

		// $this->db->select('idCollection');
		// $this->db->from($tablename);
		// $this->db->where($where_arr);

		// $query = $this->db->get();
		// $res = $query->result();
		// if(count($res)==1){
		// 	return $res;
		// }else{
		// 	return;
		// }
        
  //   }
}