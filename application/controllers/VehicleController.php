<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VehicleController extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library("pagination");
	}

	public function index(){
		$this->load->view('vehicleRegistrationForm');
	}

	public function addVehicle(){

		

			$vehicle_array = array(

					
					'Delivery_VehicleType'				=> $_POST['vehicleType'],
					'Outlet_idOutlet'				=> $_POST['outletName'],
					'Delivery_VehicleName'		=> $_POST['exampleVehicleName'],
					'Delivery_VehicleEngineNo'				=> $_POST['exampleEngineNo'],
					'Delivery_VehicleChassisNo'			=> $_POST['exampleChassisNo'],
					'Delivery_VehicleRegistrationDate'				=> $_POST['registrationDate'],
					'Delivery_VehicleOwnerName'			=> $_POST['exampleOwnerName'],
					'Delivery_VehicleOwnerAddress'			=> $_POST['exampleOwnerAddress'],
					'Delivery_VehicleOwnerTelephoneNo'				=> $_POST['exampleOwnerTelephoneNo'],
					'Delivery_VehicleLicenNo'					=> $_POST['exampleLicenNo'],
					'Delivery_VehicleLicenStartingDate'					=> $_POST['licenStartingDate'],
					'Delivery_VehicleLicenEndingDate'					=> $_POST['licenEndingDate'],
					'Delivery_VehicleInsurancePolicyNo'					=> $_POST['exampleInsurancePolicyNo'],
					'Delivery_VehicleInsuranceSerielNo'					=> $_POST['exampleInsuranceSerielNoNo'],
					'Delivery_VehicleInsuranceStartingDate'					=> $_POST['insuranceStartingDate'],
					'Delivery_VehicleInsuranceEndingDate'					=> $_POST['insuranceEndingDate'],

			);

			$res=$this->gen_model->insertData($tablename="delivery_vehicle",$vehicle_array);

			redirect('/VehicleController');
		//}

	}
	
}

