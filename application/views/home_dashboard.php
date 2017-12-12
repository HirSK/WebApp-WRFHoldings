


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">




  <section class="content-header">
            <h1>
                Welcome to WRF Holdings (pvt) Ltd
                <br>
                <small><b><?php echo $this->session->userData('loggerOutletName') ; 
                      echo "<br>";
                       ?>
                        
                      </b></small>
            </h1>

            <ol class="breadcrumb">                       
                <li class="active">Home</li>
            </ol>
        </section>


        <section class="content" style="margin-bottom: auto;">


          


    <?php if($loggerRole == ROLE_ADMIN){ ?>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Outlets</span>
              <span class="info-box-number" id="outl">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Employees</span>
              <span class="info-box-number" id="empl">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-cab"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vehicles</span>
              <span class="info-box-number" id="vehl">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number" id="custl">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
       
        <div class="row">
            

              <div class="col-md-6">
               

                


                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Daily Sales Summary(OUTLET 1)</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              
                              <div class="box-body chart-responsive">
                                <div  id="saleschart" style="height: 300px;"></div>
                              </div>

                            
                          </div>





                       

                      </div>







                      <div class="col-md-6">
               

                


                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Daily Sales Summary(OUTLET 2)</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              
                              <div class="box-body chart-responsive">
                                <div  id="saleschart1" style="height: 300px;"></div>
                              </div>

                            
                          </div>





                       

                      </div>


                    </div>



                    <div class="row">








                      <div class="col-md-6">
               

                


                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Daily Sales Summary(OUTLET 3)</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              
                              <div class="box-body chart-responsive">
                                <div  id="saleschart2" style="height: 300px;"></div>
                              </div>

                            
                          </div>





                       

                      </div>





                      <div class="col-md-6">
               

                


                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Daily Sales Summary(OUTLET 4)</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              
                              <div class="box-body chart-responsive">
                                <div  id="saleschart3" style="height: 300px;"></div>
                              </div>

                            
                          </div>





                       

                      </div>


                    </div>



            <div class="row">
            <div class="col-md-6">
              <!-- LINE CHART -->
            
        <iframe src="https://calendar.google.com/calendar/embed?src=en.lk%23holiday%40group.v.calendar.google.com&ctz=Asia%2FColombo" style="border: 0" width="584.44" height="310" frameborder="0" scrolling="no"></iframe>
          

          </div>
             <div class="col-md-6">

              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Invoices</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                 
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid1" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv1">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                 
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid2" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv2">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid3" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv3">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                 
                 <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid4" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv4">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>


                <li class="item">
                 
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid5" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv5">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
           
            <!-- /.box-footer -->
          </div>
          </div>

             </div>





                    



          <div class="row">
            <div class="col-md-7">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Customers Hierachy</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                
                <div class="box-body chart-responsive">
                  <div  id="num_customers" style="height: 300px;"></div>
                </div>

              
            </div>

          </div>



          <div class="col-md-5">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Number of Employees</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                
                <div class="box-body chart-responsive">
                  <div  id="bar_chart" style="height: 300px;"></div>
                </div>

              
            </div>

          </div>


                    </div>



        <?php }elseif($loggerRole == ROLE_SUPERVISOR){?>






          <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Outlet No</span>
              <span class="info-box-number" ><?php echo $this->session->userdata('loggerOutletID') ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Employees</span>
              <span class="info-box-number" id="emplsup">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-cab"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vehicles</span>
              <span class="info-box-number" id="vehlsup">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number" id="custlsup">text</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>



          <div class="row">
            

              <div class="col-md-6">
               

                


                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Daily Sales Summary(OUTLET 1)</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              
                              <div class="box-body chart-responsive">
                                <div  id="saleschartsup" style="height: 300px;"></div>
                              </div>

                            
                          </div>





                       

                      </div>



                      <div class="col-md-6">
              <!-- LINE CHART -->
            
        <iframe src="https://calendar.google.com/calendar/embed?src=en.lk%23holiday%40group.v.calendar.google.com&ctz=Asia%2FColombo" style="border: 0" width="584.44" height="350" frameborder="0" scrolling="no"></iframe>
          

          </div>


                    </div>




          <div class="row">
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Customers Hierachy</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                
                <div class="box-body chart-responsive">
                  <div  id="num_customers" style="height: 300px;"></div>
                </div>

              
            </div>

          </div>
             <div class="col-md-6">

              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Invoices</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                 
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid1sup" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv1sup">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                 
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid2sup" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv2sup">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid3sup" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv3sup">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                 
                 <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid4sup" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv4sup">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>


                <li class="item">
                 
                  <div class="product-info">

                    <div class="row">
                      
                    <div class="col-md-3">
                    <span ><b>Invoice ID</b></span>

                    </div>
                    <div class="col-md-3">
                    <span id="invid5sup" class="product-description">
                            No Recent Collections
                        </span>

                    </div>

                    <div class="col-md-3">
                    <span><b>Invoice Value(Rs.)</b></span>
                    </div>
                    <div class="col-md-3">
                    <span class="label label-warning" id="inv5sup">0.00</span>
                   </div>
                    </div>
                   
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
           
            <!-- /.box-footer -->
          </div>
          </div>

             </div>





        <?php  

      }

        ?>





                
           </div>


                </section>
                

              
                <!-- /.box-body -->
              
        

  

