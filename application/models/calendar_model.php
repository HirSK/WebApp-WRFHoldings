<?php

class calendar_model extends CI_Model{

    function calendarEntryListing($searchText = '',$id=''){
        $loggerRole=$this->session->userData('loggerRole');
        if($loggerRole !="Admin"){
        $loggerOutletID=$this->session->userData('loggerOutletID');
        $query = $this->db->query("select * from calendar where outletID=$loggerOutletID");
        $result=$query->result();
        return $result;
        }
        else{
            $query = $this->db->query("select * from calendar");
            $result=$query->result();
            return $result;


        }
    }

    function attendanceListing($searchText = '',$id=''){
        $loggerRole=$this->session->userData('loggerRole');

        if($loggerRole !="Admin"){
        $loggerOutletID=$this->session->userData('loggerOutletID');
        $query = $this->db->query("select * from attendance,employee where attendance.Employee_idEmployee=employee.idEmployee AND Outlet_idOutlet=$loggerOutletID");
        // $this->loggerOutletID"
        $result=$query->result();
        return $result;
        }
        else{
            
        $query = $this->db->query("select * from attendance,employee where attendance.Employee_idEmployee=employee.idEmployee ");
        // $this->loggerOutletID"
        $result=$query->result();
        return $result;


        }
        
        
    }

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
