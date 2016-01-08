<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" System for management of activities during preparation of .........">
    <meta name="author" content="Allen Malibate, Joseph Chingalo">

    <title>SHEREHE YANGU</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/owl.carousel.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/brand.png" alt="" class="img-responsive"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="">
                    <a class="page-scroll" href="<?php echo site_url();?>">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo site_url('faq');?>">FAQ</a>
                </li>
                <?php if(!($this->session->has_userdata('userId'))) :?>
                <li>
                    <a class="page-scroll"  href="<?php echo site_url('members');?>">Members</a>
                </li>
                <?php endif; ?>
                <li>
                    <a class="page-scroll" href="<?php echo site_url('about-us'); ?>">About Us</a>
                </li>
                <?php if($this->session->has_userdata('userId')) :?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('user-home');?>">My account</a></li>
                            <li><a href="<?php echo site_url('user-profile');?>">My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url('log-out'); ?>">log out</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

