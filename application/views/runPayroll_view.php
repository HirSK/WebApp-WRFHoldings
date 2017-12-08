



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
                                <a href="#basic" data-toggle="tab" aria-controls="basic" role="tab" title="Select Month & Employee">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#owner" data-toggle="tab" aria-controls="owner" role="tab" title="Basic & Allowances">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#insurance" data-toggle="tab" aria-controls="insurance" role="tab" title="Deductions">
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

                    <form role="form" action="#" method="POST">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="basic">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Select Month</label>
                                            <select class="form-control vehicleType" style="width: 100%;" name="vehicleType" required='required'>
                                                <option selected="selected">January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Select Employee</label>
                                            <select class="form-control vehicleType" style="width: 100%;" name="vehicleType" required='required'>
                                            <option value>--Select Employee--</option>
                                        <?php
                                            foreach ($employeeList as  $employee) {                                        

                                                echo '<option value="'.$employee->EmployeeNameWithInitials.'">'.$employee->EmployeeNameWithInitials.'</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step">Save and Continue</button></li>
                                </ul>

                            </div>

                            <div class="tab-pane" role="tabpanel" id="owner">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerName">Basic Salary</label>
                                            <input type="ownerName" class="form-control" name="exampleOwnerName" placeholder="No. of Working Days" required='required'>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerAddress">Sales Commission</label>
                                            <input type="ownerAddress" class="form-control" name="exampleOwnerAddress" placeholder="Enter Value">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerTelephoneNo">Meal Allowance</label>
                                            <input type="ownerTelephoneNo" class="form-control" name="exampleOwnerTelephoneNo" placeholder="No. of Working days">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerTelephoneNo">Special Incentive</label>
                                            <input type="ownerTelephoneNo" class="form-control" name="exampleOwnerTelephoneNo" placeholder="Enter amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerTelephoneNo">Weekly Holiday Payment</label>
                                            <input type="ownerTelephoneNo" class="form-control" name="exampleOwnerTelephoneNo" placeholder="Enter amount">
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>

                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="insurance">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleLicenNo">Salary Advances</label>
                                            <input type="licenNo" class="form-control" name="exampleLicenNo" placeholder="Enter amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleLicenNo">No Pay</label>
                                            <input type="licenNo" class="form-control" name="exampleLicenNo" placeholder="Enter amount">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInsurancePolicyNo">EPF Contribution</label>
                                            <input type="insurancePolicyNo" class="form-control" name="exampleInsurancePolicyNo" placeholder="Enter Employee contribution %">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInsuranceSerielNo">Over Payments</label>
                                            <input type="insuranceSerielNo" class="form-control" name="exampleInsuranceSerielNoNo" placeholder="Enter amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInsuranceSerielNo">Fines/Shortages</label>
                                            <input type="insuranceSerielNo" class="form-control" name="exampleInsuranceSerielNoNo" placeholder="Enter amount">
                                        </div>
                                    </div>
                                </div>


                                

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h4>Click Finalize button to submit and finalize payslips!</h4>
                                <!-- <p>You have successfully completed all steps.</p> -->
                                <input type="submit" class="btn btn-primary next-step" name="submit" value="Finalize">
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <!--<input type="submit" name="submit" value="Next">-->
                    </form>
                </div>
            </section>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
<script src="<?php echo base_url() ?>template/bower_components/inputmask/dist/inputmask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>template/plugins/input-mask/jquery.inputmask.extensions.js"></script>


<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script>

</body>
</html>