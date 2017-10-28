



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
        <section>
        <div class="wizard">
            
            <form role="form">
                



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
                                                      <input type="text" class="form-control pull-right" id="datepicker" name="getCollectionFrom" required>
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
                                                      <input type="text" class="form-control pull-right" id="datepicker" name="getCollectionTo" required>
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
                                                <a class="btn btn-info" href="<?php echo base_url()?>index.php/EmployeeController">Go</a>
                                                </div>

                                                </div>
                                        </div>        
                
                    

                                    
                                                             
                            </section>


                    
                    
                    <div class="clearfix"></div>
               
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
<script src="<?php echo base_url() ?>template/bower_components/inputmask/dist/inputmask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.extensions.js"></script>


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

<script>
    $(function () {
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    }
</script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.checkboxes.min.js"></script>


<script>

jQuery('#master').on('click', function(e) {
 if($(this).is(':checked',true))  
 {
 $(".case").prop('checked', true);  
 }  
 else  
 {  
 $(".case").prop('checked',false);  
 }  
});
</script>

<!-- bootstrap datepicker -->





