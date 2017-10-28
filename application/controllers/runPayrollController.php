<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class RunPayrollController extends BaseController{

    function __construct(){
        parent::__construct();
        $this->load->model('gen_model');
        $this->load->library("pagination");
        $this->isLoggedIn();
    }

    public function index(){
        // $this->load->view('runPayroll_view');
        $this->loadViews('runPayroll_view',$this->global,NULL,NULL);

    }

    
    
}