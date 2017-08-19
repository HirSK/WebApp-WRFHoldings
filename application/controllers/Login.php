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

		if($res=='TRURE'){
			redirect('/welcome');
		}else {
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