<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Manage Calendar</li>
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
                      Manage Calendar
                  </h3>
                    
                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
             
                     
                    <div class="modal fade" id="addrow" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">


                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Update Calendar details</h4>

                        </div>

                        <form method="post" action="<?php echo base_url()?>index.php/CalendarController/updateCalendar">

                          <div class="modal-body">
                          <div class="row">
                            

                            <div class="form-group">
                              <label for="CalendarDate" class="col-sm-6 control-label">Date</label>


                              <div class="col-sm-7">

                                <input type="text" class="form-control" id="CalendarDate"  name="CalendarDate" required>
                              </div>
                            </div>
                           
                            <div class="form-group">
                              <label for="CalendarStatus" class="col-sm-6 control-label">Status</label>
                              <div class="col-sm-7">
                            
                                <input type="text" class="form-control" id="CalendarStatus"  name="CalendarStatus" required>
                              </div>
                            </div>
                          </div>
                          

                            <div class="modal-footer" >
                                <button type="submit" class="btn btn-primary btn-success" name="UpdateCust" value="Update">Update</button>
                                <button type="submit" class="btn btn-primary pull-left" name="ClearCust">clear</button>
                            </div>

                            <!-- <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div> -->

                          </div>                                                

                        </form>

                    </div>

                      


                 </div>
                      
            </div>





                </div>
            </div>

           
         

            <form method="post" action="<?php echo base_url()?>index.php/CalendarController/deleteCalendarEntry">
              <div class="col-lg-12 col-sm-12 col-xs-12"  style="padding-top:20px">
                <div class="col-xs-10">
                  <button type="button" id="update_calendar" class="btn  btn-info pull-right"  data-toggle="modal" >Update</button>
                </div>

                <div class="col-xs-2">
                  <input type="submit" name="delete" value="Delete" class="btn btn-warning pull-left" onclick="return delete_CalendarEntry()">
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
                        <table id='calendar_table' class="table table-striped table-bordered col-lg-12">

                          <thead >
                            
                            <tr>
                                <th><input name="checkbox[]" id="master" type="checkbox" ></th>

                               
                                <th><a href="#" data-sort="CalendarDate">Calendar Date</a></th>
                                <th><a href="#" data-sort="CalendarStatus">Calendar Status</a></th>
                               
                                
                            </tr>

                            <tr id="w1-filters" class="filters">
                                <td></td> 
                                <td>
                                    <input id ="target" type="text" class="form-control" name="CalendarSearch[CalendarDate]">
                                </td>
                                <td>
                                    <input id ="target_1" type="text" class="form-control" name="CalendarSearch[CalendarStatus]">
                                </td>
                            </tr>
                          </thead>

                    
                    
                          <?php
                            $count = 1;
                            foreach ($calendarRecords as $row){
                           

                            ?><tr>
                            <td><input name="checkbox[]" class="case" type="checkbox" value=<?php echo $row->CalendarDate;?>></td> 
                              
                            
                            <td><?php echo $row->CalendarDate;?></td>  
                            <td><?php echo $row->Working_Holiday;?></td> 
                             
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
  table = document.getElementById("customer_table");
  tr = table.getElementsByTagName("tr");
  



  // Loop through all table rows, and hide those who don't match the search query
  for (i = 2; i < tr.length; i++) {
    if(valueField == "target"){
        td = tr[i].getElementsByTagName("td")[1];
    }
    else if(valueField == "target_1"){
        td = tr[i].getElementsByTagName("td")[2];
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

$("#update_customer").click(function(){

    var rowCount = 0;
    var array;

  $('#customer_table input:checkbox:checked').each(function() {
    rowCount ++;
    array = $(this).parent().siblings().map(function() {
        return $(this).text().trim();
    }).get();
     
  });

  if(rowCount ==1){
   
    $('#CustCode').val(array[0]);
    $('#CustName').val(array[1]);
    $('#CustAddress').val(array[2]);
    $('#CustContact').val(array[3]);
    $('#CustRegDate').val(array[4]);
    $("#addrow").modal();
  }else{

    alert("Error, Select only one row");
  }

});

function delete_customer(){

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

