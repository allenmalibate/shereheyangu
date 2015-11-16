<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Chingalo, Allen Malibate">
    <meta name="keyword" content="Sherehe yangu">
<!--    <link rel="shortcut icon" href="http://thevectorlab.net/flatlab/img/favicon.png">-->

    <title>Sherehe yangu</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class = "">
    <nav class="navbar navbar-inverse" style="border-radius: 0px;">
        <div class="container-fluid" style="padding-bottom: 3%;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin-home');?>">
                    <img alt="Brand" src="<?php echo base_url();?>img/brand.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="margin-right: 3px;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Another action</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url('log-out'); ?>">log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
