

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Daily Collection</li>
        </ol>
    </section> 

   <!-- Main content -->
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12" style="padding-top: 20px">
            	<div class="col-lg-8 col-sm-8 col-xs-12">
            		
            	<h3 class="box-title">
            		<i class="fa fa-th-list"></i>
            		Daily Collection
            	</h3>
            		
            	</div>



        </div>

            <div class="col-xs-12 col-lg-12" style="padding-top: 10px">

                <!-- general form elements -->
                <div class="box box-primary" >
                    <div class="box-header with-border">
                        
                        <div class="box-tools pull-right" style="padding-top: 0px">
                    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                		</div>
                    </div>
                    <!-- /.box-header -->
                    
                    <!-- <form role="form" action="<?php echo base_url()?>index.php/SalesController/addCollectionInfo" method="POST"> -->
	                    <div class="box-body ">
	                    	<div class="row">

	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group">
	                    			<label class="control-label" for>Date</label>
	                    			<span style="color:red;">*</span>

	                    			<div class="input-group date">
	                                            <div class="input-group-addon">
	                                                <i class="fa fa-calendar"></i>
	                                            </div>
	                                           
	                                            <input type="text" class="form-control pull-right" id="datepicker" name="dateFrom" required>
	                                </div>
	                    			
	                    		</div>



	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group">
	                    			<label class="control-label" for>Name of the Collection Officer</label>
	                    			<span style="color:red;">*</span>
	                    			<select class="form-control" name="collectionOfficer" id="collectionOfficer" required="">
	                    				<option value>--Select Collection Officer--</option>
	                    				<?php
	                    					foreach ($collectionOfficerList as  $COfficer) {                   						

	        									echo '<option value="'.$COfficer->EmployeeNameWithInitials.'">'.$COfficer->EmployeeNameWithInitials.'</option>';
	                    					}
	                    				?>
	                    			</select>
	                    		</div>

	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group">
	                    			<label class="control-label" for><b>The Collection ID : </b></label>
	                    			<input type="text" name="collectionID" id="collectionID" readonly="">
	                    			
	                    		</div>


	                    	</div>
	                    	<div class="row">
	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group" >
		                    			<label class="control-label" for>Name of the vehicle driver</label>
		                    			<span style="color:red;">*</span>
		                    			<select class="form-control" name="collectionDriver" id="collectionDriver" required>
		                    				<option value>--Select Driver--</option>
		                    				<?php
		                    					foreach ($driverList as  $driver) {                   						

		        									echo '<option value="'.$driver->EmployeeNameWithInitials.'">'.$driver->EmployeeNameWithInitials.'</option>';
		                    					}
		                    				?>
		                    			</select>
		                    	</div>

		                    	<div class="col-xs-12 col-sm-4 col-lg-3 form-group" >
		                    			<label class="control-label" for>Vehicle Number</label>
		                    			<span style="color:red;">*</span>
		                    			<select class="form-control" name="vehicleNo" id="vehicleNo" required>
		                    				<option value>--Select Vehicle--</option>
		                    				<?php
		                    					foreach ($vehicleList as  $vehicle) {                   						

		        									echo '<option value="'.$vehicle->Delivery_VehiclePlateNumber.'">'.$vehicle->Delivery_VehiclePlateNumber.'</option>';
		                    					}
		                    				?>
		                    			</select>
		                    	</div>
		                    	
		                    	<div class="col-xs-12 col-sm-4 col-lg-3 form-group" style="padding-top: 20px">
		                    		<label class="control-label" for>Area</label>
		                    		<span style="color:red;">*</span>
		                    		<input type="text" name="collectionArea" id="collectionArea" placeholder="Enter the area covered" required>

		                    	</div> 

		                    	<div class="col-xs-2">
                                	<!-- <button type="submit" class="btn btn-block btn-success" name="register">OK</button> -->
                                	<button type="button" class="btn btn-success collection-button" onclick="setCollection()">
						                <span class="glyphicon glyphicon-ok"></span>Proceed
						             </button>
                            	</div>
		                    </div> 
		                <!-- </form>   -->

		                <!-- panel preview -->
		        <div class="row">
		            <div class="col-sm-12">
				        <div class="col-sm-6">
				            <h5>Add collection:</h5>
				            <div class="panel panel-default">
				            
				                <div class="panel-body form-horizontal invoice-form">

				                	<div class="col-xs-12 col-lg-12 col-sm-12">
				                		<div class="col-sm-4 col-xs-12">
						                    <div class="form-group">
						                        <label for="id" class="col-sm-4 control-label">Invoice</label>
						                        <div class="col-sm-8">
						                        	
						                            <input type="text"  class="form-control" disabled="" id="idInvoice" name="idInvoice" onkeypress="Javascript: if (event.keyCode==13) getDetails();" required="">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-sm-8 col-xs-12">
						                    <div class="form-group">
						                        <label for="value" class="col-sm-5 control-label">NetValue</label>
						                        <div class="col-sm-7">
						                            <input type="text" class="form-control" disabled=""  id="InvoiceValue" name="InvoiceValue" required="">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="col-xs-12 col-lg-12 col-sm-12">
				                		<div class="col-sm-4 col-xs-12">
						                    <div class="form-group">
						                        <label for="ccode" class="col-sm-4 control-label">Cus:ID</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" disabled="" id="CustomerCode" name="CustomerCode" required="">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-sm-8 col-xs-12">
						                    <div class="form-group">
						                        <label for="cname" class="col-sm-4 control-label">Customer Name</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" disabled="" id="CustomerName" name="CustomerName" required="">
						                        </div>
						                    </div>
						                </div>
						            </div>
				                    <div class="form-group">
				                        <label for="cash" class="col-sm-3 control-label">Cash Amount</label>
				                        <div class="col-sm-8">
				                            <input type="text" class="form-control" disabled="" id="CashAmount" name="CashAmount" >
				                        </div>
				                    </div> 
				                    <div class="form-group">
				                        <label for="cheque" class="col-sm-3 control-label">Cheque Amount</label>
				                        <div class="col-sm-8">
				                            <input type="text" class="form-control" disabled="" id="ChequeAmount" name="ChequeAmount" >
				                        </div>
				                    </div>
				                    <div class="col-xs-12 col-lg-12 col-sm-12">
				                		<div class="col-sm-7 col-xs-12">
						                    <div class="form-group">
						                        <label for="ChequeNumber" class="col-sm-4 control-label">Cheque Number</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" disabled="" id="ChequeNumber" name="ChequeNumber">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-sm-5 col-xs-12">
						                    <div class="form-group">
						                        <label for="ChequeBankName" class="col-sm-4 control-label">Bank</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" disabled="" id="ChequeBankName" name="ChequeBankName">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="col-xs-12 col-lg-12 col-sm-12">
				                		<div class="col-sm-7 col-xs-12">
						                    <div class="form-group">
						                        <label for="ChequeBankBranch" class="col-sm-4 control-label">Branch</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" disabled="" id="ChequeBankBranch" name="ChequeBankBranch">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-sm-5 col-xs-12">
						                    <div class="form-group">
						                        <label for="ChequeBKdate" class="col-sm-4 control-label">BKdate</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" disabled="" id="ChequeBKdate" name="ChequeBKdate" placeholder="dd/mm/yyyy">
						                        </div>
						                    </div>
						                </div>
						            </div>
				                    <div class="form-group">
				                        <label for="credit" class="col-sm-3 control-label">Credit Amount</label>
				                        <div class="col-sm-8">
				                            <input type="text" class="form-control" disabled="" id="CreditAmount" name="CreditAmount" >
				                        </div>
				                    </div> 

					               <div class="col-xs-12 col-lg-12 col-sm-12">
					               	  <div class="col-sm-6 col-xs-12">
					                    <div class="form-group">
					                        <label for="variance" class="col-sm-5 control-label">Variance</label>
					                        <div class="col-sm-7">
					                            <input type="text" class="form-control" disabled="" id="variance" name="Variance">
					                        </div>
					                    </div> 
					                   </div>

					                  <div class="col-sm-6 col-xs-12">
					                    <div class="form-group">
					                        <label for="discount" class="col-sm-5 control-label">Discount</label>
					                        <div class="col-sm-7">
					                            <input type="text" class="form-control" disabled="" id="discount" name="Discount">
					                        </div>
					                    </div>
					                   </div>
					               </div> 

					               <div class="col-xs-12 col-lg-12 col-sm-12">
					               		<div class="col-sm-6 col-xs-12">
				                    		<div class="form-group">
						                        <label for="salesrtn" class="col-sm-5 control-label">Sales return</label>
						                        <div class="col-sm-7">
						                            <input type="text" class="form-control" disabled="" id="salesrtn" name="SalesRtn">
					                        	</div>
				                    		</div> 
				                		</div>
				                		<div class="col-sm-6 col-xs-12">
				                    		<div class="form-group">
				                        		<label for="mkt" class="col-sm-5 control-label">MKT return</label>
				                        		<div class="col-sm-7">
				                            		<input type="text" class="form-control" disabled="" id="mkt" name="mktrtn">
				                        		</div>
				                    		</div> 
				                		</div>
				                	</div>

				                    <div class="form-group">
				                        <label for="remarks" class="col-sm-3 control-label">Remarks</label>
				                        <div class="col-sm-9">
				                            <input type="text" class="form-control" disabled="" id="remarks" name="Remarks">
				                        </div>
				                    </div> 
				                   
				                   <div class="col-xs-12 col-lg-12 col-sm-12">
				                   	  <div class="col-sm-7 col-xs-12">
				                      		<div class="form-group">
						                        <div class="col-sm-6 text-right">
						                            <button type="button" class="btn btn-default preview-apply-button" onclick="applyFunction()">
						                                <span class="glyphicon glyphicon-ok"></span>Apply
						                            </button>
						                        </div>
						                    </div>
					                   </div>
					                   <div class="col-sm-5 col-xs-12">
						                    <div class="form-group">
						                        <div class="col-sm-6 text-right">
						                            <button type="button" class="btn btn-default preview-add-button" id="addBtn">
						                                <span class="glyphicon glyphicon-plus"></span> Add
						                            </button>
						                        </div>
						                    </div>
					                	</div>
				                  </div>

				                </div>
				               
				            </div>            
				        </div> <!-- / panel preview --> 
				        <div class="col-sm-6">
				            <h5>Preview:</h5>
				            <div class="row">
				                <div class="col-xs-12">
				                    <div class="table-responsive">
				                        <table class="table preview-table" id="list">
				                            <thead>
				                                <tr>
				                                    <th>Invoice</th>
				                                    <th>CusID</th>
				                                    <th>Amount</th>
				                                    <th>Cash</th>
				                                    <th>Cheque</th>
				                                    <th>Credit</th>
				                                    <th>Action</th>

				                                </tr>
				                            </thead>
				                            <tbody></tbody> <!-- preview content goes here-->
				                        </table>
				                    </div>                            
				                </div>
				            </div>
				            <!-- <div class="row text-right">
				                <div class="col-xs-12">
				                    <h5>Total Cash: <strong><span class="preview-cash"></span></strong></h5>
				                    <h5>Total Cheque: <strong><span class="preview-total"></span></strong></h5>
				                    <h5>Total Credit: <strong><span class="preview-total"></span></strong></h5>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col-xs-12">
				                    <hr style="border:1px dashed #dddddd;">
				                    <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
				                </div>                
				            </div> -->
				        </div>


				    </div>
				</div>
		            
                       
                    
		            </div>
		              



  </section>

    <!-- /.content -->

    </div>