</div>
<!-- /.content-wrapper -->




<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->


<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url()?>template/bower_components/newCSS/bower_components/jquery-ui/jquery-ui.min.js"></script>


<script src="<?php echo base_url()?>template/bower_components/newCSS/bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>template/bower_components/newCSS/bower_components/moment/moment.js"></script>


<script src="<?php echo base_url()?>template/bower_components/newCSS/dist/js/demo.js"></script>

<script src="<?php echo base_url()?>template/calendarTemp/src/clndr.js"></script>
<script src="<?php echo base_url()?>template/calendarTemp/Underscore.js"></script>





<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/morris.js/morris.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<?php if($loggerRole == ROLE_ADMIN){ ?>
  
<script type="text/javascript">
      // Load the Visualization API and the line package.
      google.charts.load('current', {'packages':['bar']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
  
    function drawChart() {

  
        $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/chartData',
          
        success: function (data1) {
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable();
  
      
      data.addColumn('string', 'Outlet ID');
      data.addColumn('number', 'Number of employees');
     
      var jsonData = $.parseJSON(data1);
      
      for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i].Outlet_idOutlet, parseInt(jsonData[i].Number_of_employee)]);
      }
      var options = {
       
        
        height: 300,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
         
      };
      var chart = new google.charts.Bar(document.getElementById('bar_chart'));
      chart.draw(data, options);
       }
     });
    }
  </script>


  <script type="text/javascript">




    
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {


        // var e = document.getElementById("outlet");
        // var str = e.options[e.selectedIndex].text;


          $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/pieChartData',

        // data: {"outlet":str},

        dataType:'JSON',
          
        success: function (response) {


          document.getElementById('outl').innerHTML = response.data.out[0]['out'];
          document.getElementById('custl').innerHTML = response.data.cust[0]['cust'];
          document.getElementById('vehl').innerHTML = response.data.vehi[0]['vehi'];
          document.getElementById('empl').innerHTML = response.data.emp[0]['emp'];


         
          
          
          
          



          for (i = 0, len =response.data.recentInvoices.length, text = ""; i < len; i++) { 

          

              switch (i) {

                  case 0:
                     document.getElementById('invid1').innerHTML = response.data.recentInvoices[0]['invId'];
                     document.getElementById('inv1').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                     break;
                      
                  case 1:
                     document.getElementById('invid2').innerHTML = response.data.recentInvoices[1]['invId'];
                     document.getElementById('inv2').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                     break;
                      
                  case 2:
                      document.getElementById('invid3').innerHTML = response.data.recentInvoices[2]['invId'];
                      document.getElementById('inv3').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                      break;
                     
                  case 3:
                     document.getElementById('invid4').innerHTML = response.data.recentInvoices[3]['invId'];
                     document.getElementById('inv4').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                      break;
                      
                  case 4:
                      document.getElementById('invid5').innerHTML = response.data.recentInvoices[4]['invId'];
                      document.getElementById('inv5').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                  break;


            }


          }




          var cash=0;
          var returnCredit =0;
          var credit = 0;
          var cheque = 0;

          

          for (i = 0, len =response.data.collection3.length, text = ""; i < len; i++) { 
            

            cash+=parseInt(response.data.collection3[i]['cash']);
            

            

        }


        for (i = 0, len =response.data.collection4.length, text = ""; i < len; i++) { 
            

             returnCredit+=(parseInt(response.data.collection4[i]['total_credit'])-parseInt(response.data.collection4[i]['credit_topay']));
            

            

        }

        


        for (i = 0, len =response.data.collection2.length, text = ""; i < len; i++) { 
            

            credit+=parseInt(response.data.collection2[i]['total_credit']);
            

            

        }


         for (i = 0, len =response.data.collection1.length, text = ""; i < len; i++) { 
            

            cheque+=parseInt(response.data.collection1[i]['ChequeAmount']);
            

            

        }


        var sum = cash+returnCredit+cheque;


        console.log(sum);

        var chequePrecent = (cheque/sum)*100;
        var cashPrecent = ((parseInt(cash)+parseInt(returnCredit))/sum)*100;
        var creditPrecent = (credit/sum)*100;


        var totalCash = parseInt(cash)+parseInt(returnCredit);

  

        var data = google.visualization.arrayToDataTable([
             ['Task', 'Percentage'],
             ['Daily Cash Amount', totalCash ],
             ['Daily cheque Amount',  cheque],
             ['Daily Credit Amount',  credit],
         
         ]);

        var options = {
          title: 'Daily Sales Summary',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('saleschart'));
        chart.draw(data, options);
         }
     });
      }
  </script>


  <script type="text/javascript">
    

    var clndr = {};

