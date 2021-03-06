

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?php echo base_url() ?>index.php/UserController/addNewUser" method="post" role="form">
                        <div class="box-body">
                            <div class="row">

                            <div class="col-xs-12 col-lg-12 col-sm-12">                                
                                 <div class="col-sm-4 col-xs-12">
                                    <div class="form-group" >
                                        <label for="role">Role</label>
                                        <select class="form-control required" id="role" name="role" required="">
                                            <option value="0">Select Role</option>
                                           <option>Admin</option>
                                           <option>Outlet Supervisor</option>
                                        </select>
                                    </div>
                                </div>   
                                                                  

                                <div class="col-sm-4 col-xs-12">                                
                                    <div class="form-group">
                                        <label for="OutletID">Outlet ID</label>
                                        <input type="text" class="form-control required" id="OutletID" name="OutletID" maxlength="10" required="">
                                    </div>
                                    
                                </div>

                                <div class="col-sm-4 col-xs-12">                                
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control required" id="Name" name="Name" maxlength="45" onkeypress="Javascript: if (event.keyCode==13) setID();" required="">
                                    </div>
                                    
                                </div>

                                <div class="col-sm-4 col-xs-12">                                
                                    <div class="form-group">
                                        <label for="empID">Employee ID</label>
                                        <input type="text" class="form-control required" id="empID" name="empID" maxlength="10" required="">
                                    </div>
                                    
                                </div>

                                 <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control required digits" id="mobile" name="mobile" maxlength="10" required="">
                                    </div>
                                </div>
                                
                            </div>


                            <div class="row">
                                <div class="col-xs-12 col-lg-12 col-sm-12">

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="username">Username[Ex : S/01/20]</label>
                                            <input type="text" class="form-control required" id="username" name="username" maxlength="50" placeholder="RoleName/OutletID/EmpID" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control required" id="password"  name="password" maxlength="20" required="">
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="cpassword">Confirm Password</label>
                                            <input type="password" class="form-control required equalTo" id="cpassword" name="cpassword" maxlength="20" required="">
                                        </div>
                                    </div>
                            
                            
                               

                             </div>
                            </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
           <!--  <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div> -->
        </div>    
    </section>
    
</div>


<!-- REQUIRED JS SCRIPTS -->

<script src="<?php echo base_url(); ?>template/js/addUser.js" type="text/javascript"></script>

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>

<script type="text/javascript">
    function setID()
    {
     if($('#Name').val()){
            alert("got");
            // $.ajax({
            //     type : "post",
            //     url: "<?php echo base_url().'index.php/SalesController/getInvoiceDetails'?>",
            //     cache: false,
            //     data : {id :  $('#idInvoice').val()},
            //     success : function(json){
            //         var obj=jQuery.parseJSON(json);

            //         if(obj[0]){
            //             $('#InvoiceValue').val(obj[0].InvoiceValue);
            //             $('#CustomerCode').val(obj[0].Customer_idCustomer);
            //             $('#CustomerName').val(obj[0].CustomerName);                        
            //         }else{
            //             alert("The invoice id has not been pre ordered,First add it to pre order invoice list");
            //             clearTextBoxes();
            //         }

            //     },
            // });
        }else{
            alert("Please enter the invoice id and hit enter");
            // clearTextBoxes();
        }  
   }
</script>