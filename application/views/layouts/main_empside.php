<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo TITLETAG; ?></title>
  <link rel="icon" href="<?php echo site_url(FAVICON); ?>" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/jqvmap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/adminlte.min.css');?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/OverlayScrollbars.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo site_url('resources/adminlte/daterangepicker.css');?>">
  <!-- summernote -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style>
      .list-group .list-group-item{
          background-color: #343A40;
          color: white;
      }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #ECF0F5">
                <!-- Main content -->
                <div class="container"><br>
                    <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo site_url(LOGO);?>" class="pull-right"> 
                    </div>
                        <div class="col-md-9"><br>
                    <h1 style="font-family:Bahnschrift Condensed;font-weight: bold;font-size: 60px">Clariwell Global Services</h1>
                     </div>
                     </div>
                    <center><h2 style="font-family:Bahnschrift Condensed;font-weight: bold;">Employee Application Form <?php echo date('Y');?> - <?php echo date('Y')+1; ?></h2></center>
                </div>
                <section class="content">
                    <div class="container-fluid">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>   
                    </div>
                </section>
<!-- jQuery -->
<script src="<?php echo site_url('resources/adminlte/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo site_url('resources/adminlte/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url('resources/adminlte/bootstrap.bundle.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?php echo site_url('resources/adminlte/Chart.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo site_url('resources/adminlte/sparkline.js');?>"></script>
<!-- JQVMap -->
<script src="<?php echo site_url('resources/adminlte/jquery.vmap.min.js');?>"></script>
<script src="<?php echo site_url('resources/adminlte/jquery.vmap.world.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo site_url('resources/adminlte/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo site_url('resources/adminlte/moment.min.js');?>"></script>
<script src="<?php echo site_url('resources/adminlte/daterangepicker.js');?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo site_url('resources/adminlte/tempusdominus-bootstrap-4.min.js');?>"></script>
<!-- Summernote -->
<script src="<?php echo site_url('resources/adminlte/summernote-bs4.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo site_url('resources/adminlte/jquery.overlayScrollbars.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo site_url('resources/adminlte/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('resources/adminlte/adminlte.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo site_url('resources/adminlte/dashboard.js');?>"></script>
</body>
</html>