$( function() {

  var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');

  var events = [
    { <a href="https://www.jqueryscript.net/time-clock/">date</a>: currentMonth + '-' + '10', title: 'Persian Kitten Auction', location: 'Center for Beautiful Cats' },
    { date: currentMonth + '-' + '19', title: 'Cat Frisbee', location: 'Jefferson Park' },
    { date: currentMonth + '-' + '23', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
    { date: nextMonth + '-' + '07',    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
  ];

  clndr = $('#full-clndr').clndr({
    template: $('#full-clndr-template').html(),
    events: events
  });
});
  </script>








  <script type="text/javascript">




    
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {


        // var e = document.getElementById("outlet");
        // var str = e.options[e.selectedIndex].text;


          $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/pieChartData1',

        // data: {"outlet":str},

        dataType:'JSON',
          
        success: function (response) {

          var cash=0;
          var returnCredit =0;
          var credit = 0;
          var cheque = 0;

          

          for (i = 0, len =response.data.collection3.length, text = ""; i < len; i++) { 
            

            cash+=parseInt(response.data.collection3[i]['cash']);
            
        }


        for (i = 0, len =response.data.collection4.length, text = ""; i < len; i++) { 
            

             returnCredit+=(parseInt(response.data.collection4[i]['total_credit'])-parseInt(response.data.collection4[i]['credit_topay']));
            

            

        }

        


        for (i = 0, len =response.data.collection2.length, text = ""; i < len; i++) { 
            

            credit+=parseInt(response.data.collection2[i]['total_credit']);
            

            

        }


         for (i = 0, len =response.data.collection1.length, text = ""; i < len; i++) { 
            

            cheque+=parseInt(response.data.collection1[i]['ChequeAmount']);
            

            

        }


        var sum = cash+returnCredit+cheque;


        console.log(sum);

        var chequePrecent = (cheque/sum)*100;
        var cashPrecent = ((parseInt(cash)+parseInt(returnCredit))/sum)*100;
        var creditPrecent = (credit/sum)*100;


        var totalCash = parseInt(cash)+parseInt(returnCredit);

  

        var data = google.visualization.arrayToDataTable([
             ['Task', 'Percentage'],
             ['Daily Cash Amount', totalCash ],
             ['Daily cheque Amount',  cheque],
             ['Daily Credit Amount',  credit],
         
         ]);

        var options = {
          title: 'Daily Sales Summary',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('saleschart1'));
        chart.draw(data, options);
         }
     });
      }
  </script>




   <script type="text/javascript">




    
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {


        // var e = document.getElementById("outlet");
        // var str = e.options[e.selectedIndex].text;


          $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/pieChartData2',

        // data: {"outlet":str},

        dataType:'JSON',
          
        success: function (response) {

          var cash=0;
          var returnCredit =0;
          var credit = 0;
          var cheque = 0;

          

          for (i = 0, len =response.data.collection3.length, text = ""; i < len; i++) { 
            

            cash+=parseInt(response.data.collection3[i]['cash']);
            
        }


        for (i = 0, len =response.data.collection4.length, text = ""; i < len; i++) { 
            

             returnCredit+=(parseInt(response.data.collection4[i]['total_credit'])-parseInt(response.data.collection4[i]['credit_topay']));
            

            

        }

        


        for (i = 0, len =response.data.collection2.length, text = ""; i < len; i++) { 
            

            credit+=parseInt(response.data.collection2[i]['total_credit']);
            

            

        }


         for (i = 0, len =response.data.collection1.length, text = ""; i < len; i++) { 
            

            cheque+=parseInt(response.data.collection1[i]['ChequeAmount']);
            

            

        }


        var sum = cash+returnCredit+cheque;


        console.log(sum);

        var chequePrecent = (cheque/sum)*100;
        var cashPrecent = ((parseInt(cash)+parseInt(returnCredit))/sum)*100;
        var creditPrecent = (credit/sum)*100;


        var totalCash = parseInt(cash)+parseInt(returnCredit);

  

        var data = google.visualization.arrayToDataTable([
             ['Task', 'Percentage'],
             ['Daily Cash Amount', totalCash ],
             ['Daily cheque Amount',  cheque],
             ['Daily Credit Amount',  credit],
         
         ]);

        var options = {
          title: 'Daily Sales Summary',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('saleschart2'));
        chart.draw(data, options);
         }
     });
      }
  </script>




   <script type="text/javascript">




    
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {


        // var e = document.getElementById("outlet");
        // var str = e.options[e.selectedIndex].text;


          $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/pieChartData3',

        // data: {"outlet":str},

        dataType:'JSON',
          
        success: function (response) {

          var cash=0;
          var returnCredit =0;
          var credit = 0;
          var cheque = 0;

          

          for (i = 0, len =response.data.collection3.length, text = ""; i < len; i++) { 
            

            cash+=parseInt(response.data.collection3[i]['cash']);
            
        }


        for (i = 0, len =response.data.collection4.length, text = ""; i < len; i++) { 
            

             returnCredit+=(parseInt(response.data.collection4[i]['total_credit'])-parseInt(response.data.collection4[i]['credit_topay']));
            

            

        }

        


        for (i = 0, len =response.data.collection2.length, text = ""; i < len; i++) { 
            

            credit+=parseInt(response.data.collection2[i]['total_credit']);
            

            

        }


         for (i = 0, len =response.data.collection1.length, text = ""; i < len; i++) { 
            

            cheque+=parseInt(response.data.collection1[i]['ChequeAmount']);
            

            

        }


        var sum = cash+returnCredit+cheque;


        console.log(sum);

        var chequePrecent = (cheque/sum)*100;
        var cashPrecent = ((parseInt(cash)+parseInt(returnCredit))/sum)*100;
        var creditPrecent = (credit/sum)*100;


        var totalCash = parseInt(cash)+parseInt(returnCredit);

  

        var data = google.visualization.arrayToDataTable([
             ['Task', 'Percentage'],
             ['Daily Cash Amount', totalCash ],
             ['Daily cheque Amount',  cheque],
             ['Daily Credit Amount',  credit],
         
         ]);

        var options = {
          title: 'Daily Sales Summary',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('saleschart3'));
        chart.draw(data, options);
         }
     });
      }
  </script>



  <?php 

}  

