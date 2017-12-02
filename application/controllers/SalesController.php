<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class SalesController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->model('sales_model');
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

	//method to add the main invoice details when the order is come
	public function addInvoice(){

		$this->form_validation->set_rules('inputInvoiceNumber','Invoice Number','trim|required|max_length[20]|is_unique[invoice.idInvoice]');
		$this->form_validation->set_rules('inputCustomerCode','Customer Number','trim|required|max_length[20]|is_unique[customer.idCustomer]');
		$this->form_validation->set_rules('inputInvoiceDate','Invoice Date','trim|required|max_length[15]');
		$this->form_validation->set_rules('inputInvoiceValue','Invoice value','trim|required|max_length[20]');

		if($this->form_validation->run()==false){

			 $this->session->set_flashdata('error', 'Check the invoice number or customer code is valid');
			 $this->createInvoiceList();

		}else{

			$idInvoice				=$_POST['inputInvoiceNumber'];
			$CustomerCode			=$_POST['inputCustomerCode'];
			$InvoiceValue			=$_POST['inputInvoiceValue'];
			$invoice_order_date     =$_POST['inputInvoiceDate'];

			$invoice_order_array = array('idInvoice' => $idInvoice,
											'Customer_idCustomer' =>$CustomerCode,
											'InvoiceValue' =>$InvoiceValue,
											'invoice_order_date' => $invoice_order_date
										);


			$result = $this->sales_model->setInvoiceOrder($invoice_order_array);

			if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New invoice order added');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Failed to insert the invoice');
                }
            redirect('addInvoice');	

		}		

	}


	public function getInvoiceDetails(){

		$id = $this->input->post('id');
    	$query = $this->sales_model->getInvoiceData($id);
    	echo json_encode($query); 
		
	}

	public function updateInvoice(){
		//form validation has to be made
		
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


		$invoice_arry = array(

					
					'idInvoice'				=> $idInvoice,
					'Customer_idCustomer'	=> $CustomerCode,					
					'InvoiceValue'			=> $InvoiceValue,
					'InvoiceNetValue'		=> $InvoiceNetValue,
					'cash' 					=>$CashAmount,
					'cheque'				=>$ChequeAmount,
					'credit'				=>$CreditAmount,					
					'SalesRtn'				=> $SalesRtn,
					'Variance'				=> $Variance,
					'Discount'				=> $Discount,
					'MKTrtn'				=> $MKTrtn,
					'Remarks'				=> $Remarks,


			);

		$result = $this->gen_model->insertData($tablename="invoice",$invoice_arry);

		//if there are pending credits ,they are added to credits table
		if($CreditAmount != ""){

			$creditArray = array(


				'invoice_credit_id'=>$idInvoice,
				'customer_id'=>$CustomerCode,
				'total_credit' => $CreditAmount ,
				'credit_start_date'=>date('dd/mm/yyyy') ,
				'credit_topay'=>$CreditAmount,

				);

			$this->gen_model->insertData($tablename="credit",$creditArray);
						

		}
		//if the payments are done by cheque,these details are sent to cheque table
		if($ChequeAmount != ""){

			$chequeArray = array(
				'cheque_invoice_id'=>$idInvoice,
				'ChequeAmount' => $ChequeAmount ,
				'ChequeNumber' => $ChequeNumber , 
				'ChequeBankName' => $ChequeBankName , 
				'ChequeBankBranch' => $ChequeBankBranch ,
				'ChequeBKdate' => $ChequeBKdate ,  

				);

			$this->gen_model->insertData($tablename="cheque",$chequeArray);
			

		}

		
		
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