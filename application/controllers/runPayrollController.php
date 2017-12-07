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

    public function getDays(){
        $month = $this->input->post('month');
        $outlet = $this->session->userData('loggerOutletID');
        $query = $this->payroll_model->getDays($month,$outlet);
        echo json_encode($query); 
    }

    
    
}