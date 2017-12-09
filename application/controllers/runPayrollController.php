<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class RunPayrollController extends BaseController{

    function __construct(){
        parent::__construct();
        $this->load->model('gen_model');
        $this->load->model('payroll_model');
        $this->load->library("pagination");
        $this->isLoggedIn();
    }

    public function index(){
        // $this->load->view('runPayroll_view');
        $this->loadViews('runPayroll_view',$this->global,NULL,NULL);

    }

    public function getSalaryDetails(){

        $empID = $this->input->post('empID');
        $empName = $this->input->post('empName');
        $full = (int)$this->input->post('full');
        $half = (int)$this->input->post('half');
        $working = (int)$this->input->post('working');

        $emp_working = $full + ($half*0.5);

        $query_res = $this->payroll_model->getBasicSalary($empID);
        
        $basic_salary=$query_res[0]->SalaryBasic;
        $etf = $query_res[0]->Salary_ETF_Amount;

        $salary_per_day = floatval($basic_salary)/$working;
        $emp_gross_salary = $salary_per_day*$emp_working;

        $arr = array('id'=>$empID,'empName'=>$empName, 'basic_salary' => $basic_salary, 'salary_per_day' => $salary_per_day, 'emp_gross_salary' => $emp_gross_salary,'etf'=>$etf);

        echo json_encode($arr);
        
    }

    public function SetSalary(){

        $empID = $this->input->post('empID');
        $empName = $this->input->post('empName');
        $gross = (int)$this->input->post('gross');
        $food = (int)$this->input->post('food');
        $holiday = (int)$this->input->post('holiday');
        $deduct = (int)$this->input->post('deduct');

        $total_allowance = $food+$holiday;

        $query_res = $this->payroll_model->getBasicSalary($empID);
        $etf = $query_res[0]->Salary_ETF_Amount;
        $total_deduct = $deduct+floatval($etf);

        
        // $this->payroll_model->addAllowance()

    }

    
    
    
}