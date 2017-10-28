

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Manage Customers</li>
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
                    Manage Customers
                </h3>
                    
                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
                    <div class="col-xs-4 left-padding">
                        <a class="btn btn-block btn-success" href="<?php echo base_url()?>index.php/CustomerController"> ADD</a>
                    </div>

                   

                    <div class="col-xs-4 left-padding">
                        <a class="btn btn-block btn-primary" href="#"> PRINT</a>
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
                        <table id='customer_table' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                            <tr>
                                <th>#</th>
                                <th><a href="#" data-sort="CustomerCode">Customer Code</a></th>
                                <th><a href="#" data-sort="CustomerName"> Customer Name</a></th>
                                <th><a href="#" data-sort="CustomerAddress"> Customer Address</a></th>
                                <th><a href="#" data-sort="CustomerContact">Customer Contact</a></th>
                                <th><a href="#" data-sort="CustomerRegDate">Customer Reg Date</a></th>
                                
                                <th>&nbsp;</th>
                            </tr>

                            <!-- <tr id="w1-filters" class="filters">
                                <td>&nbsp;</td>
                                <td>
                                    <input type="text" class="form-control" name="EmpSearch[CustomerCode]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="EmpSearch[CustomerName]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="EmpSearch[CustomerAddress]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="EmpSearch[CustomerContact]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="EmpSearch[CustomerRegDate]">
                                </td>
                                
                                <td>&nbsp;</td>
                            </tr>
 -->


                        </thead>

                    
                    
                    <?php
                        $count = 1;
                        foreach ($customerRecord as $row){
                            echo "<tr>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>";
                            echo $row->CustomerCode;
                            echo "</td>";
                            echo "<td>";
                            echo $row->CustomerName;
                            echo "</td>";
                            echo "<td>";
                            echo $row->CustomerAddress;
                            echo "</td>";
                            echo "<td>";
                            echo $row->CustomerContact;
                            echo "</td>";
                            echo "<td>";
                            echo $row->CustomerRegDate;
                            echo "</td>";
                           
                            echo "<td>";?>
                            <a href="#" title="Delete" data-confirm="Are you sure you want to delete this record?" data-method="post">
                            <span class="glyphicon glyphicon-remove"></span>
                            <?php echo "</td>";
                            echo "</tr>";

                            $count = $count+1;
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
