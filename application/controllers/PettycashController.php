<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class PettycashController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
		$this->isLoggedIn();
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
		$this->loadViews('add_pettycash_expenses_view',$this->global,$data,NULL);
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




		$pcashid=$this->gen_model->petty($this->input->post('pettyCashTypeID'));

		//$ps = $pcashid[0]->idPetty_Cash;
		

		

		$pettycashexpences_array = array(

			'Outlet_idOutlet'	=> 1,
			'Petty_Cash_idPetty_Cash'	=>	(int)$pcashid,
			'Outlet_expends_Petty_Cash_Amount'	=> $this->input->post('amount'),
			'Company_Work_Period_Company_Work_Period_fromDate'	=> $this->input->post('dateFrom'),
			'Company_Work_Period_Company_Work_Period_toDate'	=>	$this->input->post('dateTo'),
			);

			$res=$this->gen_model->insertData($tablename="outlet_expends_petty_cash",$pettycashexpences_array);

			redirect('/PettycashController');
	}

}