
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
<section class="content" style="padding-left: 200px; padding-right: 200px">
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

                    
                   <!--  <form role="form" action="<?php echo base_url()?>index.php/PettyCashController/managePettyCashExpences" method="POST"> -->
                        <div class="box-body">

                        <div class="col-xs-6 col-lg-12 col-sm-12">                            

                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Date</label>

                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker1" name="dateFrom" type="calendar" placeholder="mm/dd/yyyy" required>
                                      
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            

                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Outlet ID</label>
                                      <select class="form-control" id="outletID" name="outletID" required>
                                         <?php foreach ($outletid as $oid) {
                                   
                                         ?>
                                        <option><?php echo $oid->idOutlet ?></option>

                                     <?php

                                     } ?>
                                       
                                
                                     </select>
                                </div>
                            </div>

                        </div>


                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Petty Cash Type</label>

                                   
                                      <!-- <input type="text" class="form-control pull-right" id="datepicker" name="dateFrom" type="calendar" required> -->
                                      <select class="form-control" id="pettyCashTypeID" name="pettyCashTypeID" required>
                                        <?php foreach ($pcash as $type) {
                                            # code...
                                         ?>
                                        <option><?php echo $type->Petty_CashType ?></option>

                                        <?php

                                         } ?>
                                       
                                
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Amount</label>

                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                                    <!-- /.input group -->
                                </div>
                            </div>

                            

                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <label for="PettyCashDescription">Description</label>
                                    <textarea type="textarea" class="form-control" id="description" name="description" placeholder="Enter The Description"></textarea>
                                </div>
                             </div>

                             <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="col-xs-4 left-padding">
                                        <br><br>
                                        <button type="submit" class="btn btn-block btn-success preview-add-button" id="ADD" name="ADD" value="addamount">ADD</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="box-body table-responsive">
                        <table id='list' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                            <tr>
                                
                                <th> Type</th>
                                <th> Description</th>
                                <th> Amount</th>
                               <!--  <th>&nbsp;</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            
                            

                        </tbody>
                        </table>
                        </div>


                        </div>

            <div class="col-xs-12 col-xs-12" style="padding-top: 20px; padding-left: 100px; padding-right: 100px">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- <div class="box-header with-border" style="height: 50px">
                        <h3 class="box-title">Add new petty cash type</h3>
                    </div> -->
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                   <!--  <form role="form" action="<?php echo base_url()?>index.php/PettyCashController/addTotalAmount" method="POST"> -->
                       
                        <div class="box-body">

                            <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-3 col-xs-12">
                                <div class="form-group">
                                    <label><h3>Total Amount : </h3></label>

                                    
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12" style="height: 100px">
                                <div class="form-group">
                                    
                                      <h3><b><input type="text" class="form-control pull-left" id="Total" name="Total" readonly value="">
                                        
                                      </h3>
                                    
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group">
                                    
                                <div class="col-sm-8">
                                    <h3><button type="submit" class="btn btn-block btn-success preview-add-button" id="totalamountsubmit" name="totalamountsubmit" value="submittotalamount">Submit</button></h3>
                                </div>

                                    
                                </div>
                            </div>

                        </div>
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
        $('#datepicker1').datepicker({
          autoclose: true
        })
    })

</script>

<script type="text/javascript">
    function clearTextBoxes(){
        $('#datepicker1, #outletID, #pettyCashTypeID, #amount, #description').val('');
    }





    $(function(){
        $('.preview-add-button').click(function(){

            if($('#amount').val()){

                
                var datepicker1 = document.getElementById("datepicker1").value;
                var outletID = document.getElementById("outletID").value;          
                var pettyCashTypeID = document.getElementById("pettyCashTypeID").value;
                var amount = document.getElementById("amount").value;
                var description = document.getElementById("description");
                
                

                var data = {

                    pettyCashTypeID:pettyCashTypeID,
                    description:description,
                    amount:amount

                    
                };

                // var rows = "";
                // rows += "<tr><td>" + pettyCashTypeID + "</td><td>" + amount + "</td></tr>";
                //             $(rows).appendTo("#list tbody"); 


                $.ajax({
                    url: "<?php echo base_url().'index.php/PettyCashController/managePettyCashExpences'?>",
                    type: "post",
                    data: data,
                   
                    // error: function(xhr, ajaxOptions, thrownError) { 
                    //     alert("You have added this petty cash type already!!!"); 
                    //     clearTextBoxes();
                    // },
        
                    success : function(json){
                        var obj=jQuery.parseJSON(json);

                        if(obj){
                            alert('petty cash amount added successfully');

                            var rows = "";
                            var pettyCashTypeID = document.getElementById("pettyCashTypeID").value;
                            var description = document.getElementById("description").value;
                            var amount = document.getElementById("amount").value;
                            

                            rows += "<tr><td>" + pettyCashTypeID + "</td><td>" + description + "</td><td>" + amount + "</td></tr>";
                            $(rows).appendTo("#list tbody");                          

                            clearTextBoxes();
                                       
                        }else{
                            alert("Failed,Check the internet connection again");
                            clearTextBoxes();
                        }

                    },

                });
               
             // }   
            // }else{
            //     alert("Please enter a valid invoice number");
            //     clearTextBoxes();
            // }

        }
});

});







</script>