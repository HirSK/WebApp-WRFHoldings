<?php


class payroll_model extends CI_Model{

	function getDays($month,$outlet){

		// $query = $this->db->query("select CalendarDate from calendar where CalendarDate between '2017-12-01' and '2017-12-31' and calendar.outletID=$outlet");

		$query = $this->db->query("select 
			sum(case when Working_Holiday = 1 then 1 else 0 end) as 'workingDays',
			sum(case when Working_Holiday = 0 then 1 else 0 end) as 'holidays'
		    from calendar where CalendarDate between '2017-12-01' and '2017-12-31' and calendar.outletID=$outlet");
		$result = $query->result();
		return $result;
	}
}