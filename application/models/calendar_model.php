<?php

class calendar_model extends CI_Model{

    function calendarEntryListing($searchText = '',$id='')
    {
        
        $query = $this->db->query("select outletID, CalendarDate, Working_Holiday from calendar");
        $result=$query->result();
        return $result;
        
        
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
