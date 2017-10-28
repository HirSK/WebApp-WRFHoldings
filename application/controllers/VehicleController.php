<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class VehicleController extends BaseController{

    function __construct(){
        parent::__construct();
        $this->load->model('gen_model');
        $this->load->library("pagination");
        $this->isLoggedIn();
    }

    public function index(){
        // $this->load->view('add_vehicle_view');
        $this->loadViews('add_vehicle_view',$this->global,NULL,NULL);
    }

    public function addVehicle(){

        

            $vehicle_array = array(

                    'Delivery_VehiclePlateNumber'           => $_POST['vehiclePlateNo'],
                    'Delivery_VehicleType'                  => $_POST['vehicleType'],
                    'Outlet_idOutlet'                       => $this->session->userData('loggerOutletID'),
                    'Delivery_VehicleName'                  => $_POST['exampleVehicleName'],
                    'Delivery_VehicleEngineNo'              => $_POST['exampleEngineNo'],
                    'Delivery_VehicleChassisNo'             => $_POST['exampleChassisNo'],
                    'Delivery_VehicleRegistrationDate'      => $_POST['registrationDate'],
                    'Delivery_VehicleOwnerName'             => $_POST['exampleOwnerName'],
                    'Delivery_VehicleOwnerAddress'          => $_POST['exampleOwnerAddress'],
                    'Delivery_VehicleOwnerTelephoneNo'      => $_POST['exampleOwnerTelephoneNo'],
                    'Delivery_VehicleLicenNo'               => $_POST['exampleLicenNo'],
                    'Delivery_VehicleLicenStartingDate'     => $_POST['licenStartingDate'],
                    'Delivery_VehicleLicenEndingDate'       => $_POST['licenEndingDate'],
                    'Delivery_VehicleInsurancePolicyNo'     => $_POST['exampleInsurancePolicyNo'],
                    'Delivery_VehicleInsuranceSerielNo'     => $_POST['exampleInsuranceSerielNoNo'],
                    'Delivery_VehicleInsuranceStartingDate' => $_POST['insuranceStartingDate'],
                    'Delivery_VehicleInsuranceEndingDate'   => $_POST['insuranceEndingDate'],

            );

            $res=$this->gen_model->insertData($tablename="delivery_vehicle",$vehicle_array);

            redirect('/VehicleController');
        //}

    }
    
}