<!-- /.content-wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script>

<script>




  </script>

<script type="text/javascript">

	
	function setCollection(){

		var datepicker = document.getElementById("datepicker").value;
		var vehicleNo = document.getElementById("vehicleNo").value; 
		var collectionOfficer = document.getElementById("collectionOfficer").value;
		var collectionDriver = document.getElementById("collectionDriver").value;
		var collectionArea = document.getElementById("collectionArea").value;

		if(datepicker.length<1 && vehicleNo.length<1 && collectionOfficer.length<1 && collectionDriver.length<1 && collectionArea.length<1 ){

			alert("Please enter values to proceed");
			return;
		}else if(datepicker.length<1){
			alert("Please select the date");
			return;
		}else if(vehicleNo.length<1){
			alert("Please select the vehicle no");
			return;
		}else if(collectionOfficer.length<1){
			alert("Please select the collection officer");
			return;
		}else if(collectionDriver.length<1){
			alert("Please select the collection driver");
			return;
		}else if(collectionArea.length<1){
			alert("Please enter the relevant collection area");
			return;
		}

		
		var data = {
			        date: datepicker,
			        // date:$CollectionDate,
			        vehicleNo: $('#vehicleNo').val(),
			        collectionOfficer: $('#collectionOfficer').val(),
			        collectionDriver: $('#collectionDriver').val(),
			        collectionArea: $('#collectionArea').val()
			        
			    };

		$.ajax({
			        url: "<?php echo base_url().'index.php/SalesController/addCollectionInfo'?>",
			        type: "post",
			        data: data,
			       
          			// error: function(xhr, ajaxOptions, thrownError) { 
           		// 		alert("You have added the invoice already!!!"); 
           		// 		clearTextBoxes();
           		// 	},
        
			        success : function(json){
			            var obj=jQuery.parseJSON(json);

			            if(obj){

			                alert('Collection Details added successfully, Collection ID is '+ obj);
			                $("#datepicker").attr('disabled','disabled');
			                $("#vehicleNo").attr('disabled','disabled');
			                $("#collectionOfficer").attr('disabled','disabled');
			                $("#collectionDriver").attr('disabled','disabled');
			                $("#collectionArea").attr('disabled','disabled');

			                	
			                enableInvoiceTextBoxes();
			                $('#collectionID').val(obj);
			                	                
			                			                
			            }else{
			                alert("Failed,Check the internet connection again");
			                clearTextBoxes();
			            }

			        },

			    });

	}
	</script>
	<script type="text/javascript">

	function enableInvoiceTextBoxes(){

		document.getElementById('idInvoice').disabled = false;
		document.getElementById('InvoiceValue').disabled = false;
		document.getElementById('CustomerCode').disabled = false;
		document.getElementById('CustomerName').disabled = false;
		document.getElementById('CashAmount').disabled = false;
		document.getElementById('ChequeAmount').disabled = false;
		document.getElementById('ChequeNumber').disabled = false;
		document.getElementById('ChequeBankName').disabled = false;
		document.getElementById('ChequeBKdate').disabled = false;
		document.getElementById('ChequeBankBranch').disabled = false;
		document.getElementById('CreditAmount').disabled = false;
		document.getElementById('variance').disabled = false;
		document.getElementById('discount').disabled = false;
		document.getElementById('salesrtn').disabled = false;
		document.getElementById('mkt').disabled = false;
		document.getElementById('remarks').disabled = false;


}
</script>
<script type="text/javascript">

function getDetails()
{
	 if($('#idInvoice').val()){

		    $.ajax({
		        type : "post",
		        url: "<?php echo base_url().'index.php/SalesController/getInvoiceDetails'?>",
		        cache: false,
		        data : {id :  $('#idInvoice').val()},
		        success : function(json){

		            var obj=jQuery.parseJSON(json);
		            // alert(json);

		            if(obj[0]){
		                $('#InvoiceValue').val(obj[0].InvoiceValue);
		                $('#CustomerCode').val(obj[0].Customer_idCustomer);
		                $('#CustomerName').val(obj[0].CustomerName);		                
		            }else{
		                alert("The id has already added or not in the preorder list");
		                clearTextBoxes();
		            }

		        },
		    });
		}else{
		    alert("Please enter the invoice id and hit enter");
		    clearTextBoxes();
		}  
   }

</script>
<script >

  function applyFunction(){

  	
  	if($('#idInvoice').val()){
	  	var vari = 0;
	  	//var credit =0;
	  	var invoice_value =parseFloat(document.getElementById("InvoiceValue").value) || 0;
	  	var cash = parseFloat(document.getElementById("CashAmount").value) || 0;
	  	var cheque = parseFloat(document.getElementById("ChequeAmount").value) || 0;
	  	var credit = parseFloat(document.getElementById("CreditAmount").value) || 0;

	  	if(cheque!=0){
	  		var ChequeNumber = document.getElementById("ChequeNumber").value;
			var ChequeBankName = document.getElementById("ChequeBankName").value; 
			var ChequeBankBranch = document.getElementById("ChequeBankBranch").value;
			var ChequeBKdate = document.getElementById("ChequeBKdate").value;

			if(ChequeNumber.length<1 || ChequeBankName.length<1  || ChequeBankBranch.length<1  ||  ChequeBKdate.length<1 ){
				alert("Please enter the cheque details to proceed");
				return false;
			}
	  	}
	  	
		if(cash==0 && cheque==0 && credit==0){
			credit=invoice_value;
		}else if(cash==0 && cheque!=0){
			credit=invoice_value-cheque;
		}else if(cheque==0 && cash!=0){
			credit=invoice_value-cash;
		}else if(cheque!=0 && cash!=0){
			credit=invoice_value-cash-cheque;
		}

		var vari= invoice_value-(cash+cheque+credit);

	  	if(vari<0){
	  		alert("Variance cannot be negative,Check again the inserted values");
	  		return false;
	  	}else{
	  		document.getElementById("variance").value = vari;
	  		document.getElementById("CreditAmount").value = credit;
	  		
	  	}	
	  	
	  }else{
	  	alert("You need to enter the invoice id and hit enter");
	  	clearTextBoxes();
	  }
  }
</script>

<script type="text/javascript">


	$(function(){
	    $('.preview-add-button').click(function(){	

	    
	    	if($('#idInvoice').val()){
	    		

	    		if(applyFunction()==false){	    			
	    			// clearTextBoxes();
	    			return;
	    		}else{
	    			var invoice_value =parseFloat(document.getElementById("InvoiceValue").value) || 0;
				  	var cash = parseFloat(document.getElementById("CashAmount").value) || 0;
				  	var cheque = parseFloat(document.getElementById("ChequeAmount").value) || 0;
				  	var credit = parseFloat(document.getElementById("CreditAmount").value) || 0;


				  	if(cash==0 && cheque==0 && credit==0){
						credit=invoice_value;
					}else if(cash==0 && cheque!=0){
						credit=invoice_value-cheque;
					}else if(cheque==0 && cash!=0){
						credit=invoice_value-cash;
					}else if(cheque!=0 && cash!=0){
						credit=invoice_value-cash-cheque;
					}
	    			
		    	var data = {
			        idInvoice: $('#idInvoice').val(),
			        InvoiceValue: $('#InvoiceValue').val(),
			        CustomerCode: $('#CustomerCode').val(),
			        CustomerName: $('#CustomerName').val(),
			        CashAmount: $('#CashAmount').val(),
			        ChequeAmount: $('#ChequeAmount').val(),
			        ChequeNumber: $('#ChequeNumber').val(),
			        ChequeBankName: $('#ChequeBankName').val(),
			        ChequeBKdate: $('#ChequeBKdate').val(),
			        ChequeBankBranch: $('#ChequeBankBranch').val(),
			        // CreditAmount: $('#CreditAmount').val(),
			        collectionID:$('#collectionID').val(),
			        CreditAmount: credit,
			        variance: $('#variance').val(),
			        discount: $('#discount').val(),
			        salesrtn: $('#salesrtn').val(),
			        mkt: $('#mkt').val(),
			        remarks: $('#remarks').val()
			    };
			    $.ajax({
			        url: "<?php echo base_url().'index.php/SalesController/updateInvoice'?>",
			        type: "post",
			        data: data,
			       
          			error: function(xhr, ajaxOptions, thrownError) { 
           				alert("You have added the invoice already!!!"); 
           				clearTextBoxes();
           			},
        
			        success : function(json){
			            var obj=jQuery.parseJSON(json);

			            if(obj){
			                alert('invoice updated successfully');

			                var rows = "";
				            var idInvoice = document.getElementById("idInvoice").value;
				            var CustomerCode = document.getElementById("CustomerCode").value;
				            var InvoiceValue = document.getElementById("InvoiceValue").value;
				            var CashAmount = document.getElementById("CashAmount").value;
				            var ChequeAmount = document.getElementById("ChequeAmount").value; 
				            var CreditAmount = document.getElementById("CreditAmount").value;

				            rows += "<tr><td>" + idInvoice + "</td><td>" + CustomerCode + "</td><td>" + InvoiceValue + "</td><td>" + CashAmount + "</td><td>" + ChequeAmount + "</td><td>" + CreditAmount + "</td></tr>";
				            $(rows).appendTo("#list tbody");				          

					   		clearTextBoxes();
		                               
			            }else{
			                alert("Failed,Check the internet connection again");
			                clearTextBoxes();
			            }

			        },

			    });
			   
			 }   
			}else{
				alert("Please enter a valid invoice number");
				clearTextBoxes();
			}

	    });  
});



	
</script>



