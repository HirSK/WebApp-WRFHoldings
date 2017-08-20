<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	/**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
	}

	public function index(){
		$this->load->view('login_view');
	}

	public function loginCheck(){

		$username = $_POST['username'];
		$userpass = $_POST['password'];

		$userInfo['Username'] = $username;
		$userInfo['UserPassword'] = $userpass;

		$res = $this->gen_model->userAuth($userInfo);
        //print_r($res);

        $currentUserId =  $res[0]->idUser;

		// if($res=='TRURE'){
		// 	redirect('/welcome');
		// }
        if($currentUserId){

            $whereArray = array('User_idUser' => $currentUserId);
            $columnArray = array('Employee_Outlet_idOutlet','Employee_idEmployee');

            $data = $this->gen_model->getData($tablename='supervisor',$columns_arr = $columnArray,$where_arr = $whereArray);

            //getting the loggers information for the session
            $loggerEmpID = $data[0]->Employee_idEmployee;//receives the loggers employee id
            $loggerOutlet = $data[0]->Employee_Outlet_idOutlet;//receives the loggers outlet

            $whereArray2 = array('idEmployee' => $loggerEmpID);
            $whereArray3 = array('idOutlet' => $loggerOutlet );


            //receives the loggers information
            $loggerEmployeeData = $this->gen_model->getData($tablename='employee',$columns_arr = array(),$where_arr = $whereArray2);
            //receives the loggers outlet information
            $loggerOutletData = $this->gen_model->getData($tablename='outlet',$columns_arr = array(),$where_arr = $whereArray3);

            //print_r($loggerEmployeeData);
            //print_r($loggerOutletData);
            //redirect('/welcome'.$data);
            
            
            //die();

            //creating a session

            $loggerName = $loggerEmployeeData[0]->EmployeeNameWithInitials;
            $loggerEmail = $loggerEmployeeData[0]->EmployeeEmail;
            $loggerOutletName = $loggerOutletData[0]->Outletname;
            $loggerOutletLocation = $loggerOutletData[0]->OutletLocation;

            $the_session = array("loggerID"=>$loggerEmpID,"loggerOutletID"=>$loggerOutlet,"loggerName" => $loggerName, "loggerEmail" => $loggerEmail,"loggerOutletName"=>$loggerOutletName,"loggerOutletLocation"=>$loggerOutletLocation);
            $this -> session -> set_userdata($the_session);

            //echo $this->session->userdata('loggerOutletLocation');
            
            //$this->session->set_userdata('userID' ,$loggerEmpID );
            //echo "session user".$this->session->userdata('userID');

            //die();

            redirect('/welcome');
        }
        else {
            echo "
                <div>
                <center>
                    <h1 style='color: #9f191f'>Wrong Username or Password</h1>
                    <h3 style='color: #398439'>Try again!</h3>
                 </center>
                 </div>
                 ";
            $this->load->view('login_view');
        }
	}

	public function signout(){
		session_unset();
		redirect(base_url()); //redirect to login
	}

}