?>








  <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {



         $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/lineChartData',

        // data: {"outlet":str},

        dataType:'JSON',
          
        success: function (response) {

        var jan =0;
        var feb = 0;
        var mar = 0;
        var apr = 0;
        var may = 0;
        var jun = 0;
        var jul = 0;
        var aug = 0;
        var sep = 0;
        var oct =0;
        var nov = 0;
        var dec =0;

         for (i = 0, len =response.data2.custNum.length, text = ""; i < len; i++) { 


         

          var month = parseInt(response.data2.custNum[i]['mon']);

          

          switch (month) {

              case 1:
                 jan = parseInt(response.data2.custNum[i]['Nocust']);
                 break;
                  
              case 2:
                 feb = parseInt(response.data2.custNum[i]['Nocust']);
                 break;
                  
              case 3:
                  mar = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                 
              case 4:
                  apr = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                  
              case 5:
                  may = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                  
            
              case 6:
                  jun = parseInt(response.data2.custNum[i]['Nocust']);
                  break;

             
              case 7:
                 jul = parseInt(response.data2.custNum[i]['Nocust']);
                 break;
                  
              case 8:
                  aug = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                  
              case 9:
                  sep = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                 
              case 10:
                  oct = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                  
              case 11:
                  nov = parseInt(response.data2.custNum[i]['Nocust']);
                  break;
                  
              case 12:
                  dec = parseInt(response.data2.custNum[i]['Nocust']);
                  break;


              default:  document.write("Unknown grade<br />");
                

          }

        
            
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Number of Customers');
          
            

            

        }

         data.addRows([
         
          ['JAN',  jan],
          ['FEB',  feb],
          ['MAR',  mar],
          ['APR',  apr],
          ['MAY',  may],
          ['JUN',  jun],
          ['JUL',  jul],
          ['AUG',  aug],
          ['SEP',  sep],
          ['OCT',  oct],
          ['NOV',  nov],
          ['DEC',  dec]
        ]);

        var options = {
        

        legend: 'none',
          series: {
            0: { color: '#e2431e' },


          }
        
      };

      var chart = new google.charts.Line(document.getElementById('num_customers'));

      chart.draw(data, google.charts.Line.convertOptions(options));

            }
     });
      }
  </script>



  <?php if ($loggerRole == ROLE_SUPERVISOR) { ?>








   <script type="text/javascript">




    
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {


        // var e = document.getElementById("outlet");
        // var str = e.options[e.selectedIndex].text;


          $.ajax({
        type: 'POST',
        url: 'http://localhost/WebApp-WRFHoldings/index.php/ChartController/pieChartDataSup',

        // data: {"outlet":str},

        dataType:'JSON',
          
        success: function (response) {


          
          document.getElementById('custlsup').innerHTML = response.data.cust[0]['cust'];
          document.getElementById('vehlsup').innerHTML = response.data.vehi[0]['vehi'];
          document.getElementById('emplsup').innerHTML = response.data.emp[0]['emp'];


         
          
          
          
          



          for (i = 0, len =response.data.recentInvoices.length, text = ""; i < len; i++) { 

          

              switch (i) {

                  case 0:
                     document.getElementById('invid1sup').innerHTML = response.data.recentInvoices[0]['invId'];
                     document.getElementById('inv1sup').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                     break;
                      
                  case 1:
                     document.getElementById('invid2sup').innerHTML = response.data.recentInvoices[1]['invId'];
                     document.getElementById('inv2sup').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                     break;
                      
                  case 2:
                      document.getElementById('invid3sup').innerHTML = response.data.recentInvoices[2]['invId'];
                      document.getElementById('inv3sup').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                      break;
                     
                  case 3:
                     document.getElementById('invid4sup').innerHTML = response.data.recentInvoices[3]['invId'];
                     document.getElementById('inv4sup').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                      break;
                      
                  case 4:
                      document.getElementById('invid5sup').innerHTML = response.data.recentInvoices[4]['invId'];
                      document.getElementById('inv5sup').innerHTML = response.data.recentInvoices[0]['InvoiceVal'];
                  break;


            }


          }




          var cash=0;
          var returnCredit =0;
          var credit = 0;
          var cheque = 0;

          

          for (i = 0, len =response.data.collection3.length, text = ""; i < len; i++) { 
            

            cash+=parseInt(response.data.collection3[i]['cash']);
            

            

        }


        for (i = 0, len =response.data.collection4.length, text = ""; i < len; i++) { 
            

             returnCredit+=(parseInt(response.data.collection4[i]['total_credit'])-parseInt(response.data.collection4[i]['credit_topay']));
            

            

        }

        


        for (i = 0, len =response.data.collection2.length, text = ""; i < len; i++) { 
            

            credit+=parseInt(response.data.collection2[i]['total_credit']);
            

            

        }


         for (i = 0, len =response.data.collection1.length, text = ""; i < len; i++) { 
            

            cheque+=parseInt(response.data.collection1[i]['ChequeAmount']);
            

            

        }


        var sum = cash+returnCredit+cheque;


        console.log(sum);

        var chequePrecent = (cheque/sum)*100;
        var cashPrecent = ((parseInt(cash)+parseInt(returnCredit))/sum)*100;
        var creditPrecent = (credit/sum)*100;


        var totalCash = parseInt(cash)+parseInt(returnCredit);

  

        var data = google.visualization.arrayToDataTable([
             ['Task', 'Percentage'],
             ['Daily Cash Amount', totalCash ],
             ['Daily cheque Amount',  cheque],
             ['Daily Credit Amount',  credit],
         
         ]);

        var options = {
          title: 'Daily Sales Summary',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('saleschartsup'));
        chart.draw(data, options);
         }
     });
      }
  </script>




  <?php

    }

  ?>




<!-- Morris.js charts -->






