<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CustomerController extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));

	}

	public function index(){		

    	$data['customerRecord'] = $this->gen_model->getData($tablename='Customer');
    	$this->load->view("add_customer_view",$data);
    	          

	}

	public function customerManage(){

		$custDetail['customerRecord'] = $this->gen_model->getData($tablename='Customer');
		$this->load->view('manage_customer_view',$custDetail);


	}

	/*public function manageCustomer(){

		$empDetail['emp'] = $this->gen_model->getData($tablename='Employee');
		$this->load->view('manage_employee_view',$empDetail);
		
	}*/

	public function addCustomer(){

		

			$this->form_validation->set_rules('inputCustomerCode','Customer Code','required');
			if($this->form_validation->run()){
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

		else{

		$data['customerRecord'] = $this->gen_model->getData($tablename='Customer');
    	$this->load->view("add_customer_view",$data);


    	
    	 


		}

	}


	public function deleteCustomer(){
		foreach($_POST['checkbox'] as $id){
			$where_arr = array('idCustomer'=> $id);
			$this->gen_model->deleteData('customer',$where_arr);	
		}
		$custDetail['customerRecord'] = $this->gen_model->getData($tablename='Customer');
		$this->load->view('manage_customer_view',$custDetail);
	}




	public function updateCustomer(){

			$where_arr = array('idCustomer'=>$this->input->post('CustomID'));

			$data = array(
			'CustomerCode' => $this->input->post('CustomCode'),
			'CustomerName' => $this->input->post('CustomName'),
			'CustomerAddress' => $this->input->post('CustomAddress'),
			'CustomerContact' => $this->input->post('CustomContact'),
			'CustomerRegDate' => $this->input->post('CustomRegDate')
			);
			$this->gen_model->updateData('customer',$data, $where_arr);

			$data['customerRecord'] = $this->gen_model->getData($tablename='customer');
    		$this->load->view("manage_customer_view",$data);
	}

	

	


	

	
}
