<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){

		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{

		$this->load->view('home_dashboard');
	}

	//redirect to employee registration page
	function employee_registration(){
		$this->load->view('employee_view');
	}

	function add_account_summary(){
		$this->load->view('collection_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */