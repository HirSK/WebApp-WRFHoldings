

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


            <div class="col-lg-4 col-sm- col-xs-12" no-padding style="padding-top:20px">
            		
            		

            		<div class="col-xs-4 left-padding">
            			<a class="btn btn-block btn-primary" href="#"> PRINT</a>
            		</div>

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
                    
                    <form role="form" action="<?php echo base_url()?>index.php/SalesController/addCollectionInfo" method="POST">
	                    <div class="box-body ">
	                    	<div class="row">

	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group">
	                    			<label class="control-label" for>Date</label>
	                    			<span style="color:red;">*</span>

	                    			<div class="input-group">
	                                            <div class="input-group-addon">
	                                                <i class="fa fa-calendar"></i>
	                                            </div>
	                                            <input type="text" class="form-control" name="collectionDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  required>
	                                </div>
	                    			
	                    		</div>



	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group">
	                    			<label class="control-label" for>Name of the Collection Officer</label>
	                    			<span style="color:red;">*</span>
	                    			<select class="form-control" name="collectionOfficer" required>
	                    				<option value>--Select Collection Officer--</option>
	                    				<?php
	                    					foreach ($collectionOfficerList as  $COfficer) {                   						

	        									echo '<option value="'.$COfficer->EmployeeNameWithInitials.'">'.$COfficer->EmployeeNameWithInitials.'</option>';
	                    					}
	                    				?>
	                    			</select>
	                    		</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group" >
		                    			<label class="control-label" for>Name of the vehicle driver</label>
		                    			<span style="color:red;">*</span>
		                    			<select class="form-control" name="collectionDriver" required>
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
		                    			<select class="form-control" name="vehicleNo" required>
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
		                    		<input type="text" name="collectionArea" placeholder="Enter the area covered" required>

		                    	</div> 

		                    	<div class="col-xs-2">
                                	<button type="submit" class="btn btn-block btn-success" name="register">OK</button>
                            	</div>
		                    </div> 
		                </form>  

		                <!-- panel preview -->
				        <div class="col-sm-6">
				            <h5>Add collection:</h5>
				            <div class="panel panel-default">
				                <div class="panel-body form-horizontal payment-form">

				                	<div class="col-xs-12 col-lg-12 col-sm-12">
				                		<div class="col-sm-4 col-xs-12">
						                    <div class="form-group">
						                        <label for="id" class="col-sm-4 control-label">Invoice</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" id="id" name="idInvoice">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-sm-8 col-xs-12">
						                    <div class="form-group">
						                        <label for="value" class="col-sm-5 control-label">NetValue</label>
						                        <div class="col-sm-7">
						                            <input type="text" class="form-control" id="value" name="InvoiceValue">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="col-xs-12 col-lg-12 col-sm-12">
				                		<div class="col-sm-4 col-xs-12">
						                    <div class="form-group">
						                        <label for="ccode" class="col-sm-4 control-label">Cus:ID</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" id="ccode" name="CustomerCode">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-sm-8 col-xs-12">
						                    <div class="form-group">
						                        <label for="cname" class="col-sm-4 control-label">Customer Name</label>
						                        <div class="col-sm-8">
						                            <input type="text" class="form-control" id="cname" name="CustomerName">
						                        </div>
						                    </div>
						                </div>
						            </div>
				                    <div class="form-group">
				                        <label for="cash" class="col-sm-3 control-label">Cash Amount</label>
				                        <div class="col-sm-8">
				                            <input type="text" class="form-control" id="cash" name="CashAmount">
				                        </div>
				                    </div> 
				                    <div class="form-group">
				                        <label for="cheque" class="col-sm-3 control-label">Cheque Amount</label>
				                        <div class="col-sm-8">
				                            <input type="text" class="form-control" id="cheque" name="ChequeAmount">
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label for="credit" class="col-sm-3 control-label">Credit Amount</label>
				                        <div class="col-sm-8">
				                            <input type="text" class="form-control" id="credit" name="CreditAmount">
				                        </div>
				                    </div> 

					               <div class="col-xs-12 col-lg-12 col-sm-12">
					               	  <div class="col-sm-6 col-xs-12">
					                    <div class="form-group">
					                        <label for="variance" class="col-sm-5 control-label">Variance</label>
					                        <div class="col-sm-7">
					                            <input type="text" class="form-control" id="variance" name="Variance">
					                        </div>
					                    </div> 
					                   </div>

					                  <div class="col-sm-6 col-xs-12">
					                    <div class="form-group">
					                        <label for="discount" class="col-sm-5 control-label">Discount</label>
					                        <div class="col-sm-7">
					                            <input type="text" class="form-control" id="discount" name="Discount">
					                        </div>
					                    </div>
					                   </div>
					               </div> 

					               <div class="col-xs-12 col-lg-12 col-sm-12">
					               		<div class="col-sm-6 col-xs-12">
				                    		<div class="form-group">
						                        <label for="salesrtn" class="col-sm-5 control-label">Sales return</label>
						                        <div class="col-sm-7">
						                            <input type="text" class="form-control" id="salesrtn" name="SalesRtn">
					                        	</div>
				                    		</div> 
				                		</div>
				                		<div class="col-sm-6 col-xs-12">
				                    		<div class="form-group">
				                        		<label for="mkt" class="col-sm-5 control-label">MKT return</label>
				                        		<div class="col-sm-7">
				                            		<input type="text" class="form-control" id="mkt" name="mktrtn">
				                        		</div>
				                    		</div> 
				                		</div>
				                	</div>

				                    <div class="form-group">
				                        <label for="remarks" class="col-sm-3 control-label">Remarks</label>
				                        <div class="col-sm-9">
				                            <input type="text" class="form-control" id="remarks" name="Remarks">
				                        </div>
				                    </div> 
				                   
		                      
				                    <div class="form-group">
				                        <div class="col-sm-12 text-right">
				                            <button type="button" class="btn btn-default preview-add-button">
				                                <span class="glyphicon glyphicon-plus"></span> Add
				                            </button>
				                        </div>
				                    </div>
				                </div>
				            </div>            
				        </div> <!-- / panel preview --> 

		            
                       
                    
		            </div>
		              


		              <!--      
	                            			
                  
                    	<table id='emp_table' class="table table-striped table-bordered table-hover col-lg-12" id="tab-logic">
                    		<thead >                    		
	                    		<tr>
	                    			<th>#</th>
	                    			<th> Invoice Number</a></th>
	                    			<th> Customer code</a></th>
	                    			<th> Customer Name</a></th>
	                    			<th> Invoice Value</a></th>
	                    			<th> Net Value</a></th>
	                    			<th> Cash</a></th>
	                    			<th> Cheque</a></th>
	                    			<th> Credit</a></th>	                    			
	                    			<th> Variance</a></th>
	                    			<th> Sales RTN</a></th>
	                    			<th> Discount</a></th>
	                    			<th> MKT RTN</a></th>
	                    			<th> Remarks</a></th>	                    			
	                    			<th>&nbsp;</th>
	                    		</tr>
                    		</thead>
                    		<tbody>

                    			<?php
		                        $count = 1;
		                        
		                            // echo "<tr>";
		                            // echo "<td>" . $count . "</td>";?>
		                            <td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
                                	<td>
                                    <input type="text" class="form-control" name="">
                                	</td>
		                            
		                            
		                            <!-- $count = $count+1; -->
		                        
                    		<!-- 	
							</tbody>
                    </table>
                   </div>
                  </div>
                <!--  <a id="add_row" class="btn  btn-primary pull-left" style="padding-top: 5px">Add Row</a><a id='delete_row' class=" btn  btn-primary pull-right" style="padding-top: 5px">Delete Row</a>
 -->
                 <!-- <button type="button" class="btn  btn-primary pull-left" style="padding-top: 5px" data-toggle="modal" data-target="#addrow">ADD</button>

                  <!-- Modal -->
				  <!-- <div class="modal fade" id="addrow" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <!-- <div class="modal-content">


				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Enter collection details</h4>
				        </div> -->  

 
			<!-- 	        
				         <form action="<?php echo base_url()?>index.php/SalesController/addInvoice" method="POST">

				          <div class="modal-body">

				            <div class="form-group">
				              <label for="invoiceNo" class="col-sm-3 control-label">Invoice Number</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="invoiceNo" placeholder="Enter invoice number" name="idInvoice" required>
				              </div>
				            </div>
				            
				            <div class="form-group">
				              <label for="cash" class="col-sm-3 control-label">Cash amount</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="cash" placeholder="Enter cash amount" name="CashAmount">
				              </div>
				            </div>

				            <div class="form-group">
				              <label for="cheque" class="col-sm-3 control-label">Cheque amount</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="cheque" placeholder="Enter cheque amount" name="ChequeAmount">
				              </div>
				            </div>

				           

				            <div class="form-group">
				              <label for="variance" class="col-sm-3 control-label">Variance</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="variance"  name="Variance">
				              </div>
				            </div>

				            <div class="form-group">
				              <label for="salesrtn" class="col-sm-3 control-label">Sales return</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="salesrtn" placeholder="Enter sales return" name="SalesRtn">
				              </div>
				            </div>

				            <div class="form-group">
				              <label for="discount" class="col-sm-3 control-label">Discount</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="discount" placeholder="Enter discount" name="Discount">
				              </div>
				            </div>



				            <div class="form-group">
				              <label for="MKT" class="col-sm-3 control-label">MKT return</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="mktrtn" placeholder="Enter MKY return" name="MKTrtn">
				              </div>
				            </div>

				            <div class="form-group">
				              <label for="credit" class="col-sm-3 control-label">Credit amount</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="credit" placeholder="Enter credit amount" name="CreditAmount">
				              </div>
				            </div>

				            <div class="form-group">
				              <label for="remarks" class="col-sm-3 control-label">Remarks</label>
				              <div class="col-sm-7">
				                <input type="text" class="form-control" id="remarks" placeholder="Enter remarks" name="Remarks">
				              </div>
				            </div>

				            <div class="modal-footer" >
				          		<button type="submit" class="btn btn-block btn-success" name="addInvoice">OK</button>
				        	</div>

				        	
				          </div>				           			            

				       </form>			        
				        

				    </div>

				       


				 </div>
				      
			</div> -->
				  

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