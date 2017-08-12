<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_controller extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimeter','ion_auth'),$this->config->item->('error_end_delimeter','ion_auth'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		$this->load->model("Employee_model");
	}

	public function index(){

		if(!$this->ion_auth->logged_in()){
			//redirect to the login page
			redirect('auth/login','refresh');
		}
		//if the logged one is not an admin
		elseif(!$this->ion_auth->is_admin()){
			return show_error('You must be an administrator to view this page.');
		}else{
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');


			$this->data['inventory'] = $this->Employee_model->getEmployeeList()->result();

			$this->_render_page('Employee_controller/index', $this->data);
		}


	}

	//create new employee

	function register_employee(){

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){

			redirect('auth', 'refresh');

		}

		//validate form input
		$this->form_validation->set_rules('buyer', $this->lang->line('create_user_validation_fname_label'), 'required');
		$this->form_validation->set_rules('style', $this->lang->line('create_user_validation_lname_label'), 'required');
		$this->form_validation->set_rules('description', $this->lang->line('create_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('yarn', $this->lang->line('create_user_validation_phone_label'), 'required');

		$this->form_validation->set_rules('nylon', $this->lang->line('create_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('supplier', $this->lang->line('create_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('machine', $this->lang->line('create_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('gauge', $this->lang->line('create_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('weight', $this->lang->line('create_user_validation_phone_label'), 'required');



	}
}