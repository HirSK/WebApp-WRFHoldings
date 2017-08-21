<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CustomerController extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
	}

	public function index(){
		//$this->load->view('add_cutomer_view');

    	$this->data['records'] = $this->gen_model->getAllRecords();
    	$this->load->view("add_cutomer_view",$this->data);  
	}
	
	public function customerManage(){

		$custDetail['customerRecord'] = $this->gen_model->getData($tablename='Customer');
		$this->load->view('manage_customer_view',$custDetail);


	}


	

	public function addCustomer(){


			$customer_array = array(

					'CustomerCode'					=> $_POST['inputCustomerCode'],
					'CustomerName'				    => $_POST['inputCustomerName'],
					'CustomerAddress'				=> $_POST['inputCustomerAddress'],
					'CustomerContact'				=> $_POST['inputCustomerContact'],
					'CustomerRegDate'			    => $_POST['inputCustomerRegDate'],
							

			);

			$res=$this->gen_model->insertData($tablename="Customer",$customer_array);

			redirect('/CustomerController');
		

	}
}
