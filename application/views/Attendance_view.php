


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Attendance Submission
                
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
            
            <form role="form">
                



                            <section class="content">



                                    <!-- /.box-header -->

                                      
                                            <!-- text input -->
                                            <div class="row" style="padding-left: 12px;">
                                                <div class="col-md-4">
                                                    <label>Month</label>

                                                    <input type="text" class="form-control" placeholder="Enter..">
                                                    <br>
                                                </div>

                                          
                                            
                                                <div class="col-md-4">
                                                   <label>Number of working Days </label>

                                                    <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                                     <br> 
                                                </div>
                                            

                                            
                                                <div class="col-md-3">
                                                    <label>No of weekly Holidays</label>

                                                    <input type="text" class="form-control" placeholder="Enter ..." disabled>  <br>
                                                </div>
                                            
                                                </div>
                                        



                                   <form id="myform" method="post">
                                       
                                        
                                    <div class="col-md-11">


                                       <table id="mytable" class="table table-bordered table-striped table-hover">
                                            <thead>

                                            <tr>
                                        <th><input name="checkbox[]" id="master" type="checkbox" /></th>
                                        <th>Employee ID</th>
                                        <th>Employee Full Name</th>
                                        <th>Name with Initials</th>
                                        <th>NIC Number</th>
                                        <th>Number of Leaves Days</th>
                                        <th>Number of Attended Days</th>
                                        



                                    </tr>

                                            <?php  
                                             foreach ($emp as $row)  
                                             {  
                                                ?><tr>
                                                <td><input name="checkbox[]" class="case" type="checkbox" /></td>  
                                                <td><?php echo $row->idEmployee;?></td>  
                                                <td><?php echo $row->EmployeeFullName;?></td> 
                                                <td><?php echo $row->EmployeeNameWithInitials;?></td>  
                                                <td><?php echo $row->EmployeeNIC;?></td>

                                                <td>
                                                    <input type="text" class="form-control" name="EmpSearch[idEmployee]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="EmpSearch[EmployeeFullName]">
                                                </td> 
                                                
                                                    
                                             <?php }  
                                             ?> 
                                            
                                            </thead>
                                           
                                        </table>
                                         </div>
                                    </form>
                                   
                                  

                            
                            </section>


                        <div class="col-md-12">
                        <ul class="list-inline ">
                            <li><button type="submit" class="btn btn-primary next-step">Save </button></li>
                        </ul>
                        </div>

                    
                    <div class="clearfix"></div>
               
            </form>
        </div>
    </section>

</div>
        <!-- /.content -->
    </div>

    </div>

    <?php include "includes/footer.php";?>



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

<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

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




<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
