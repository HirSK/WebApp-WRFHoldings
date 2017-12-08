
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Daily Sales summary</li>
        </ol>
    </section> 

    <!-- Main content -->
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12" style="padding-top: 20px">
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    
                <h3 class="box-title"><b>
                    <i class="fa fa-th-list"></i>
                    Daily Sales of <label id="coldate">text</label>
                </b> </h3>
                    
                </div>

            
            </div>
            

            <div class="col-xs-12 col-lg-12" style="padding-top: 10px">

                <!-- general form elements -->
                <div class="box box-primary" style="padding-top: 0px">
                    <div class="box-header with-border">
                        
                       
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body table-responsive">
                         <table id="itemList" class="table table-striped table-bordered col-lg-12">
                            <thead>
                                <tr>
                                    <td>Invoice ID</td>
                                    <td>Invoice Value</td>
                                    <td>Customer ID</td>
                                    <td>Cash</td>
                                    <td>Cheque</td>
                                    <td>Credit</td>
                                    <td>Sales Return</td>
                                    <td>Variance</td>
                                     <td>Discount</td>
                                    <td>MKTrtn</td>
                                    <td>Remarks</td>
                                    <td>Collection ID</td>
                                    <td>Invoice Order Date</td>
                                    <td>Invoice Complete Date</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                     </div>
            </div>

        </div>

    </section>

    <!-- /.content -->

    </div>










<script type="text/javascript">


    var listvalues1 = localStorage.getItem('data1');
    var listvalues2 = localStorage.getItem('data2');
    var finalvalue1 = JSON.parse(listvalues1);
    var finalvalue2 = JSON.parse(listvalues2);

    document.getElementById('coldate').innerHTML = finalvalue2;

    for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) { 


        var rows = "";


         rows += "<tr><td>"+finalvalue1[i]["idInvoice"]+"</td><td>"
                           +finalvalue1[i]["InvoiceValue"]+"</td><td>"
                           +finalvalue1[i]["Customer_idCustomer"]+"</td><td>"
                           +finalvalue1[i]["cash"]+"</td><td>"
                           +finalvalue1[i]["cheque"]+"</td><td>"
                           +finalvalue1[i]["credit"]+"</td><td>"
                           +finalvalue1[i]["SalesRtn"]+"</td><td>"
                           +finalvalue1[i]["Variance"]+"</td><td>"
                           +finalvalue1[i]["Discount"]+"</td><td>"
                           +finalvalue1[i]["MKTrtn"]+"</td><td>"
                           +finalvalue1[i]["Remarks"]+"</td><td>"
                           +finalvalue1[i]["Collection_idCollection"]+"</td><td>"
                           +finalvalue1[i]["invoice_order_date"]+"</td><td>"
                           +finalvalue1[i]["invoice_complete_date"]+"</td></tr>";


          $( rows ).appendTo( "#itemList tbody" );


    }




     
        
 

   



    // console_log(finalvalue);
</script>

<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->