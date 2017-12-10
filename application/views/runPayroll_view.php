



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Salary Calculation
                
            </h1>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li> 
            
                <li class="active">Run Payroll</li>
        </ol>
    </section>

    <!-- Main content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#basic" data-toggle="tab" aria-controls="basic" role="tab" title="Select Month & Year">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#owner" data-toggle="tab" aria-controls="owner" role="tab" title="Basic & Deductions">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#insurance" data-toggle="tab" aria-controls="insurance" role="tab" title="Allowances">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Finalize">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- <form role="form" action="#" method="POST"> -->
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="basic">

                               
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
                                                    <th>Full Days</th>
                                                    <th>Half Days</th>
                                                    <!-- <th>Leave</th> -->
                                                    
                                                </tr>
                                            </thead>
                                            <tbody></tbody> <!-- preview content goes here-->
                                        </table>
                                    </div>                            
                                </div>
                            </div>
                           
                        </div>


                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step" id="proceed">Proceed for salary calculation</button></li>
                                </ul>

                            </div>

                            <div class="tab-pane" role="tabpanel" id="owner">

                               
                                <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table preview-table table-hover" id="salary_table">
                                            <thead>
                                                <tr>
                                                   <!--  <th>Select</th> -->
                                                    <th>Emp:ID</th>
                                                    <th>FullName</th>
                                                    <th>Basic Salary</th>
                                                    <th>SalaryPerDay</th>
                                                    <th>Gross Salary</th>
                                                    <th>ETF deduction</th>
                                                                                                        
                                                </tr>
                                            </thead>
                                            <tbody></tbody> <!-- preview content goes here-->
                                        </table>
                                    </div>                            
                                </div>
                            </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step" >Previous</button></li>

                                    <li><button type="button" class="btn btn-primary next-step" id="salary_btn">Next</button></li>

                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="insurance">

                                 
                                <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                    <h5><b>Add Allowances</b></h5>
                                        <table class="table preview-table table-hover" id="addition_tbl">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Emp:ID</th>
                                                    <th>FullName</th>
                                                    <th>Gross Salary</th>
                                                    <th>Food Allowance</th>
                                                    <th>HolidayAllowance</th>
                                                    <th>Incentive</th>
                                                    
                                                                                                        
                                                </tr>
                                            </thead>
                                            <tbody></tbody> <!-- preview content goes here-->
<!-- changed -->
<!-- 
                                             <tr>
                                                <td>
                                                    <input type="text" data-name="txtName" />
                                                </td>
                                                <td>
                                                    <input type="text"  data-name="txtAge" />
                                                </td>
                                                <td>
                                                    <input type="text"  data-name="txtGender" />
                                                </td>
                                                
                                            </tr> -->

<!-- changed -->

                                        </table>
                                    </div>                            
                                </div>
                            </div>
                                
                                

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step" >Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step" id="allowance_btn">Next</button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="complete">


                             <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                    <h5><b>Final Pay Details</b></h5>
                                        <table class="table preview-table table-hover" id="final_tbl">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Emp:ID</th>
                                                    <th>FullName</th>
                                                    <th>SalaryID</th>
                                                    <th>Basic Salary</th>
                                                    <th>Gross Salary</th>
                                                    <th>Total Allowances</th>
                                                    <th>Total Deductions</th>
                                                    <th>Net Salary</th>
                                                   
                                                                                                        
                                                </tr>
                                            </thead>
                                            <tbody></tbody> <!-- preview content goes here-->
                                        </table>
                                    </div>                            
                                </div>
                            </div>


                                <!-- <h4>Click Finalize button to submit and finalize payslips!</h4> -->
                                
                                <input type="submit" class="btn btn-primary next-step id='final" name="submit" value="Finalize">
                            </div>
                            <div class="clearfix"></div>

                        </div>
                       
                    </form>
                </div>
            </section>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="control-sidebar-bg"></div>
</div>


<!-- REQUIRED JS SCRIPTS -->

<script type="text/javascript">
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
<!-- InputMask -->
<!-- <script src="<?php echo base_url() ?>template/bower_components/inputmask/dist/inputmask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.extensions.js"></script> -->


