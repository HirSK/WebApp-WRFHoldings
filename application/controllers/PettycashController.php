<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PettycashController extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
	}

	public function index(){
		$this->load->view('add_pettycash_type');
	}

	public function pettycashExpenses(){
		$this->load->view('add_pettycash_expenses');
	}

	public function addPettycash(){
		$pettycash_array = array(

			'Petty_CashType' => $_POST['PettyCashType'],
			'Petty_CashDescription' => $_POST['PettyCashDescription'],

			);

			$res=$this->gen_model->insertData($tablename="petty_cash",$pettycash_array);

			redirect('/PettycashController');
	}
}