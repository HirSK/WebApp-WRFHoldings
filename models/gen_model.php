<?php

class gen_model extends CI_Model{

	public function userAuth($userInfo){
		$this->db->select("Username,UserPassword");
		$result = $this->db->get_where("user",$userInfo);

		if($result->num_rows == 1){
			$currentUser = $result->result_array()[0];
			return true;
		}
		else{
			return false;
		}
	}

	function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }
}
