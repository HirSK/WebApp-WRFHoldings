<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginTest extends CI_Controller{

	/**
     * This is default constructor of the class
     */
	public function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
	}

	 /**
     * Index Page for this controller.
     */
     public function index(){
     	$this->isLoggedIn();
     }

     /**
     * This function used to check the user is logged in or not
     */

     function isLoggedIn(){

     	 $isLoggedIn = $this->session->userdata('isLoggedIn');

     	if(!isset($isLoggedIn) || $isLoggedIn != TRUE){
     	 	$this->load->view('loginView');
     	 }else{
     		redirect('home_dashboard');
     	 }
     }

     /**
     * This function used to logged in user
     */

     public function loginMe(){

     	$this->load->library('form_validation');
     	$this->form_validation->set_rules('username','Username','required|trim');
     	$this->form_validation->set_rules('password','Password','required|max_length[32]');

     	if($this->form_validation->run()==FALSE){
     		$this->index();
     	}else{


     		$username = $_POST['username'];
            //for testing purposes
			$userpass = sha1($_POST['password']);
            // $userpass = $_POST['password'];

			
		  $userInfo['Username'] = $username;
		  $userInfo['UserPassword'] = $userpass;   

          //print_r($userInfo);      

          

		  $res = $this->gen_model->userAuth($userInfo);
          
          //die();
        
        
            if($res){

                
                 $loggerEmpID = $res[0]->Employee_idEmployee;//receives the loggers employee id
                 $loggerOutlet = $res[0]->Employee_Outlet_idOutlet;//receives the loggers outlet
                 $loggerRole = $res[0]->roleName;//receives the loggers role in the system

                 

                 $whereArray2 = array('idEmployee' => $loggerEmpID);
                 $whereArray3 = array('idOutlet' => $loggerOutlet );


                // receives the loggers information
                 $loggerEmployeeData = $this->gen_model->getData($tablename='employee',$columns_arr = array(),$where_arr = $whereArray2);
                 //receives the loggers outlet information
                 $loggerOutletData = $this->gen_model->getData($tablename='outlet',$columns_arr = array(),$where_arr = $whereArray3);

                //creating a session

                $loggerName = $loggerEmployeeData[0]->EmployeeNameWithInitials;
                $loggerEmail = $loggerEmployeeData[0]->EmployeeEmail;
                $loggerOutletName = $loggerOutletData[0]->Outletname;
                $loggerOutletLocation = $loggerOutletData[0]->OutletLocation;

                $the_session = array("loggerID"=>$loggerEmpID,"loggerOutletID"=>$loggerOutlet,
                    "loggerName" => $loggerName,
                    "loggerRole"=>$loggerRole,
                    "isLoggedIn"=>TRUE,
                    "loggerEmail" => $loggerEmail,
                    "loggerOutletName"=>$loggerOutletName,
                    "loggerOutletLocation"=>$loggerOutletLocation);

                $this -> session -> set_userdata($the_session);

               

                redirect('home_dashboard');
         	}else{

                $this->session->set_flashdata('error','Username or password missmatch.Try again!');
                
                redirect('/LoginTest');
            }
        }
    }



}