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


	}*/

	//create new employee

	function register_employee(){

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){

			redirect('auth', 'refresh');

		}

		//validate form input
		$this->form_validation->set_rules('fullName','Full name','required|alpha');
		$this->form_validation->set_rules('nameWithInitials','Name with initials', 'required|alpha');
		$this->form_validation->set_rules('nicNumber','National Identity Number', 'required|alpha_numeric');
		$this->form_validation->set_rules('dateOfBirth','Birth date','required');
		$this->form_validation->set_rules('position', 'Job position','required|alpha');
		$this->form_validation->set_rules('joinedDate', 'Joined date','required');
		$this->form_validation->set_rules('contactNumber','Telephone number', 'required');
		$this->form_validation->set_rules('address', 'Home address','required');
		$this->form_validation->set_rules('email','Email address','trim|valide_email|xss_clean');


		if($this->form_validation->run()==false){



			$this->load->view('welcome_message');

		}else{

			$employee_array = array(

					'employeeId' 			=> NULL;
					'fullName'				=> $this->input->post('fullName');
					'nameWithInitials'		=> $this->input->post('nameWithInitials');
					'nicNumber'				=> $this->input->post('nicNumber');
					'dateOfBirth'			=> $this->input->post('dateOfBirth');
					'position'				=> $this->input->post('position');
					'joinedDate'			=> $this->input->post('joinedDate');
					'contactNumber'			=> $this->input->post('contactNumber');
					'address'				=> $this->input->post('address');
					'email'					=> $this->input->post('email');				

			);

			if ($this->form_validation->run() == true && $this->Employee_model->insert_employee($employee_array)){
			//check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("auth", 'refresh');

			}

		}



	}
}