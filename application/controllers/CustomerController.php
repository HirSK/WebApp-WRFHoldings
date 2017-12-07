<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class CustomerController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->model('customer_model');
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


	public function deleteCustomer(){
		foreach($_POST['checkbox'] as $id){
			$where_arr = array('CustomerCode'=> $id);
			$this->customer_model->deleteData('customer',$where_arr);	
		}
		$custDetail['customerRecord'] = $this->gen_model->getData($tablename='Customer');

		$this->loadViews('manage_customer_view',$this->global,$custDetail,NULL);
		
	}




	public function updateCustomer(){

			$where_arr = array('CustomerCode'=>$this->input->post('CustomCode'));

			$data = array(
			
			'CustomerName' => $this->input->post('CustomName'),
			'CustomerAddress' => $this->input->post('CustomAddress'),
			'CustomerContact' => $this->input->post('CustomContact'),
			'CustomerRegDate' => $this->input->post('CustomRegDate')
			);
			$this->customer_model->updateData('customer',$data, $where_arr);

			$data['customerRecord'] = $this->gen_model->getData($tablename='customer');

			$this->loadViews('manage_customer_view',$this->global,$data,NULL);
    		//$this->load-("manage_customer_view",$data);
	}

}
