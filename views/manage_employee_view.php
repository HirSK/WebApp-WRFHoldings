<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Manage Employee</li>
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
            		Manage Employees
            	</h3>
            		
            	</div>

            	<div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
            		<div class="col-xs-4 left-padding">
            			<a class="btn btn-block btn-success" href="<?php echo base_url()?>index.php/EmployeeController"> ADD</a>
            		</div>

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
                <div class="box box-primary" style="padding-top: 0px">
                    <div class="box-header with-border">
                        
                        <div class="box-tools pull-right" style="padding-top: 0px">
                    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                		</div>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body table-responsive">
                    	<table id='emp_table' class="table table-bordered col-lg-12">

                    
					<th class="col-lg-2">Employee ID</th>
                    <th class="col-lg-4">Employee Full Name</th>
                    <th class="col-lg-4">Name with Initials</th>
                    <th class="col-lg-2">NIC Number</th>
                    <th class="col-lg-2">Date of Birth</th>
                    <th class="col-lg-2">Contact Number</th>
                    <th class="col-lg-2">Address</th>
                    <th class="col-lg-2">Outlet ID</th>
                    <th class="col-lg-2">Position</th>
                    <th class="col-lg-2">Joined Date</th>
                    <th class="col-lg-2">Email</th>
                    <th class="col-lg-2"></th>
					<?php
                        foreach ($emp as $employee){
                            echo "<tr>";
                            echo "<td>";
                            echo $employee->idEmployee;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeFullName;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeNameWithInitials;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeNIC;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeBirthdate;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeContactNumber;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeAddress;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->Outlet_idOutlet;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeePosition;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeJoinedDate;
                            echo "</td>";
                            echo "<td>";
                            echo $employee->EmployeeEmail;
                            echo "</td>";

                            echo "</tr>";
                        }
                    ?>
					</table>

					 </div>
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
