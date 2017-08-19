<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>

 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customer Information
                <small>#Outlet name here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>       
                <li class="active">Customers</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Customer Registration</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo base_url()?>index.php/CustomerController/addCustomer" method="POST">
                            <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputCustomerName" >Customer Name</label>

                                        <input type="text" class="form-control" name="inputCustomerName" placeholder="CustomerName">

                                    </div>

                                   

                                     <div class="form-group">
                                        <label for="inputCustomerAddress" >Customer Address</label>

                                        <input type="text" class="form-control" name ="inputCustomerAddress" placeholder="CustomerCode">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputCustomerContact">Contact number</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" name="inputCustomerContact" data-inputmask='"mask": "(94) 99 9 999999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCustomerRegDate">Customer Register Date</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" name="inputCustomerRegDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" style="color:white;background-color:deepskyblue;" class="btn btn-info margin"><span>Register</span></button>
                                        <button type="submit" style="color:white;background-color:grey;" class="btn btn-info margin">Update</button>
                                        <button type="submit" style="color:white;background-color:darkgrey;" class="btn btn-info margin">Delete</button>
                                        <button type="submit" class="btn btn-default margin">Clear</button>

                                    </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-xs-12  pull-right">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Current Customers</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Reg Date</th>
                                    </tr>

                                            <?php  
                                             foreach ($records as $row)  
                                             {  
                                                ?><tr>  
                                                <td><?php echo $row->CustomerName;?></td>  
                                                <td><?php echo $row->CustomerAddress;?></td> 
                                                <td><?php echo $row->CustomerContact;?></td>  
                                                <td><?php echo $row->CustomerRegDate;?></td>  
                                                </tr>  
                                             <?php }  
                                             ?>  
                                    </thead>
                                </table>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-default pull-right">Clear</button>
                                    <button type="submit" class="btn btn-info pull-left">View All Customers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>


</section>


    </div>





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
