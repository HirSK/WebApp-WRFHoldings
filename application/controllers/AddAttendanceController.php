<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class AddAttendanceController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->model('payroll_model');
		$this->load->library("pagination");
		$this->isLoggedIn();
	}

	public function index(){
	

		// $data['emp'] = $this->gen_model->getData($tablename='employee');
		$data['emp'] = $this->payroll_model->getEmployees($this->loggerOutletID);

    	$this->loadViews('add_attendance_view',$this->global,$data,NULL);
	}

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

	public function addEmployee(){

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

			$employee_array = array(

					
					'EmployeeFullName'				=> $_POST['fullName'],
					'EmployeeNameWithInitials'		=> $_POST['nameWithInitials'],
					'EmployeeNIC'				=> $_POST['nicNumber'],
					'EmployeeBirthdate'			=> $_POST['dateOfBirth'],
					'Outlet_idOutlet'				=> $_POST['outletName'],
					'EmployeePosition'				=> $_POST['position'],
					'EmployeeJoinedDate'			=> $_POST['joinedDate'],
					'EmployeeContactNumber'			=> $_POST['contactNumber'],
					'EmployeeAddress'				=> $_POST['address'],
					'EmployeeEmail'					=> $_POST['email'],				

			);

			$res=$this->gen_model->insertData($tablename="employee",$employee_array);

			redirect('/EmployeeController');
		//}

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