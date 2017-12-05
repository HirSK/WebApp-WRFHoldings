
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Petty Cash Expenses
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Add Petty Cash Expenses</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12" style="padding-top: 20px">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Petty Cash Expenses</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <form role="form" action="<?php echo base_url()?>index.php/PettyCashController/managePettyCashExpences" method="POST">
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>From</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker" name="dateFrom" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>To</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker" name="dateTo" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <!-- <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Outlet ID</label>
                                      <input type="text" class="form-control pull-right" name="outletID" required>
                                </div>
                            </div> -->

                        </div>

                        <div class="box-body table-responsive">
                        <table id='emp_table' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                            <tr>
                                <th>#</th>
                                <th> Type</a></th>
                                <th> Amount</a></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <th>
                                <!-- <label for="selectType">Select Type</label> -->

                               
                                <select class="form-control" name="pettyCashTypeID" required>
                                 <?php foreach ($pcash as $type) {
                                    # code...
                                ?>
                                        <option><?php echo $type->Petty_CashType ?></option>

                                <?php

                                } ?>
                                       
                                
                                </select>

                                
                                </th>
                                <th><input type="text" class="form-control"  name="amount" placeholder="Amount"></th>
                                <th>
                                    <div class="col-xs-4 left-padding">
                                        <button type="submit" class="btn btn-block btn-success" name="ADD">ADD</button>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                        </table>
                        </div>

                            <!-- <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="totalAmount">Total Amount</label>
                                    <input type="text" class="form-control"  name="totalAmount" placeholder="Total amount" required>
                                </div>

                                <div class="col-xs-4">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div>
                            </div> -->

                            

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