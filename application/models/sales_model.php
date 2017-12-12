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

	function getInvoiceData($id,$outletID){
		$query = $this->db->query("select InvoiceValue,Customer_idCustomer,CustomerName from preorder_invoice,customer where preorder_invoice.idInvoice=$id and customer.CustomerCode=preorder_invoice.Customer_idCustomer and preorder_invoice.outletID=$outletID");
		$result = $query->result();
		return $result;


	}

	function updatePreOrder($idInvoice,$outletID){

		
		$query = $this->db->query("update preorder_invoice set added=1 where idInvoice=$idInvoice and outletID=$outletID");
		$result = $query->result();
		// return $result;
		if($result){

			return true;
		}

	}

	function checkInvoiceAdded($id,$outletID){
		$query = $this->db->query("select added from preorder_invoice where idInvoice=$id and outletID=$outletID");
		$result = $query->result();
		return $result;
	}

	function getCollectionDetails($collection_id){
		$query = $this->db->query("select CollectionDate,CollectionDriver,CollectionVehicle,CollectionArea,CollectionOfficerName from collection where idCollection=$collection_id");
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

	function updateCollectionDataupdateCollectionData($idCollection,$collectionArray){

		// $query = $this->db->query("update collection set CollectionDate='$CollectionDate' , CollectionOfficerName='$CollectionOfficerName' , CollectionDriver='$CollectionDriver',CollectionVehicle='$CollectionVehicle',CollectionArea='$CollectionArea' where idCollection=$idCollection");
		$this->db->where('idCollection', $idCollection);
 		$query = $this->db->update('collection',$collectionArray);


		if($query){

			return true;
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

	function getInvoiceOtherData($id,$outletID){

		// $query1 = $this->db->query("select Customer_idCustomer,InvoiceValue from preorder_invoice where idInvoice=$id and outletID=$outletID");

  //       $query2 = $this->db->query("select ");

  //       $result1 = $query1->result();
  //       $result2 = $query2->result();

  //       return array_merge($result1, $result2);
	}



	function insertCollectionData($tablename, $data_arr) {
        try {
        	
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

	function getCreditData($id){
		$query = $this->db->query("select * from credit where invoice_credit_id=$id");
		$result = $query->result();
		return $result;

	}

	function repayCredits($invoice_credit_id,$credit_lasttaken_date,$credit_topay,$completed){
		$query = $this->db->query("update credit set credit_lasttaken_date='$credit_lasttaken_date' , credit_topay=$credit_topay , completed=$completed where invoice_credit_id=$invoice_credit_id");
		//$result=$query->result_array();
		if($query){

			return true;
		}

	}

}