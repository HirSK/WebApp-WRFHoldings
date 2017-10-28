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
		// $this->load->view('add_pettycashtype_view');
		$this->loadViews('add_pettycashtype_view',$this->global,NULL,NULL);

	}

	public function addPettyCashExpenses(){
		// $this->load->view('add_pettycash_expenses_view');
		$this->loadViews('add_pettycash_expenses_view',$this->global,NULL,NULL);
	}

	public function addPettycash(){
		$pettycash_array = array(

			'Petty_CashType' => $_POST['PettyCashType'],
			'Petty_CashDescription' => $_POST['PettyCashDescription'],

			);

			$res=$this->gen_model->insertData($tablename="petty_cash",$pettycash_array);

			redirect('/PettyCashController');
	}
}