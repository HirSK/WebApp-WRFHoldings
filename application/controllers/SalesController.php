<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class SalesController extends BaseController{

	function __construct(){
		parent::__construct();
		$this->load->model('gen_model');
		$this->load->library('Pdf_report');

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

		$this->form_validation->set_rules('inputInvoiceNumber','Invoice Number','trim|required');
		$this->form_validation->set_rules('inputCustomerCode','Customer Number','trim|required');
		$this->form_validation->set_rules('inputInvoiceDate','Invoice Date');
		$this->form_validation->set_rules('inputInvoiceValue','Invoice value','trim|required');

		if($this->form_validation->run()==false){

			 $this->session->set_flashdata('error', 'Check the customer code is valid');
			 $this->createInvoiceList();

		}else{

			$idInvoice				=$_POST['inputInvoiceNumber'];
			$CustomerCode			=$_POST['inputCustomerCode'];
			$InvoiceValue			=$_POST['inputInvoiceValue'];
			$invoice_order_date     =$_POST['inputInvoiceDate'];


			$date=date_create_from_format("m/d/Y", $invoice_order_date);

			$invoice_order_date=date_format($date,"Y-m-d");
			

			$invoice_order_array = array('idInvoice' => $idInvoice,
											'Customer_idCustomer' =>$CustomerCode,
											'InvoiceValue' =>$InvoiceValue,
											'invoice_order_date' => $invoice_order_date,
											'outletID' => $this->loggerOutletID											
										);

			// print_r($invoice_order_array);
			// die();


			$result = $this->sales_model->setInvoiceOrder($invoice_order_array);

			if($result>0)
                {
                    $this->session->set_flashdata('success', 'New invoice order added');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Failed to insert the invoice');
                }
            $this->createInvoiceList();	

		}		

	}


	public function getInvoiceDetails(){

		// $id = $this->input->post('id');
		// $outletID = $this->session->userData('loggerOutletID');

	 //    $query = $this->sales_model->getInvoiceData($id,$outletID);
	 //    echo json_encode($query);


//changed here

		$id = $this->input->post('id');
		$outletID = $this->session->userData('loggerOutletID');

		$res = $this->sales_model->checkInvoiceAdded($id,$outletID);

		$added = $res[0]->added;

		if($added==0){
			$query = $this->sales_model->getInvoiceData($id,$outletID);
	    	echo json_encode($query);
		}else{
			$array = array(
		        "message" => "The id has already added or not in the preorder list",
		    );
			$data['json'] = $array;
			echo json_encode($data);
		}  

		
	}


	public function getInvoiceDetails_update(){

		// $id = $this->input->post('id');
		// $collectionID = $this->input->post('collectionID');
		// $outletID = $this->session->userData('loggerOutletID');

		// $this->db->where('idInvoice',$id);
		// $this->db->where('Collection_idCollection',$collectionID);
		// $q = $this->db->get('invoice');

		// if($q){

	 //    	$query = $this->sales_model->getInvoiceOtherData($id,$outletID);
	 //    	echo json_encode($query);

		// }else{			

	 //    	$query = $this->sales_model->getInvoiceData($id,$outletID);
	 //    	echo json_encode($query); 

		// }	
		$outletID = $this->session->userData('loggerOutletID');
		$id = $this->input->post('id');
		$query = $this->sales_model->getInvoiceData($id,$outletID);
	    	echo json_encode($query);

		
	}




	public function updateInvoice(){

			$outletID = $this->session->userData('loggerOutletID');


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
//changed here
				// $res= $this->sales_model->updatePreOrder($idInvoice,$outletID);

				//here is the problem.
				$query = $this->sales_model->updateInvoiceData($invoice_array);
				// $this->sales_model->updatePreOrder($idInvoice,$outletID);
				echo json_encode($query);

								

			//if there are pending credits ,they are added to credits table
			if($CreditAmount != ""){

				$creditArray = array(


					'invoice_credit_id'=>$idInvoice,
					'customer_id'=>$CustomerCode,
					'total_credit' => $CreditAmount ,
					'credit_start_date'=>date('Y-m-d H:i:s') ,
					'credit_topay'=>$CreditAmount,
					'outletID'=>$outletID,

					);

				$this->gen_model->insertData($tablename="credit",$creditArray);
							

			}
			// if the payments are done by cheque,these details are sent to cheque table

			if($ChequeAmount != ""){


				$date=date_create_from_format("m/d/Y", $ChequeBKdate);

				$ChequeBKdate=date_format($date,"Y-m-d");

				$chequeArray = array(
					'cheque_invoice_id'=>$idInvoice,
					'ChequeAmount' => $ChequeAmount ,
					'ChequeNumber' => $ChequeNumber , 
					'ChequeBankName' => $ChequeBankName , 
					'ChequeBankBranch' => $ChequeBankBranch ,
					'ChequeBKdate' => $ChequeBKdate ,
					'outletID'=>$outletID,  

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

		$query = $this->sales_model->insertCollectionData($tablename='collection',$collectionArray);
		echo json_encode($query);
		// redirect('/SalesController');
	}

	// public function displayCollectionReport(){
	// 	// $this->load->view('collection_report_view');3


	// 	$data['outlet']=$this->gen_model->getData('outlet');
		
	// 	$data['collection'] = NULL;
		
	// 	$this->loadViews("collection_report_view",$this->global,$data,NULL);
		
	// }

	public function displayCollectionReport(){
		// $this->load->view('collection_report_view');3


		$data['outlet']=$this->gen_model->getData('outlet');
		
		$data['collection'] = NULL;

		$data['from'] = NULL;
		$data['to']  = NULL;
		
		$this->loadViews("collection_report_view",$this->global,$data,NULL);
		
	}


	

	public function createInvoiceList(){
		// $this->load->view('add_invoice_view');


		$data['maxid'] = 0;

		$row = $this->db->query('SELECT MAX(idInvoice) AS `maxid` FROM `preorder_invoice`')->row();
		if ($row) {
		    $data['maxid'] = $row->maxid;

		    $this->loadViews('add_invoice_view',$this->global,$data,NULL);
		}
		// $this->loadViews('add_invoice_view',$this->global,NULL,NULL);
	}


	public function viewCollection(){

		$collectionfromDate = $_POST['getCollectionFrom'];
		$collectiontoDate = $_POST['getCollectionTo'];
		$outlet = $_POST['outletId'];
		$position = $_POST['position'];

		$button = $this->input->post('collect');

		

		

	if($position=="Cheque Register"){


		if($button =='go'){

		if($collectiontoDate !=Null){

			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");
			$date1=date_create_from_format("m/d/Y", $collectiontoDate);
			$to=date_format($date1,"Y-m-d");

			

			$data1['collection1'] = $this->view_sales_model->viewCheque($from,$to,$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');
			$data1['from'] = $collectionfromDate;
			$data1['to']  = $collectiontoDate ;
			$data1['position'] = $position;
			$this->loadViews("chequeView",$this->global,$data1,NULL);


		}else{


			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");

			$data1['collection1'] =  $this->view_sales_model->viewCheque($from,date('Y-m-d'),$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');
			$data1['from'] = $collectionfromDate ;
			$data1['to']  = date('m/d/Y');
			$data1['position'] = $position;
			$this->loadViews("chequeView",$this->global,$data1,NULL);
		}


	}elseif ($button =='print') {

			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");

			$data1['collection1'] =  $this->view_sales_model->viewCheque($from,date('Y-m-d'),$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');

			

			$this->load->view("cheque_report",$data1);


	}

	}elseif($position=="Credit Register"){




		if($button =='go'){




		if($collectiontoDate !=Null){

			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");
			$date1=date_create_from_format("m/d/Y", $collectiontoDate);
			$to=date_format($date1,"Y-m-d");
			$data1['collection1'] = $this->view_sales_model->viewCredit($from,$to,$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');
			$data1['from'] = $collectionfromDate;
			$data1['to']  = $collectiontoDate ;
			$data1['position'] = $position;
			$this->loadViews("CreditView",$this->global,$data1,NULL);


		}else{


			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");
			$data1['collection1'] =  $this->view_sales_model->viewCredit($from,date('Y-m-d'),$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');
			$data1['from'] = $collectionfromDate ;
			$data1['to']  = date('m/d/Y');
			$data1['position'] = $position;

			$this->loadViews("CreditView",$this->global,$data1,NULL);
		}


	}elseif($button =='print') {

			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");

			$data1['collection1'] =  $this->view_sales_model->viewCredit($from,date('Y-m-d'),$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');

			

			$this->load->view("credit_report",$data1);


	}





	}elseif ($position=="Cash Register") {

		if($button =='go'){

		if($collectiontoDate !=Null){

			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");
			$date1=date_create_from_format("m/d/Y", $collectiontoDate);
			$to=date_format($date1,"Y-m-d");
			$data1['collection1'] = $this->view_sales_model->viewCash($from,$to,$outlet);
			$data1['collection2'] = $this->view_sales_model->returnCredit($from,$to,$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');
			$data1['from'] = $collectionfromDate;
			$data1['to']  = $collectiontoDate ;
			$data1['position'] = $position;
 
			$this->loadViews("cashView",$this->global,$data1,NULL);


		}else{


			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");

			$data1['collection1'] =  $this->view_sales_model->viewCash($from,date('Y-m-d'),$outlet);
			$data1['collection2'] = $this->view_sales_model->returnCredit($from,date('Y-m-d'),$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');

			$data1['from'] = $collectionfromDate ;
			$data1['to']  = date('m/d/Y');

			$data1['position'] = $position;
			$this->loadViews("cashView",$this->global,$data1,NULL);
		}


	}elseif ($button =='print') {



			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");

			$data1['collection1'] =  $this->view_sales_model->viewCash($from,date('Y-m-d'),$outlet);
			$data1['collection2'] = $this->view_sales_model->returnCredit($from,date('Y-m-d'),$outlet);
			$data1['outlet']=$this->gen_model->getData('outlet');

			

			$this->load->view("cash_report",$data1);



		

	}
		
	}


	elseif($position=="Daily collection summary"){


		if($collectiontoDate !=Null){
			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");
			$date1=date_create_from_format("m/d/Y", $collectiontoDate);
			$to=date_format($date1,"Y-m-d");
			$data['collection'] = $this->view_sales_model->viewCollection($from,$to,$outlet);
			$data['outlet']=$this->gen_model->getData('outlet');

			$data['from'] = $collectionfromDate;
			$data['to']  = $collectiontoDate ;
			$data['position'] = $position;
			$this->loadViews("collection_report_view",$this->global,$data,NULL);


		}else{


			$date=date_create_from_format("m/d/Y", $collectionfromDate);
			$from=date_format($date,"Y-m-d");
			$data['collection'] =  $this->view_sales_model->viewCollection($from,date('Y-m-d'),$outlet);
			$data['outlet']=$this->gen_model->getData('outlet');


			$data['from'] = $collectionfromDate ;
			$data['to']  = date('m/d/Y');

			$data['position'] = $position;
			$this->loadViews("collection_report_view",$this->global,$data,NULL);
		}







	}
		

	}





	// public function viewCollection(){

	// 	$collectionfromDate = $_POST['getCollectionFrom'];
	// 	$collectiontoDate = $_POST['getCollectionTo'];
	// 	$outlet = $_POST['outletId'];
	// 	$position = $_POST['position'];

	// if($position=="Cheque Register"){

	// 	if($collectiontoDate !=Null){

	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");
	// 		$date1=date_create_from_format("m/d/Y", $collectiontoDate);
	// 		$to=date_format($date1,"Y-m-d");

			

	// 		$data1['collection1'] = $this->view_sales_model->viewCheque($from,$to,$outlet);
	// 		$data1['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("chequeView",$this->global,$data1,NULL);


	// 	}else{


	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");

	// 		$data1['collection1'] =  $this->view_sales_model->viewCheque($from,date('Y-m-d'),$outlet);
	// 		$data1['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("chequeView",$this->global,$data1,NULL);
	// 	}

	// }elseif($position=="Credit Register"){




	// 	if($collectiontoDate !=Null){

	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");
	// 		$date1=date_create_from_format("m/d/Y", $collectiontoDate);
	// 		$to=date_format($date1,"Y-m-d");
	// 		$data1['collection1'] = $this->view_sales_model->viewCredit($from,$to,$outlet);
	// 		$data1['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("CreditView",$this->global,$data1,NULL);


	// 	}else{


	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");
	// 		$data1['collection1'] =  $this->view_sales_model->viewCredit($from,date('Y-m-d'),$outlet);
	// 		$data1['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("CreditView",$this->global,$data1,NULL);
	// 	}





	// }elseif ($position=="Cash Register") {



	// 	if($collectiontoDate !=Null){

	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");
	// 		$date1=date_create_from_format("m/d/Y", $collectiontoDate);
	// 		$to=date_format($date1,"Y-m-d");
	// 		$data1['collection1'] = $this->view_sales_model->viewCash($from,$to,$outlet);
	// 		$data1['collection2'] = $this->view_sales_model->returnCredit($from,$to,$outlet);
	// 		$data1['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("cashView",$this->global,$data1,NULL);


	// 	}else{


	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");

	// 		$data1['collection1'] =  $this->view_sales_model->viewCash($from,date('Y-m-d'),$outlet);
	// 		$data1['collection2'] = $this->view_sales_model->returnCredit($from,date('Y-m-d'),$outlet);
	// 		$data1['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("cashView",$this->global,$data1,NULL);
	// 	}
		
	// }


	// elseif($position=="Daily collection summary"){


	// 	if($collectiontoDate !=Null){
	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");
	// 		$date1=date_create_from_format("m/d/Y", $collectiontoDate);
	// 		$to=date_format($date1,"Y-m-d");
	// 		$data['collection'] = $this->view_sales_model->viewCollection($from,$to,$outlet);
	// 		$data['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("collection_report_view",$this->global,$data,NULL);


	// 	}else{


	// 		$date=date_create_from_format("m/d/Y", $collectionfromDate);
	// 		$from=date_format($date,"Y-m-d");
	// 		$data['collection'] =  $this->view_sales_model->viewCollection($from,date('Y-m-d'),$outlet);
	// 		$data['outlet']=$this->gen_model->getData('outlet');
	// 		$this->loadViews("collection_report_view",$this->global,$data,NULL);
	// 	}


	// }
		

	// }


	// public function viewInoviceDetail(){




	// 	$user = $_GET['strUser'];

	// 	$position = $_GET['position'];


	// 	if($position == "Daily collection summary"){



	// 	    $data['UserDetailsone']=$this->view_sales_model->viewInvoices($user);

	// 		echo json_encode(array("data"=>$data));

	// 	}elseif($position == "Cash Register"){



	// 	    $data['UserDetailsone']=$this->view_sales_model->viewInvoices($user);

	// 		echo json_encode(array("data"=>$data));

	// 	}





	// }

	public function viewInoviceDetail(){


		$outlet = $_GET['outlet'];

		$user = $_GET['strUser'];

		$position = $_GET['position'];


		if($position == "Daily collection summary"){



		    $data['UserDetailsone']=$this->view_sales_model->viewInvoices($user,$outlet);




			echo json_encode(array("data"=>$data));

		}elseif($position == "Cash Register"){



		    $data['UserDetailsone']=$this->view_sales_model->viewInvoices($user,$outlet);

		    

			echo json_encode(array("data"=>$data));

		}





	}


	// public function new1(){


	// 	$this->loadViews("collectionSummary_view",$this->global,NULL,NULL);


	// }
	public function new1(){


		$this->loadViews("DailySales",$this->global,NULL,NULL);


	}

	public function colSum(){


		$data['col'] = $this->gen_model->getData('collection');
		$this->load->view('v_report_collect', $data);

		
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

		$credit_lasttaken_datenew=date_format($date,"Y-m-d");



		$query = $this->sales_model->repayCredits($invoice_credit_id,$credit_lasttaken_datenew,$credit_topay,$completed);
		
		
		echo json_encode($query);

		
	}


	function editCollection(){

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
		$this->loadViews('existing_collection_form_view',$this->global,$data,NULL);

		
	}

	function getCollectionDetails(){

		$collection_id = $this->input->post('collection_id');
    	$query = $this->sales_model->getCollectionDetails($collection_id);
    	echo json_encode($query);
	}

	function UpdateCollectionInfo(){


		$CollectionDate = $this->input->post('date');
		$idCollection = $this->input->post('collectionID');
		$CollectionOfficerName = $this->input->post('collectionOfficer');
		$CollectionDriver = $this->input->post('collectionDriver');
		$CollectionVehicle = $this->input->post('vehicleNo');
		$CollectionArea = $this->input->post('collectionArea');

		
		$date=date_create_from_format("m/d/Y", $CollectionDate);

		$CollectionDate=date_format($date,"Y-m-d");


		$collectionArray = array(

				'CollectionDriver'  	=> $CollectionDriver,
				'CollectionVehicle' 	=>	$CollectionVehicle,
				'CollectionArea'		=>	$CollectionArea,
				'CollectionDate'		=>	$CollectionDate,
				'CollectionOfficerName'	=>	$CollectionOfficerName,
				'Outlet_idOutlet'		=>	$this->session->userData('loggerOutletID'),
			);

		
		$query = $this->sales_model->updateCollectionData($idCollection,$collectionArray);
		echo json_encode($query);
	}


	public function printcash(){


		$from = $_POST['getCollectionFrom'];
		$to = $_POST['getCollectionTo'];
		$outlet = $_POST['outletId'];



		
			
		$data['collection'] = $this->view_sales_model->viewCollection($from,$to,$outlet);
		//$data['outlet']=$this->gen_model->getData('outlet');
		$this->load->view("cash_report",$data);


	}


}
