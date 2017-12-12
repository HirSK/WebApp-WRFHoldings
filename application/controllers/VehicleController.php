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
                    'Delivery_VehicleRegistrationDate'      => date('Y-m-d',strtotime($_POST['registrationDate'])),
                    'Delivery_VehicleOwnerName'             => $_POST['exampleOwnerName'],
                    'Delivery_VehicleOwnerAddress'          => $_POST['exampleOwnerAddress'],
                    'Delivery_VehicleOwnerTelephoneNo'      => $_POST['exampleOwnerTelephoneNo'],
                    'Delivery_VehicleLicenNo'               => $_POST['exampleLicenNo'],
                    'Delivery_VehicleLicenStartingDate'     => date('Y-m-d',strtotime($_POST['licenStartingDate'])),
                    'Delivery_VehicleLicenEndingDate'       => date('Y-m-d',strtotime($_POST['licenEndingDate'])),
                    'Delivery_VehicleInsurancePolicyNo'     => $_POST['exampleInsurancePolicyNo'],
                    'Delivery_VehicleInsuranceSerielNo'     => $_POST['exampleInsuranceSerielNoNo'],
                    'Delivery_VehicleInsuranceStartingDate' => date('Y-m-d',strtotime($_POST['insuranceStartingDate'])),
                    'Delivery_VehicleInsuranceEndingDate'   => date('Y-m-d',strtotime($_POST['insuranceEndingDate'])),

            );

           

            $res=$this->gen_model->insertData($tablename="delivery_vehicle",$vehicle_array);

            redirect('/VehicleController');
        //}

    }

    public function manageVehicle(){

        $vehicleDetail['vehicleRecord'] = $this->gen_model->getData($tablename='delivery_vehicle');
        $this->loadViews('manage_vehicle_view',$this->global,$vehicleDetail,NULL);


    }

    public function deleteVehicle(){
        
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('idDelivery_Vehicle'=> $id);
            $this->gen_model->deleteData('delivery_vehicle',$where_arr);    
        }
        $vehicleDetail['vehicleRecord'] = $this->gen_model->getData($tablename='delivery_vehicle');
        $this->loadViews('manage_vehicle_view',$this->global,$vehicleDetail,NULL);
    }




    public function updateVehicle(){

            $where_arr = array('idDelivery_Vehicle'=>$this->input->post('VehicleID'));

            $data = array(
            'Delivery_VehiclePlateNumber' => $this->input->post('PlateNo'),
            'Delivery_VehicleType' => $this->input->post('VehicleType'),
            'Delivery_VehicleRegistrationDate' => date('Y-m-d',strtotime($this->input->post('RegistrationDate'))),
            'Delivery_VehicleOwnerName' => $this->input->post('OwnerName'),
            'Delivery_VehicleOwnerAddress' => $this->input->post('OwnerAddress'),
            'Delivery_VehicleOwnerTelephoneNo' => $this->input->post('OwnerTel'),
            'Delivery_VehicleLicenNo' => $this->input->post('LicenNo'),
            'Delivery_VehicleLicenStartingDate' => date('Y-m-d',strtotime($this->input->post('LicenStartDate'))),
            'Delivery_VehicleLicenEndingDate' => date('Y-m-d',strtotime($this->input->post('LicenEndDate'))),
            'Delivery_VehicleInsurancePolicyNo' => $this->input->post('InsurancePolicyNo'),
            'Delivery_VehicleInsuranceSerielNo' => $this->input->post('InsuranceSerielNo'),
            'Delivery_VehicleInsuranceStartingDate' => date('Y-m-d',strtotime($this->input->post('InsuranceStartDate'))),
            'Delivery_VehicleInsuranceEndingDate' => date('Y-m-d',strtotime($this->input->post('InsuranceEndDate')))
            );
            $this->gen_model->updateData('delivery_vehicle',$data, $where_arr);

            $data['vehicleRecord'] = $this->gen_model->getData($tablename='delivery_vehicle');
            $this->loadViews('manage_vehicle_view',$this->global,$data,NULL);
    }

    public function maintainVehicle(){
        
        $data['vehicleID'] = $this->gen_model->getData($tablename='delivery_vehicle');
        //$data['plateno'] = $this->gen_model->getData($tablename='delivery_vehicle_renewal_dates',NULL,$res);
        $this->loadViews('maintain_vehicle_view',$this->global,$data,NULL);
    }
    
    // public function addLicenRenewalDates(){
        

    //     $licen_array = array(
    //         'PlateNo'           => $_POST['plateNo'],
    //         'LicenLastRenewalDate'           => date('Y-m-d',strtotime($_POST['dateLastLic'])),
    //         'LicenNewRenewalDate'           => date('Y-m-d',strtotime($_POST['dateNewLic'])),
    //         'LicenRemarks'           => $_POST['remarkLic']
    //     );


    //     $this->gen_model->insertData("delivery_vehicle_renewal_dates",$licen_array);

    //     redirect('/VehicleController/maintainVehicle');
    // }

    // public function addInsuranceRenewalDates(){
        

    //     $insurance_array = array(
    //         'PlateNo'           => $_POST['plateNo'],
    //         'InsuranceLastRenewalDate'           => date('Y-m-d',strtotime($_POST['dateLastIns'])),
    //         'InsuranceNewRenewalDate'           => date('Y-m-d',strtotime($_POST['dateNewIns'])),
    //         'InsuranceRemarks'           => $_POST['remarkIns']
    //     );


    //     $res=$this->gen_model->insertData("delivery_vehicle_insurance_dates",$insurance_array);

    //     redirect('/VehicleController/maintainVehicle');
    // }

    public function addPlateNo(){
        $plate_No = array(
            'PlateNo' => $_POST['plateNo']
        );
        $res=$this->gen_model->insertData("delivery_vehicle_insurance_dates",$plate_No);

        redirect('/VehicleController/maintainVehicle');
    }

    public function getLicen(){

        if ($this->input->post('selectLic')) {
            $licen = array(
                'Plateno' => $_POST['plateNo']
            );

            $data['plateno'] = $this->gen_model->getData($tablename='delivery_vehicle_renewal_dates',NULL,$licen);
            
            $this->loadViews('maintain_vehicle_view',$this->global,$data,NULL);
            //redirect ('/VehicleController/maintainVehicle');
        }

         elseif ($this->input->post('selectIns')){
            $licen = array(
                'Plateno' => $_POST['plateNo']
            );

            $data['plateno'] = $this->gen_model->getData($tablename='delivery_vehicle_renewal_dates',NULL,$licen);
            
            $this->loadViews('maintain_vehicle_view',$this->global,$data,NULL);
            //redirect ('/VehicleController/maintainVehicle');
         }
    }

    public function postLic(){

        if ($this->input->post('submitLic')){

            $where_arr = array('Plateno'=>$this->input->post('platenolic'));
            //$where_arr = array('LicenLastRenewalDate'=>date('Y-m-d',strtotime($this->input->post('lastDateLic'))));

                $data = array(
                
                'LicenLastRenewalDate' => date('Y-m-d',strtotime($this->input->post('newDateLic'))),
                
                );
                $this->gen_model->updateData('delivery_vehicle_renewal_dates',$data, $where_arr);

                $data['plateno'] = $this->gen_model->getData($tablename='delivery_vehicle_renewal_dates');
                $this->loadViews('maintain_vehicle_view',$this->global,$data,NULL);
                redirect ('/VehicleController/maintainVehicle');

        }
        elseif ($this->input->post('submitIns')) {
            
            $where_arr = array('Plateno'=>$this->input->post('platenoInc'));
            //$where_arr = array('LicenLastRenewalDate'=>date('Y-m-d',strtotime($this->input->post('lastDateLic'))));

                $data = array(
                
                'InsuranceLastRenewalDate' => date('Y-m-d',strtotime($this->input->post('newDateInc'))),
                
                );
                $this->gen_model->updateData('delivery_vehicle_renewal_dates',$data, $where_arr);

                $data['plateno'] = $this->gen_model->getData($tablename='delivery_vehicle_renewal_dates');
                $this->loadViews('maintain_vehicle_view',$this->global,$data,NULL);
                redirect ('/VehicleController/maintainVehicle');
        }
    }
}


