
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
                    
                    <!-- <form role="form"  id="pcashexpenses"  method="POST"> -->
                        
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>From</label>

                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="dateFrom" name="dateFrom"  type="calendar"   required>
                                      
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>To</label>

                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input  type="text" class="form-control pull-right" id="dateTo" name="dateTo" data-inputmask="'alias': 'yyyy-mm-d'" data-mask   required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>




                            <div class="col-sm-4 col-xs-12">
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


                             <div class="box-body">

                            <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-12">
                                <div class="form-group">
                                    <label><h3>Total Amount : </h3></label>

                                    
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12" style="height: 100px">
                                <div class="form-group">
                                    
                                      <h3><b><input type="text" value="<?php echo 0; ?>" class="form-control pull-left" name="Total" readonly id="total">
                                        
                                      </h3>
                                    
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group">
                                    
                                <div class="col-md-10">
                                    <h3><button type="submit" class="form-control btn-success" name="totalamountsubmit" onclick="faRow()" >Submit</button></h3>
                                </div>

                                    
                                </div>
                            </div>

                        </div>
                    </div>

                        </div>


                   

                        <div class="box-body table-responsive">
                        <table  id="POITable"class="table table-striped table-bordered col-lg-12">

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
                                <td>1</td>
                                <td>
                                <!-- <label for="selectType">Select Type</label> -->

                               
                                <select id="pettyCashTypeID" name="pettyCashTypeID" >
                                 <?php foreach ($pcash as $type) {
                                    # code...
                                ?>
                                        <option><?php echo $type->Petty_CashType ?></option>

                                <?php

                                } ?>
                                       
                                
                                </select>

                                
                                </td>
                                <td><input type="text"  id="amount" name="amount" placeholder="Amount"></td>
                                <td>
                                    <div class="col-md-10 left-padding">
                                        <button  type="submit"  id="addmorePOIbutton"  onclick="insRow(this)" /> ADD </button>
                                    </div>
                                </td>
                            </tr>

                          

                        </tbody>
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

<script >
    $(function() {
        //Date picker
        $('#dateFrom').datepicker({
          autoclose: true
        })
    })
    $(function() {
        //Date picker
        $('#dateTo').datepicker({
          autoclose: true
        })
    })

</script>







<script type="text/javascript">


    function deleteRow(row) {
  var i = row.parentNode.parentNode.rowIndex;
  document.getElementById('POITable').deleteRow(i);
}


function insRow(row) {
  
  var i = row.parentNode.parentNode.parentNode.rowIndex;

  console.log('hi');
  var x = document.getElementById('POITable');
  var new_row = x.rows[1].cloneNode(true);
  var len = x.rows.length;
  new_row.cells[0].innerHTML = len;

  var inp1 = new_row.cells[1].getElementsByTagName('select')[0];
  inp1.id += len;
  inp1.value = '';
  var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
  inp2.id += len;
  inp2.value = '';
  x.appendChild(new_row);




    var dateFrom = $("#dateFrom").val();
            var dateTo= $("#dateTo").val();
            var outletID= $("#outletID").val();
            // var pettyCashTypeID= $("#pettyCashTypeID").val();
            var pettyCashTypeID = row.parentNode.parentNode.parentNode.children[1].children[0].value;
            // var amount= $("#amount").val();
            var amount=  row.parentNode.parentNode.parentNode.children[2].children[0].value;


            console.log(dateFrom);
            console.log(dateTo);
            console.log(outletID);
            console.log(pettyCashTypeID);
            $.ajax({
                type: "POST",
                url: "http://localhost/WebApp-WRFHoldings/index.php/PettyCashController/addNew",
                data: {"dateFrom":dateFrom,"dateTo":dateTo,"outletID":outletID,"pettyCashTypeID":pettyCashTypeID,"amount":amount},
                success:function(data)
                {

                  var total = 0;

                  

                  var returnedData = JSON.parse(data);
                  var tempTotal = document.getElementById('total').value;

                  


                  console.log(parseInt(tempTotal));

                  var newTotal = parseInt(returnedData.data.pcashex) + parseInt(tempTotal);

                  document.getElementById('total').value = parseInt(newTotal);

                     

                },
                error:function()
                {
                    alert('Success');
                }
            });



}
    
</script>

<script type="text/javascript">


    function faRow() {


            var dateFrom = $("#dateFrom").val();
            var dateTo= $("#dateTo").val();
            var outletID= $("#outletID").val();
            var total = $("#total").val();
           


            
            $.ajax({
                type: "POST",
                url: "http://localhost/WebApp-WRFHoldings/index.php/PettyCashController/managePettyCashExpences",
                data: {"dateFrom":dateFrom,"dateTo":dateTo,"outletID":outletID,"tot":total},
                success:function(data)
                {

                 
                        window.location.reload();





                     

                },
                error:function()
                {
                    alert('Success Message Sent !!!');
                }
            });






    }
    



</script>