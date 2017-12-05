



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Collection Reports
                
            </h1>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li> 
            
                <li class="active">Collection Report</li>
            </ol>
        </section>

        <!-- Main content -->

        <div class="container">
    <div class="row">
        <section class="content">
        <div class="wizard" style="height: relative;">
            
            <form role="form" action="<?php echo base_url()?>index.php/SalesController/viewCollection" method="POST">
                



                            <section class="content">



                                    <!-- /.box-header -->

                                      
                                            <!-- text input -->
                                            <div class="row">
                                                

                                          
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label for="inputCustomerRegDate">Get Collection From</label>

                                                    <div class="input-group date">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right"  name="getCollectionFrom" id="datepicker" required>
                                                    </div>
                                    <!-- /.input group -->
                                            </div>
                                                     <br> 
                                                </div>
                                            

                                            
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                    <label for="inputCustomerRegDate">Get Collection To</label>

                                                    <div class="input-group date">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right"  name="getCollectionTo" id="datepicker1" >
                                                    </div>
                                    <!-- /.input group -->
                                                    </div>
                                                     <br> 
                                                    
                                            
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Select Register</label>
                                                            <select class="form-control" name="position" required>
                                                                    <option>Cash Register </option>
                                                                    <option>Cheque Register</option>
                                                                    <option>Credit Register</option>
                                                                    <option>Daily collection summary</option>
                                                                    
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="row" style="padding-top: 22px;">
                                                <div class="col-md-2">

                                                <button type="submit" class="btn btn-default preview-add-button"> GO</button>
                                                
                                                </div>

                                                </div>
                                        </div>        
                
                    

                                    
           <?php 
           
             if( $collection != NULL){
             ?>             

             <div class="box-body table-responsive col-md-4">
                        <table id='customer_table' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                            <tr>
                                <th>Collection ID</th>
                                
                                <th><a href="#" data-sort="CustomerContact">Collection Date</a></th>
                               
                                
                                
                            </tr>

                        

                        </thead>

                    
                    
                     <?php


                       
                        foreach ($collection as $row){
                            echo "<tr>";
                           
                            echo "<td>";
                            echo $row->idCollection;
                            echo "</td>";
                            echo "<td>";
                            echo $row->CollectionDate;
                            echo "</td>";
                            echo "</tr>";

                           
                        }
                    ?>
                    </table>

                    <?php 
                     }

                     ?>





                     </div>



                            </section>


                    
                    
                   
            </form>

     
        </div>
    </section>

</div>
        <!-- /.content -->
    </div>

    </div>

  



    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- AdminLTE App -->
<!-- InputMask -->

<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script>

<script >
    $(function() {
        //Date picker
        $('#datepicker1').datepicker({
          autoclose: true
        })
    })

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








<!-- bootstrap datepicker -->





