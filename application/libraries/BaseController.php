<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class BaseController extends CI_Controller{

	protected $loggerRole='';
	protected $loggerID='';
	protected $loggerName='';
	protected $loggerOutletID='';
	protected $loggerOutletName='';

	/**
	 * Takes mixed data and optionally a status code, then creates the response
	 *
	 * @access public
	 * @param array|NULL $data
	 *        	Data to output to the user
	 *        	running the script; otherwise, exit
	 */
	public function response($data = NULL) {
		$this->output->set_status_header ( 200 )->set_content_type ( 'application/json', 'utf-8' )->set_output ( json_encode ( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) )->_display ();
		exit ();
	}


	/**
	 * This function used to check the user is logged in or not
	 */
	function isLoggedIn(){
		$isLoggedIn = $this->session->userData('isLoggedIn');

		if(! isset($isLoggedIn)|| $isLoggedIn!=TRUE){
			redirect('LoginTest');
		}else{
			$this->loggerRole = $this->session->userdata('loggerRole');
			$this->loggerID = $this->session->userdata('loggerID');
			$this->loggerName = $this->session->userdata('loggerName');
			$this->loggerOutletID = $this->session->userdata('loggerOutletID');
			$this->loggerOutletName = $this->session->userdata('loggerOutletName');

			$this->global['loggerRole'] = $this->loggerRole;
			$this->global['loggerID'] = $this->loggerID;
			$this->global['loggerName'] = $this->loggerName;
			$this->global['loggerOutletID'] = $this->loggerOutletID;
			$this->global['loggerOutletName'] = $this->loggerOutletName;

		}
	}

	/**
     * This function used to load views
     * @param {string} $viewName : This is view name
     * @param {mixed} $headerInfo : This is array of header information
     * @param {mixed} $pageInfo : This is array of page information
     * @param {mixed} $footerInfo : This is array of footer information
     * @return {null} $result : null
     */
	function loadViews($viewName = "", $headerInfo = NULL, $pageInfo = NULL, $footerInfo = NULL){

        $this->load->view('includes/header', $headerInfo);
        $this->load->view($viewName, $pageInfo);
        $this->load->view('includes/footer', $footerInfo);
    }

    /**
	 * This function is used to load the set of views
	 */
	function loadThis() {
		$this->global ['pageTitle'] = 'WRF Holdings (pvt) Ltd : Access Denied';
		
		$this->load->view ( 'includes/header', $this->global );
		$this->load->view ( 'access' );
		$this->load->view ( 'includes/footer' );
	}
	

	/**
	 * This function is used to check the access
	 */

	function isAdmin(){
		if($this->loggerRole != ROLE_ADMIN){
			return false;
		}else{
			return true;
		}
	}

	// // method for logout from the system

	// function logout(){		
	// 	$this->session->sess_destroy();
	// 	redirect('/LoginTest');
	// }


}