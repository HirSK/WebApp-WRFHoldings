<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?> 


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


            <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
            		
            		<div class="col-xs-4 left-padding">
            			<a class="btn btn-block btn-warning" href="<?php echo base_url()?>index.php/EmployeeController"> PDF</a>
            		</div>

            		<div class="col-xs-4 left-padding">
            			<a class="btn btn-block btn-primary" href="<?php echo base_url()?>index.php/EmployeeController"> PRINT</a>
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
                    <div class="box-body ">
                    	<div class="row">
                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group">
                    			<label class="control-label" for>Name of the Collection Officer</label>
                    			<span style="color:red;">*</span>
                    			<select class="form-control" name="date required">
                    				<option value>--Select Collection Officer--</option>
                    				<?php
                    					foreach ($collectionOfficerList as  $COfficer) {                   						

        									echo '<option value="'.$COfficer->EmployeeNameWithInitials.'">'.$COfficer->EmployeeNameWithInitials.'</option>';
                    					}
                    				?>
                    			</select>
                    		</div>
                    		<div class="col-xs-12 col-sm-4 col-lg-3 form-group" >
	                    			<label class="control-label" for>Name of the vehicle driver</label>
	                    			<span style="color:red;">*</span>
	                    			<select class="form-control" name="date required">
	                    				<option value>--Select Driver--</option>
	                    				<?php
	                    					foreach ($driverList as  $driver) {                   						

	        									echo '<option value="'.$driver->EmployeeNameWithInitials.'">'.$driver->EmployeeNameWithInitials.'</option>';
	                    					}
	                    				?>
	                    			</select>
	                    	</div>
	                    	
	                    	<div class="col-xs-12 col-sm-4 col-lg-3 form-group" style="padding-top: 20px">
	                    		<label class="control-label" for>Area</label>
	                    		<span style="color:red;">*</span>
	                    		<input type="text" name="area" placeholder="Enter the area covered">

	                    	</div>                    			

                    	
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
								<tr id='addr0'>
								<td>
								1
								</td>
								<td>
								<input type="text" name='invoiceNo0'   class="form-control"/>
								</td>
								<td>
								<input type="text" name='code0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='cusName0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='invoiceValue0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='netValue0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='cash0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='cheque0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='credit0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='variance0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='salesrtn0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='discount0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='mktrtn0'  class="form-control"/>
								</td>
								<td>
								<input type="text" name='remarks0'  class="form-control"/>
								</td>

								</tr>
		                    	<tr id='addr1'></tr>
							</tbody>
                    </table>
                   </div>
                  </div>
                 <a id="add_row" class="btn  btn-primary pull-left" style="padding-top: 5px">Add Row</a><a id='delete_row' class=" btn  btn-primary pull-right" style="padding-top: 5px">Delete Row</a>

  </section>

    <!-- /.content -->

    </div>
<!-- /.content-wrapper -->



<?php include "includes/footer.php";?>

<!-- REQUIRED JS SCRIPTS -->
<script type="text/javascript">
	$(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='invoiceNo"+i+"' type='text'  class='form-control input-md'  /> </td><td><input  name='code"+i+"' type='text'   class='form-control input-md'></td><td><input  name='cusName"+i+"' type='text'   class='form-control input-md'></td><td>"+ (i+1) +"</td><td><input name='invoiceValue"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='netValue"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='cash"+i+"' type='text' class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='cheque"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='credit"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='variance"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='salesrtn"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='discount"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='mktrtn"+i+"' type='text'  class='form-control input-md'  /> </td><td>"+ (i+1) +"</td><td><input name='remarks"+i+"' type='text'  class='form-control input-md'  /> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>


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
