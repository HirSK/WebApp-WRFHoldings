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

	
}