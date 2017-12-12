<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Manage Attendance</li>
        </ol>
    </section> 

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12" style="padding-top: 20px">
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <h3 class="box-title"><i class="fa fa-th-list"></i>Manage Attendance</h3>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
                    <div class="modal fade" id="addrow" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">View Attendance Details</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <form method="post" action="<?php echo base_url()?>index.php/CalendarController/deleteCalendarEntry">
                <div class="col-lg-12 col-sm-12 col-xs-12"  style="padding-top:20px">
                      
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
                                        <td><input name="checkbox[]" id="master" type="checkbox" ></td>
                                        <td id="Id_Outlet"><b><a href="#" data-sort="OutletID">Outlet ID</a></b></td>
                                        <td><b><a href="#" data-sort="AttendanceDate">Attendance Date</a></b></td>
                                        <td><b><a href="#" data-sort="EmployeeID">Employee ID</a></b></td>
                                        <td><b><a href="#" data-sort="EmployeeName">Employee Name</a></b></td>
                                        <td><b><a href="#" data-sort="FullDayHalfDay">Full Day Half Day</a></b></td>
                                    </tr>
                                    <tr id="w1-filters" class="filters">
                                        <td></td>
                                        <td>
                                            <input id ="target" type="text" class="form-control" name="AttendanceSearch[OutletID]">
                                        </td> 
                                        <td>
                                            <input id ="target" type="text" class="form-control" name="AttendanceSearch[AttendanceDate]">
                                        </td>
                                        <td>
                                            <input id ="target_1" type="text" class="form-control" name="AttendanceSearch[EmployeeID]">
                                        </td>
                                        <td>
                                            <input id ="target_2" type="text" class="form-control" name="AttendanceSearch[EmployeeName]">
                                        </td>
                                        <td>
                                            <input id ="target_3" type="text" class="form-control" name="AttendanceSearch[FullDayHalfDay]">
                                        </td>
                                    </tr>
                                </thead>
                                <?php
                                    $count = 1;
                                    foreach ($attendanceRecords as $row){
                                    ?><tr>
                                    <td><input name="checkbox[]" class="case" type="checkbox" value=<?php echo $row->DateOfDay;?>></td>
                                    <td><?php echo $row->Outlet_idOutlet;?></td>  
                                    <td><?php echo $row->DateOfDay;?></td>  
                                    <td><?php echo $row->idEmployee;?></td> 
                                    <td><?php echo $row->EmployeeFullName;?></td>  
                                    <td><?php echo $row->FullDayHalfDay;?></td> 
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


<script>
document.onreadystatechange = function() {
  hide();
};

function show_hide_column(col_id, do_show) {
  var stl;
  if (do_show) stl = 'block'
  else stl = 'none';

  var tbl = document.getElementsByTagName('table')[0];
  var index = document.getElementById(col_id).cellIndex;
  var rows = tbl.getElementsByTagName('tr');

  for (var row = 0; row < rows.length; row++) {
    var cels = rows[row].getElementsByTagName('td')
    cels[index].style.display = stl;
  }
}


function hide() {
  // show_hide_column("Id_Outlet", false);
  
}
</Script>