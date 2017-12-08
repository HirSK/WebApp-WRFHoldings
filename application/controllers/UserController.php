<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class UserController extends BaseController{

	public function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->isLoggedIn();
	}

	public function index(){
		$this->global['pageTitle']="WRF Holdings(pvt) Ltd";
		$this->loadViews("home_dashboard",$this->global,NULL,NULL);
	}

	// this method lists the current users of the system

	function listUsers()
    {
        if($this->isAdmin() == FALSE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('gen_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
                      
            $data['userRecords'] = $this->gen_model->userListing($searchText);

            
            $this->global['pageTitle'] = 'WRF Holdings(pvt) Ltd : User Listing';
            
            $this->loadViews("user_view", $this->global, $data, NULL);
            

            
        }
    }

    // this method loads the form to add new users

    function addNew($id=''){

    	if($this->isAdmin() == FALSE)
        {
            $this->loadThis();
        }
        else
        {
            if($id){                

                $userData = $this->gen_model->userListing($id);
                $this->loadViews("add_new_user", $this->global, NULL, NULL);


            }else{
                        
                $this->global['pageTitle'] = 'WRF Holdings(pvt) Ltd : Add New User';

                $this->loadViews("add_new_user", $this->global, NULL, NULL);
            }
           
        }
    }

    function addNewUser(){

        if($this->isAdmin() == FALSE)
        {
            $this->loadThis();
        }else{

            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('role','UserRole','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('OutletID','OutletID','trim|required');
            $this->form_validation->set_rules('empID','empID','trim|required');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $role = $this->input->post('role'); 
                $username = $this->input->post('username');               
                $password = sha1($this->input->post('password'));
                $OutletID = $this->input->post('OutletID');
                $empID = $this->input->post('empID');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array(  'Username'=>$username, 
                                    'UserPassword'=>$password, 
                                    'Employee_idEmployee'=>$empID, 
                                    'Employee_Outlet_idOutlet'=>$OutletID,
                                    'roleName'=> $role,
                                    'mobile'=>$mobile,
                                    'createdBy'=>$this->loggerID, 
                                    'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('gen_model');
                $result = $this->gen_model->insertData($tablename='user',$userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                // redirects to addNew method in UserController
                redirect('addNew');
            }
        }
    }





    // method for logout from the system

    function logout(){      
        $this->session->sess_destroy();
        $this->load->view('loginView');
    }

    function listOutlets(){
        $this->loadViews('add_outlet_view');
    }


    
}