<?php include_once('includes/header.php') ?>
<?php include_once('includes/sidebar.php') ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select Multiple Rows With Checkboxes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="css/dataTables.checkboxes.css" rel="stylesheet"/>
</head>
<body>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Run Payroll
                <small>#Outlet name here</small>
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
        <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Select Employee">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Basic & Allowances">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Deductions">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Finalize Payroll">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">




                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="col-md-12">
                        <h3>Attendance Submission</h3>
                        </div>




                            <section class="content">



                                    <!-- /.box-header -->

                                        <form role="form">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label for="text3">Month</label>

                                                    <input type="text" class="form-control" id="text3" placeholder="Enter..">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label >Number of working Days </label>

                                                    <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label>No of weekly Holidays</label>

                                                    <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                                </div>
                                            </div>

                                        </form>





                                <div class="container" style="margin:15px auto">
                                    <form id="myform" method="post">
                                        <p><b>Selected rows data</b></p>
                                        <pre id="view-rows"></pre>
                                        <p><b>Form data as submitted to the server</b></p>
                                        <pre id="view-form"></pre>
                                        <p><button class="btn btn-danger">View Selected</button><br/></p>
                                        <table id="mytable" class="table table-bordered table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Emp ID</th>
                                                <th>Emp Name</th>
                                                <th>Position</th>
                                                <th>No. of leave days</th>
                                                <th>No. of absent days</th>

                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Emp ID</th>
                                                <th>Emp Name</th>
                                                <th>Position</th>
                                                <th>No. of leave days</th>
                                                <th>No. of absent days</th>

                                            </tr>
                                            </tfoot>

                                        </table>
                                    </form>

                                </div>
                            </section>


                        <div class="col-md-12">
                        <ul class="list-inline ">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                        </div>

                    </div>

                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2</h3>
                        <p>This is step 2</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>This is step 3</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
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
        <!-- /.content -->
    </div>

    </div>

    <?php include_once('includes/footer.php') ?>



    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../../css/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../css/dist/js/adminlte.min.js"></script>
<!-- InputMask -->
<script src="../../../css/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../../css/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../../css/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="../../../css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
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


<script src="../../../newCss/js/jquery.dataTables.min.js"></script>
<script src="../../../newCss/js/dataTables.bootstrap.min.js"></script>
<script src="../../../newCss/js/dataTables.checkboxes.min.js"></script>

<script>
$(document).ready(function(){
    var mytable = $("#mytable").DataTable({
        ajax: '../../../newCss/data.json',
        columnDefs: [
            {
                targets: 0,
                checkboxes: {
                    seletRow: true
                }
            }
        ],
        select:{
            style: 'multi'
        },
        order: [[1, 'asc']]
    })
    $("#myform").on('submit', function(e){
        var form = this
        var rowsel = mytable.column(0).checkboxes.selected();
        $.each(rowsel, function(index, rowId){
            $(form).append(
                $('<input>').attr('type','hidden').attr('name','id[]').val(rowId)
            )
        })
        $("#view-rows").text(rowsel.join(","))
        $("#view-form").text($(form).serialize())
        $('input[name="id\[\]"]', form).remove()
        e.preventDefault()
    })
})
</script>



</body>
</html>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
