<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class SalesController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library('pagination');
		$this->isLoggedIn();
	}

	public function index(){	

		$loggerOutletID = $this->session->userData('loggerOutletID');
		$whereArray = array('EmployeePosition' =>'Collection officer','Outlet_idOutlet'=>$loggerOutletID);
		$columnsArray = array('EmployeeNameWithInitials' );
		$whereArray2 = array('EmployeePosition' =>'Delivery driver','Outlet_idOutlet'=>$loggerOutletID);
		$whereArray3 = array('Outlet_idOutlet'=>$loggerOutletID);
		$columnsArray3 = array('Delivery_VehiclePlateNumber' );

		$data['collectionOfficerList'] = $this->gen_model->getData($tablename='Employee',$columns_arr = $columnsArray,$where_arr = $whereArray);
		$data['driverList'] = $this->gen_model->getData($tablename='Employee',$columns_arr = $columnsArray,$where_arr = $whereArray2);

		$data['vehicleList'] = $this->gen_model->getData($tablename='delivery_vehicle',$columns_arr = $columnsArray3,$where_arr = $whereArray3);

		// $this->load->view('collection_form_view',$data);
		$this->loadViews('collection_form_view',$this->global,$data,NULL);
	}

	public function addInvoice(){


		
		$idInvoice				=$_POST['idInvoice'];
		$CustomerCode			=$_POST['CustomerCode'];
		$CustomerName			= $_POST['CustomerName'];
		$InvoiceValue			=$_POST['InvoiceValue'];
		$InvoiceNetValue		= $_POST['InvoiceNetValue'];
		$CashAmount				= $_POST['CashAmount'];
		$ChequeAmount			= $_POST['ChequeAmount'];
		$CreditAmount			=$_POST['CreditAmount'];
		$SalesRtn				= $_POST['SalesRtn'];
		$Variance				= $_POST['Variance'];
		$Discount				= $_POST['Discount'];
		$MKTrtn					= $_POST['MKTrtn'];
		$Remarks				=$_POST['Remarks'];


		
		// $ChequeNumber           =$_POST[''];
		// $ChequeBankName           =$_POST[''];
		// $ChequeBankBranch           =$_POST[''];
		// $ChequeBKdate           =$_POST[''];


		$invoice_arry = array(

					
					'idInvoice'				=> $idInvoice,
					'Customer_idCustomer'		=> $CustomerCode,					
					'InvoiceValue'			=> $InvoiceValue,
					'InvoiceNetValue'				=> $InvoiceNetValue,	
					
					'SalesRtn'				=> $SalesRtn,
					'Variance'				=> $Variance,
					'Discount'					=> $Discount,
					'MKTrtn'					=> $MKTrtn,
					'Remarks'					=> $Remarks,


			);

		if($CashAmount != ""){

			$cashArray = array(

				'CashAmount' => $CashAmount , 

				);

			$this->gen_model->insertData($tablename="customer",$cashArray);
			$invoice_arry['Cash_idCash'] = $this->db->insert_id();			

		}elseif($ChequeAmount != ""){

			$chequeArray = array(

				'ChequeAmount' => $ChequeAmount ,
				'ChequeNumber' => $ChequeNumber , 
				'ChequeBankName' => $ChequeBankName , 
				'ChequeBankBranch' => $ChequeBankBranch ,
				'ChequeBKdate' => $ChequeBKdate ,  

				);

			$this->gen_model->insertData($tablename="cheque",$chequeArray);
			$invoice_arry['Cheque_idCheque'] = $this->db->insert_id();

		}elseif ($CreditAmount != "") {

			$creditArray = array(

				'CreditAmount' => $CreditAmount , 

				);

			$this->gen_model->insertData($tablename="credit",$creditArray);
			$invoice_arry['Credit_idCredit'] = $this->db->insert_id();
		}

		
		$this->gen_model->insertData($tablename="invoice",$invoice_arry);
		redirect('/SalesController');
	}

	public function addCollectionInfo(){

		$collectionDate = $_POST['collectionDate'];
		$collectionOfficer = $_POST['collectionOfficer'];
		$collectionDriver = $_POST['collectionDriver'];
		$vehicleNo = $_POST['vehicleNo'];
		$collectionArea = $_POST['collectionArea'];

		$collectionArray = array(

				'CollectionDriver'  	=> $collectionDriver,
				'CollectionVehicle' 	=>	$vehicleNo,
				'CollectionArea'		=>	$collectionArea,
				'CollectionDate'		=>	$collectionDate,
				'CollectionOfficerName'	=>	$collectionOfficer,
				'Outlet_idOutlet'		=>	$this->session->userData('loggerOutletID'),
			);

		$this->gen_model->insertData($tablename='collection',$collectionArray);
		redirect('/SalesController');
	}

	public function displayCollectionReport(){
		// $this->load->view('collection_report_view');
		
		$this->loadViews("collection_report_view",$this->global,NULL,NULL);
		
	}

	public function createInvoiceList(){
		// $this->load->view('add_invoice_view');
		$this->loadViews('add_invoice_view',$this->global,NULL,NULL);
	}


}