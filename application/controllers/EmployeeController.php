<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class EmployeeController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
		$this->isLoggedIn();
	}

	public function index(){
		// $this->load->view('add_employee_view');
		$this->loadViews('add_customer_view',$this->global,NULL,NULL);
	}

	public function manageEmployee(){

		$empDetail['emp'] = $this->gen_model->getData($tablename='Employee');
		// $this->load->view('manage_employee_view',$empDetail);
		$this->loadViews('manage_employee_view',$this->global,$empDetail,NULL);
	}

	public function addEmployee(){

		
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
}