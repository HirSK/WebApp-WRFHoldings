

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Petty Cash Types
            <small><?php echo $this->session->userData('loggerOutletName') ; ?></small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Add Petty Cash Types</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">
    <div class="row">
            <!-- left column -->
            <div class="wizard-inner">
            <div class="col-xs-8 col-xs-6" style="padding-top: 20px">
                <!-- general form elements -->
                <div class="box box-primary" style="height: 300px; width: 800px">
                    <div class="box-header with-border" style="height: 50px">
                        <h3 class="box-title">Add new petty cash type</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <form role="form" action="<?php echo base_url()?>index.php/PettyCashController/addPettycash" method="POST">
                        <div class="box-body">

                            <div class="col-md-8">
                            
                              <div class="col-md-8 col-xs-12">
                                <div class="form-group">
                                    <label for="PettyCashTypeLable">Petty Cash Type</label>
                                    <input type="text" class="form-control"  name="PettyCashType" placeholder="Petty Cash Type" required>
                                </div>
                                </div>
                                
                             <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <label for="PettyCashDescription">Description</label>
                                    <textarea type="textarea" class="form-control" name="PettyCashDescription" placeholder="Enter The Description"></textarea>
                                </div>
                             </div>

                             <div class="col-sm-4 col-xs-4">
                                <div class="form-group">
                                    
                                </div>
                             </div>

                            </div>

                            <div class="col-xs-12 col-lg-12 col-sm-12">

                            </div>

                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>


            <div class="col-xs-6 col-xs-6" style="padding-top: 20px">
                <!-- general form elements -->
                <div class="box box-primary" style="height: 300px; width: 600px">
                    <div class="box-header with-border" style="height: 50px">
                        <h3 class="box-title">Petty Cash Types</h3>
                    </div>


                    <form role="form">
                        <div class="box-body">

                            <div class="col-md-8">
                            
                             
                                <div class="col-md-8 col-xs-12">
                                <div class="form-group">
                                    <?php  
                                        foreach ($pcash as $row)  
                                        {  
                                        ?>
                                        <ul>
                                        <li><?php echo $row->Petty_CashType;?></li>
                                        </ul> 
                                        <?php }  
                                        ?>            
                                </div>
                             </div>

                             <div class="col-sm-4 col-xs-4">
                                <div class="form-group">
                                    
                                </div>
                             </div>

                            </div>

                            <div class="col-xs-12 col-lg-12 col-sm-12">

                              

                            </div>

                           
                        </div>
                    </form>

                    </div>
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
