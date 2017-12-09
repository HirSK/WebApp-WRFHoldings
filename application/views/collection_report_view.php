
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Collection Reports
                
            </h1>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li> 
            
                <li class="active">Collection Report</li>
            </ol>
        </section>

        <!-- Main content -->

        <div class="container">
            
        <section class="content" style="margin-bottom: auto;">
        <div class="wizard" style="margin-right: 40px;">
            
            <form role="form" action="<?php echo base_url()?>index.php/SalesController/viewCollection" method="POST">
                



                            <section class="content">



                                    <!-- /.box-header -->

                                      
                                            <!-- text input -->
                                            <div class="row">
                                                

                                          
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label for="inputCustomerRegDate">Get Collection From</label>

                                                    <div class="input-group date">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right"  name="getCollectionFrom" id="datepicker" required>
                                                    </div>
                                    <!-- /.input group -->
                                            </div>
                                                     <br> 
                                                </div>
                                            

                                            
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                    <label for="inputCustomerRegDate">Get Collection To</label>

                                                    <div class="input-group date">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right"  name="getCollectionTo" id="datepicker1" >
                                                    </div>
                                    <!-- /.input group -->
                                                    </div>
                                                     <br> 
                                                    
                                            
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                               
                                                        <label>Select Register</label>
                                                            <select class="form-control" id="position" name="position" required>
                                                                    <option value="Cash Register">Cash Register </option>
                                                                    <option value="Cheque Register">Cheque Register</option>
                                                                    <option value="Credit Register">Credit Register</option>
                                                                    <option value="Daily collection summary">Daily collection summary</option>
                                                                    
                                                            </select>

                                                            <br>

                                                   
                                                            
                                                        <label>Select Outlet</label>

                                                         <?php
                                                       if($loggerRole == ROLE_ADMIN)
                                                        {
                                                        ?>
                                                        <select class="form-control" name="outletId" required>
                                                          <?php foreach ($outlet as $id) {
                                                                # code...
                                                                ?>
                                                                    <option><?php echo $id->idOutlet ?></option>

                                                                <?php

                                                           } 

                                                           ?>
                                                                   
                                                            
                                                        </select>


                                                        <?php


                                                            }if( $loggerRole == ROLE_SUPERVISOR){

                                                            ?>

                                                            <input class="form-control" name="outletId" value="<?php echo (int)($this->session->userdata('loggerOutletID')); ?>"  readonly required>



                                                       <?php
                                                        }

                                                        ?>

                                                    </div>
                                                </div>


                                                <div class="row" style="padding-top: 22px;">
                                                <div class="col-md-2">

                                                <button type="submit" class="btn btn-default preview-add-button"> GO</button>
                                                
                                                </div>

                                                </div>
                                        </div> 


                 </form> 



         </div> 


         <div class="wizard" style="margin-right: 40px;">     
                
                    
         <div class="col-xs-12 col-lg-12" style="padding-top: 10px">

                <!-- general form elements -->
            <div class="box box-primary" style="padding-top: 0px">
                                 
           <?php 
           
             if( $collection != NULL){
             ?>



             <div class="box-body table-responsive">
                        <table id='collectionTable' class="table table-striped table-bordered col-lg-12">

                        <thead >
                            
                            <tr>
                                <th>Collection ID</th>
                                
                                <th>Collection Date</th>
                               
                                
                                
                            </tr>

                        

                        </thead>

                    
                    
                    



                    <?php
                        
                        foreach ($collection as $row){


                            

                            ?><tr data-id=<?php echo $row->idCollection;?>>
                            <td><?php echo $row->idCollection;?></td>
                            <td><?php echo $row->CollectionDate;?></td>  
                              
                            </tr>

                            
                         <?php 
                            
                         
                        }
                    ?>
                    </table>

                    <?php 
                     }

                     ?>




                    </div>
                </div>


                     

                      </div>



        </section>



</div>

</div>


           


                    
                    
                   
           

     
      



   

  



    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
   

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- AdminLTE App -->
<!-- InputMask -->

<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script>

<script >
    $(function() {
        //Date picker
        $('#datepicker1').datepicker({
          autoclose: true
        })
    })

</script>

<script>
    $('#collectionTable tr').hover(function() {
    $(this).addClass('hover');
        }, function() {
            $(this).removeClass('hover');
        });

</script>


<script>
    $(document).ready(function() {

    $('table tbody tr').click(function(){


        //document.getElementById("myModal").style.display = "block";


       // var value_of_dropdown  = $(this).find('select[name="position"]').val();

        var e = document.getElementById("position");
        var str = e.options[e.selectedIndex].text;

        var getIdFromRow = $(event.target).closest('tr').data('id');

        console.log(getIdFromRow);

        var data = Array();

        $("table tr").each(function(i, v){
            data[i] = Array();
            $(this).children('td').each(function(ii, vv){
            data[i][ii] = $(this).text();
            }); 
        })

        var date = data[getIdFromRow]['1'];

        console.log(str);



        $.ajax({
        type: "GET",
        url: "http://localhost/WebApp-WRFHoldings/index.php/SalesController/viewInoviceDetail" ,
        data: {"strUser": getIdFromRow,"position":str}, 
        dataType:'JSON', 
        success: function(response){

        var dic=[];


        //var d2 = response.data.Coldate.CollectionDate;
         

        for (i = 0, len =response.data.UserDetailsone.length, text = ""; i < len; i++) { 
            

            var d1 =response.data.UserDetailsone[i];
            

            dic[i]=d1;

        }


        console.log(dic);
        
        localStorage.setItem('data1', JSON.stringify(dic));
        localStorage.setItem('data2', JSON.stringify(date));
        

        window.location.href = "http://localhost/WebApp-WRFHoldings/index.php/SalesController/new1";
    

        
        
    }
    });

    });
});

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








<!-- bootstrap datepicker -->





