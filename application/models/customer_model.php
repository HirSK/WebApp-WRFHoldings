<?php

class customer_model extends CI_Model{


	public function updateData($tablename, $data_arr, $where_arr) {
        try {

            $this->db->update($tablename, $data_arr, $where_arr);
            $report = array();
            $report['error'] = $this->db->_error_number();
            $report['message'] = $this->db->_error_message();
            return $report;
        } catch (Exception $err) {

            return $err->getMessage();
        }
    }


    public function deleteData($tblName,$where){
      return $this->db->delete($tblName,$where);
}




}