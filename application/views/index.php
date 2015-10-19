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
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cutlery fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Add Meal</div>
                                    <div>Update</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Go</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-md fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Expert Help</div>
                                    <div>Add expert & stay updated about diet.</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Go</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">My Health</div>
                                    <div>View & compare Chart!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Go</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-stack-overflow fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Manage Grocery</div>
                                    <div>Update my plan!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Go</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-question fa-fw"></i> Frequently Asked Questions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-pencil fa-fw"></i> Question 1
                                    <span class="pull-right text-muted small"><em>view</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                     <i class="fa fa-pencil fa-fw"></i> Question 2
                                    <span class="pull-right text-muted small"><em>view</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                     <i class="fa fa-pencilfa-eye fa-fw"></i> Question 3
                                    <span class="pull-right text-muted small"><em>view</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                     <i class="fa fa-pencil fa-fw"></i> Question 4
                                    <span class="pull-right text-muted small"><em>view</em>
                                    </span>
									
                                </a>
							</div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-primary btn-block">View All</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
					
					<div class="container-fluid">
					  <div class="row-fluid">
					   
						<div class="span10">
						  <div class="row-fluid">
								<div id="demo" class="tab-pane fade in active">
									<iframe style="overflow:auto" name="demo_frame" id="demo_frame" frameborder="0" width="100%" height="500" src="about:blank"></iframe>
								</div>
							</div><!--/row-->
						</div><!--/span-->
						
						
					  </div><!--/row-->

						<!-- Le javascript
						================================================== -->
						<!-- Placed at the end of the document so the pages load faster -->
						<script src="../js/jquery.js"></script>
						<script src="../js/bootstrap.min.js"></script>
						<script>
							
							$('#grid-demo-tabs a').click(function (e) {
							e.preventDefault();
							$(this).tab('show');
							})
							
							var demo = location.href.split("#")[1];
							if (!demo)
							{
								demo = './basic/pie.php';
							}

							jQuery('#demo_frame').attr('src','../demos/'+demo);
							jQuery('#demo_frame').load(function() { iframeLoaded(this); } );
							
							jQuery('#code').load('index.php?file='+demo);
							
							jQuery('#code').css('height', jQuery(window).height() - 286);
							
							function iframeLoaded(iFrameID,stop) 
							{
								if(iFrameID) 
								{
									iFrameID.height = "";
									if(iFrameID.contentDocument){
										iFrameID.height = iFrameID.contentDocument.body.offsetHeight + 35 + "px";
									} else {
										iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + 45 + "px";
									}
									
									// alert(parseInt(jQuery('#code').css('height')));
									// alert(parseInt(iFrameID.height));
									
									if (parseInt(jQuery('#code').css('height')) <= parseInt(iFrameID.height))
										{jQuery('#code').css('height',iFrameID.height);}
									else
										{jQuery('#code').css('height', jQuery(window).height() - 286);}
								}
								
								if (!stop)
									setTimeout(function(){iframeLoaded(iFrameID,1);},1000);
							}
							
							var accordion_list = $(".accordion-body");
							accordion_list.first().addClass("in");
						</script>

					</div><!--/.fluid-container-->

					
				</div>
                <!-- /.col-lg-8 -->
				<!-- Expert's Tips -->
                <div class="col-lg-4">
                    <div class="panel panel-success tooltip-demo">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Expert's Tips
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item"   data-container="body" data-toggle="popover" data-placement="left" data-content="list all contents of the tooltip. kkkkkkkkkkkkkkkkkkkkkkkk.">
                                    <i class="fa fa-comments-o fa-fw"></i> expert1
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item" data-container="body" data-toggle="popover" data-placement="left" data-content="list all contents of the tooltip.">
                                     <i class="fa fa-comment fa-fw"></i> exprt 2
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item" data-container="body" data-toggle="popover" data-placement="left" data-content="list all contents of the tooltip.">
                                     <i class="fa fa-comments-o fa-fw"></i> exprt 1
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item" data-container="body" data-toggle="popover" data-placement="left" data-content="list all contents of the tooltip.">
                                     <i class="fa fa-comment-o fa-fw"></i> expert 4
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item" data-container="body" data-toggle="popover" data-placement="top" data-content="list all contents of the tooltip.">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Diet Chart updated
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-success btn-block">View older Tips</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <!-- jQuery -->
    <script src="<?php echo base_url(); ?>css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>css/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
	
	// popover demo
    $("[data-toggle=popover]")
        .popover()

    </script>

</body>

</html>
