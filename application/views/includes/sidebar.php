

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
                        <li><a href="<?php echo base_url()?>index.php/SalesController">Account Summary</a></li>
                        <li><a href="#">Collection Reports</a></li>
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
                        <li><a href="<?php echo base_url()?>index.php/AttendanceController">Attendance</a></li>
                        <li><a href="<?php echo base_url()?>index.php/runPayrollController">Run Payroll</a></li>
                        <li><a href="#">Salary Reports</a></li>
                    </ul>
                </li>
        <!../PAyroll section..>

        <!..Petty cash section..>
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Petty cash</span></a></li>

        <!../Petty cash section..>

        <!..Employee section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Employee</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>index.php/EmployeeController">Add Employee</a></li>
                        <li><a href="<?php echo base_url()?>index.php/EmployeeController/manageEmployee">Manage employee</a></li>
                        <li><a href="<?php echo base_url()?>index.php/EmployeeController/addNewDesignation">Add designation</a></li>
                    </ul>
                </li>
        <!../Employee section..>

        <!..Vehicle section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Delivery Vehicles</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>index.php/VehicleController/registerVehicle">Add Vehicle</a></li>
                        <li><a href="<?php echo base_url()?>index.php/VehicleController/manageVehicle">Manage Vehicles</a></li>
                        <li><a href="<?php echo base_url()?>index.php/VehicleController/maintainVehicle">Maintain Vehicles</a></li>
                    </ul>
                </li>
        <!../Vehicle section..>




        <!..Master Information section..>
               <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Master Information</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                         <a href="#"><i class="fa fa-link"></i> <span>Customer Information</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>

                     <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>index.php/CustomerController">Add customer</a></li>
                        <li><a href="<?php echo base_url()?>index.php/CustomerController/customerManage">Manage customer</a></li>

                        </ul>                   

                        
                </li>
        <!../Master Information section..>

    </section>
    <!-- /.sidebar -->
  </aside>
