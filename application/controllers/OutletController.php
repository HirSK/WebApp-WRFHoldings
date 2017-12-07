<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class OutletController extends BaseController{

	public function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->isLoggedIn ();
	}

	public function index(){

		$data['outlett'] = $this->gen_model->getData($tablename='outlet');

		$this->loadViews('add_outlet_view',$this->global,$data,NULL);

	}

	public function addOutlets(){

		
			$outlet_array = array(

					
					'OutletName'				=> $_POST['OutletName'],
					'OutletLocation'		=> $_POST['OutletLocation'],
					
			);

			$res=$this->gen_model->insertData($tablename="outlet",$outlet_array);

			redirect('/OutletController');
	}
}