<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

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
                    var obj=jQuery.parseJSON(json);
                                       
                    var workingDays = parseInt($('#working_days').val());

                    if(obj){
                        

                        for (var i=0;i<obj.length;i++) {
                            var rows = "";
                            var id = parseInt(obj[i].Employee_idEmployee);
                            var name = obj[i].EmployeeFullName;
                             var role = obj[i].EmployeePosition;
                            var full = parseInt(obj[i].full);
                             var half = parseInt(obj[i].half);
                             // var leave = workingDays-(full+half);
                             var check = '<input type="checkbox" id="select" class="chk" >';

                            rows += "<tr><td>" + check + "</td><td>" + id + "</td><td>" + name + "</td><td>" + role + "</td><td>" + full + "</td><td>" + half + "</td></tr>";
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

    var tbody = $("#salary_table tbody");

    if (tbody.children().length > 0) {
        
    }else{

        var rowCount = 0;
        var attendance_array;
       
        $IDs = $("#list input:checkbox:checked").each(function() {
            rowCount ++;
            attendance_array = $(this).parent().siblings().map(function() {
            return $(this).text().trim();
        }).get();


      });


     if(rowCount >=1){   
            // alert(attendance_array[0]);

            var data = {
                    empID: attendance_array[0],
                    empName:attendance_array[1],
                    full: attendance_array[3],
                    half: attendance_array[4],
                    working: $('#working_days').val()
                                        
                };
            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/runPayrollController/getSalaryDetails'?>",
                cache: false,
                data :data ,
                success : function(json){
                    var obj=jQuery.parseJSON(json);
                    // obj=json;
                    // alert(obj);
                   
                    if(obj){
                        
                        // for (var i=0;i<obj.length;i++) {
                            var rows = "";
                            var id = obj.id;                            
                            var empName = obj.empName;
                            var basic_salary = obj.basic_salary;
                            var salary_per_day = obj.salary_per_day;
                            var emp_gross_salary = obj.emp_gross_salary; 
                            
                            var deduct =obj.etf;                          
                            // var check = '<input type="checkbox" id="select" class="chk" >';

                            rows += "<tr><td>" + id + "</td><td>" + empName + "</td><td>" + basic_salary + "</td><td>" + salary_per_day + "</td><td>" + emp_gross_salary + "</td><td>" + deduct + "</td></tr>";
                            $(rows).appendTo("#salary_table tbody");                            
                            
                        // }

                    }else{
                        alert("something wrong");
                        
                    }

                },
            });

          }else{

            alert("Error, Select a row");
            return;
          }
    }
});


   $("#salary_btn").click(function(event){
    
   

    var tbody = $("#addition_tbl tbody");

    if (tbody.children().length > 0) {
        
    }else{
           
            var rowCount = 0;
            var attendance_array;
           
            $IDs = $("#list input:checkbox:checked").each(function() {
                rowCount ++;
                attendance_array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();


          });


         if(rowCount >=1){   
                

                var data = {
                        empID: attendance_array[0],
                        empName:attendance_array[1],
                        full: attendance_array[3],
                        half: attendance_array[4],
                        working: $('#working_days').val()
                                            
                    };
     
            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/runPayrollController/getSalaryDetails'?>",
                cache: false,
                data :data ,
                success : function(json){
                    var obj=jQuery.parseJSON(json);
                    
                   
                    if(obj){
                        
                        // for (var i=0;i<obj.length;i++) {
                            var rows = "";
                            var id = obj.id;                                                                              
                            var empName = obj.empName;                        
                           
                            var emp_gross_salary = obj.emp_gross_salary; 
                            var food ='<input type="textbox" id="food" class="food">';
                            var holiday ='<input type="textbox" id="holiday" class="holiday">';
                            var incentive ='<input type="textbox" id="deduct" class="deduct">';                          
                            var check = '<input type="checkbox" id="select" class="chk" >';                            

                            rows += "<tr><td>" + check + "</td><td>" + id + "</td><td>" + empName + "</td><td>" + emp_gross_salary + "</td><td>" + food + "</td><td>" + holiday + "</td><td>" + incentive + "</td></tr>";
                            $(rows).appendTo("#addition_tbl tbody");                            
                            
                        // }

                    }else{
                        alert("something wrong");
                        
                    }

                },
            });

          }else{

            alert("Error, Select a row");
            return;
          }
    }
});

// $year_month = document.getElementById("month").value;
// alert($year_month);

// // localStorage.setItem('year_month',year_month);

// // console.log(localStorage.getItem('year_month'));
// console.log($year_month);


$("#allowance_btn").click(function(event){
    
   

    var tbody = $("#final_tbl tbody");

    if (tbody.children().length > 0) {
        
    }else{

        var A=[];
           
        var rowCount1 = 0;
        var rowCount = 0;

            var attendance_array;
           
            $IDs = $("#addition_tbl input:checkbox:checked").each(function() {
                rowCount1 ++;
                attendance_array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();


          });
            // alert(attendance_array);
            A[0]=attendance_array[0];
            A[1]=attendance_array[1];
            A[2]=attendance_array[2];
            
                   
          var allowance_array=[];
            $('.chk').each(function() {
                if ($(this).is(':checked')) {// check the checked property with .is
                     
                       allowance_array=    
                                     
                        $(this).parents("tr").find(".food").val() + "," +
                        $(this).parents("tr").find(".holiday").val()+ "," +
                        $(this).parents("tr").find(".deduct").val();
                        rowCount++;
                      
                }
                
            });

            var fields = allowance_array.split(',');
            var food = fields[0];
            var holiday = fields[1];
            var incentive  =fields[2];


         if(rowCount >=1){   
                                
                var data = {
                        empID: attendance_array[0],
                        empName:attendance_array[1],
                        gross: attendance_array[2],
                        food: food,
                        holiday: holiday,
                        incentive: incentive
                                                                    
                    };

        
            $.ajax({
                type : "post",
                url: "<?php echo base_url().'index.php/runPayrollController/SetSalary'?>",
                cache: false,
                data :data ,
                success : function(json){
                    var obj=jQuery.parseJSON(json);
                    // var obj=json;
                    // alert(json);                    
                    
                   
                    if(obj){
                       
                        // for (var i=0;i<obj.length;i++) {
                                var rows = "";
                                var id = obj.id;                            
                                var empName = obj.empName;
                                var basic_salary = obj.basic_salary;                          
                                var emp_gross_salary = obj.emp_gross_salary; 
                                var salary_id = obj.salary_id;
                                var total_allowance = obj.total_allowance;
                                var total_deduct = obj.total_deduct;
                                var net_salary=obj.netSalary;                          

                                rows += "<tr><td>" + id + "</td><td>" + empName + "</td><td>" + salary_id + "</td><td>" + basic_salary + "</td><td>" + emp_gross_salary + "</td><td>" + total_allowance + "</td><td>" + total_deduct + "</td><td>" + net_salary + "</td></tr>";
                                $(rows).appendTo("#final_tbl tbody");                            
                               
                         // }
                    }else{
                        alert("something wrong");
                        
                    }

                },
            });

          }else{

            alert("Error, Select a row");
            return;
          }
    }
});

</script>

</body>
</html>