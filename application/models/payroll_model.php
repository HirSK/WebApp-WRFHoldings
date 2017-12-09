<?php


class payroll_model extends CI_Model{

	function getDays($year,$month,$outlet){

		// $query = $this->db->query("select CalendarDate from calendar where CalendarDate between '2017-12-01' and '2017-12-31' and calendar.outletID=$outlet");

		$query = $this->db->query("select 
			sum(case when Working_Holiday = 1 then 1 else 0 end) as 'workingDays',
			sum(case when Working_Holiday = 0 then 1 else 0 end) as 'holidays'
		    from calendar where CalendarDate between '$year-$month-01' and '$year-$month-31' and calendar.outletID=$outlet");
		$result = $query->result();
		return $result;


	}


	function getEmployeeAttendance($year,$month,$outlet){

		
		$query = $this->db->query("select Employee_idEmployee,			
			EmployeeFullName,EmployeePosition,
			sum(case when FullDayHalfDay = 1 then 1 else 0 end) as 'full',
			sum(case when FullDayHalfDay = 0 then 1 else 0 end) as 'half'
		    from attendance ,employee
		    where DateOfday between '$year-$month-01' and '$year-$month-31' 
		    and 
		    employee.idEmployee=attendance.Employee_idEmployee
		    and
		    attendance.Employee_idEmployee in (select idEmployee from employee where employee.Outlet_idOutlet=$outlet)
		    group by attendance.Employee_idEmployee");
		$result = $query->result();
		return $result;
		
	}


	function getEmployees($outlet){

		$query = $this->db->query("select * from employee where employee.Outlet_idOutlet=$outlet");
		$res = $query->result();
		return $res;
	}


	function getBasicSalary($empID){
		$query = $this->db->query("select SalaryBasic from employee where idEmployee=$empID");
		$res = $query->result();
		return $res;
	}
}