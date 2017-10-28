<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class CustomerController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
		$this->isLoggedIn();
	}

	public function index(){
		//$this->load->view('add_cutomer_view');

    	//$this->data['records'] = $this->gen_model->getAllRecords();
    	//$this->load->view("add_cutomer_view",$this->data);
    	// $this->load->view("add_customer_view");
    	$this->loadViews('add_customer_view',$this->global,NULL,NULL);

	}
	
	public function customerManage(){

		$custDetail['customerRecord'] = $this->gen_model->getData($tablename='customer');
		//$this->load->view('manage_customer_view',$custDetail);
		$this->loadViews('manage_customer_view',$this->global,$custDetail,NULL);

	}


	

	public function addCustomer(){


			$customer_array = array(

					'CustomerCode'					=> $_POST['inputCustomerCode'],
					'CustomerName'				    => $_POST['inputCustomerName'],
					'CustomerAddress'				=> $_POST['inputCustomerAddress'],
					'CustomerContact'				=> $_POST['inputCustomerContact'],
					'CustomerRegDate'			    => $_POST['inputCustomerRegDate'],
							

			);

			$res=$this->gen_model->insertData($tablename="customer",$customer_array);

			redirect('/CustomerController');
		

	}
}
