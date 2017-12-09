<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WRF Holdings(Pvt) Ltd</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url()?>template/dist/css/skins/_all-skins.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/morris.js/morris.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--custom styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/dist/css/style.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>

<!-- <script type="text/javascript">
function confirmUser(){
    var ask=confirm("Do you want to open an existing collection?");
    if(ask){
      window.location.href="<?php echo base_url()?>index.php/CustomerController";
     }
}
</script> -->


<style>
  
  #collectionTable tr:hover {
    background-color:#C5CBC7;
}
</style>


</head>

<body class="hold-transition skin-blue sidebar-mini">

<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>WRF</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>WRF</b>Holdings(Pvt) Ltd</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>template/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $this->session->userdata('loggerName'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>template/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $loggerName; ?>
                      <small><?php echo $loggerRole; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/UserController/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
      </div>

	</nav>
</header>



<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        

        
        <!..Daily sales section..> 
            
            
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Daily Sales</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">

                        <?php
                       if($loggerRole == ROLE_SUPERVISOR)
                        {
                        ?>

                        <li><a href="<?php echo base_url()?>index.php/SalesController/createInvoiceList">Invoice</a></li>

                       <li><a href="<?php echo base_url()?>index.php/SalesController">Account Summary</a></li>
                       <li><a href="<?php echo base_url()?>index.php/SalesController/loadRepayCredits">Repay Credits</a></li>


                      
                         <?php
                       }
                       if( $loggerRole == ROLE_ADMIN || $loggerRole == ROLE_SUPERVISOR )
                        {
                        ?>
                        <li><a href="<?php echo base_url()?>index.php/SalesController/displayCollectionReport">Collection Reports</a></li>

                       <?php 

                     }

                       ?>
                    </ul>
                </li>

        
        <!../Daily sales section..>


        <!..PAyroll section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Payroll</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">

                     <?php
                       if($loggerRole == ROLE_SUPERVISOR)
                        {
                        ?>
                        <li><a href="<?php echo base_url()?>index.php/CalendarController">Add Calendar Entries</a></li>
                        <li><a href="<?php echo base_url()?>index.php/CalendarController/viewCalendar">Manage Calendar</a></li>
                        <li><a href="<?php echo base_url()?>index.php/AddAttendanceController">Add Attendance </a></li>
                        
                        <li><a href="<?php echo base_url()?>index.php/RunPayrollController">Run Payroll</a></li>

                         <?php
                       }
                       if($loggerRole == ROLE_SUPERVISOR || $loggerRole == ROLE_ADMIN)
                        {
                        ?>
                        <li><a href="<?php echo base_url()?>index.php/AttendanceController">View Attendance </a></li>
                        <li><a href="#">Salary Reports</a></li>

                        <?php
                          }
                        ?>
                    </ul>
                </li>
        <!../PAyroll section..>

        <!..Petty cash section..>
                
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Petty cash</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                     <?php
                       if($loggerRole == ROLE_SUPERVISOR || $loggerRole == ROLE_ADMIN)
                        {
                        ?>
                        <li><a href="<?php echo base_url()?>index.php/PettyCashController">Add Petty Cash Type</a></li>
                        <?php
                       }
                       if($loggerRole == ROLE_SUPERVISOR )
                        {
                        ?>
                        <li><a href="<?php echo base_url()?>index.php/PettyCashController/addPettyCashExpenses">Add Expenses</a></li>
                        <?php
                          }
                          if($loggerRole == ROLE_ADMIN )
                        {
                        ?>
                        <li><a href="<?php echo base_url()?>index.php/PettyCashController/addPettyCashExpenses">Petty Cash Expenses</a></li>

                        <?php
                      }
                        ?>
                        
                    </ul>
                </li>

        <!../Petty cash section..>

      

        <!..Vehicle section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Delivery Vehicles</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>index.php/VehicleController">Add Vehicle</a></li>
                        <li><a href="#">Manage Vehicles</a></li>
                        <li><a href="#">Maintain Vehicles</a></li>
                    </ul>
                </li>
        <!../Vehicle section..>

        <!.. customer information..>
                    <li class="treeview">
                            <a href="#"><i class="fa fa-link"></i> <span>Customer</span>
                                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>index.php/CustomerController">Add customer</a></li>
                                <li><a href="<?php echo base_url()?>index.php/CustomerController/customerManage">Manage customers</a></li>
                            </ul>
                        </li>
                </li>
        <!.. customer information..>


         
        <!..Master Information section..>

        <?php
                       if($loggerRole == ROLE_ADMIN)
                        {
                        ?>
                        <li><a href="<?php echo base_url();?>index.php/OutletController">Outlets</a></li>
                        <li><a href="<?php echo base_url();?>index.php/UserController/listUsers">Users</a></li>

                        <li class="treeview">
                            <a href="#"><i class="fa fa-link"></i> <span>Employee</span>
                                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>index.php/EmployeeController">Add Employee</a></li>
                        <li><a href="<?php echo base_url()?>index.php/EmployeeController/manageEmployee">Manage employee</a></li>
                            </ul>
                        </li>
                </li>
                

              <?php  }  ?>

                    </ul>

        <!../Master Information section..>



        
    </section>
    <!-- /.sidebar -->
  </aside>

