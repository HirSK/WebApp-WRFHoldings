<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_report extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('Pdf_report');
		$this->load->model ('gen_model');
	}


	public function chqReg(){

		$data['ch'] = $this->gen_model->getData('cheque');
		$this->load->view('v_report', $data);
	}

	public function creditReg(){

		$data['cr'] = $this->gen_model->getData('credit');
		$this->load->view('v_report_CR', $data);
	}

	public function cusList(){

		$data['cus'] = $this->gen_model->getData('customer');
		$this->load->view('v_report_cus', $data);
	}

	public function empList(){

		$data['emp'] = $this->gen_model->getData('employee');
		$this->load->view('v_report_emp', $data);
	}

	public function colSum(){

		$data['col'] = $this->gen_model->getData('collection');
		$this->load->view('v_report_collect', $data);
	}


}