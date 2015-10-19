<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dr.Diet Expert</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	
   <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>css/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>css/dist/css/timeline.css" rel="stylesheet">

    
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>css/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default panel-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> <span><i class="fa fa-stethoscope"> </i></span> Dr. Diet Expert</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Prajact</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>this is message body</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Prajact</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>this is message body</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Prajact</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>this is message body</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
				<!-- user dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> #</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Experts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">Dieticians</a>
                                </li>
                                <li>
                                    <a href="">Physician</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="allfruit.html"><i class="fa fa-table fa-fw"></i> Diet table</a>
                        </li>
						<li>
                            <a href="teamContact.html"><i class="fa fa-group fa-fw"></i> Team </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row" id="accordion">
                <div class="panel col-lg-12">
                 
					<div class="col-lg-4">	
				
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a>Keshav Kelkar</a>
							</h4>
						</div>
						<div class="panel-body">
							<img src="../img/avatar1.png"/>
						
								<div class="form-group">
									<p>
										<a class="blue-text text-lighten-2" href="">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a class="blue-text text-lighten-2" href="">
											<i class="fa fa-twitter-square"></i>
										</a>
										<a class="blue-text text-lighten-2" href="">
											<i class="fa fa-google-plus-square"></i>
										</a>
								</p>
								</div>
								
								
						</div>
						
					</div>
					</div>
											
					<div class="col-lg-4">	
						<!--fst row-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a >Avesh Naik</a>
							</h4>
						</div>
						<div class="panel-body">
								<div class="form-group">
									<p> </p>
								</div>
						
								<div class="form-group">
									<p> </p>
								</div>
								
								
							</div>
						
					</div>
					</div>
					
					<div class="col-lg-4">	
						<!--fst row-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a>Priyanka Bhagat</a>
							</h4>
						</div>
						<div class="panel-body">
								<div class="form-group">
									<p> </p>
								</div>
						
								<div class="form-group">
									<p> </p>
								</div>
								
								
							</div>
						
					</div>
					</div>
					
                    
                </div>
				<!-- /.col-lg-12 -->
            
                <div class="panel col-lg-12">
                    
					<div class="col-lg-4">	
						<!--fst row-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a>Omkar Prabhugaonkar</a>
							</h4>
						</div>
						
							<div class="panel-body">
								<div class="form-group">
									<p> </p>
								</div>
						
								<div class="form-group">
									<p> </p>
								</div>
							</div>
						
					</div>
					</div>
											
					<div class="col-lg-4">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a >Tanvi Redkar</a>
							</h4>
						</div>
						<div class="panel-body">
								<div class="form-group">
									<p> </p>
								</div>
						
								<div class="form-group">
									<p> </p>
								</div>
								
								
							</div>
						
					</div>
					</div>
					
					<div class="col-lg-4">	
						<!--fst row-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a >Prajact Sawant</a>
							</h4>
						</div>
						
							<div class="panel-body">
								<div class="form-group">
									<p> </p>
								</div>
						
								<div class="form-group">
									<p> </p>
								</div>
								
								
							</div>
						
					</div>
					</div>
					
                </div>
				<!-- /.col-lg-12 -->
				
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
