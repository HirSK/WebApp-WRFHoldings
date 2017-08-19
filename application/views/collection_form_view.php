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

            <div class="col-xs-12 col-lg-12" style="padding-top: 10px">

                <!-- general form elements -->
                <div class="box box-primary" style="padding-top: 0px">
                    <div class="box-header with-border">
                        
                        <div class="box-tools pull-right" style="padding-top: 0px">
                    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                		</div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
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

                    	</div>

                    	<table id='emp_table' class="table table-striped table-bordered col-lg-12">
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
	                    			<th> Pay Value</a></th>
	                    			<th> Variance</a></th>	                    			
	                    			<th>&nbsp;</th>
	                    		</tr>
                    		</thead>
                    	</table>

                    </div>
                </div>


  </section>

    <!-- /.content -->

    </div>
<!-- /.content-wrapper -->



<?php include "includes/footer.php";?>

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
