<?php include_once('includes/header.php') ?>
<?php include_once('includes/sidebar.php') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vehicle Registration
            <small></small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master Information</a></li>
            <li class="active">Employees</li>
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
                                <a href="#basic" data-toggle="tab" aria-controls="basic" role="tab" title="Basic Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#owner" data-toggle="tab" aria-controls="owner" role="tab" title="Owner Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#insurance" data-toggle="tab" aria-controls="insurance" role="tab" title="Licen & Insurance Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <form role="form">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="basic">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputVehicleNo">Vehicle No</label>
                                            <input type="vehicleNo" class="form-control" id="exampleVehicleNo" placeholder="Vehicle No">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Vehicle Type</label>
                                            <select class="form-control vehicleType" style="width: 100%;">
                                                <option selected="selected">Lorry</option>
                                                <option>Motor Bicycle</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputVehicleName">Vehicle Name</label>
                                            <input type="vehicleName" class="form-control" id="exampleVehicleName" placeholder="Vehicle Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEngineNo">Engine No</label>
                                            <input type="engineNo" class="form-control" id="exampleEngineNo" placeholder="Engine No">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputChassisNo">Chassis No</label>
                                            <input type="chassisNo" class="form-control" id="exampleChassisNo" placeholder="Chassis No">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="registrationDate" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="owner">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerName">Owner Name</label>
                                            <input type="ownerName" class="form-control" id="exampleOwnerName" placeholder="Owner Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerAddress">Owner Address</label>
                                            <input type="ownerAddress" class="form-control" id="exampleOwnerAddress" placeholder="Owner Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleOwnerTelephoneNo">Owner Telephone No</label>
                                            <input type="ownerTelephoneNo" class="form-control" id="exampleOwnerTelephoneNo" placeholder="Owner Telephone No">
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
                                            <label for="exampleLicenNo">Licen No</label>
                                            <input type="licenNo" class="form-control" id="exampleLicenNo" placeholder="Licen No">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Starting Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="startingDate" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ending Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="endingDate" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInsurancePolicyNo">Insurance Policy No</label>
                                            <input type="insurancePolicyNo" class="form-control" id="exampleInsurancePolicyNo" placeholder="Insurance Policy No">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInsuranceSerielNo">Insurance Seriel No</label>
                                            <input type="insuranceSerielNo" class="form-control" id="exampleInsuranceSerielNoNo" placeholder="Insurance Seriel No">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Insurance Starting Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="insuranceStartingDate" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Insurance Ending Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="insuranceEndingDate" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h3>Complete</h3>
                                <p>You have successfully completed all steps.</p>
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
<?php include_once('includes/footer.php') ?>

<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>template/bower_components/css/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>template/bower_components/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>template/bower_components/css/dist/js/adminlte.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>template/bower_components/css/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>template/bower_components/css/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>template/bower_components/css/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>template/bower_components/css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    }
</script>
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
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
