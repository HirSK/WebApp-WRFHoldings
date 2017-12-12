
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Manage Vehicles</li>
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
                    Manage Vehicles
                </h3>
                    
               
                    
                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
                    
                     
                    <div class="modal fade" id="addrow" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">


                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Update Vehicle details</h4>
                        </div>


                        
                         
                         <form method="post" action="<?php echo base_url()?>index.php/VehicleController/updateVehicle">

                          <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                              <label for="VehicleID" class="col-sm-6 control-label">Vehicle ID</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="VehicleID" name="VehicleID" required readonly>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="PlateNo" class="col-sm-6 control-label">Plate No</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="PlateNo" name="PlateNo" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="VehicleType" class="col-sm-6 control-label">Vehicle Type</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="VehicleType" name="VehicleType" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="RegistrationDate" class="col-sm-6 control-label">Registration Date</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="RegistrationDate" name="RegistrationDate" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="OwnerName" class="col-sm-6 control-label">Owner Name</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="OwnerName" name="OwnerName">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="OwnerAddress" class="col-sm-6 control-label">Owner Address</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="OwnerAddress" name="OwnerAddress">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="OwnerTel" class="col-sm-6 control-label">Owner Telephone No</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="OwnerTel" name="OwnerTel">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="LicenNo" class="col-sm-6 control-label">LicenNo</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="LicenNo" name="LicenNo" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="LicenStartDate" class="col-sm-6 control-label">Licen Starting Date</label>


                              <div class="col-sm-7">

                                <input type="text" class="form-control" id="LicenStartDate"  name="LicenStartDate" required>
                              </div>
                            </div>
                           


                            <div class="form-group">
                              <label for="LicenEndDate" class="col-sm-6 control-label">Licen Ending Date</label>
                              <div class="col-sm-7">
                            
                                <input type="text" class="form-control" id="LicenEndDate"  name="LicenEndDate" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="InsurancePolicyNo" class="col-sm-6 control-label">Insurance Policy No</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="InsurancePolicyNo" name="InsurancePolicyNo" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="InsuranceSerielNo" class="col-sm-6 control-label">Insurance Seriel No</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="InsuranceSerielNo" name="InsuranceSerielNo" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="InsuranceStartDate" class="col-sm-6 control-label">Insurance Starting Date</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="InsuranceStartDate" name="InsuranceStartDate" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="InsuranceEndDate" class="col-sm-6 control-label">Insurance Ending tDate</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="InsuranceEndDate"  name="InsuranceEndDate" required>
                              </div>
                            </div>

                             </div>

                           

                            <div class="modal-footer" >
                                <button type="submit" class="btn btn-primary btn-success" name="UpdateVehicle" value="Update">Update</button>
                                <!-- <button type="submit" class="btn btn-primary pull-left" name="ClearVehicle">clear</button> -->
                            </div>

                           
                          </div>                                                

                        </form>

                    </div>

                      


                 </div>
                      
            </div>





                </div>
            </div>

           
         

            <form method="post" action="<?php echo base_url()?>index.php/VehicleController/deleteVehicle">

                    
                    <div class="col-lg-12 col-sm-12 col-xs-12"  style="padding-top:20px">

                    <div class="col-xs-10">
                 
                    <button type="button" id="update_vehicle" class="btn  btn-info pull-right"  data-toggle="modal" >Update</button>
                   </div>

                    <div class="col-xs-2">
                     <input type="submit" name="delete" value="Delete" class="btn btn-warning pull-left" onclick="return delete_vehicle()">
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
                        <table id='vehicle_table' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                            <tr>
                                <th><input name="checkbox[]" id="master" type="checkbox" ></th>

                                <th>#</th>
                                <th><a href="#" data-sort="PlateNo">Plate No</a></th>
                                <th><a href="#" data-sort="VehicleType">Vehicle Type</a></th>
                                <th><a href="#" data-sort="RegistrationDate">Registration Date</a></th>
                                <th><a href="#" data-sort="OwnerName">Owner Name</a></th>
                                <th><a href="#" data-sort="OwnerAddress">Owner Address</a></th>
                                <th><a href="#" data-sort="OwnerTel">Owner Telephone No</a></th>
                                <th><a href="#" data-sort="LicenNo">Licen No</a></th>
                                <th><a href="#" data-sort="LicenStartDate">Licen Starting Date</a></th>
                                <th><a href="#" data-sort="LicenEndDate">Licen Ending Date</a></th>
                                <th><a href="#" data-sort="InsurancePolicyNo">Insurance Policy No</a></th>
                                <th><a href="#" data-sort="InsuranceSerielNo">Insurance Seriel No</a></th>
                                <th><a href="#" data-sort="InsuranceStartDate">Insurance Starting Date</a></th>
                                <th><a href="#" data-sort="InsuranceEndDate">Insurance Ending Date</a></th>
                                
                            </tr>

                           <!--  <tr id="w1-filters" class="filters">
                                <td></td> 
                                <td>&nbsp;</td>
                                <td>
                                    <input id ="target" type="text" class="form-control" name="VehicleSearch[PlateNo]">
                                </td>
                                <td>
                                    <input id ="target_1" type="text" class="form-control" name="VehicleSearch[VehicleType]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[RegistrationDate]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[OwnerName]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[OwnerAddress]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[OwnerTel]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[LicenNo]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[LicenStartDate]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[LicenEndDate]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[InsurancePolicyNo]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[InsuranceSerielNo]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[InsuranceStartDate]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="VehicleSearch[InsuranceEndDate]">
                                </td>
                                
                                
                            </tr> -->



                        </thead>

                    
                    
                    <?php
                        $count = 1;
                        foreach ($vehicleRecord as $row){


                            

                            ?><tr>
                            <td><input name="checkbox[]" class="case" type="checkbox" value=<?php echo $row->idDelivery_Vehicle;?>></td> 
                            <td><?php echo $row->idDelivery_Vehicle;?></td>
                            <td><?php echo $row->Delivery_VehiclePlateNumber;?></td> 
                            <td><?php echo $row->Delivery_VehicleType;?></td>
                            <td><?php echo $row->Delivery_VehicleRegistrationDate;?></td>
                            <td><?php echo $row->Delivery_VehicleOwnerName;?></td>  
                            <td><?php echo $row->Delivery_VehicleOwnerAddress;?></td>
                            <td><?php echo $row->Delivery_VehicleOwnerTelephoneNo;?></td> 
                            <td><?php echo $row->Delivery_VehicleLicenNo;?></td>
                            <td><?php echo $row->Delivery_VehicleLicenStartingDate;?></td>
                            <td><?php echo $row->Delivery_VehicleLicenEndingDate;?></td>  
                            <td><?php echo $row->Delivery_VehicleInsurancePolicyNo;?></td>
                            <td><?php echo $row->Delivery_VehicleInsuranceSerielNo;?></td>
                            <td><?php echo $row->Delivery_VehicleInsuranceStartingDate;?></td> 
                            <td><?php echo $row->Delivery_VehicleInsuranceEndingDate;?></td>  
                            
                            </tr>

                            
                         <?php 
                            
                         $count = $count+1;  
                            
                        }
                    ?>
                    </table>

                     </div>
            </div>

        </div>
       </form>

      
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
$( ".form-control" ).keyup(function(e) {
  
  var valueField = $(this).attr('id');
  // Declare variables 
  var input, filter, table, tr, td,td1, i,td_test;
  input = document.getElementById(valueField.toString());
  filter = input.value.toUpperCase();
  table = document.getElementById("vehicle_table");
  tr = table.getElementsByTagName("tr");
  



  // Loop through all table rows, and hide those who don't match the search query
  for (i = 2; i < tr.length; i++) {
    if(valueField == "target"){
        td = tr[i].getElementsByTagName("td")[2];
    }
    else if(valueField == "target_1"){
        td = tr[i].getElementsByTagName("td")[3];
    }
   
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }


});

$("#update_vehicle").click(function(){

    var rowCount = 0;
    var array;

  $('#vehicle_table input:checkbox:checked').each(function() {
    rowCount ++;
    array = $(this).parent().siblings().map(function() {
        return $(this).text().trim();
    }).get();
     
  });

  if(rowCount ==1){
    $('#VehicleID').val(array[0]);
    $('#PlateNo').val(array[1]);
    $('#VehicleType').val(array[2]);
    $('#RegistrationDate').val(array[3]);
    $('#OwnerName').val(array[4]);
    $('#OwnerAddress').val(array[5]);
    $('#OwnerTel').val(array[6]);
    $('#LicenNo').val(array[7]);
    $('#LicenStartDate').val(array[8]);
    $('#LicenEndDate').val(array[9]);
    $('#InsurancePolicyNo').val(array[10]);
    $('#InsuranceSerielNo').val(array[11]);
    $('#InsuranceStartDate').val(array[12]);
    $('#InsuranceEndDate').val(array[13]);
    $("#addrow").modal();
  }else{

    alert("Error, Select only one row");
  }

});

function delete_vehicle(){
  

    if(confirm('Are you sure')){
 
        return true;
    }else{
        return false;
    }

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

