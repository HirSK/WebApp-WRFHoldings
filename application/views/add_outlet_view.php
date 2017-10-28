

<div class="content-wrapper">

<div class="container" style='height:auto;width:30%;' >
    <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Add Outlet Here</h2>
        <label for="outletName" class="">Outlet Name</label>
            <input type="text" name="outletName" id="firstName" class="form-control" placeholder="Outlet Name" required>
        <label for="outletLocation" class="">Location</label>
            <input type="text" name="outletLocation" id="outletLocation" class="form-control" placeholder="Outlet Location" required>
        <button class="btn btn-lg btn-primary" type="submit" name="submit" >Add Outlet
        </button>
    </form>

</div>
</div>

<?php include "includes/footer.php";?>

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

</body>
</html>


