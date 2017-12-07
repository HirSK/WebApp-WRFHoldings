
<!-- Content Wrapper. Contains page content -->
<DOCTYPE!>

<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vehicle Maintainance
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Vehicle Maintainance</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content" style="padding-left: 200px; padding-right: 200px">
        <div class="row">

            


            <!-- left column -->
            <div class="col-xs-12 col-lg-12" style="padding-top: 20px">
                <div class="tab">
                    <button class="btn btn-primary tablinks" style="width: 100px; height: 30px; border-radius: 5px" onclick="openRenewal(event, 'Licen')" id="defaultOpen"><b>Licen</b></button>
                    <button class="btn btn-primary tablinks" style="width: 100px; height: 30px; border-radius: 5px" onclick="openRenewal(event, 'Insurance')"><b>Insurance</b></button>
                </div>
                
                <div id="Insurance" class="box box-primary tabcontent " >
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Insurance Renewals Dates</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        
                   <form role="form" action="<?php echo base_url()?>index.php/VehicleController/addInsuranceRenewalDates" method="POST">
                        <div class="box-body">

                            <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-3">
                                <div class="form-group">
                                    <label><h3>Select Vehicle : </h3></label>

                                    
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12" style="height: 100px">
                                <div class="form-group">
                                    
                                      <h3><b>
                                        <select class="form-control" id="plateNo" name="plateNo" required>
                                         <?php foreach ($vehicleID as $vid) {
                                   
                                         ?>
                                        <option><?php echo $vid->Delivery_VehiclePlateNumber ?></option>

                                     <?php

                                     } ?>
                                       
                                
                                     </select>
                                 </b>
                                        
                                      </h3>
                                    
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-xs-6 col-lg-12 col-sm-12">



                            <div class="col-xs-2 col-xs-2">
                                <div class="form-group">
                                    <label><h4>Last Renewal :</h4></label>

                                </div>
                            </div>
                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker1" name="dateLastIns" type="calendar" placeholder="mm/dd/yyyy" required>
                                      
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-2">
                                <div class="form-group">
                                    <label><h4>New Renewal :</h4></label>

                                </div>
                            </div>
                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker2" name="dateNewIns" type="calendar" placeholder="mm/dd/yyyy" required>
                                      
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-2">
                                <div class="form-group">
                                    <label><h4>Remarks:</h4></label>

                                </div>
                            </div>

                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    
                                    <textarea type="textarea" class="form-control" id="remark" name="remarkIns" placeholder="Enter ..."></textarea>
                                </div>
                             </div>
                            
                        </div>


                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-2">
                                
                            </div>
                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-8">
                                    <h3><button type="submit" class="btn btn-block btn-success" id="submitIns" name="submitIns" value="submita">Submit</button></h3>
                                </div>
                                </div>
                            </div>

                        </div>



                        </div>

                    </form>
                </div>






                <!-- general form elements -->
                <div id="Licen" class="box box-primary tabcontent">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Licen Renewals Dates</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        
                   <form role="form" action="<?php echo base_url()?>index.php/VehicleController/addLicenRenewalDates" method="POST">
                        <div class="box-body">


                            <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-3">
                                <div class="form-group">
                                    <label><h3>Select Vehicle : </h3></label>

                                    
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12" style="height: 100px">
                                <div class="form-group">
                                    
                                      <h3><b>
                                        <select class="form-control" id="plateNo" name="plateNo" required>
                                         <?php foreach ($vehicleID as $vid) {
                                   
                                         ?>
                                        <option><?php echo $vid->Delivery_VehiclePlateNumber ?></option>

                                     <?php

                                     } ?>
                                       
                                
                                     </select>
                                 </b>
                                        
                                      </h3>
                                    
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-xs-6 col-lg-12 col-sm-12">



                            <div class="col-xs-2 col-xs-2">
                                <div class="form-group">
                                    <label><h4>Last Renewal :</h4></label>

                                </div>
                            </div>
                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker3" name="dateLastLic" type="calendar" placeholder="mm/dd/yyyy" required>
                                      
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-2">
                                <div class="form-group">
                                    <label><h4>New Renewal :</h4></label>

                                </div>
                            </div>
                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker4" name="dateNewLic" type="calendar" placeholder="mm/dd/yyyy" required>
                                      
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-2">
                                <div class="form-group">
                                    <label><h4>Remarks:</h4></label>

                                </div>
                            </div>

                            <div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                    
                                    <textarea type="textarea" class="form-control" id="remark" name="remarkLic" placeholder="Enter ..."></textarea>
                                </div>
                             </div>
                            
                        </div>


                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-xs-2 col-xs-2">
                                
                            </div>
                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="col-sm-8">
                                    <h3><button type="submit" class="btn btn-block btn-success preview-add-button" id="submitLic" name="submitLic" value="submitb">Submit</button></h3>
                                </div>
                                </div>
                            </div>

                        </div>



                        </div>
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

<script>
function openRenewal(evt, vehicleName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(vehicleName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script >
    $(function() {
        //Date picker
        $('#datepicker1').datepicker({
          autoclose: true
        })
    })

    $(function() {
        //Date picker
        $('#datepicker2').datepicker({
          autoclose: true
        })
    })

    $(function() {
        //Date picker
        $('#datepicker3').datepicker({
          autoclose: true
        })
    })

    $(function() {
        //Date picker
        $('#datepicker4').datepicker({
          autoclose: true
        })
    })

</script>

<script>
    document.getElementById("defaultOpen").click();
</script>
