<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/font/font-family/stylesheet.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- Library css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <!-- style css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>
<body><!-- HEADER-->
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i
                        class="topbar-icon fa fa-envelope-o"></i><span>info@scholarsacademyghazipur.org</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+91 8960442959, 8177077541</span></a>
                </div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#"
                                                                                                       class="google"><i
                        class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i
                        class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i
                        class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a
                        href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
                <div class="group-sign-in"><a href="http://scholarsacademyghazipur.org/scholarAcademy/homeController/" class="login">login</a><a href="#"
                                                                                          class="register">register</a>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->load->view("includes/headMenu");?>
</header>