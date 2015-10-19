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

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dr. Diet Expert</a>
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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="fa fa-table fa-fw"></i> Profile</a>
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
		<div class="panel panel-default">
			<h3> Most nutrious & common.</h3>
            <div class="panel-heading">
				<div class="row" id="accordion">
				
					<div class=" col-lg-12">
					   
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">Apple</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse" style="height: auto;">
								<div class="panel-body">
									<div class="form-group">
										<p><img src="../img/f1.jpg"/></p>
									</div>
							
									<div class="form-group">
										<p> calories : 11 </p>
										<p> Fat : 11 </p>
										<p> Carbs : 11</p>
										<p> Protein : 41</p>
										<p> Carbs : 00 </p>
										<p> Add to Favorite <i class="fa fa-star fa-fw"></i></p>
									</div>
								</div>
								<div class="panel-footer">
									<a href="allfruit.html">
										<span class="pull-left">read more</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</a>
								</div>
							</div>
						</div>
						</div>
												
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">Fruit 2</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
							
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">Fruit 3</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" >Grapes</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" style="height: auto;">
									<div class="panel-body">
									<div class="form-group">
										<p><img src="../img/f1.jpg"/></p>
									</div>
							
									<div class="form-group">
										<p> calories : 11 </p>
										<p> Fat : 11 </p>
										<p> Carbs : 11</p>
										<p> Protein : 41</p>
										<p> Carbs : 00 </p>
										<p> Add to Favorite <i class="fa fa-star fa-fw"></i></p>
									</div>
								</div>
								<div class="panel-footer">
									<a href="allfruit.html">
										<span class="pull-left">read more</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</a>
								</div>
								</div>
							</div>
							</div>
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">Fruit 5</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse" style="height: auto;">
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
													
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">Fruit 6</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" >Fruit 4</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">Fruit 5</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse" style="height: auto;">
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
													
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">Fruit 6</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" >Fruit 4</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">Fruit 5</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse" style="height: auto;">
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
													
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">Fruit 6</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" >Fruit 4</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">Fruit 5</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse" style="height: auto;">
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
													
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">Fruit 6</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" >Fruit 4</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" style="height: auto;">
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
						
						<div class="col-lg-4">	
								<!--fst row-->
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">Fruit 5</a>
										<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse" style="height: auto;">
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
													
						<div class="col-lg-4">	
							<!--fst row-->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">Fruit 6</a>
									<small class="right"><i class="glyphicon glyphicon-chevron-down"></i></small>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" style="height: auto;">
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
						
					</div>
					<!-- /.col-lg-12 -->
					
					
					
				</div>
				<!-- /.row -->
			<a href="allfruit.html">
				<div class="panel-footer">
					<span class="pull-left">View All</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
			</div>
		</div>
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

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    </script>

</body>

</html>
