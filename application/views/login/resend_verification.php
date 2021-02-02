<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Listygo | Add Listing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('resources/web/img/favicon.png');?>">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/css/normalize.css');?>">
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/css/main.css');?>">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/css/bootstrap.min.css');?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/css/animate.min.css');?>">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/css/fontawesome-all.min.css');?>">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/fonts/flaticon.css');?>">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/css/select2.min.css');?>">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo site_url('resources/web/style.css');?>">
    <!-- Modernizr Js -->
    <script src="<?php echo site_url('resources/web/js/modernizr-3.6.0.min.js');?>"></script>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
               <?php                    
                if(isset($_menubar) && $_menubar)
                $this->load->view($_menubar);
              ?> 
        <!-- Header Area End Here -->
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin overlay-dark-40" data-bg-image="resources/web/img/figure/login-img-contactsnumber.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Resend Verification</h1>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url(); ?>">Home</a>
                                </li>
                                <li>Resend Verification</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Add Listing Area Start Here -->
        <section class="padding-top-6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php echo form_open('resend-verification',array('class'=>'listing-form')); ?>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Resend Verification</h3>
                                
                                <span class="text-danger"><?php if(isset($err_message))echo $err_message;?><br /><br /></span>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="User_Email" class="control-label"><span class="text-danger">*</span>E-mail</label>
                                        <div class="form-group">
                                            <input type="text" name="User_Email" value="<?php echo $this->input->post('User_Email'); ?>" class="form-control" id="User_Email"/>
                                            <span class="text-danger"><?php echo form_error('User_Email');?></span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="inner-box">
                                <button type="submit" class="btn-upload">Resend Verification</button>
                            </div>
                        <div class="col-12" style="text-align:center">
                            <label class="control-label" style="font-weight: 10">NOTE : Please Verify Email Before Login.( For Verification Check your email inbox or spam folder )</span></label>
                        </div>
                        <div class="col-12">
                            <a href="<?php echo site_url('login'); ?>" style="text-align: left;text-decoration: underline">Already Verified</a>
                            <a href="<?php echo site_url('sign-up'); ?>" style="float: right;text-decoration: underline">Do Not Have Account ! Sign Up</a>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget widget-box-padding widget-follow-us">
                            <h3 class="widget-title">Follow Us</h3>
                            <ul class="inline-list">
                                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fas fa-rss"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-box-padding widget-poster">
                            <div class="item-img">
                                <img src="resources/web/img/figure/sidebar-figure.jpg" alt="Poster" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Add Listing Area End Here -->
        <!-- Footer Area Start Here -->
         <?php                    
                if(isset($_footer) && $_footer)
                $this->load->view($_footer);
              ?> 
        <!-- Footer Area End Here -->
    </div>
   
    <!-- Modal End-->
    <!-- Jquery Js -->
    <script src="<?php echo site_url('resources/web/js/jquery-3.3.1.min.js');?>"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo site_url('resources/web/js/popper.min.js');?>"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo site_url('resources/web/js/bootstrap.min.js');?>"></script>
    <!-- Plugins Js -->
    <script src="<?php echo site_url('resources/web/js/plugins.js');?>"></script>
    <!-- Select 2 Js -->
    <script src="<?php echo site_url('resources/web/js/select2.full.min.js');?>"></script>
    <!-- Smoothscroll Js -->
    <script src="<?php echo site_url('resources/web/js/smoothscroll.min.js');?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo site_url('resources/web/js/main.js');?>"></script>
</body>
</html>