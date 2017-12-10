<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WRF Holdings(pvt) Ltd | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ;?>template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ;?>template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ;?>template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ;?>template/dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ;?>template/plugins/iCheck/square/blue.css">

  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <!-- <body style="background-color:lightskyblue;"> -->
  
  <!-- <body style="background-color:#A9A9A9;"> -->

<body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><h1><b>WRF Holdings(Pvt) Ltd</b></h1>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign In</p>
        
        <?php require APPPATH . '/views/includes/flashDisplay.php';   ?>
         <form action="<?php echo base_url() ?>index.php/LoginTest/loginMe" method="post">
            <div class="form-group has-feedback">
              <input type="username" name="username" class="form-control" placeholder="UserName" required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <!-- <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div>
              </div> -->
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
    </form>

        <a href="#">Forgot Password</a><br>
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

   <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>template/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


