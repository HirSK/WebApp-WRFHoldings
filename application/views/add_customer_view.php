<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Customer Information
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Add Customer</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Register New Customer</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <form role="form" action="<?php echo base_url()?>index.php/CustomerController/addCustomer" method="POST">
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">

                           <!--  <div class="col-sm-4 col-xs-12">
                            	<div class="form-group">
                                    <label for="empId">Employee ID</label>
                                    <input type="text" class="form-control"  name="empId" placeholder="Employee ID" required>
                                </div>
                            </div> -->

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="inputCustomerCode" >Customer Code</label>

                                        <input type="text" class="form-control" name="inputCustomerCode" placeholder="Customer Code ">




                                    </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="inputCustomerName" >Customer Name</label>

                                        <input type="text" class="form-control" name="inputCustomerName" placeholder="Customer Name">

                                    </div>

                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputCustomerAddress" >Customer Address</label>

                                        <input type="text" class="form-control" name ="inputCustomerAddress" placeholder="Customer Address">
                            </div>

                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
    				                <label for="inputCustomerRegDate">Customer Reg Date</label>

    				                <div class="input-group date">
    				                  <div class="input-group-addon">
    				                    <i class="fa fa-calendar"></i>
    				                  </div>
    				                  <input type="text" class="form-control pull-right" id="datepicker" name="inputCustomerRegDate" required>
    				                </div>
    				                <!-- /.input group -->
    				            </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">

                             <div class="form-group">
                                    <label>Contact number</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" required="required" name="inputCustomerContact" data-inputmask='"mask": "(94) 99 9 999999"' data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>

    				            <!-- /.form group -->
                                
                            </div>

                            
                        </div>


                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div>

                        </div>
                    </form>


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

<script >
	$(function() {
		//Date picker
	    $('#datepicker').datepicker({
	      autoclose: true
	    })
	})

</script>


