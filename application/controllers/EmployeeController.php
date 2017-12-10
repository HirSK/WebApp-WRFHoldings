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
		$data['maxid'] = 0;
		$row = $this->db->query('SELECT MAX(idEmployee) AS `maxid` FROM `employee`')->row();
		if ($row) {
		    $data['maxid'] = $row->maxid;

		    $this->loadViews('add_employee_view',$this->global,$data,NULL);
		}


		
	}
	public function manageEmployee(){
        
        // $this->load->model('calendar_model');
    
        $searchText = $this->input->post('searchText');
        $data['searchText'] = $searchText;
        
		
                  
        $data['emp'] = $this->employeeListing($searchText);
        
        

        $this->global['pageTitle'] = 'WRF Holdings(pvt) Ltd : Employee Entry Listing';
        
        $this->loadViews("manage_employee_view", $this->global, $data, NULL);
		
    }
	public function employeeListing(){
        $loggerRole=$this->session->userData('loggerRole');

        if($loggerRole !="Admin"){
        $loggerOutletID=$this->session->userData('loggerOutletID');
        $query = $this->db->query("select * from employee where Outlet_idOutlet=$loggerOutletID");
        // $this->loggerOutletID"
        $result=$query->result();
        return $result;
        }
        else{
            
        $query = $this->db->query("select * from employee");
        // $this->loggerOutletID"
        $result=$query->result();
        return $result;


        }
        
        
    }
	public function manageEmployeee(){

		
		$empDetail['emp'] = $this->gen_model->getData($tablename='Employee',$where_arr=$where_arr);
		// $this->load->view('manage_employee_view',$empDetail);
		$this->loadViews('manage_employee_view',$this->global,$empDetail,NULL);
	}

	public function addEmployee(){

		
			$employee_array = array(

					'idEmployee'				=> $_POST['employeeID'],
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
					'SalaryBasic'					=> $_POST['basicSalary'],
					'Salary_ETF_Amount'				=> $_POST['salaryETF'],

			);

			$res=$this->gen_model->insertData($tablename="employee",$employee_array);

			redirect('/EmployeeController');
		//}

	}

	public function generateQR(){

		$code = '<center><img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl='.$_REQUEST['sample'].'" title="Link to Google.com"></center>';
		echo $code;
	}
	
}
