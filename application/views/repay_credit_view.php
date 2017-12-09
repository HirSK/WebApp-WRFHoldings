

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Repay Credits
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Repay Credits</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-10">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <!-- <form role="form" action="<?php echo base_url()?>index.php/SalesController/repayCredits" method="POST"> -->
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">


                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="inputCustomerCode" >Invoice Number</label>

                                        <input type="text" class="form-control" name="invoiceID" id="invoiceID" placeholder="Enter invoice number " onkeypress="Javascript: if (event.keyCode==13) getDetails();" required>


                                    </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="customerID" >Customer ID</label>

                                        <input type="text" class="form-control" name="customerID" id="customerID"  required readonly="">

                                    </div>

                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <label for="invoiceDate" >Invoice created Date</label>

                                        <input type="text" class="form-control" name ="invoiceDate" id="invoiceDate" readonly="">
                            </div>
                        </div>
                        

                        <div class="col-xs-12 col-lg-12 col-sm-12">

                           
                            <div class="col-sm-4 col-xs-12">
                                <label for="credit" >Credit To Pay</label>

                                        <input type="text" class="form-control" name ="creditToPay" id="creditToPay" readonly="">
                            </div>  

                            <div class="col-sm-4 col-xs-12">
                                <label for="creditPay" >Credit Repay</label>

                                <input type="text" class="form-control" name ="creditPay" id="creditPay">
                            </div>



                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="credit_repay_date">Credit Repay Date</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker" name="credit_repay_date" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            
                            
                        </div>


                            <div class="col-xs-1">
                        </div>
                                <button type="submit" class="btn btn-primary preview-submit-button" name="register">Submit</button>
                            </div>

                    <!-- </form> -->


                </div>
            </div>

        </div>

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


    function getDetails()
{
     if($('#invoiceID').val()){

            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/SalesController/getCreditDetails'?>",
                cache: false,
                data : {id :  $('#invoiceID').val()},
                success : function(json){
                    var obj=jQuery.parseJSON(json);

                    if(obj[0]){
                        $('#customerID').val(obj[0].customer_id);
                        $('#invoiceDate').val(obj[0].credit_start_date);                         
                        $('#creditToPay').val(obj[0].credit_topay);                        
                    }else{
                        alert("You have no credits to repay");
                        // clearTextBoxes();
                    }

                },
            });
        }else{
            alert("Please enter the invoice id and hit enter");
            // clearTextBoxes();
        }  
   }

   function clearTextBoxes(){
        $('#invoiceID, #datepicker,#creditPay,#customerID,#invoiceDate,#creditToPay').val('');
    }


   $(function(){
        $('.preview-submit-button').click(function(){  

        
            if($('#invoiceID').val() && $('#datepicker').val() && $('#creditPay').val()){               

               
                    var credit_pay =parseFloat(document.getElementById("creditPay").value) || 0;
                    var credit_topay = parseFloat(document.getElementById("creditToPay").value) || 0;
                    
                  var completed =0;

                  if(credit_pay>credit_topay){
                    alert("Check the credit amount again");
                    return;
                  }else if(credit_topay==credit_pay){
                    credit_topay = 0;
                    var completed =1;
                  }else if(credit_topay>credit_pay){
                    credit_topay = credit_topay-credit_pay;
                  }

                    
                var data = {
                    invoiceID: $('#invoiceID').val(),
                    credit_lasttaken_date: $('#datepicker').val(),
                    credit_topay:credit_topay ,
                    completed:completed
                   
                };
                $.ajax({
                    url: "<?php echo base_url().'index.php/SalesController/repayCredits'?>",
                    type: "post",
                    data: data,
                                    
        
                    success : function(json){
                        // alert(json.data.res.length);
                        // var obj = json;
                         
                        if(json){
                            
                            alert('Credit details updated successfully');                                               

                            clearTextBoxes();
                                       
                        }else{
                            alert("Failed,Check the internet connection again");
                            clearTextBoxes();
                        }

                    },

                    

                });
               
                
            }else{
                alert("Please fill the values");
                // clearTextBoxes();
            }

        });  
});


</script>


