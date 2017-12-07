


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
                                        



                                    <!-- <form id="myform" method="post">
                                       
                                        
                                    <div class="col-md-11">


                                       <table id="mytable" class="table table-bordered table-striped table-hover">
                                            <thead>

                                            <tr>
                                        <th><input name="checkbox[]" id="master" type="checkbox" /></th>
                                        <th>Employee ID</th>
                                        <th>Employee Full Name</th>
                                        <th>Name with Initials</th>
                                        <th>NIC Number</th>
                                        <th>Number of Half Days</th>
                                        <th>Number of full Days</th>
                                        <th>Number of leaves</th>
                                        

                                    </tr>

                                            <?php  
                                             foreach ($emp as $row)  
                                             {  
                                                ?><tr>
                                                <td><input name="checkbox[]" class="case" type="checkbox" /></td>  
                                                <td id="id"><?php echo $row->idEmployee;?></td>  
                                                <td><?php echo $row->EmployeeFullName;?></td> 
                                                <td><?php echo $row->EmployeeNameWithInitials;?></td>  
                                                <td><?php echo $row->EmployeeNIC;?></td>

                                                <td>
                                                    <input type="text" class="form-control" name="half" id="half" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="full" id="full" readonly="">
                                                </td>
                                                 <td>
                                                    <input type="text" class="form-control" name="leave" id="leave" readonly="">
                                                </td>  
                                                
                                                    
                                             <?php }  
                                             ?> 
                                            
                                            </thead>
                                           
                                        </table>
                                         </div>
                                    </form>  -->
                        <div class="col-sm-12">
                            <h5>Preview:</h5>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table preview-table" id="list">
                                            <thead>
                                                <tr>
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
                            <li><button type="submit" class="btn btn-primary next-step">Save </button></li>
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

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- AdminLTE App -->
<!-- InputMask -->
<!-- <script src="<?php echo base_url() ?>template/bower_components/inputmask/dist/inputmask/jquery.inputmask.js"></script> -->
<!-- <script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.date.extensions.js"></script> -->
<!-- <script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.extensions.js"></script> -->

<!-- <script type="text/javascript">
    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();
        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var $target = $(e.target);
            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });
        $(".next-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        });
        $(".prev-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);
        });
    });
    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>
 -->

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

<!-- <script src="<?php echo base_url()?>template/bower_components/newCss/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.checkboxes.min.js"></script> -->


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
                    // alert(obj);
                    // var obj=json;
                    // alert(obj[0].workingDays);

                    if(obj){
                        $('#working_days').val(obj[0].workingDays);
                        $('#holidays').val(obj[0].holidays);
                                               
                    }else{
                        alert("something wrong");
                        // clearTextBoxes();
                    }

                },
            });
            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/AttendanceController/getEmployeeAttendance'?>",
                cache: false,
                data : {month :  $('#month').val()},
                success : function(json){
                    var obj=jQuery.parseJSON(json);
                    

                          // alert(obj[1].full);
                    // console.log(json);

                    if(obj){
                        // $('#working_days').val(obj[0].full);
                        // $('#holidays').val(obj[0].half);
                        // alert(obj[0].full);
                         // alert(obj[0].half);

                         // var workingDays = parseInt($('#working_days').val());

                        for (var i=0;i<obj.length;i++) {
                            var workingDays = parseInt($('#working_days').val());
                            var rows = "";
                            var id = parseInt(obj[i].Employee_idEmployee);
                            var name = obj[i].EmployeeFullName;
                             var role = obj[i].EmployeePosition;
                            var full = parseInt(obj[i].full);
                             var half = parseInt(obj[i].half);
                             var leave = workingDays-(full+half);

                            rows += "<tr><td>" + id + "</td><td>" + name + "</td><td>" + role + "</td><td>" + full + "</td><td>" + half + "</td><td>" + leave + "</td></tr>";
                            $(rows).appendTo("#list tbody");
                            
                        }


                        // for (i=0; i < obj.length; i++) {
                        //     $('#full').append("<td>"+obj[i].full+"</td>");
                        //     $('#half').append("<td>"+obj[i].half+"</td>");
                        // }

                        // for (i=0; i < obj.length; i++) {
                        //     $('#full').html(obj[i].full);
                        //     $('#half').html(obj[i].half);
                        // }
                                               
                    }else{
                        alert("something wrong");
                        // clearTextBoxes();
                    }

                },
            });



        }else{
            alert("Please enter the month name and hit enter");
            // clearTextBoxes();
        }  
   }
</script>