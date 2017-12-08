


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
        <div class="wizard" style="margin-right: 40px;">
        <div class="row">
            <div class="col-md-6">
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

              <div class="col-md-6">
               

                


                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Daily Sales Summary</h3>

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


                    </div>

                
           </div>


                </section>
                

              
                <!-- /.box-body -->
              
        

  

</div>
<!-- /.content-wrapper -->




<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->


<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/morris.js/morris.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
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





<!-- Morris.js charts -->



  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
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





<!-- Morris.js charts -->



