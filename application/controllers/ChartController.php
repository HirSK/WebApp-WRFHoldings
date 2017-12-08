<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class ChartController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');

		$this->load->model('chart_model');
		$this->load->model('home_model');
		$this->load->model('view_sales_model');
		$this->load->library('pagination');
		$this->isLoggedIn();
	}


	public function index(){

		$this->loadViews('home_dashboard',$this->global,NULL,NULL);
	}

	public function chartData(){

		
        $data  = $this->chart_model->getEmployee();
        print_r(json_encode($data, true));
    
	}


	public function pieChartData(){

		//$outlet = $_POST['outlet'];

		//$data1['collection'] = $this->view_sales_model->viewCollection(,date('Y-m-d'),$outlet);

		$data1['emp'] = $this->home_model->getnumEmployee();
		$data1['cust'] = $this->home_model->getnumCustomer();
		$data1['vehi'] = $this->home_model->getnumvehicle();
		$data1['out'] = $this->home_model->getnumoutlet();


		$data1['collection1'] = $this->view_sales_model->viewCheque('2017/08/01',date('Y-m-d'),1);
		$data1['collection2'] = $this->view_sales_model->viewCredit('2017/08/01',date('Y-m-d'),1);
		$data1['collection3'] = $this->view_sales_model->viewCash('2017/08/01',date('Y-m-d'),1);
		$data1['collection4'] = $this->view_sales_model->returnCredit('2017/08/01',date('Y-m-d'),1);



		echo json_encode(array("data"=>$data1));

       
			
	}




}