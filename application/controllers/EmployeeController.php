<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmployeeController extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
	}

	public function index(){
		$this->load->view('add_employee_view');
	}

	public function manageEmployee(){

		$empDetail['emp'] = $this->gen_model->getData($tablename='Employee');
		$this->load->view('manage_employee_view',$empDetail);
		
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
}