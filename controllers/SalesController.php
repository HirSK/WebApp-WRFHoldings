<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SalesController extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library('pagination');
	}

	public function index(){	

		$whereArray = array('EmployeePosition' =>'Collection officer');
		$columnsArray = array('EmployeeNameWithInitials' );
		$whereArray2 = array('EmployeePosition' =>'Delivery driver');		
		$data['collectionOfficerList'] = $this->gen_model->getData($tablename='Employee',$columns_arr = $columnsArray,$where_arr = $whereArray);
		$data['driverList'] = $this->gen_model->getData($tablename='Employee',$columns_arr = $columnsArray,$where_arr = $whereArray2);
		$this->load->view('collection_form_view',$data);
	}


}