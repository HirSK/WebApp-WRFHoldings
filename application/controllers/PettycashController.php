<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class PettycashController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
		$this->isLoggedIn();

		// use Twilio\Rest\Client;

		// $account_sid = 'ACce5ae057152567e3d3be6b4c268574b9'; 
		// $auth_token = 'eabd4c6a3911da39e66fd9d10a6452b1'; 
		// $client = new Client($account_sid, $auth_token); 
	}

	public function index(){

		$data['pcash'] = $this->gen_model->getData($tablename='petty_cash');
		// $this->load->view('add_pettycashtype_view');
		$this->loadViews('add_pettycashtype_view',$this->global,$data,NULL);


	}

	public function managePettyCash(){

		$pcashDetail['pcash'] = $this->gen_model->getData($tablename='petty_cash');
		
		$this->loadViews('add_pettycashtype_view',$this->global,$pcashDetail,NULL);
		
	}

	public function addPettyCashExpenses(){
		// $this->load->view('add_pettycash_expenses_view');
		$data['pcash'] = $this->gen_model->getData($tablename='petty_cash');
		
		$data['outletid'] = $this->gen_model->getData($tablename='outlet'); 

		// $data['from'] = NULL;
		// $data['to'] = NULL;

		//$data['pcashex'] = NULL;

		
		$this->loadViews('petty',$this->global,$data,NULL);
	}


	public function addPettyCashExpensesnew(){
		// $this->load->view('add_pettycash_expenses_view');
		$data['pcash'] = $this->gen_model->getData($tablename='petty_cash');
		
		$data['pcashex'] = $this->gen_model->getData($tablename='outlet_expends_petty_cash');
		$data['outletid'] = $this->gen_model->getData($tablename='outlet');
		

		$this->loadViews('petty',$this->global,$data,NULL);
	}

	public function addPettycash(){
		$pettycash_array = array(

			'Petty_CashType' => $_POST['PettyCashType'],
			'Petty_CashDescription' => $_POST['PettyCashDescription'],

			);

			$res=$this->gen_model->insertData($tablename="petty_cash",$pettycash_array);

			redirect('/PettyCashController');
	}

	public function managePettyCashExpences(){

		//$ps = $pcashid[0]->idPetty_Cash;
		
			
		


			
			$total =  $this->input->post('tot');

			$from = date('Y-m-d',strtotime($this->input->post('dateFrom')));

			$to = date('Y-m-d',strtotime($this->input->post('dateTo')));


			$msgG = "Your total Petty Cash from ".$from." to ".$to." is ".$total;



			$this->load->library('twilio');
			$sms_sender = '+14243736073';
			$sms_reciever = '+94775401352';
			$sms_message = $msgG;
			$from = '+'.$sms_sender; //trial account twilio number
			$to = '+'.$sms_reciever; //sms recipient number
			$response = $this->twilio->sms($from, $to,$sms_message);

			if($response->IsError){

			echo 'Sms Has been Not sent';
			}
			else{

			echo 'Sms Has been sent';
			}
	

			

			$pettycashtotal_array = array(

			'Outlet_ID'	=> $this->input->post('outletID'),
			'From_Date'	=> date('Y-m-d',strtotime($this->input->post('dateFrom'))),
			'To_Date'	=>	date('Y-m-d',strtotime($this->input->post('dateTo'))),
			'Total_Amount'	=> $this->input->post('tot'),
			);

			$res=$this->gen_model->insertData($tablename="petty_cash_totalamount",$pettycashtotal_array);

			
			


			

			

			
			
		
		
			
	}

	public function formRefresh(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('pettyCashTypeID', 'Petty_Cash_Type', 'required');
		//$this->form_validation->set_rules('password', 'Outlet_expends_Petty_Cash_Amount', 'required');
		if ($this->form_validation->run() == FALSE){
		  //$data->msg='Please fill all field';

		$data['pcash'] = $this->gen_model->getData($tablename='petty_cash');
		//$data['pcashex'] = $this->gen_model->getData($tablename='outlet_expends_petty_cash');
		$data['outletid'] = $this->gen_model->getData($tablename='outlet');
			
		$this->loadViews('petty',$this->global,$data,NULL);
		  //$this->loadViews('add_pettycash_expenses_view',$this->global,NULL,NULL);
		  //$this->load->view('add_pettycash_expenses_view',$data);
		//redirect('PettycashController');
		}else{
		 //$data->msg='success';
		 $this->form_validation->clear_field_data();
		 $data['pcash'] = $this->gen_model->getData($tablename='petty_cash');
		//$data['pcashex'] = $this->gen_model->getData($tablename='outlet_expends_petty_cash');
		$data['outletid'] = $this->gen_model->getData($tablename='outlet');
			
		$this->loadViews('petty',$this->global,$data,NULL);
		 //$this->loadViews('add_pettycash_expenses_view',$this->global,NULL,NULL);
		 //$this->load->view('add_pettycash_expenses_view',NULL);
		//redirect('PettycashController');
		}
	}

	public function pettyCashReport(){

		$this->loadViews('pettycash_report_view',$this->global,NULL,NULL);

	}

	public function pettyCashReportDisplay(){

		$data['pcashreport'] = $this->gen_model->getData($tablename='outlet_expends_petty_cash');
		$data['pcashreporttotal'] = $this->gen_model->getData($tablename='petty_cash_totalamount');

		$this->loadViews('pettycash_report_display_view',$this->global,$data,NULL);

	}

	public function addNew(){


		$pcashType= $_POST['pettyCashTypeID'];
		$pcashid =$this->gen_model->petty($pcashType);

		$outletID = $_POST['outletID'];

		$amount = $_POST['amount'];

		


		 $from = date('Y-m-d',strtotime($_POST['dateFrom']));
		 $to =date('Y-m-d',strtotime($_POST['dateTo']));



		$pettycashexpences_array = array(

			'Outlet_idOutlet'	=>$outletID,
			'Petty_Cash_idPetty_Cash'	=>(int)$pcashid,
			'Petty_Cash_Type' => $pcashType,
			'Outlet_expends_Petty_Cash_Amount'	=>$amount,
			'Company_Work_Period_Company_Work_Period_fromDate'	=> $from,
			'Company_Work_Period_Company_Work_Period_toDate'	=> $to,
			);

			$res=$this->gen_model->insertData($tablename="outlet_expends_petty_cash",$pettycashexpences_array);

			$data['pcashex'] = $amount;
				
		   echo json_encode(array("data"=>$data));
			


		// 	//redirect('/PettycashController/addPettyCashExpenses');

		// 	if ($res) {
		// 		//$this->loadViews('add_pettycash_expenses_view',$this->global,$data,NULL);
				
		// 	}
		// 	else{
		// 		echo "false";
		// 	}
	}

} 