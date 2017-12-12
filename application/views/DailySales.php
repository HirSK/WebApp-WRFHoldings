
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active"></li>
        </ol>
    </section>

<!-- Main content -->
<section class="content" >
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12" style="padding-top: 20px">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <label class="box-title"><h3>CASH COLLECTION SUMMARY</h3></label>
                        <br>
                        <br>
                        
                    </div>
                    <br>
                    <br>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <form role="form" name="pForm" class="form-group" action="#">
                        <div class="box-body">

                        <div class="col-xs-6 col-lg-12 col-sm-12">                            

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label>Date :</label>
                                </div>

                            </div>
                            

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" id="coldate" class="form-control pull-right"   placeholder="mm/dd/yyyy" >
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label>COLLECTION OFFICER :</label>
                                </div>

                            </div>
                            

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="colofficer" name="amount">

                                </div>
                            </div>

                        </div>

                        <div class="col-xs-6 col-lg-12 col-sm-12">                            

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label>AREA WORKED :</label>
                                </div>

                            </div>
                            

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="colarea" name="amount" >
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label>VEHICLE NUMBER :</label>
                                </div>

                            </div>
                            

                            <div class="col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="colvehi" name="amount" >

                                </div>
                            </div>

                        </div>



                        <div class="box-body table-responsive">
                        <table id='list' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                           <!--  <tr>
                                
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr> -->
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td colspan="5">TOTAL SALES</td>
                                <td id="totalsal"></td>
                            </tr>
                            
                            <tr>
                                <td colspan="5">COLLECTED CREDIT BILLS(Note 1)</td>
                                <td id="repaycredit"></td>
                            </tr>
                            
                            <tr>
                                <td>CASH (SALES + CREDIT COLLECTED)</td>
                                <td colspan="5" id="totalcash"></td>    
                            </tr>
                            
                            <tr>
                                <td>CHEQUES (SALES + CREDIT COLLECTED)</td>
                                <td colspan="5" id="cheque"></td>
                            </tr>
                            <tr>
                                <td>PENDING CREDIT BILLS (Note 4)</td>
                                <td colspan="5" id="pendingcredit"></td>
                            </tr>
                            <tr>
                                <td>RTN NOTES</td>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td>TEMPORARY CASH COLLECTION</td>
                                <td colspan="5" id="temp"></td>
                            </tr>
                            <tr>
                                <td><b>TOTAL</b></td>
                                <td id="totleft"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="totright"></td>
                            </tr>

                        </tbody>
                        </table>
                        </div>

                        <br>
                        <label><h4>COLLECTED CREDIT BILLS (Note 1)</h4></label>



                        <div class="box-body table-responsive">
                        <table id='collectCreditList' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            <tr>
                                <th>INV DATE</th>
                                <th>INV. NO</th>
                                <th>CUSTOMER</th>
                                <th>AMOUNT</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        </table>
                        </div>

                        <br>
                        <label><h4>CHEQUES</h4></label>



                        <div class="box-body table-responsive">
                        <table id='collectChequeList' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            <tr>
                                
                                <th>INV. NO</th>
                                <th>CUSTOMER</th>
                                <th>AMOUNT</th>
                                <th>CHQ. NO.</th>
                                <th>BANK</th>
                                <th>BRANCH</th>
                                <th>BANKING DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        </table>
                        </div>


                        <br>
                        <label><h4>PENDING CREDIT BILLS (Note 4)</h4></label>



                        <div class="box-body table-responsive">
                        <table id='pendingCreditList' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            <tr>
                                
                                <th>INV. NO</th>
                                <th>CUSTOMER</th>
                                <th>AMOUNT</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        </table>
                        </div>


                        <br>
                        





                        </div>
                    </form>

            

        </div>

    </section>
    <!-- /.content -->




</div>
<!-- /.content-wrapper -->


