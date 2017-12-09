


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Attendance View
                
            </h1>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li> 
            
                <li class="active">Attendance</li>
            </ol>
        </section>

        <!-- Main content -->

        <div class="container">
    <div class="row">
        <section>
        <div class="wizard">
            
           <!--  <form role="form"> -->
                
                            <section class="content">



                                    <!-- /.box-header -->

                                      
                                            <!-- text input -->
                                            <div class="row" style="padding-left: 12px;">
                                                <div class="col-md-4">
                                                    <label>Enter year and month</label>

                                                    <input type="text" class="form-control" id="month" placeholder="EX: 2017-12" onkeypress="Javascript: if (event.keyCode==13) getDetails();">
                                                    <br>
                                                </div>

                                          
                                            
                                                <div class="col-md-4">
                                                   <label>Number of working Days </label>

                                                    <input type="text" class="form-control" placeholder="Enter ..." readonly="" id="working_days">
                                                     <br> 
                                                </div>
                                            

                                            
                                                <div class="col-md-3">
                                                    <label>No of weekly Holidays</label>

                                                    <input type="text" class="form-control" placeholder="Enter ..." readonly="" id="holidays">  <br>
                                                </div>
                                            
                                                </div>
                                        

                        <div class="col-sm-12">
                            <h5>Preview:</h5>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table preview-table table-hover" id="list">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Emp:ID</th>
                                                    <th>FullName</th>
                                                    <th>Role</th>
                                                    <th>Full</th>
                                                    <th>Half</th>
                                                    <th>Leave</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody></tbody> <!-- preview content goes here-->
                                        </table>
                                    </div>                            
                                </div>
                            </div>
                           
                        </div>

                            
                            </section>


                        <div class="col-md-12">
                        <ul class="list-inline ">
                            <li><button type="submit" class="btn btn-primary next-step proceed" id="proceed" >Proceed for salary calculation </button></li>
                        </ul>
                        </div>

                    
                    <div class="clearfix"></div>
               
            <!-- </form> -->
        </div>
    </section>

</div>
        <!-- /.content -->
    </div>

    </div>

    



    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


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

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<!-- <script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script> -->

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

<script type="text/javascript">

    function getDetails()
{
     if($('#month').val()){
        
            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/AttendanceController/getDays'?>",
                cache: false,
                data : {month :  $('#month').val()},
                success : function(json){
                    var obj=jQuery.parseJSON(json);
                   
                    if(obj){
                        $('#working_days').val(obj[0].workingDays);
                        $('#holidays').val(obj[0].holidays);
                                               
                    }else{
                        alert("something wrong");
                        
                    }

                },
            });
            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/AttendanceController/getEmployeeAttendance'?>",
                cache: false,
                data : {month :  $('#month').val()},
                success : function(json){

                    var workingDays = parseInt($('#working_days').val());
                    var obj=jQuery.parseJSON(json);
                                       
                    if(obj){                       

                        for (var i=0;i<obj.length;i++) {
                            
                            var rows = "";
                            var id = parseInt(obj[i].Employee_idEmployee);
                            var name = obj[i].EmployeeFullName;
                             var role = obj[i].EmployeePosition;
                            var full = parseInt(obj[i].full);
                             var half = parseInt(obj[i].half);
                             var leave = workingDays-(full+half);
                             var check = '<input type="checkbox" id="master" class="chk" >';

                            rows += "<tr><td>" + check + "</td><td>" + id + "</td><td>" + name + "</td><td>" + role + "</td><td>" + full + "</td><td>" + half + "</td><td>" + leave + "</td></tr>";
                            $(rows).appendTo("#list tbody");
                            
                        }

           
                    }else{
                        alert("something wrong");
                        
                    }

                },
            });



        }else{
            alert("Please enter the month name and hit enter");
            
        }  
   }


$("#proceed").click(function(event){
    
    // event.preventDefault();

    var rowCount = 0;
    var array;
   
    $IDs = $("#list input:checkbox:checked").each(function() {
        rowCount ++;
        array = $(this).parent().siblings().map(function() {
        return $(this).text().trim();
    }).get();


  });


     if(rowCount >=1){
   
            alert(array);
  }else{

    alert("Error, Select only one row");
  }
});


</script>