<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WRF Holdings(Pvt) Ltd</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url() ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url() ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo base_url() ?>index2.html"><b>WRF Holdings(Pvt) Ltd</b></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Admin</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php echo base_url() ?>template/dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="POST" action="<?php echo base_url() ?>index.php/Login/loginCheck">
      <div class="input-group">
        <input name="username" type="text" class="form-control" placeholder="User Name" autofocus>
        <input name="password" type="password" class="form-control" placeholder="password">

        <div class="input-group-btn">
          <a href=""><button type="submit button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button></a>
        </div>
      </div>
    </form>
    <!-- /lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your credentials to login
  </div>
  <div class="lockscreen-footer text-center">
    <strong>Copyright &copy; 2017-2018 <a href="">Group Project_2017</a>.</strong> All rights
    reserved.
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?><?php echo base_url() ?>template/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?><?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>