<script >


    function clearTextBoxes(){
    	$('#idInvoice, #InvoiceValue,#CustomerCode,#CustomerName,#CashAmount,#ChequeAmount,#ChequeNumber,#ChequeBankName,#ChequeBKdate,#ChequeBankBranch,#CreditAmount,#variance,#discount,#salesrtn,#mkt,#remarks').val('');
    }
 </script>

<script >

$(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })
</script>
<script type="text/javascript">

	// 	function calc_total(){
// 	    var sum_cash= 0;
// 	    $('.input-CashAmount').each(function(){
// 	        sum_cash += parseFloat($(this).text());	        
// 	    });
// 	    $(".preview-cash").text(sum_cash);    
// 	}
// 	$(document).on('click', '.input-remove-row', function(){ 
// 	    var tr = $(this).closest('tr');
// 	    tr.fadeOut(200, function(){
// 	    	tr.remove();
// 		   	calc_total()
// 		});
// 	});



	// calc_total();
	//         var form_data = {};
	//         form_data["idInvoice"] = $('.invoice-form input[name="idInvoice"]').val();

	//         form_data["CustomerCode"] = $('.invoice-form input[name="CustomerCode"]').val();
	//         form_data["InvoiceValue"] = parseFloat($('.invoice-form input[name="InvoiceValue"]').val()).toFixed(4);
	//         form_data["CashAmount"] = parseFloat($('.invoice-form input[name="CashAmount"]').val()).toFixed(4);	         
	//         form_data["ChequeAmount"] = parseFloat$($('.invoice-form input[name="ChequeAmount"]').val()).toFixed(4);
	//         form_data["CreditAmount"] = parseFloat$($('.invoice-form input[name="CreditAmount"]').val()).toFixed(4);
	//         // form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';
	//         var row = $('<tr></tr>');
	//         $.each(form_data, function( type, value ) {
	//             $('<td class="input-'+type+'"></td>').html(value).appendTo(row);
	//         });
	//         $('.preview-table > tbody:last').append(row); 
	//         calc_total();



</script>