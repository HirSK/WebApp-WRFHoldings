<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
            <h1>
                Welcome to WRF Holdings (pvt) Ltd
                <br>
                <small><b><?php echo $this->session->userData('loggerOutletName') ; 
                			echo "<br>";
                			echo $this->session->userData('loggerName') ; ?>
                				
                			</b></small>
            </h1>

            <ol class="breadcrumb">                       
                <li class="active">Home</li>
            </ol>
        </section>

  

</div>
<!-- /.content-wrapper -->



<?php include "includes/footer.php" ?>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>