<script type="text/javascript">


    var listvalues1 = localStorage.getItem('data1');
    var listvalues2 = localStorage.getItem('data2');
    
    var finalvalue1 = JSON.parse(listvalues1);
    var finalvalue2 = JSON.parse(listvalues2);

    document.getElementById('coldate').value = finalvalue1[0]['CollectionDate'];
     document.getElementById('colofficer').value = finalvalue1[0]['CollectionOfficerName'];
     document.getElementById('colarea').value = finalvalue1[0]['CollectionArea'];
     document.getElementById('colvehi').value = finalvalue1[0]['CollectionVehicle'];



     var totalSales = 0;
     var repayCredit = 0;

     var totalCash = 0;

     var cashonly =0;
     var cheque =0;

     var temp = 1500;

     var pendingCredit = 0;

     var totalleft = 0;
     var totalright = 0;

    for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) { 


        totalSales += parseInt(finalvalue1[i]["InvoiceValue"]);

    }

    document.getElementById('totalsal').innerHTML= totalSales;


    for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) {


        var diff=parseInt(finalvalue1[i]["total_credit"])-parseInt(finalvalue1[i]["credit_topay"]);



        pendingCredit += parseInt(finalvalue1[i]["credit_topay"]);




        if(diff !=0){

            repayCredit += diff;


        }

            

    }


    document.getElementById('repaycredit').innerHTML= repayCredit;


    for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) { 


        cashonly += parseInt(finalvalue1[i]["cash"]);

    }

    totalCash = repayCredit+cashonly;

    document.getElementById('totalcash').innerHTML= totalCash;


    for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) { 


        cheque += parseInt(finalvalue1[i]["cheque"]);

    }


    document.getElementById('cheque').innerHTML= cheque;

    document.getElementById('pendingcredit').innerHTML= pendingCredit;


    document.getElementById('temp').innerHTML= temp;



    totalleft = totalCash+pendingCredit + temp+cheque;

    totalright = totalSales + repayCredit;


     document.getElementById('totleft').innerHTML= totalleft;

      document.getElementById('totright').innerHTML= totalright;


      for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) {




        var rows = "";

        var listColCredit = 0;


        diff1 = 0;



        var diff1=parseInt(finalvalue1[i]["total_credit"])-parseInt(finalvalue1[i]["credit_topay"]);



        




        if(diff1 !=0 && diff1 != null){



             rows += "<tr><td>"+finalvalue1[i]["invoice_complete_date"]+"</td><td>"
                           +finalvalue1[i]["idInvoice"]+"</td><td>"
                           +finalvalue1[i]["customer_id"]+"</td><td>"
                           
                           +diff1+"</td></tr>";


          $( rows ).appendTo( "#collectCreditList tbody" );




        }


        



      }




      for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) {




        var rows = "";

        var listColCredit = 0;


        cqamount = finalvalue1[i]["ChequeAmount"];



        if(cqamount !=0 && cqamount != null){



             rows += "<tr><td>"+finalvalue1[i]["cheque_invoice_id"]+"</td><td>"
                           +finalvalue1[i]["Customer_idCustomer"]+"</td><td>"
                           +finalvalue1[i]["ChequeAmount"]+"</td><td>"
                           +finalvalue1[i]["ChequeBankName"]+"</td><td>"
                           +finalvalue1[i]["ChequeBankBranch"]+"</td><td>"
                           +finalvalue1[i]["ChequeBKdate"]+"</td></tr>";


          $( rows ).appendTo( "#collectChequeList tbody" );


      }


      }





      for (i = 0, len = finalvalue1.length, text = ""; i < len; i++) {




        var rows = "";

        var listColCredit = 0;


        var creditTopay = parseInt(finalvalue1[i]["credit_topay"]);



        




        if(creditTopay !=0 && creditTopay != null){



             rows += "<tr><td>"+finalvalue1[i]["invoice_credit_id"]+"</td><td>"
                           +finalvalue1[i]["Customer_idCustomer"]+"</td><td>"
                           +finalvalue1[i]["credit_topay"]+"</td></tr>";


          $( rows ).appendTo( "#pendingCreditList tbody" );




        }


        



      }


     
        
 
    
   



    // console_log(finalvalue);
</script>





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


