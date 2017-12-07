<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class SalesController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');

		$this->load->model('sales_model');
		$this->load->model('view_sales_model');

	

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
											'invoice_order_date' => $invoice_order_date,
											'outletID' => $this->loggerOutletID											
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

			$idInvoice = $this->input->post('idInvoice');
			$CustomerCode = $this->input->post('CustomerCode');
			$CustomerName = $this->input->post('CustomerName');
			$InvoiceValue = $this->input->post('InvoiceValue');
			$CashAmount = $this->input->post('CashAmount');
			$ChequeAmount = $this->input->post('ChequeAmount');
			$ChequeNumber = $this->input->post('ChequeNumber');
			$ChequeBankName = $this->input->post('ChequeBankName');
			$ChequeBankBranch = $this->input->post('ChequeBankBranch');
			$ChequeBKdate = $this->input->post('ChequeBKdate');
			$CreditAmount = $this->input->post('CreditAmount');
			$Variance = $this->input->post('variance');
			$Discount = $this->input->post('discount');
			$SalesRtn = $this->input->post('salesrtn');
			$MKTrtn = $this->input->post('mkt');
			$Remarks = $this->input->post('remarks');
			$collectionID = $this->input->post('collectionID');


			$invoice_array = array(
						
						'idInvoice'				=> $idInvoice,
						'Customer_idCustomer'	=> $CustomerCode,					
						'InvoiceValue'			=> $InvoiceValue,
						'InvoiceNetValue'		=> $InvoiceValue,
						'cash' 					=>$CashAmount,
						'cheque'				=>$ChequeAmount,
						'credit'				=>$CreditAmount,				
						'SalesRtn'				=> $SalesRtn,
						'Variance'				=> $Variance,
						'Discount'				=> $Discount,
						'MKTrtn'				=> $MKTrtn,
						'Remarks'				=> $Remarks,
						'Collection_idCollection'=>$collectionID,
						'invoice_complete_date' =>date('Y-m-d H:i:s')

				);

				$query = $this->sales_model->updateInvoiceData($invoice_array);
				echo json_encode($query);

			//if there are pending credits ,they are added to credits table
			if($CreditAmount != ""){

				$creditArray = array(


					'invoice_credit_id'=>$idInvoice,
					'customer_id'=>$CustomerCode,
					'total_credit' => $CreditAmount ,
					'credit_start_date'=>date('Y-m-d H:i:s') ,
					'credit_topay'=>$CreditAmount,

					);

				$this->gen_model->insertData($tablename="credit",$creditArray);
							

			}
			// if the payments are done by cheque,these details are sent to cheque table
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
		
				
	}




	public function addCollectionInfo(){

		$CollectionDate = $this->input->post('date');
		$collectionOfficer = $this->input->post('collectionOfficer');
		$collectionDriver = $this->input->post('collectionDriver');
		$vehicleNo = $this->input->post('vehicleNo');
		$collectionArea = $this->input->post('collectionArea');


		$date=date_create_from_format("m/d/Y", $CollectionDate);

		$CollectionDate=date_format($date,"Y-m-d");

		

		$collectionArray = array(

				'CollectionDriver'  	=> $collectionDriver,
				'CollectionVehicle' 	=>	$vehicleNo,
				'CollectionArea'		=>	$collectionArea,
				'CollectionDate'		=>	$CollectionDate,
				'CollectionOfficerName'	=>	$collectionOfficer,
				'Outlet_idOutlet'		=>	$this->session->userData('loggerOutletID'),
			);

		$query = $this->gen_model->insertData($tablename='collection',$collectionArray);
		echo json_encode($query);
		// redirect('/SalesController');
	}

	public function displayCollectionReport(){
		// $this->load->view('collection_report_view');
		
		$data['collection'] = NULL;
		
		$this->loadViews("collection_report_view",$this->global,$data,NULL);
		
	}

	public function createInvoiceList(){
		// $this->load->view('add_invoice_view');
		$this->loadViews('add_invoice_view',$this->global,NULL,NULL);
	}



	public function viewCollection(){

		$collectionfromDate = $_POST['getCollectionFrom'];
		$collectiontoDate = $_POST['getCollectionTo'];


		if($collectiontoDate !=Null){

		$date=date_create_from_format("m/d/Y", $collectionfromDate);

		$from=date_format($date,"Y-m-d");


		$date1=date_create_from_format("m/d/Y", $collectiontoDate);

		$to=date_format($date1,"Y-m-d");


		$data['collection'] = $this->view_sales_model->viewCollection($from,$to);


		

	    //echo '<script>console.log("'.$data[0]->idCollection.'")</script>';
		$this->loadViews("collection_report_view",$this->global,$data,NULL);


	}else{


		$date=date_create_from_format("m/d/Y", $collectionfromDate);

		$from=date_format($date,"Y-m-d");

		$data['collection'] =  $this->view_sales_model->viewCollection($from,date('Y-m-d'));;
		
		$this->loadViews("collection_report_view",$this->global,$data,NULL);
	}



	}


	function getCreditDetails(){
		$id = $this->input->post('id');
		$query = $this->sales_model->getCreditData($id);
    	echo json_encode($query); 

	}

	function loadRepayCredits(){
		$this->loadViews("repay_credit_view",$this->global,NULL,NULL);

	}

	function repayCredits(){

		$invoice_credit_id = $this->input->post('invoiceID');
		$credit_lasttaken_date = $this->input->post('credit_lasttaken_date');
		$credit_topay = $this->input->post('credit_topay');
		$completed = $this->input->post('completed');

		$date=date_create_from_format("m/d/Y", $credit_lasttaken_date);

		$credit_lasttaken_date=date_format($date,"Y-m-d");



		$query = $this->sales_model->repayCredits($invoice_credit_id,$credit_lasttaken_date,$credit_topay,$completed);


		
		echo json_encode($query);

		
	}



}
