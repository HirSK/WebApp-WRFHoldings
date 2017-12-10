<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class CalendarController extends BaseController{

	public function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->model('calendar_model');
		$this->load->model('payroll_model');
		$this->load->library("pagination");
		$this->isLoggedIn();
	}

	public function index(){
	

		// $data['emp'] = $this->gen_model->getData($tablename='employee');
		$data['emp'] = $this->payroll_model->getEmployees($this->loggerOutletID);

    	$this->loadViews('add_calendar_view',$this->global,$data,NULL);
	}
	
	public function addCalendarEntry(){

		//validate form input
		/*$this->form_validation->set_rules('fullName','Full name','required|alpha');
		$this->form_validation->set_rules('nameWithInitials','Name with initials', 'required|alpha');
		$this->form_validation->set_rules('nicNumber','National Identity Number', 'required|alpha_numeric');
		$this->form_validation->set_rules('dateOfBirth','Birth date','required');
		$this->form_validation->set_rules('OutletId','Outlet Id','required');
		$this->form_validation->set_rules('position', 'Job position','required|alpha');
		$this->form_validation->set_rules('joinedDate', 'Joined date','required');
		$this->form_validation->set_rules('contactNumber','Telephone number', 'required');
		$this->form_validation->set_rules('address', 'Home address','required');
		$this->form_validation->set_rules('email','Email address','trim|valid_email');*/


		//if the entered data are valid
		//if($this->form_validation->run()){

			$calendar_array = array(

					
					'CalendarDate'			=> $_POST['inputCalendarDate'],
					'Working_Holiday'		=> $_POST['calendarStatus'],
					'outletID'				=> $this->session->userData('loggerOutletID'),
						

			);

			$res=$this->gen_model->insertData($tablename="calendar",$calendar_array);

			redirect('/CalendarController');
		//}

	}

	public function viewCalendar(){
        if($this->isAdmin() == True){
            $this->loadThis();
        }
        else{
            $this->load->model('calendar_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
			
                      
            $data['calendarRecords'] = $this->calendar_model->calendarEntryListing($searchText);

            
            $this->global['pageTitle'] = 'WRF Holdings(pvt) Ltd : Calendar Entry Listing';
            
            $this->loadViews("calendar_view", $this->global, $data, NULL);
		}
    }
	
	public function addEmployeeAttendance(){
		if($_POST['attendanceStatus']=='Check In'){
			$calendar_array = array(

					'Employee_idEmployee'	=>$_POST['employeeID'],
					'DateOfDay'				=>$_POST['inputAttendanceDate'],
					'CheckIn'				=>1,
					'CheckOut'				=>0,
					'FullDayHalfDay'		=>0,
			);

			$res=$this->gen_model->insertData($tablename="attendance", $calendar_array);

			redirect('/CalendarController');
			

		}else{
			// $data=array('CheckOut'=>0,'FullDayHalfDay'=>0);
			// $where=array('Employee_idEmployee'=>$_POST['employeeID'], 'DateOfDay'=>$_POST['DateOfDay'] );
			
			// $this->db->where($where);
			// $this->db->update('attendance',$data);
			
			// $employeeID=$_POST['employeeID']
			// $DateOfDay=$_POST['DateOfDay']
			// $query = $this->db->query('UPDATE attendance SET CheckOut=0,FullDayHalfDay=0 WHERE Employee_idEmployee=$employeeID AND DateOfDay=$DateOfDay');

            // $result=$query->result();
            // return $result;
            $data_arr=array('CheckOut'=>1,'FullDayHalfDay'=>1);
            $where_arr=array('Employee_idEmployee'=>$_POST['employeeID'], 'DateOfDay'=>$_POST['inputAttendanceDate'] );
            $res=$this->calendar_model->updateData($tablename="attendance", $data_arr=$data_arr,$where_arr=$where_arr);
			


			redirect('/CalendarController');
			
		}

		
			
		//}

	}
	

	// 	---------------------------------------------------------------------------

	public function manageEmployee(){

		$empDetail['emp'] = $this->gen_model->getData($tablename='Employee');
		// $this->load->view('manage_employee_view',$empDetail);
		$this->loadViews('manage_employee_view',$this->global,$empDetail,NULL);
		
	}
	function get_item(){
        $data = $this->input->post('data');
        $data = $this ->gen_model -> getAttd();
        echo json_encode($data);
    }

    public function ajax_edit()
		{
			$data = $this->gen_model->getAllRecords();
 
 
 
			echo json_encode($data);
		}

	

	public function getDays(){
        $month = $this->input->post('month');
        list($year, $month) = explode("-", "$month", 2);
        $outlet = $this->session->userData('loggerOutletID');
        $query = $this->payroll_model->getDays($year,$month,$outlet);
        echo json_encode($query); 
    }

    public function getEmployeeAttendance(){
    	$month = $this->input->post('month');
    	list($year, $month) = explode("-", "$month", 2);
    	$outlet = $this->session->userData('loggerOutletID');
    	$query2 = $this->payroll_model->getEmployeeAttendance($year,$month,$outlet);
    	echo json_encode($query2); 
    }

}